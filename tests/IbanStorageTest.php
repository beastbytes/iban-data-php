<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace Tests;

use BeastBytes\IBAN\PHP\IbanStorage;
use PHPUnit\Framework\TestCase;

class IbanStorageTest extends TestCase
{
    private static array $goodCountries = [];
    private static array $ibans = [];
    private static IbanStorage $testClass;

    /**
     * @beforeClass
     */
    public static function init(): void
    {
        self::$ibans = require dirname(__DIR__) . '/src/ibans.php';
        self::$testClass = new IbanStorage();

    }

    public function test_getting_countries()
    {
        $this->assertCount(count(self::$goodCountries), self::$testClass->getCountries());
    }

    /**
     * @dataProvider goodCountries
     */
    public function test_has_country($country)
    {
        $this->assertTrue(self::$testClass->hasCountry($country));
    }

    /**
     * @dataProvider badCountries
     */
    public function test_does_not_have_country($country)
    {
        $this->assertFalse(self::$testClass->hasCountry($country));
    }

    /**
     * @dataProvider goodCountries
     */
    public function test_get_pattern($country)
    {
        $this->assertSame(self::$ibans[$country]['pattern'], self::$testClass->getPattern($country));
    }

    /**
     * @dataProvider goodCountries
     */
    public function test_get_fields($country)
    {
        $this->assertSame(self::$ibans[$country]['fields'], self::$testClass->getFields($country));
    }

    /**
     * @dataProvider badCountries
     */
    public function test_bad_countries($country)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Country \"$country\" not found in list of IBANs");
        self::$testClass->getPattern($country);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Country \"$country\" not found in list of IBANs");
        self::$testClass->getFields($country);
    }

    public function goodCountries(): array
    {
        $ibans = require dirname(__DIR__) . '/src/ibans.php';
        $goodCountries = [];

        foreach (array_keys($ibans) as $country) {
            $goodCountries[] = [$country];
        }

        self::$goodCountries = $goodCountries;
        return self::$goodCountries;
    }

    public function badCountries(): array
    {
        return [
            'non-existent code' => ['XX'],
            'alpha-3 code' => ['GBR'],
            'too short' => ['G'],
            'too long' => ['GBRT'],
            'number string' => ['12']
        ];
    }
}
