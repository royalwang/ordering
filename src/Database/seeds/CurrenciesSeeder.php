<?php

namespace EdStevo\Ordering\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CurrenciesSeeder extends Seeder {

    public function run()
    {
        DB::table('currencies')->delete();

        DB::table('currencies')->insert(array(
            array('name' => 'United Arab Emirates Dirham', 'code' => 'AED', 'symbol' => 'د.إ'),
            array('name' => 'Afghanistan Afghani', 'code' => 'AFN', 'symbol' => '؋'),
            array('name' => 'Albanian Lek', 'code' => 'ALL', 'symbol' => 'Lek'),
            array('name' => 'Angolan Kwanza', 'code' => 'AOA', 'symbol' => 'Kz'),
            array('name' => 'Argentine Peso', 'code' => 'ARS', 'symbol' => '$'),
            array('name' => 'Australian Dollar', 'code' => 'AUD', 'symbol' => '$'),
            array('name' => 'Aruban Florin', 'code' => 'AWG', 'symbol' => 'ƒ'),
            array('name' => 'Barbados Dollar', 'code' => 'BBD', 'symbol' => '$'),
            array('name' => 'Bangladeshi Taka', 'code' => 'BDT', 'symbol' => 'Tk'),
            array('name' => 'Bulgarian Lev', 'code' => 'BGN', 'symbol' => 'лв'),
            array('name' => 'Bahraini Dinar', 'code' => 'BHD', 'symbol' => 'BD'),
            array('name' => 'Burundi Franc', 'code' => 'BIF', 'symbol' => 'BIF'),
            array('name' => 'Bermudian Dollar', 'code' => 'BMD', 'symbol' => '$'),
            array('name' => 'Brunei Dollar', 'code' => 'BND', 'symbol' => '$'),
            array('name' => 'Bolivian Boliviano', 'code' => 'BOB', 'symbol' => '$b'),
            array('name' => 'Brazilian Real', 'code' => 'BRL', 'symbol' => 'R$'),
            array('name' => 'Bahamian Dollar', 'code' => 'BSD', 'symbol' => '$'),
            array('name' => 'Bhutan Ngultrum', 'code' => 'BTN', 'symbol' => 'BTN'),
            array('name' => 'Burma Kyat', 'code' => 'MMK', 'symbol' => 'K'),
            array('name' => 'Botswanian Pula', 'code' => 'BWP', 'symbol' => 'P'),
            array('name' => 'Belize Dollar', 'code' => 'BZD', 'symbol' => 'BZ$'),
            array('name' => 'Canadian Dollar', 'code' => 'CAD', 'symbol' => '$'),
            array('name' => 'Communauté Financière Africaine', 'code' => 'CFA', 'symbol' => 'CFA'),
            array('name' => 'Swiss Franc', 'code' => 'CHF', 'symbol' => 'CHF'),
            array('name' => 'Chilean Peso', 'code' => 'CLP', 'symbol' => '$'),
            array('name' => 'Yuan (Chinese) Renminbi', 'code' => 'CNY', 'symbol' => '¥'),
            array('name' => 'Colombian Peso', 'code' => 'COP', 'symbol' => '$'),
            array('name' => 'Costa Rican Colon', 'code' => 'CRC', 'symbol' => '₡'),
            array('name' => 'Czech Republic Koruna', 'code' => 'CZK', 'symbol' => 'Kč'),
            array('name' => 'Cuban Peso', 'code' => 'CUP', 'symbol' => '₱'),
            array('name' => 'Cape Verde Escudo', 'code' => 'CVE', 'symbol' => '$'),
            array('name' => 'Danish Krone', 'code' => 'DKK', 'symbol' => 'kr'),
            array('name' => 'Dominican Peso', 'code' => 'DOP', 'symbol' => 'RD$'),
            array('name' => 'Algerian Dinar', 'code' => 'DZD', 'symbol' => 'DZD'),
            array('name' => 'Egyptian Pound', 'code' => 'EGP', 'symbol' => '£'),
            array('name' => 'Ethiopian Birr', 'code' => 'ETB', 'symbol' => 'Br'),
            array('name' => 'Euro', 'code' => 'EUR', 'symbol' => '€'),
            array('name' => 'Fiji Dollar', 'code' => 'FJD', 'symbol' => '$'),
            array('name' => 'Falkland Islands Pound', 'code' => 'FKP', 'symbol' => '£'),
            array('name' => 'British Pound', 'code' => 'GBP', 'symbol' => '£'),
            array('name' => 'Ghanaian Cedi', 'code' => 'GHS', 'symbol' => 'GH¢'),
            array('name' => 'Gibraltar Pound', 'code' => 'GIP', 'symbol' => '£'),
            array('name' => 'Gambian Dalasi', 'code' => 'GMD', 'symbol' => 'GMD'),
            array('name' => 'Guinea Franc', 'code' => 'GNF', 'symbol' => 'GNF'),
            array('name' => 'Guatemalan Quetzal', 'code' => 'GTQ', 'symbol' => 'Q'),
            array('name' => 'Guyanan Dollar', 'code' => 'GYD', 'symbol' => '$'),
            array('name' => 'Hong Kong Dollar', 'code' => 'HKD', 'symbol' => 'HK$'),
            array('name' => 'Honduran Lempira', 'code' => 'HNL', 'symbol' => 'L'),
            array('name' => 'Haitian Gourde', 'code' => 'HTG', 'symbol' => 'G'),
            array('name' => 'Hungarian Forint', 'code' => 'HUF', 'symbol' => 'Ft'),
            array('name' => 'Indonesian Rupiah', 'code' => 'IDR', 'symbol' => 'Rp'),
            array('name' => 'Israeli Shekel', 'code' => 'ILS', 'symbol' => '₪'),
            array('name' => 'Indian Rupee', 'code' => 'INR', 'symbol' => '₹'),
            array('name' => 'Iraqi Dinar', 'code' => 'IQD', 'symbol' => 'د.ع'),
            array('name' => 'Iranian Rial', 'code' => 'IRR', 'symbol' => '﷼'),
            array('name' => 'Jamaican Dollar', 'code' => 'JMD', 'symbol' => 'J$'),
            array('name' => 'Jordanian Dinar', 'code' => 'JOD', 'symbol' => 'JOD'),
            array('name' => 'Japanese Yen', 'code' => 'JPY', 'symbol' => '¥'),
            array('name' => 'Kenyan Schilling', 'code' => 'KES', 'symbol' => 'KSh'),
            array('name' => 'Kampuchean (Cambodian) Riel', 'code' => 'KHR', 'symbol' => '៛'),
            array('name' => 'Comoros Franc', 'code' => 'KMF', 'symbol' => 'KMF'),
            array('name' => 'North Korean Won', 'code' => 'KPW', 'symbol' => '₩'),
            array('name' => '(South) Korean Won', 'code' => 'KRW', 'symbol' => '₩'),
            array('name' => 'Kuwaiti Dinar', 'code' => 'KWD', 'symbol' => 'ك'),
            array('name' => 'Cayman Islands Dollar', 'code' => 'KYD', 'symbol' => '$'),
            array('name' => 'Lao Kip', 'code' => 'LAK', 'symbol' => '₭'),
            array('name' => 'Lebanese Pound', 'code' => 'LBP', 'symbol' => 'ل.ل'),
            array('name' => 'Sri Lanka Rupee', 'code' => 'LKR', 'symbol' => '₨'),
            array('name' => 'Liberian Dollar', 'code' => 'LRD', 'symbol' => '$'),
            array('name' => 'Lesotho Loti', 'code' => 'LSL', 'symbol' => 'LSL'),
            array('name' => 'Libyan Dinar', 'code' => 'LYD', 'symbol' => 'LD'),
            array('name' => 'Moroccan Dirham', 'code' => 'MAD', 'symbol' => 'MAD'),
            array('name' => 'Malagasy Ariary', 'code' => 'MGA', 'symbol' => 'Ar'),
            array('name' => 'Mongolian Tugrik', 'code' => 'MNT', 'symbol' => '₮'),
            array('name' => 'Macau Pataca', 'code' => 'MOP', 'symbol' => 'MOP$'),
            array('name' => 'Mauritanian Ouguiya', 'code' => 'MRO', 'symbol' => 'MRO'),
            array('name' => 'Mauritius Rupee', 'code' => 'MUR', 'symbol' => '₨'),
            array('name' => 'Maldive Rufiyaa', 'code' => 'MVR', 'symbol' => 'MVR'),
            array('name' => 'Malawi Kwacha', 'code' => 'MWK', 'symbol' => 'MK'),
            array('name' => 'Mexican Peso', 'code' => 'MXN', 'symbol' => '$'),
            array('name' => 'Malaysian Ringgit', 'code' => 'MYR', 'symbol' => 'RM'),
            array('name' => 'Mozambique Metical', 'code' => 'MZN', 'symbol' => 'MT'),
            array('name' => 'Namibian Dollar', 'code' => 'NAD', 'symbol' => '$'),
            array('name' => 'Nigerian Naira', 'code' => 'NGN', 'symbol' => '₦'),
            array('name' => 'Nicaraguan Cordoba', 'code' => 'NIO', 'symbol' => 'C$'),
            array('name' => 'Norwegian Kroner', 'code' => 'NOK', 'symbol' => 'kr'),
            array('name' => 'Nepalese Rupee', 'code' => 'NPR', 'symbol' => '₨'),
            array('name' => 'New Zealand Dollar', 'code' => 'NZD', 'symbol' => '$'),
            array('name' => 'Omani Rial', 'code' => 'OMR', 'symbol' => '﷼'),
            array('name' => 'Panamanian Balboa', 'code' => 'PAB', 'symbol' => 'B/'),
            array('name' => 'Peruvian Nuevo Sol', 'code' => 'PEN', 'symbol' => 'S/'),
            array('name' => 'Papua New Guinea Kina', 'code' => 'PGK', 'symbol' => 'K'),
            array('name' => 'Philippine Peso', 'code' => 'PHP', 'symbol' => '₱'),
            array('name' => 'Pakistan Rupee', 'code' => 'PKR', 'symbol' => '₨'),
            array('name' => 'Polish Zloty', 'code' => 'PLN', 'symbol' => 'zł'),
            array('name' => 'Paraguay Guarani', 'code' => 'PYG', 'symbol' => 'Gs'),
            array('name' => 'Qatari Rial', 'code' => 'QAR', 'symbol' => '﷼'),
            array('name' => 'Romanian Leu', 'code' => 'RON', 'symbol' => 'lei'),
            array('name' => 'Rwanda Franc', 'code' => 'RWF', 'symbol' => 'RWF'),
            array('name' => 'Saudi Arabian Riyal', 'code' => 'SAR', 'symbol' => '﷼'),
            array('name' => 'Solomon Islands Dollar', 'code' => 'SBD', 'symbol' => '$'),
            array('name' => 'Seychelles Rupee', 'code' => 'SCR', 'symbol' => '₨'),
            array('name' => 'Sudanese Pound', 'code' => 'SDG', 'symbol' => 'SDG'),
            array('name' => 'Swedish Krona', 'code' => 'SEK', 'symbol' => 'kr'),
            array('name' => 'Singapore Dollar', 'code' => 'SGD', 'symbol' => '$'),
            array('name' => 'St. Helena Pound', 'code' => 'SHP', 'symbol' => '£'),
            array('name' => 'Sierra Leone Leone', 'code' => 'SLL', 'symbol' => 'Le'),
            array('name' => 'Somali Schilling', 'code' => 'SOS', 'symbol' => 'S'),
            array('name' => 'Surinamese Dollar', 'code' => 'SRD', 'symbol' => '$'),
            array('name' => 'Sao Tome and Principe Dobra', 'code' => 'STD', 'symbol' => 'STD'),
            array('name' => 'Russian Ruble', 'code' => 'RUB', 'symbol' => 'руб'),
            array('name' => 'Salvadoran Colon', 'code' => 'SVC', 'symbol' => '$'),
            array('name' => 'Syrian Pound', 'code' => 'SYP', 'symbol' => '£'),
            array('name' => 'Swaziland Lilangeni', 'code' => 'SZL', 'symbol' => 'SZL'),
            array('name' => 'Thai Baht', 'code' => 'THB', 'symbol' => '฿'),
            array('name' => 'Tunisian Dinar', 'code' => 'TND', 'symbol' => 'TND'),
            array('name' => 'Tongan Paanga', 'code' => 'TOP', 'symbol' => 'T$'),
            array('name' => 'Turkish Lira', 'code' => 'TRY', 'symbol' => 'TRY'),
            array('name' => 'Trinidad and Tobago Dollar', 'code' => 'TTD', 'symbol' => 'TT$'),
            array('name' => 'Taiwan Dollar', 'code' => 'TWD', 'symbol' => 'NT$'),
            array('name' => 'Tanzanian Schilling', 'code' => 'TZS', 'symbol' => 'TZS'),
            array('name' => 'Uganda Shilling', 'code' => 'UGX', 'symbol' => 'USh'),
            array('name' => 'US Dollar', 'code' => 'USD', 'symbol' => '$'),
            array('name' => 'Uruguayan Peso', 'code' => 'UYU', 'symbol' => '$U'),
            array('name' => 'Venezualan Bolivar', 'code' => 'VEF', 'symbol' => 'Bs'),
            array('name' => 'Vietnamese Dong', 'code' => 'VND', 'symbol' => '₫'),
            array('name' => 'Vanuatu Vatu', 'code' => 'VUV', 'symbol' => 'VT'),
            array('name' => 'Samoan Tala', 'code' => 'WST', 'symbol' => '$'),
            array('name' => 'CommunautÃ© FinanciÃ¨re Africaine BEAC, Francs', 'code' => 'XAF', 'symbol' => 'XAF'),
            array('name' => 'Silver, Ounces', 'code' => 'XAG', 'symbol' => 'XAG'),
            array('name' => 'Gold, Ounces', 'code' => 'XAU', 'symbol' => 'XAU'),
            array('name' => 'East Caribbean Dollar', 'code' => 'XCD', 'symbol' => '$'),
            array('name' => 'International Monetary Fund (IMF) Special Drawing Rights', 'code' => 'XDR', 'symbol' => 'XDR'),
            array('name' => 'CommunautÃ© FinanciÃ¨re Africaine BCEAO - Francs', 'code' => 'XOF', 'symbol' => 'XOF'),
            array('name' => 'Palladium Ounces', 'code' => 'XPD', 'symbol' => 'XPD'),
            array('name' => 'Comptoirs FranÃ§ais du Pacifique Francs', 'code' => 'XPF', 'symbol' => 'XPF'),
            array('name' => 'Platinum, Ounces', 'code' => 'XPT', 'symbol' => 'XPT'),
            array('name' => 'Yemeni Rial', 'code' => 'YER', 'symbol' => '﷼'),
            array('name' => 'South African Rand', 'code' => 'ZAR', 'symbol' => 'R'),
            array('name' => 'Congolese Franc', 'code' => 'CDF', 'symbol' => 'CDF'),
            array('name' => 'Zambian Kwacha', 'code' => 'ZMW', 'symbol' => 'ZK'),
            array('name' => 'Zimbabwe Dollar', 'code' => 'ZWD', 'symbol' => 'Z$'),
            array('name' => 'Armenian Dram', 'code' => 'AMD', 'symbol' => 'AMD'),
            array('name' => 'Azerbaijan, New Manat', 'code' => 'AZN', 'symbol' => 'ман'),
            array('name' => 'Belarus, Ruble', 'code' => 'BYR', 'symbol' => 'p.'),
            array('name' => 'Bosnian Convertible Marka', 'code' => 'BAM', 'symbol' => 'KM'),
            array('name' => 'Croatian Kuna', 'code' => 'HRK', 'symbol' => 'HRK'),
            array('name' => 'Djiboutian Franc', 'code' => 'DJF', 'symbol' => 'DJF'),
            array('name' => 'Eritrean Nakfa', 'code' => 'ERN', 'symbol' => 'ERN'),
            array('name' => 'Georgian Lari', 'code' => 'GEL', 'symbol' => 'GEL'),
            array('name' => 'Icelandic Krona', 'code' => 'ISK', 'symbol' => 'kr'),
            array('name' => 'Kazakhstani Tenge', 'code' => 'KZT', 'symbol' => 'KZT'),
            array('name' => 'Kyrgyzstani Som', 'code' => 'KGS', 'symbol' => 'лв'),
            array('name' => 'Lithuanian Litas', 'code' => 'LTL', 'symbol' => 'Lt'),
            array('name' => 'Macedonian Denar', 'code' => 'MKD', 'symbol' => 'ден'),
            array('name' => 'Moldovan Leu', 'code' => 'MDL', 'symbol' => 'MDL'),
            array('name' => 'Dutch Guilder', 'code' => 'ANG', 'symbol' => 'ƒ'),
            array('name' => 'Tajikistani Somoni', 'code' => 'TJS', 'symbol' => 'TJS'),
            array('name' => 'Turkmenistani Manat', 'code' => 'TMT', 'symbol' => 'TMT'),
            array('name' => 'Tuvaluan Dollar', 'code' => 'TVD', 'symbol' => '$'),
            array('name' => 'Ukrainian Hryvnia', 'code' => 'UAH', 'symbol' => '₴'),
            array('name' => 'Uzbekistani Som', 'code' => 'UZS', 'symbol' => 'лв'),
            array('name' => 'Serbian Dinar', 'code' => 'RSD', 'symbol' => 'РСД'),

        ));

    }
}