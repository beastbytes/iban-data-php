<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

/**
 * IBAN definitions indexed by ISO-3166 alpha-2 codes
 *
 * Each IBAN definition is the regex pattern for the IBAN and IBAN field names for the country
 */
return [
    'AD' => [ // Andorra
        'pattern' => '/AD(\d{2})(\d{4})(\d{4})([A-Z0-9]{12})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'AE' => [ // United Arab Emirates
        'pattern' => '/AE(\d{2})(\d{3})(\d{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'AL' => [ // Albania
        'pattern' => '/AL(\d{2})(\d{3})(\d{4})(\d)([A-Z0-9]{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'National check digit',
            'Account number'
        ]
    ],
    'AT' => [ // Austria
        'pattern' => '/AT(\d{2})(\d{5})(\d{11})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'AZ' => [ // Azerbaijan
        'pattern' => '/AZ(\d{2})([A-Z0-9]{4})(\d{20})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'BA' => [ // Bosnia and Herzegovina
        'pattern' => '/BA(\d{2})(\d{3})(\d{3})(\d{8})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'BE' => [ // Belgium
        'pattern' => '/BE(\d{2})(\d{3})(\d{7})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'BG' => [ // Bulgaria
        'pattern' => '/BG(\d{2})([A-Z]{4})(\d{4})(\d{2})([A-Z0-9]{8})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account type',
            'Account number'
        ]
    ],
    'BH' => [ // Bahrain
        'pattern' => '/BH(\d{2})([A-Z]{4})(\d{14})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
        ]
    ],
    'BR' => [ // Brazil
        'pattern' => '/BR(\d{2})(\d{8})(\d{5})(\d{10})([A-Z]{1})([A-Z0-9]{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'Account type',
            'Owner account number'
        ]
    ],
    'BY' => [ // Belarus
        'pattern' => '/BY(\d{2})([A-Z0-9]{4})(\d{4})([A-Z0-9]{16})/',
        'fields' => [
            'IBAN check digits',
            'National bank or branch code',
            'Balance account number',
            'Account number'
        ]
    ],
    'CH' => [ // Switzerland
        'pattern' => '/CH(\d{2})(\d{5})([A-Z0-9]{12})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'CR' => [ // Costa Rica
        'pattern' => '/CR(\d{2})(\d{4})(\d{14})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'CY' => [ // Cyprus
        'pattern' => '/CY(\d{2})(\d{3})(\d{5})([A-Z0-9]{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'CZ' => [ // Czech Republic
        'pattern' => '/CZ(\d{2})(\d{4})(\d{6})(\d{10})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number prefix',
            'Account number'
        ]
    ],
    'DE' => [ // Germany
        'pattern' => '/DE(\d{2})(\d{8})(\d{10})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'DK' => [ // Denmark
        'pattern' => '/DK(\d{2})(\d{4})(\d{9})(\d{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digit'
        ]
    ],
    'DO' => [ // Dominican Republic
        'pattern' => '/DO(\d{2})([A-Z]{4})(\d{20})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'EE' => [ // Estonia
        'pattern' => '/EE(\d{2})(\d{2})(\d{2})(\d{11})(\d{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'National check digit'
        ]
    ],
    'EG' => [ // Egypt
        'pattern' => '/EG(\d{2})(\d{4})(\d{4})(\d{17})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'

        ]
    ],
    'ES' => [ // Spain
        'pattern' => '/ES(\d{2})(\d{4})(\d{4})(\d{2})(\d{10})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Check digits',
            'Account number'
        ]
    ],
    'FI' => [ // Finland
        'pattern' => '/FI(\d{2})(\d{6})(\d{7})(\d{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank and branch code',
            'Account number',
            'National check digit'
        ]
    ],
    'FO' => [ // Faroe Islands
        'pattern' => '/FO(\d{2})(\d{4})(\d{9})(\d{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digit'
        ]
    ],
    'FR' => [ // France
        'pattern' => '/FR(\d{2})(\d{5})(\d{5})([A-Z0-9]{11})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'GB' => [ // United Kingdom
        'pattern' => '/GB(\d{2})([A-Z]{4})(\d{6})(\d{8})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'GE' => [ // Georgia
        'pattern' => '/GE(\d{2})([A-Z0-9]{2})(\d{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'GI' => [ // Gibraltar
        'pattern' => '/GI(\d{2})([A-Z]{4})(\d{15})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'GL' => [ // Greenland
        'pattern' => '/GL(\d{2})(\d{4})(\d{9})(\d{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digit'
        ]
    ],
    'GR' => [ // Greece
        'pattern' => '/GR(\d{2})(\d{3})(\d{4})([A-Z0-9]{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'GT' => [ // Guatemala
        'pattern' => '/GT(\d{2})([A-Z0-9]{4})([A-Z0-9]{2})([A-Z0-9]{2})([A-Z0-9]{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Currency code',
            'Account type',
            'Account number'
        ]
    ],
    'HR' => [ // Croatia
        'pattern' => '/HR(\d{2})(\d{7})(\d{10})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'HU' => [ // Hungary
        'pattern' => '/HU(\d{2})(\d{3})(\d{4})(\d{1})(\d{15})(\d{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'National check digit 1',
            'Account number',
            'National check digit 2'
        ]
    ],
    'IE' => [ // Ireland
        'pattern' => '/IE(\d{2})([A-Z0-9]{4})(\d{6})(\d{8})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'IL' => [ // Israel
        'pattern' => '/IL(\d{2})(\d{3})(\d{3})(\d{13})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'IQ' => [ // Iraq
        'pattern' => '/IQ(\d{2})([A-Z]{4})(\d{3})(\d{12})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'IS' => [ // Iceland
        'pattern' => '/IS(\d{2})(\d{2})(\d{2})(\d{2})(\d{6})(\d{10})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account type',
            'Account number',
            'Account holder\'s national identification number'
        ]
    ],
    'IT' => [ // Italy
        'pattern' => '/IT(\d{2})([A-Z]{1})(\d{5})(\d{5})([A-Z0-9]{12})/',
        'fields' => [
            'IBAN check digits',
            'Check character',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'JO' => [ // Jordan
        'pattern' => '/JO(\d{2})([A-Z]{4})(\d{4})(\d{18})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'KW' => [ // Kuwait
        'pattern' => '/KW(\d{2})([A-Z]{4})([A-Z0-9]{22})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'KZ' => [ // Kazakhstan
        'pattern' => '/KZ(\d{2})(\d{3})([A-Z0-9]{13})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'LB' => [ // Lebanon
        'pattern' => '/LB(\d{2})(\d{4})([A-Z0-9]{20})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'LC' => [ // Saint Lucia
        'pattern' => '/LC(\d{2})([A-Z]{4})([A-Z0-9]{24})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'LI' => [ // Liechtenstein
        'pattern' => '/LI(\d{2})(\d{5})([A-Z0-9]{12})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'LT' => [ // Lithuania
        'pattern' => '/LT(\d{2})(\d{5})(\d{11})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'LU' => [ // Luxembourg
        'pattern' => '/LU(\d{2})(\d{3})([A-Z0-9]{13})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'LV' => [ // Latvia
        'pattern' => '/LV(\d{2})([A-Z]{4})(\d{13})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'LY' => [ // Libya
        'pattern' => '/LY(\d{2})(\d{3})(\d{3})(\d{15})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'MC' => [ // Monaco
        'pattern' => '/MC(\d{2})(\d{5})(\d{5})([A-Z0-9]{11})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'MD' => [ // Moldova
        'pattern' => '/MD(\d{2})([A-Z0-9]{2})([A-Z0-9]{18})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'ME' => [ // Montenegro
        'pattern' => '/ME(\d{2})(\d{3})(\d{13})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'MK' => [ // North Macedonia
        'pattern' => '/MK(\d{2})(\d{3})([A-Z0-9]{10})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'MT' => [ // Malta
        'pattern' => '/MT(\d{2})([A-Z]{4})(\d{5})([A-Z0-9]{18})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'MR' => [ // Mauritania
        'pattern' => '/MR(\d{2})(\d{5})(\d{5})(\d{11})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'MU' => [ // Mauritius
        'pattern' => '/MU(\d{2})([A-Z]{4}\d{2})(\d{2})(\d{15})([A-Z]{3})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'Currency code'
        ]
    ],
    'NL' => [ // Netherlands
        'pattern' => '/NL(\d{2})([A-Z]{4})(\d{10})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'NO' => [ // Norway
        'pattern' => '/NO(\d{2})(\d{4})(\d{6})(\d{1})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digit'
        ]
    ],
    'PK' => [ // Pakistan
        'pattern' => '/PK(\d{2})([A-Z0-9]{4})(\d{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'PL' => [ // Poland
        'pattern' => '/PL(\d{2})(\d{3})(\d{4})(\d{1})(\d{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'National check digit',
            'Account number',
        ]
    ],
    'PS' => [ // Palestinian territories
        'pattern' => '/PS(\d{2})([A-Z0-9]{4})(\d{21})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'PT' => [ // Portugal
        'pattern' => '/PT(\d{2})(\d{4})(\d{4})(\d{11})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'National check digits',
        ]
    ],
    'QA' => [ // Qatar
        'pattern' => '/QA(\d{2})([A-Z]{4})([A-Z0-9]{21})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'RO' => [ // Romania
        'pattern' => '/RO(\d{2})([A-Z]{4})([A-Z0-9]{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'RS' => [ // Serbia
        'pattern' => '/RS(\d{2})(\d{3})(\d{13})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'Account check digits'
        ]
    ],
    'SA' => [ // Saudi Arabia
        'pattern' => '/SA(\d{2})(\d{2})([A-Z0-9]{18})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'SC' => [ // Seychelles
        'pattern' => '/SC(\d{2})([A-Z]{4}\d{2})(\d{2})(\d{16})([A-Z]{3})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'Currency code'
        ]
    ],
    'SD' => [ // Sudan
        'pattern' => '/SD(\d{2})(\d{2})(\d{12})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'SE' => [ // Sweden
        'pattern' => '/SE(\d{2})(\d{3})(\d{16})(\d)/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'BBAN check digit'
        ]
    ],
    'SI' => [ // Slovenia
        'pattern' => '/SI(\d{2})(\d{2})(\d{3})(\d{8})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'BBAN check digits'
        ]
    ],
    'SK' => [ // Slovakia
        'pattern' => '/SK(\d{2})(\d{4})(\d{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'SM' => [ // San Marino
        'pattern' => '/SM(\d{2})([A-Z]{1})(\d{5})(\d{5})([A-Z0-9]{12})/',
        'fields' => [
            'IBAN check digits',
            'Check character',
            'Bank identifier',
            'Branch identifier',
            'Account number'
        ]
    ],
    'ST' => [ // Sao Tome and Principe
        'pattern' => '/ST(\d{2})(\d{4})(\d{4})(\d{11})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'BBAN Check Digits'
        ]
    ],
    'SV' => [ // El Salvador
        'pattern' => '/SV(\d{2})([A-Z]{4})(\d{20})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'TL' => [ // East Timor
        'pattern' => '/TL(\d{2})(\d{3})(\d{14})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'TN' => [ // Tunisia
        'pattern' => '/TN(\d{2})(\d{2})(\d{3})(\d{13})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'National check digits'
        ]
    ],
    'TR' => [ // Turkey
        'pattern' => '/TR(\d{2})(\d{5})(0)([A-Z0-9]{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Reserved field',
            'Account number'
        ]
    ],
    'UA' => [ // Ukraine
        'pattern' => '/UA(\d{2})(\d{6})([A-Z0-9]{19})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'VA' => [ // Vatican City
        'pattern' => '/VA(\d{2})(\d{3})(\d{15})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'VG' => [ // British Virgin Islands
        'pattern' => '/VG(\d{2})([A-Z0-9]{4})(\d{16})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Account number'
        ]
    ],
    'XK' => [ // Kosovo
        'pattern' => '/XK(\d{2})(\d{2})(\d{2})(\d{10})(\d{2})/',
        'fields' => [
            'IBAN check digits',
            'Bank identifier',
            'Branch identifier',
            'Account number',
            'BBAN check digits'
        ]
    ],
];
