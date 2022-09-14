<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\Iban\Formats;

use InvalidArgumentException;
use RuntimeException;

final class IbanFormat implements IbanFormatInterface
{
    public function __construct(private $ibanFormats = null)
    {
        if ($this->ibanFormats === null) {
            $this->ibanFormats = require 'ibanFormats.php';
        } elseif (is_string($this->ibanFormats)) {
            $this->ibanFormats = require $this->ibanFormats;
        }

        if (!is_array($this->ibanFormats)) {
            throw new InvalidArgumentException('`$ibanFormats` must be an array of IBAN formats, a path to a file that returns an array of IBAN formats, or `null` to use local data');
        }
    }

    public function getCountries(): array
    {
        return array_keys($this->ibanFormats);
    }

    public function getFields(string $country): array
    {
        if (array_key_exists($country, $this->ibanFormats)) {
            return $this->ibanFormats[$country]['fields'];
        }

        throw new InvalidArgumentException(strtr(
            'Country {country} not found in list of IBAN formats',
            ['{country}' => $country]
        ));
    }

    public function getPattern(string $country): string
    {
        if (array_key_exists($country, $this->ibanFormats)) {
            return $this->ibanFormats[$country]['pattern'];
        }

        throw new InvalidArgumentException(strtr(
            'Country {country} not found in list of IBAN formats',
            ['{country}' => $country]
        ));
    }
}