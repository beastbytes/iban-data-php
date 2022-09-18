<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\IBAN\PHP;

use BeastBytes\IBAN\IbanDataInterface;
use InvalidArgumentException;
use RuntimeException;

final class IbanData implements IbanDataInterface
{
    public function __construct(private array|string|null $ibans = null)
    {
        if ($this->ibans === null) {
            $this->ibans = require 'data.php';
        } elseif (is_string($this->ibans)) {
            $this->ibans = require $this->ibans;
        }

        if (!is_array($this->ibans)) {
            throw new InvalidArgumentException('`$ibans` must be an array of IBAN definitions, a path to a file that returns an array of IBAN definitions, or `null` to use local data');
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
        if ($this->hasCountry($country)) {
            return $this->ibans[$country]['fields'];
        }

        throw new InvalidArgumentException(strtr(
            'Country "{country}" not found in list of IBANs',
            ['{country}' => $country]
        ));
    }

    public function getPattern(string $country): string
    {
        if ($this->hasCountry($country)) {
            return $this->ibans[$country]['pattern'];
        }

        throw new InvalidArgumentException(strtr(
            'Country "{country}" not found in list of IBANs',
            ['{country}' => $country]
        ));
    }
}