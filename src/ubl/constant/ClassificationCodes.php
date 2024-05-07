<?php

namespace klsheng\myinvois\ubl\constant;

class ClassificationCodes
{
    const CODE = 'Code';
    const DESCRIPTION = 'Description';

    public static function getItems()
    {
        return [
            [
                ClassificationCodes::CODE => '001',
                ClassificationCodes::DESCRIPTION => 'Breastfeeding equipment'
            ],
            [
                ClassificationCodes::CODE => '002',
                ClassificationCodes::DESCRIPTION => 'Child care centres and kindergartens fees'
            ],
            [
                ClassificationCodes::CODE => '003',
                ClassificationCodes::DESCRIPTION => 'Computer, smartphone or tablet'
            ],
            [
                ClassificationCodes::CODE => '004',
                ClassificationCodes::DESCRIPTION => 'Consolidated e-Invoice'
            ],
            [
                ClassificationCodes::CODE => '005',
                ClassificationCodes::DESCRIPTION => 'Construction materials (as specified under Fourth Schedule of the Lembaga Pembangunan Industri Pembinaan Malaysia Act 1994)'
            ],
            [
                ClassificationCodes::CODE => '006',
                ClassificationCodes::DESCRIPTION => 'Disbursement'
            ],
            [
                ClassificationCodes::CODE => '007',
                ClassificationCodes::DESCRIPTION => 'Donation'
            ],
            [
                ClassificationCodes::CODE => '008',
                ClassificationCodes::DESCRIPTION => 'e-Commerce - e-Invoice to buyer / purchaser'
            ],
            [
                ClassificationCodes::CODE => '009',
                ClassificationCodes::DESCRIPTION => 'e-Commerce - Self-billed e-Invoice to seller, logistics, etc.'
            ],
            [
                ClassificationCodes::CODE => '010',
                ClassificationCodes::DESCRIPTION => 'Education fees'
            ],
            [
                ClassificationCodes::CODE => '011',
                ClassificationCodes::DESCRIPTION => 'Goods on consignment (Consignor)'
            ],
            [
                ClassificationCodes::CODE => '012',
                ClassificationCodes::DESCRIPTION => 'Goods on consignment (Consignee)'
            ],
            [
                ClassificationCodes::CODE => '013',
                ClassificationCodes::DESCRIPTION => 'Gym membership'
            ],
            [
                ClassificationCodes::CODE => '014',
                ClassificationCodes::DESCRIPTION => 'Insurance - Education and medical benefits'
            ],
            [
                ClassificationCodes::CODE => '015',
                ClassificationCodes::DESCRIPTION => 'Insurance - Takaful or life insurance'
            ],
            [
                ClassificationCodes::CODE => '016',
                ClassificationCodes::DESCRIPTION => 'Interest and financing expenses'
            ],
            [
                ClassificationCodes::CODE => '017',
                ClassificationCodes::DESCRIPTION => 'Internet subscription'
            ],
            [
                ClassificationCodes::CODE => '018',
                ClassificationCodes::DESCRIPTION => 'Land and building'
            ],
            [
                ClassificationCodes::CODE => '019',
                ClassificationCodes::DESCRIPTION => 'Medical examination for learning disabilities and early intervention or rehabilitation treatments of learning disabilities'
            ],
            [
                ClassificationCodes::CODE => '020',
                ClassificationCodes::DESCRIPTION => 'Medical examination or vaccination expenses'
            ],
            [
                ClassificationCodes::CODE => '021',
                ClassificationCodes::DESCRIPTION => 'Medical expenses for serious diseases'
            ],
            [
                ClassificationCodes::CODE => '022',
                ClassificationCodes::DESCRIPTION => 'Others'
            ],
            [
                ClassificationCodes::CODE => '023',
                ClassificationCodes::DESCRIPTION => 'Petroleum operations (as defined in Petroleum (Income Tax) Act 1967)'
            ],
            [
                ClassificationCodes::CODE => '024',
                ClassificationCodes::DESCRIPTION => 'Private retirement scheme or deferred annuity scheme'
            ],
            [
                ClassificationCodes::CODE => '025',
                ClassificationCodes::DESCRIPTION => 'Motor vehicle'
            ],
            [
                ClassificationCodes::CODE => '026',
                ClassificationCodes::DESCRIPTION => 'Subscription of books / journals / magazines / newspapers / other similar publications'
            ],
            [
                ClassificationCodes::CODE => '027',
                ClassificationCodes::DESCRIPTION => 'Reimbursement'
            ],
            [
                ClassificationCodes::CODE => '028',
                ClassificationCodes::DESCRIPTION => 'Rental of motor vehicle'
            ],
            [
                ClassificationCodes::CODE => '029',
                ClassificationCodes::DESCRIPTION => 'EV charging facilities (Installation, rental, sale / purchase or subscription fees)'
            ],
            [
                ClassificationCodes::CODE => '030',
                ClassificationCodes::DESCRIPTION => 'Repair and maintenance'
            ],
            [
                ClassificationCodes::CODE => '031',
                ClassificationCodes::DESCRIPTION => 'Research and development'
            ],
            [
                ClassificationCodes::CODE => '032',
                ClassificationCodes::DESCRIPTION => 'Foreign income'
            ],
            [
                ClassificationCodes::CODE => '033',
                ClassificationCodes::DESCRIPTION => 'Self-billed - Betting and gaming'
            ],
            [
                ClassificationCodes::CODE => '034',
                ClassificationCodes::DESCRIPTION => 'Self-billed - Importation of goods'
            ],
            [
                ClassificationCodes::CODE => '035',
                ClassificationCodes::DESCRIPTION => 'Self-billed - Importation of services'
            ],
            [
                ClassificationCodes::CODE => '036',
                ClassificationCodes::DESCRIPTION => 'Self-billed - Others'
            ],
            [
                ClassificationCodes::CODE => '037',
                ClassificationCodes::DESCRIPTION => 'Self-billed - Monetary payment to agents, dealers or distributors'
            ],
            [
                ClassificationCodes::CODE => '038',
                ClassificationCodes::DESCRIPTION => 'Sports equipment, rental / entry fees for sports facilities, registration in sports competition or sports training fees imposed by associations / sports clubs / companies registered with the Sports Commissioner or Companies Commission of Malaysia and carrying out sports activities as listed under the Sports Development Act 1997'
            ],
            [
                ClassificationCodes::CODE => '039',
                ClassificationCodes::DESCRIPTION => 'Supporting equipment for disabled person'
            ],
            [
                ClassificationCodes::CODE => '040',
                ClassificationCodes::DESCRIPTION => 'Voluntary contribution to approved provident fund'
            ],
            [
                ClassificationCodes::CODE => '041',
                ClassificationCodes::DESCRIPTION => 'Dental examination or treatment'
            ],
            [
                ClassificationCodes::CODE => '042',
                ClassificationCodes::DESCRIPTION => 'Fertility treatment'
            ],
            [
                ClassificationCodes::CODE => '043',
                ClassificationCodes::DESCRIPTION => 'Treatment and home care nursing, daycare centres and residential care centers'
            ],
            [
                ClassificationCodes::CODE => '044',
                ClassificationCodes::DESCRIPTION => 'Vouchers, gift cards, loyalty points, etc'
            ],
            [
                ClassificationCodes::CODE => '045',
                ClassificationCodes::DESCRIPTION => 'Self-billed - Non-monetary payment to agents, dealers or distributors'
            ]
        ];
    }

    public static function getDescription($code)
    {
        $list = self::getItems();

        if(!in_array($code, array_column($list, ClassificationCodes::CODE))) {
            return '';
        }

        $found_key = array_search($code, array_column($list, ClassificationCodes::CODE));
        return $list[$found_key][ClassificationCodes::DESCRIPTION];
    }
}