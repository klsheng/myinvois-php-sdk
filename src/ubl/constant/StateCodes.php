<?php

namespace klsheng\myinvois\ubl\constant;

class StateCodes
{
    const CODE = 'Code';
    const STATE = 'State';

    public static function getItems()
    {
        return [
            [
                StateCodes::CODE => '00',
                StateCodes::STATE => 'All States'
            ],
            [
                StateCodes::CODE => '01',
                StateCodes::STATE => 'Johor'
            ],
            [
                StateCodes::CODE => '02',
                StateCodes::STATE => 'Kedah'
            ],
            [
                StateCodes::CODE => '03',
                StateCodes::STATE => 'Kelantan'
            ],
            [
                StateCodes::CODE => '04',
                StateCodes::STATE => 'Melaka'
            ],
            [
                StateCodes::CODE => '05',
                StateCodes::STATE => 'Negeri Sembilan'
            ],
            [
                StateCodes::CODE => '06',
                StateCodes::STATE => 'Pahang'
            ],
            [
                StateCodes::CODE => '07',
                StateCodes::STATE => 'Pulau Pinang'
            ],
            [
                StateCodes::CODE => '08',
                StateCodes::STATE => 'Perak'
            ],
            [
                StateCodes::CODE => '09',
                StateCodes::STATE => 'Perlis'
            ],
            [
                StateCodes::CODE => '10',
                StateCodes::STATE => 'Selangor'
            ],
            [
                StateCodes::CODE => '11',
                StateCodes::STATE => 'Terengganu'
            ],
            [
                StateCodes::CODE => '12',
                StateCodes::STATE => 'Sabah'
            ],
            [
                StateCodes::CODE => '13',
                StateCodes::STATE => 'Sarawak'
            ],
            [
                StateCodes::CODE => '14',
                StateCodes::STATE => 'Wilayah Persekutuan Kuala Lumpur'
            ],
            [
                StateCodes::CODE => '15',
                StateCodes::STATE => 'Wilayah Persekutuan Labuan'
            ],
            [
                StateCodes::CODE => '16',
                StateCodes::STATE => 'Wilayah Persekutuan Putrajaya'
            ],
            [
                StateCodes::CODE => '17',
                StateCodes::STATE => 'Not Applicable'
            ]
        ];
    }
}