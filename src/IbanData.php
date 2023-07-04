<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\IBAN\PHP;

use BeastBytes\IBAN\IbanDataInterface;
use InvalidArgumentException;

final class IbanData implements IbanDataInterface
{
    const COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE = 'Country "{country}" not found in list of IBANs';
    public const INVALID_DATA_EXCEPTION_MESSAGE =
        '`$ibans` must be an array of IBAN definitions, a path to a file that returns an array of IBAN definitions, or `null` to use local data';

    public function __construct(private array|string|null $ibans = null)
    {
        if ($this->ibans === null) {
            $this->ibans = require dirname(__DIR__) . '/data/data.php';
        } elseif (is_string($this->ibans)) {
            $this->ibans = require $this->ibans;
        }

        if (!is_array($this->ibans)) {
            throw new InvalidArgumentException(self::INVALID_DATA_EXCEPTION_MESSAGE);
        }
    }

    public function getCountries(): array
    {
        return array_keys($this->ibans);
    }

    public function hasCountry(string $country): bool
    {
        return array_key_exists($country, $this->ibans);
    }

    public function getFields(string $country): array
    {
        if (!$this->hasCountry($country)) {
            throw new InvalidArgumentException(strtr(
                self::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
                [
                    '{country}' => $country
                ]
            ));
        }

        return $this->ibans[$country]['fields'];
    }

    public function getPattern(string $country): string
    {
        if (!$this->hasCountry($country)) {
            throw new InvalidArgumentException(strtr(
                self::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
                [
                    '{country}' => $country
                ]
            ));
        }

        return $this->ibans[$country]['pattern'];
    }
}
