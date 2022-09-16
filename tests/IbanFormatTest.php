<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace Tests;

use BeastBytes\Iban\Formats\IbanStorage;
use PHPUnit\Framework\TestCase;

class IbanFormatTest extends TestCase
{
    private static array $goodCountries;
    private static array $ibanFormats;
    private static IbanStorage $testClass;

    /**
     * @beforeClass
     */
    public static function init(): void
    {
        $ibanFormats = require dirname(__DIR__) . '/src/ibanFormats.php';
        self::$testClass = new IbanStorage();
        self::$ibanFormats = $ibanFormats;
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
        $this->assertSame(self::$ibanFormats[$country]['pattern'], self::$testClass->getPattern($country));
    }

    /**
     * @dataProvider goodCountries
     */
    public function test_get_fields($country)
    {
        $this->assertSame(self::$ibanFormats[$country]['fields'], self::$testClass->getFields($country));
    }

    /**
     * @dataProvider badCountries
     */
    public function test_bad_countries($country)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Country $country not found in list of IBAN formats");
        self::$testClass->getPattern($country);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Country $country not found in list of IBAN formats");
        self::$testClass->getFields($country);
    }

    public function goodCountries(): array
    {
        $ibanFormats = require dirname(__DIR__) . '/src/ibanFormats.php';
        $goodCountries = [];

        foreach (array_keys($ibanFormats) as $country) {
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
