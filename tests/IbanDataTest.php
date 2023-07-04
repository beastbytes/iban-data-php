<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\IBAN\PHP\Tests;

use BeastBytes\IBAN\PHP\IbanData;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\BeforeClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class IbanDataTest extends TestCase
{
    private static array $goodCountries = [];
    private static array $ibans = [];
    private static IbanData $testClass;

    #[BeforeClass]
    public static function init(): void
    {
        self::$ibans = require dirname(__DIR__) . '/data/data.php';
        self::$testClass = new IbanData();
    }

    public function test_getting_countries()
    {
        $this->assertCount(count(self::$ibans), self::$testClass->getCountries());
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_has_country($country)
    {
        $this->assertTrue(self::$testClass->hasCountry($country));
    }

    #[DataProvider('badCountriesProvider')]
    public function test_does_not_have_country($country)
    {
        $this->assertFalse(self::$testClass->hasCountry($country));
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_get_pattern($country)
    {
        $this->assertSame(self::$ibans[$country]['pattern'], self::$testClass->getPattern($country));
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_get_fields($country)
    {
        $this->assertSame(self::$ibans[$country]['fields'], self::$testClass->getFields($country));
    }

    #[DataProvider('badCountriesProvider')]
    public function test_bad_countries($country)
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            IbanData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            [
                '{country}' => $country
            ]
        ));
        self::$testClass->getPattern($country);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            IbanData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            [
                '{country}' => $country
            ]
        ));
        self::$testClass->getFields($country);
    }

    #[DataProvider('badDataProvider')]
    public function test_bad_constructor($data)
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(IbanData::INVALID_DATA_EXCEPTION_MESSAGE);
        new IbanData(__DIR__ . "/data/$data.php");
    }

    public static function goodCountriesProvider(): \Generator
    {
        $ibans = require dirname(__DIR__) . '/data/data.php';

        foreach (array_keys($ibans) as $country) {
            yield $country => [$country];
        }
    }

    public static function badCountriesProvider(): \Generator
    {
        foreach ([
            'non-existent code' => ['XX'],
            'alpha-3 code' => ['GBR'],
            'too short' => ['G'],
            'too long' => ['GBRT'],
            'number string' => ['12']
        ] as $name => $value) {
            yield $name => $value;
        }
    }

    public static function badDataProvider(): \Generator
    {
        foreach (
            [
                'null',
                'string'
            ] as $name
        ) {
            yield $name => [$name];
        }
    }
}
