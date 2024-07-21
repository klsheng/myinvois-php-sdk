<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Constant;

/**
 * Unit codes
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class UnitCodes
{
    const CODE = 'Code';
    const NAME = 'Name';
    const DESCRIPTION = 'Description';

    const UNIT = 'C62';

    // TODO
    // Check for duplicate
    public static function getItems()
    {
        return [
            [
                UnitCodes::CODE => "C81",
                UnitCodes::NAME => "radian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C25",
                UnitCodes::NAME => "milliradian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B97",
                UnitCodes::NAME => "microradian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DD",
                UnitCodes::NAME => "degree [unit of angle]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D61",
                UnitCodes::NAME => "minute [unit of angle]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D62",
                UnitCodes::NAME => "second [unit of angle]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A91",
                UnitCodes::NAME => "grade",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A91",
                UnitCodes::NAME => "gon",
                UnitCodes::DESCRIPTION => "Synonym => grade"
            ],
            [
                UnitCodes::CODE => "M43",
                UnitCodes::NAME => "mil",
                UnitCodes::DESCRIPTION => "Unit to indicate an angle at military zone, equal to the 6400th part of the full circle of the 360° or 2·p·rad."
            ],
            [
                UnitCodes::CODE => "M44",
                UnitCodes::NAME => "revolution",
                UnitCodes::DESCRIPTION => "Unit to identify an angle of the full circle of 360° or 2·p·rad (Refer ISO/TC12 SI Guide)."
            ],
            [
                UnitCodes::CODE => "D27",
                UnitCodes::NAME => "steradian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H57",
                UnitCodes::NAME => "inch per two pi radiant",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MTR",
                UnitCodes::NAME => "metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E96",
                UnitCodes::NAME => "degree per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H27",
                UnitCodes::NAME => "degree per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M55",
                UnitCodes::NAME => "metre per radiant",
                UnitCodes::DESCRIPTION => "Unit of the translation factor for implementation from rotation to linear movement."
            ],
            [
                UnitCodes::CODE => "DMT",
                UnitCodes::NAME => "decimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CMT",
                UnitCodes::NAME => "centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4H",
                UnitCodes::NAME => "micrometre (micron)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MMT",
                UnitCodes::NAME => "millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HMT",
                UnitCodes::NAME => "hectometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KTM",
                UnitCodes::NAME => "kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KMT",
                UnitCodes::NAME => "kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C45",
                UnitCodes::NAME => "nanometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C52",
                UnitCodes::NAME => "picometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A71",
                UnitCodes::NAME => "femtometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A45",
                UnitCodes::NAME => "decametre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "NMI",
                UnitCodes::NAME => "nautical mile",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A11",
                UnitCodes::NAME => "angstrom",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A12",
                UnitCodes::NAME => "astronomical unit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C63",
                UnitCodes::NAME => "parsec",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F52",
                UnitCodes::NAME => "metre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F50",
                UnitCodes::NAME => "micrometre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F51",
                UnitCodes::NAME => "centimetre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G06",
                UnitCodes::NAME => "millimetre per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H84",
                UnitCodes::NAME => "gram millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G04",
                UnitCodes::NAME => "centimetre per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G05",
                UnitCodes::NAME => "metre per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H79",
                UnitCodes::NAME => "French gauge",
                UnitCodes::DESCRIPTION => "A unit of distance used for measuring the diameter of small tubes such as urological instruments and catheters."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "",
                UnitCodes::DESCRIPTION => "Synonym => French, Charrière, Charrière gauge"
            ],
            [
                UnitCodes::CODE => "AK",
                UnitCodes::NAME => "fathom",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "X1",
                UnitCodes::NAME => "Gunter's chain",
                UnitCodes::DESCRIPTION => "A unit of distance used or formerly used by British surveyors."
            ],
            [
                UnitCodes::CODE => "INH",
                UnitCodes::NAME => "inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M7",
                UnitCodes::NAME => "micro-inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "FOT",
                UnitCodes::NAME => "foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "YRD",
                UnitCodes::NAME => "yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "SMI",
                UnitCodes::NAME => "mile (statute mile)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "77",
                UnitCodes::NAME => "milli-inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B57",
                UnitCodes::NAME => "light year",
                UnitCodes::DESCRIPTION => "A unit of length defining the distance that light travels in a vacuum in one year."
            ],
            [
                UnitCodes::CODE => "F49",
                UnitCodes::NAME => "rod [unit of distance]",
                UnitCodes::DESCRIPTION => "A unit of distance equal to 5.5 yards (16 feet 6 inches)."
            ],
            [
                UnitCodes::CODE => "MAM",
                UnitCodes::NAME => "megametre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K13",
                UnitCodes::NAME => "foot per degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K17",
                UnitCodes::NAME => "foot per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K45",
                UnitCodes::NAME => "inch per degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K46",
                UnitCodes::NAME => "inch per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L98",
                UnitCodes::NAME => "yard per degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L99",
                UnitCodes::NAME => "yard per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M49",
                UnitCodes::NAME => "chain (based on U.S. survey foot)",
                UnitCodes::DESCRIPTION => "Unit of the length according the Anglo-American system of units."
            ],
            [
                UnitCodes::CODE => "M50",
                UnitCodes::NAME => "furlong",
                UnitCodes::DESCRIPTION => "Unit commonly used in Great Britain at rural distances => 1 furlong = 40 rods = 10 chains (UK) = 1/8 mile = 1/10 furlong = 220 yards = 660 foot."
            ],
            [
                UnitCodes::CODE => "M51",
                UnitCodes::NAME => "foot (U.S. survey)",
                UnitCodes::DESCRIPTION => "Unit commonly used in the United States for ordnance survey."
            ],
            [
                UnitCodes::CODE => "M52",
                UnitCodes::NAME => "mile (based on U.S. survey foot)",
                UnitCodes::DESCRIPTION => "Unit commonly used in the United States for ordnance survey."
            ],
            [
                UnitCodes::CODE => "M53",
                UnitCodes::NAME => "metre per pascal",
                UnitCodes::DESCRIPTION => "SI base unit metre divided by the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "MTK",
                UnitCodes::NAME => "square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KMK",
                UnitCodes::NAME => "square kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H30",
                UnitCodes::NAME => "square micrometre (square micron)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H59",
                UnitCodes::NAME => "square metre per newton",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DAA",
                UnitCodes::NAME => "decare",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CMK",
                UnitCodes::NAME => "square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DMK",
                UnitCodes::NAME => "square decimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H16",
                UnitCodes::NAME => "square decametre",
                UnitCodes::DESCRIPTION => "Synonym => are"
            ],
            [
                UnitCodes::CODE => "H18",
                UnitCodes::NAME => "square hectometre",
                UnitCodes::DESCRIPTION => "Synonym => hectare"
            ],
            [
                UnitCodes::CODE => "MMK",
                UnitCodes::NAME => "square millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "ARE",
                UnitCodes::NAME => "are",
                UnitCodes::DESCRIPTION => "Synonym => square decametre"
            ],
            [
                UnitCodes::CODE => "HAR",
                UnitCodes::NAME => "hectare",
                UnitCodes::DESCRIPTION => "Synonym => square hectometre"
            ],
            [
                UnitCodes::CODE => "INK",
                UnitCodes::NAME => "square inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "FTK",
                UnitCodes::NAME => "square foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "YDK",
                UnitCodes::NAME => "square yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MIK",
                UnitCodes::NAME => "square mile (statute mile)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M48",
                UnitCodes::NAME => "square mile (based on U.S. survey foot)",
                UnitCodes::DESCRIPTION => "Unit of the area, which is mainly common in the agriculture and forestry."
            ],
            [
                UnitCodes::CODE => "ACR",
                UnitCodes::NAME => "acre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M47",
                UnitCodes::NAME => "circular mil",
                UnitCodes::DESCRIPTION => "Unit of an area, of which the size is given by a diameter of length of 1 mm (0,001 in) based on the formula => area = p·(diameter/2)²."
            ],
            [
                UnitCodes::CODE => "MTQ",
                UnitCodes::NAME => "cubic metre",
                UnitCodes::DESCRIPTION => "Synonym => metre cubed"
            ],
            [
                UnitCodes::CODE => "MAL",
                UnitCodes::NAME => "megalitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "LTR",
                UnitCodes::NAME => "litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MMQ",
                UnitCodes::NAME => "cubic millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CMQ",
                UnitCodes::NAME => "cubic centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DMQ",
                UnitCodes::NAME => "cubic decimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MLT",
                UnitCodes::NAME => "millilitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HLT",
                UnitCodes::NAME => "hectolitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CLT",
                UnitCodes::NAME => "centilitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DMA",
                UnitCodes::NAME => "cubic decametre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H19",
                UnitCodes::NAME => "cubic hectometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H20",
                UnitCodes::NAME => "cubic kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M71",
                UnitCodes::NAME => "cubic metre per pascal",
                UnitCodes::DESCRIPTION => "Power of the SI base unit meter by exponent 3 divided by the derived SI base unit pascal."
            ],
            [
                UnitCodes::CODE => "DLT",
                UnitCodes::NAME => "decilitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4G",
                UnitCodes::NAME => "microlitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K6",
                UnitCodes::NAME => "kilolitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A44",
                UnitCodes::NAME => "decalitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G94",
                UnitCodes::NAME => "cubic centimetre per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G95",
                UnitCodes::NAME => "litre per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G96",
                UnitCodes::NAME => "cubic metre per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G97",
                UnitCodes::NAME => "millilitre per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "5I",
                UnitCodes::NAME => "standard cubic foot",
                UnitCodes::DESCRIPTION => "Use standard (common code WSD)"
            ],
            [
                UnitCodes::CODE => "INQ",
                UnitCodes::NAME => "cubic inch",
                UnitCodes::DESCRIPTION => "Synonym => inch cubed"
            ],
            [
                UnitCodes::CODE => "FTQ",
                UnitCodes::NAME => "cubic foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "YDQ",
                UnitCodes::NAME => "cubic yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GLI",
                UnitCodes::NAME => "gallon (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GLL",
                UnitCodes::NAME => "gallon (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "PT",
                UnitCodes::NAME => "pint (US)",
                UnitCodes::DESCRIPTION => "Use liquid pint (common code PTL)"
            ],
            [
                UnitCodes::CODE => "PTI",
                UnitCodes::NAME => "pint (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "QTI",
                UnitCodes::NAME => "quart (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "PTL",
                UnitCodes::NAME => "liquid pint (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "QTL",
                UnitCodes::NAME => "liquid quart (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "PTD",
                UnitCodes::NAME => "dry pint (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "OZI",
                UnitCodes::NAME => "fluid ounce (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "QT",
                UnitCodes::NAME => "quart (US)",
                UnitCodes::DESCRIPTION => "Use liquid quart (common code QTL)"
            ],
            [
                UnitCodes::CODE => "J57",
                UnitCodes::NAME => "barrel (UK petroleum)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K21",
                UnitCodes::NAME => "cubic foot per degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K23",
                UnitCodes::NAME => "cubic foot per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L43",
                UnitCodes::NAME => "peck (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L61",
                UnitCodes::NAME => "pint (US dry)",
                UnitCodes::DESCRIPTION => "Use dry pint (common code PTD)"
            ],
            [
                UnitCodes::CODE => "L62",
                UnitCodes::NAME => "quart (US dry)",
                UnitCodes::DESCRIPTION => "Use dry quart (US) (common code QTD)"
            ],
            [
                UnitCodes::CODE => "L84",
                UnitCodes::NAME => "ton (UK shipping)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L86",
                UnitCodes::NAME => "ton (US shipping)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M11",
                UnitCodes::NAME => "cubic yard per degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M14",
                UnitCodes::NAME => "cubic yard per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "OZA",
                UnitCodes::NAME => "fluid ounce (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BUI",
                UnitCodes::NAME => "bushel (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BUA",
                UnitCodes::NAME => "bushel (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BLL",
                UnitCodes::NAME => "barrel (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BLD",
                UnitCodes::NAME => "dry barrel (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GLD",
                UnitCodes::NAME => "dry gallon (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "QTD",
                UnitCodes::NAME => "dry quart (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G26",
                UnitCodes::NAME => "stere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G21",
                UnitCodes::NAME => "cup [unit of volume]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G24",
                UnitCodes::NAME => "tablespoon (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G25",
                UnitCodes::NAME => "teaspoon (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G23",
                UnitCodes::NAME => "peck",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M67",
                UnitCodes::NAME => "acre-foot (based on U.S. survey foot)",
                UnitCodes::DESCRIPTION => "Unit of the volume, which is used in the United States to measure/gauge the capacity of reservoirs."
            ],
            [
                UnitCodes::CODE => "M68",
                UnitCodes::NAME => "cord (128 ft3)",
                UnitCodes::DESCRIPTION => "Traditional unit of the volume of stacked firewood which has been measured with a cord."
            ],
            [
                UnitCodes::CODE => "M69",
                UnitCodes::NAME => "cubic mile (UK statute)",
                UnitCodes::DESCRIPTION => "Unit of volume according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "M70",
                UnitCodes::NAME => "ton, register",
                UnitCodes::DESCRIPTION => "Traditional unit of the cargo capacity."
            ],
            [
                UnitCodes::CODE => "G27",
                UnitCodes::NAME => "cubic centimetre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G29",
                UnitCodes::NAME => "cubic metre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G28",
                UnitCodes::NAME => "litre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G30",
                UnitCodes::NAME => "millilitre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J36",
                UnitCodes::NAME => "microlitre per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J87",
                UnitCodes::NAME => "cubic centimetre per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J91",
                UnitCodes::NAME => "cubic decimetre per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K62",
                UnitCodes::NAME => "litre per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L19",
                UnitCodes::NAME => "millilitre per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L21",
                UnitCodes::NAME => "cubic millimetre per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "SEC",
                UnitCodes::NAME => "second [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MIN",
                UnitCodes::NAME => "minute [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HUR",
                UnitCodes::NAME => "hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DAY",
                UnitCodes::NAME => "day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B52",
                UnitCodes::NAME => "kilosecond",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C26",
                UnitCodes::NAME => "millisecond",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H70",
                UnitCodes::NAME => "picosecond",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B98",
                UnitCodes::NAME => "microsecond",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C47",
                UnitCodes::NAME => "nanosecond",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WEE",
                UnitCodes::NAME => "week",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MON",
                UnitCodes::NAME => "month",
                UnitCodes::DESCRIPTION => "Unit of time equal to 1/12 of a year of 365,25 days."
            ],
            [
                UnitCodes::CODE => "ANN",
                UnitCodes::NAME => "year",
                UnitCodes::DESCRIPTION => "Unit of time equal to 365,25 days."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "",
                UnitCodes::DESCRIPTION => "Synonym => Julian year"
            ],
            [
                UnitCodes::CODE => "D42",
                UnitCodes::NAME => "tropical year",
                UnitCodes::DESCRIPTION => "Unit of time equal to about 365.242 19 days."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "",
                UnitCodes::DESCRIPTION => "Synonym => solar year"
            ],
            [
                UnitCodes::CODE => "L95",
                UnitCodes::NAME => "common year",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L96",
                UnitCodes::NAME => "sidereal year",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M56",
                UnitCodes::NAME => "shake",
                UnitCodes::DESCRIPTION => "Unit for a very short period."
            ],
            [
                UnitCodes::CODE => "2A",
                UnitCodes::NAME => "radian per second",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "M46",
                UnitCodes::NAME => "revolution per minute",
                UnitCodes::DESCRIPTION => "Unit of the angular velocity."
            ],
            [
                UnitCodes::CODE => "2B",
                UnitCodes::NAME => "radian per second squared",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "M45",
                UnitCodes::NAME => "degree [unit of angle] per second squared",
                UnitCodes::DESCRIPTION => "360 part of a full circle divided by the power of the SI base unit second and the exponent 2."
            ],
            [
                UnitCodes::CODE => "MTS",
                UnitCodes::NAME => "metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KNT",
                UnitCodes::NAME => "knot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KMH",
                UnitCodes::NAME => "kilometre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C16",
                UnitCodes::NAME => "millimetre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2M",
                UnitCodes::NAME => "centimetre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H49",
                UnitCodes::NAME => "centimetre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H81",
                UnitCodes::NAME => "millimetre per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2X",
                UnitCodes::NAME => "metre per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M59",
                UnitCodes::NAME => "metre per second pascal",
                UnitCodes::DESCRIPTION => "SI base unit meter divided by the product of SI base unit second and the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "H66",
                UnitCodes::NAME => "millimetre per year",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H67",
                UnitCodes::NAME => "millimetre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "FR",
                UnitCodes::NAME => "foot per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "IU",
                UnitCodes::NAME => "inch per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "IU",
                UnitCodes::NAME => "inch per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "FS",
                UnitCodes::NAME => "foot per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HM",
                UnitCodes::NAME => "mile per hour (statute mile)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J84",
                UnitCodes::NAME => "centimetre per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J85",
                UnitCodes::NAME => "centimetre per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K14",
                UnitCodes::NAME => "foot per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K18",
                UnitCodes::NAME => "foot per second degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K19",
                UnitCodes::NAME => "foot per second psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K47",
                UnitCodes::NAME => "inch per second degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K48",
                UnitCodes::NAME => "inch per second psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L12",
                UnitCodes::NAME => "metre per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L13",
                UnitCodes::NAME => "metre per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M22",
                UnitCodes::NAME => "millilitre per square centimetre minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M57",
                UnitCodes::NAME => "mile per minute",
                UnitCodes::DESCRIPTION => "Unit of velocity from the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "M58",
                UnitCodes::NAME => "mile per second",
                UnitCodes::DESCRIPTION => "Unit of the velocity from the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "M60",
                UnitCodes::NAME => "metre per hour",
                UnitCodes::DESCRIPTION => "SI base unit metre divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "M61",
                UnitCodes::NAME => "inch per year",
                UnitCodes::DESCRIPTION => "Unit of the length according to the Anglo-American and Imperial system of units divided by the unit common year with 365 days."
            ],
            [
                UnitCodes::CODE => "M62",
                UnitCodes::NAME => "kilometre per second",
                UnitCodes::DESCRIPTION => "1000-fold of the SI base unit metre divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "M63",
                UnitCodes::NAME => "inch per minute",
                UnitCodes::DESCRIPTION => "Unit inch according to the Anglo-American and Imperial system of units divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "M64",
                UnitCodes::NAME => "yard per second",
                UnitCodes::DESCRIPTION => "Unit yard according to the Anglo-American and Imperial system of units divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "M65",
                UnitCodes::NAME => "yard per minute",
                UnitCodes::DESCRIPTION => "Unit yard according to the Anglo-American and Imperial system of units divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "M66",
                UnitCodes::NAME => "yard per hour",
                UnitCodes::DESCRIPTION => "Unit yard according to the Anglo-American and Imperial system of units divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "MSK",
                UnitCodes::NAME => "metre per second squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A76",
                UnitCodes::NAME => "gal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C11",
                UnitCodes::NAME => "milligal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M38",
                UnitCodes::NAME => "kilometre per second squared",
                UnitCodes::DESCRIPTION => "1000-fold of the SI base unit metre divided by the power of the SI base unit second by exponent 2."
            ],
            [
                UnitCodes::CODE => "M39",
                UnitCodes::NAME => "centimetre per second squared",
                UnitCodes::DESCRIPTION => "0,01-fold of the SI base unit metre divided by the power of the SI base unit second by exponent 2."
            ],
            [
                UnitCodes::CODE => "M41",
                UnitCodes::NAME => "millimetre per second squared",
                UnitCodes::DESCRIPTION => "0,001-fold of the SI base unit metre divided by the power of the SI base unit second by exponent 2."
            ],
            [
                UnitCodes::CODE => "A73",
                UnitCodes::NAME => "foot per second squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "IV",
                UnitCodes::NAME => "inch per second squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K40",
                UnitCodes::NAME => "standard acceleration of free fall",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M40",
                UnitCodes::NAME => "yard per second squared",
                UnitCodes::DESCRIPTION => "Unit of the length according to the Anglo-American and Imperial system of units divided by the power of the SI base unit second by exponent 2."
            ],
            [
                UnitCodes::CODE => "M42",
                UnitCodes::NAME => "mile (statute mile) per second squared",
                UnitCodes::DESCRIPTION => "Unit of the length according to the Imperial system of units divided by the power of the SI base unit second by exponent 2."
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "Q32",
                UnitCodes::NAME => "femtolitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "Q33",
                UnitCodes::NAME => "picolitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "Q34",
                UnitCodes::NAME => "nanolitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "AWG",
                UnitCodes::NAME => "american wire gauge",
                UnitCodes::DESCRIPTION => "A unit of distance used for measuring the diameter of small tubes or wires such as the outer diameter od hypodermic or suture needles."
            ],
            [
                UnitCodes::CODE => "NM3",
                UnitCodes::NAME => "Normalised cubic metre",
                UnitCodes::DESCRIPTION => "Normalised cubic metre (temperature 0°C and pressure 101325 millibars )"
            ],
            [
                UnitCodes::CODE => "SM3",
                UnitCodes::NAME => "Standard cubic metre",
                UnitCodes::DESCRIPTION => "Standard cubic metre (temperature 15°C and pressure 101325 millibars )"
            ],
            [
                UnitCodes::CODE => "HTZ",
                UnitCodes::NAME => "hertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KHZ",
                UnitCodes::NAME => "kilohertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MHZ",
                UnitCodes::NAME => "megahertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D29",
                UnitCodes::NAME => "terahertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A86",
                UnitCodes::NAME => "gigahertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MTZ",
                UnitCodes::NAME => "millihertz",
                UnitCodes::DESCRIPTION => "A unit of frequency equal to 0.001 cycle per second"
            ],
            [
                UnitCodes::CODE => "H10",
                UnitCodes::NAME => "reciprocal hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H11",
                UnitCodes::NAME => "reciprocal month",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H09",
                UnitCodes::NAME => "reciprocal year",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H85",
                UnitCodes::NAME => "reciprocal week",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "RPS",
                UnitCodes::NAME => "revolutions per second",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "RPM",
                UnitCodes::NAME => "revolutions per minute",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "C94",
                UnitCodes::NAME => "reciprocal minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2A",
                UnitCodes::NAME => "radian per second",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C50",
                UnitCodes::NAME => "neper",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2N",
                UnitCodes::NAME => "decibel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M72",
                UnitCodes::NAME => "bel",
                UnitCodes::DESCRIPTION => "Logarithmic relationship to base 10."
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C51",
                UnitCodes::NAME => "neper per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C50",
                UnitCodes::NAME => "neper",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KGM",
                UnitCodes::NAME => "kilogram",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams."
            ],
            [
                UnitCodes::CODE => "MC",
                UnitCodes::NAME => "microgram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DJ",
                UnitCodes::NAME => "decagram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DG",
                UnitCodes::NAME => "decigram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GRM",
                UnitCodes::NAME => "gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CGM",
                UnitCodes::NAME => "centigram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "TNE",
                UnitCodes::NAME => "tonne (metric ton)",
                UnitCodes::DESCRIPTION => "Synonym => metric ton"
            ],
            [
                UnitCodes::CODE => "DTN",
                UnitCodes::NAME => "decitonne",
                UnitCodes::DESCRIPTION => "Synonym => centner, metric 100 kg; quintal, metric 100 kg"
            ],
            [
                UnitCodes::CODE => "MGM",
                UnitCodes::NAME => "milligram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HGM",
                UnitCodes::NAME => "hectogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KTN",
                UnitCodes::NAME => "kilotonne",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2U",
                UnitCodes::NAME => "megagram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "LBR",
                UnitCodes::NAME => "pound",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GRN",
                UnitCodes::NAME => "grain",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "ONZ",
                UnitCodes::NAME => "ounce (avoirdupois)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CWI",
                UnitCodes::NAME => "hundred weight (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CWA",
                UnitCodes::NAME => "hundred pound (cwt) / hundred weight (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "LTN",
                UnitCodes::NAME => "ton (UK) or long ton (US)",
                UnitCodes::DESCRIPTION => "Synonym => gross ton (2240 lb)"
            ],
            [
                UnitCodes::CODE => "STI",
                UnitCodes::NAME => "stone (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "STN",
                UnitCodes::NAME => "ton (US) or short ton (UK/US)",
                UnitCodes::DESCRIPTION => "Synonym => net ton (2000 lb)"
            ],
            [
                UnitCodes::CODE => "APZ",
                UnitCodes::NAME => "troy ounce or apothecary ounce",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F13",
                UnitCodes::NAME => "slug",
                UnitCodes::DESCRIPTION => "A unit of mass. One slug is the mass accelerated at 1 foot per second per second by a force of 1 pound."
            ],
            [
                UnitCodes::CODE => "K64",
                UnitCodes::NAME => "pound (avoirdupois) per degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L69",
                UnitCodes::NAME => "tonne per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L87",
                UnitCodes::NAME => "ton short per degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M85",
                UnitCodes::NAME => "ton, assay",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the mass used in the mineralogy to determine the concentration of precious metals in ore according to the mass of the precious metal in milligrams in a sample of the mass of an assay sound (number of troy ounces in a short ton (1 000 lb))."
            ],
            [
                UnitCodes::CODE => "M86",
                UnitCodes::NAME => "pfund",
                UnitCodes::DESCRIPTION => "Outdated unit of the mass used in Germany."
            ],
            [
                UnitCodes::CODE => "KMQ",
                UnitCodes::NAME => "kilogram per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of weight expressed in kilograms of a substance that fills a volume of one cubic metre."
            ],
            [
                UnitCodes::CODE => "23",
                UnitCodes::NAME => "gram per cubic centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D41",
                UnitCodes::NAME => "tonne per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GJ",
                UnitCodes::NAME => "gram per millilitre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B35",
                UnitCodes::NAME => "kilogram per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GL",
                UnitCodes::NAME => "gram per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A93",
                UnitCodes::NAME => "gram per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GP",
                UnitCodes::NAME => "milligram per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B72",
                UnitCodes::NAME => "megagram per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B34",
                UnitCodes::NAME => "kilogram per cubic decimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H64",
                UnitCodes::NAME => "milligram per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H29",
                UnitCodes::NAME => "microgram per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M1",
                UnitCodes::NAME => "milligram per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GQ",
                UnitCodes::NAME => "microgram per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G11",
                UnitCodes::NAME => "gram per cubic centimetre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G33",
                UnitCodes::NAME => "gram per cubic centimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F23",
                UnitCodes::NAME => "gram per cubic decimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G12",
                UnitCodes::NAME => "gram per cubic decimetre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G34",
                UnitCodes::NAME => "gram per cubic decimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G14",
                UnitCodes::NAME => "gram per cubic metre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G36",
                UnitCodes::NAME => "gram per cubic metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G13",
                UnitCodes::NAME => "gram per litre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G35",
                UnitCodes::NAME => "gram per litre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G15",
                UnitCodes::NAME => "gram per millilitre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G37",
                UnitCodes::NAME => "gram per millilitre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G31",
                UnitCodes::NAME => "kilogram per cubic centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G16",
                UnitCodes::NAME => "kilogram per cubic centimetre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G38",
                UnitCodes::NAME => "kilogram per cubic centimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G18",
                UnitCodes::NAME => "kilogram per cubic metre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G40",
                UnitCodes::NAME => "kilogram per cubic metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H54",
                UnitCodes::NAME => "kilogram per cubic decimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H55",
                UnitCodes::NAME => "kilogram per cubic decimetre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F14",
                UnitCodes::NAME => "gram per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F15",
                UnitCodes::NAME => "kilogram per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F24",
                UnitCodes::NAME => "kilogram per kilomole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G17",
                UnitCodes::NAME => "kilogram per litre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G39",
                UnitCodes::NAME => "kilogram per litre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H53",
                UnitCodes::NAME => "kilogram per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F18",
                UnitCodes::NAME => "kilogram square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F19",
                UnitCodes::NAME => "kilogram square millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F74",
                UnitCodes::NAME => "gram per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F75",
                UnitCodes::NAME => "milligram per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F16",
                UnitCodes::NAME => "milligram per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M73",
                UnitCodes::NAME => "kilogram per cubic metre pascal",
                UnitCodes::DESCRIPTION => "SI base unit kilogram divided by the product of the power of the SI base unit metre with exponent 3 and the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "87",
                UnitCodes::NAME => "pound per cubic foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GE",
                UnitCodes::NAME => "pound per gallon (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "LA",
                UnitCodes::NAME => "pound per cubic inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G32",
                UnitCodes::NAME => "ounce (avoirdupois) per cubic yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J34",
                UnitCodes::NAME => "microgram per cubic metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J35",
                UnitCodes::NAME => "microgram per cubic metre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K41",
                UnitCodes::NAME => "grain per gallon (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K69",
                UnitCodes::NAME => "pound (avoirdupois) per cubic foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K70",
                UnitCodes::NAME => "pound (avoirdupois) per cubic foot psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K71",
                UnitCodes::NAME => "pound (avoirdupois) per gallon (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K75",
                UnitCodes::NAME => "pound (avoirdupois) per cubic inch degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K76",
                UnitCodes::NAME => "pound (avoirdupois) per cubic inch psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K84",
                UnitCodes::NAME => "pound per cubic yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L17",
                UnitCodes::NAME => "milligram per cubic metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L18",
                UnitCodes::NAME => "milligram per cubic metre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L37",
                UnitCodes::NAME => "ounce (avoirdupois) per gallon (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L38",
                UnitCodes::NAME => "ounce (avoirdupois) per gallon (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L39",
                UnitCodes::NAME => "ounce (avoirdupois) per cubic inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L65",
                UnitCodes::NAME => "slug per cubic foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L76",
                UnitCodes::NAME => "tonne per cubic metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L77",
                UnitCodes::NAME => "tonne per cubic metre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L92",
                UnitCodes::NAME => "ton (UK long) per cubic yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L93",
                UnitCodes::NAME => "ton (US short) per cubic yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K77",
                UnitCodes::NAME => "pound (avoirdupois) per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L70",
                UnitCodes::NAME => "tonne per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L91",
                UnitCodes::NAME => "ton short per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M74",
                UnitCodes::NAME => "kilogram per pascal",
                UnitCodes::DESCRIPTION => "SI base unit kilogram divided by the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => UnitCodes::UNIT,
                UnitCodes::NAME => "one",
                UnitCodes::DESCRIPTION => "Synonym => unit"
            ],
            [
                UnitCodes::CODE => "A39",
                UnitCodes::NAME => "cubic metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "22",
                UnitCodes::NAME => "decilitre per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H65",
                UnitCodes::NAME => "millilitre per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H83",
                UnitCodes::NAME => "litre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KX",
                UnitCodes::NAME => "millilitre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H15",
                UnitCodes::NAME => "square centimetre per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N28",
                UnitCodes::NAME => "cubic decimetre per kilogram",
                UnitCodes::DESCRIPTION => "0,001 fold of the power of the SI base unit meter by exponent 3 divided by the SI based unit kilogram."
            ],
            [
                UnitCodes::CODE => "N29",
                UnitCodes::NAME => "cubic foot per pound",
                UnitCodes::DESCRIPTION => "Power of the unit foot according to the Anglo-American and Imperial system of units by exponent 3 divided by the unit avoirdupois pound according to the avoirdupois unit system."
            ],
            [
                UnitCodes::CODE => "N30",
                UnitCodes::NAME => "cubic inch per pound",
                UnitCodes::DESCRIPTION => "Power of the unit inch according to the Anglo-American and Imperial system of units by exponent 3 divided by the avoirdupois pound according to the avoirdupois unit system ."
            ],
            [
                UnitCodes::CODE => "KL",
                UnitCodes::NAME => "kilogram per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GF",
                UnitCodes::NAME => "gram per metre (gram per 100 centimetres)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H76",
                UnitCodes::NAME => "gram per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KW",
                UnitCodes::NAME => "kilogram per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C12",
                UnitCodes::NAME => "milligram per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M31",
                UnitCodes::NAME => "kilogram per kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P2",
                UnitCodes::NAME => "pound per foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "PO",
                UnitCodes::NAME => "pound per inch of length",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M83",
                UnitCodes::NAME => "denier",
                UnitCodes::DESCRIPTION => "Traditional unit for the indication of the linear mass of textile fibers and yarns."
            ],
            [
                UnitCodes::CODE => "M84",
                UnitCodes::NAME => "pound per yard",
                UnitCodes::DESCRIPTION => "Unit for linear mass according to avoirdupois system of units."
            ],
            [
                UnitCodes::CODE => "GO",
                UnitCodes::NAME => "milligram per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "25",
                UnitCodes::NAME => "gram per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H63",
                UnitCodes::NAME => "milligram per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GM",
                UnitCodes::NAME => "gram per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "28",
                UnitCodes::NAME => "kilogram per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D5",
                UnitCodes::NAME => "kilogram per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "ON",
                UnitCodes::NAME => "ounce per square yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "37",
                UnitCodes::NAME => "ounce per square foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B31",
                UnitCodes::NAME => "kilogram metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M98",
                UnitCodes::NAME => "kilogram centimetre per second",
                UnitCodes::DESCRIPTION => "Product of the SI base unit kilogram and the 0,01-fold of the SI base unit metre divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "M99",
                UnitCodes::NAME => "gram centimetre per second",
                UnitCodes::DESCRIPTION => "Product of the 0,001-fold of the SI base unit kilogram and the 0,01-fold of the SI base unit metre divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "N10",
                UnitCodes::NAME => "pound foot per second",
                UnitCodes::DESCRIPTION => "Product of the avoirdupois pound according to the avoirdupois unit system and the unit foot according to the Anglo-American and Imperial system of units divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "N11",
                UnitCodes::NAME => "pound inch per second",
                UnitCodes::DESCRIPTION => "Product of the avoirdupois pound according to the avoirdupois unit system and the unit inch according to the Anglo-American and Imperial system of units divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "B33",
                UnitCodes::NAME => "kilogram metre squared per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B32",
                UnitCodes::NAME => "kilogram metre squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F20",
                UnitCodes::NAME => "pound inch squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K65",
                UnitCodes::NAME => "pound (avoirdupois) square foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "NEW",
                UnitCodes::NAME => "newton",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B73",
                UnitCodes::NAME => "meganewton",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B47",
                UnitCodes::NAME => "kilonewton",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C20",
                UnitCodes::NAME => "millinewton",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B92",
                UnitCodes::NAME => "micronewton",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DU",
                UnitCodes::NAME => "dyne",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C78",
                UnitCodes::NAME => "pound-force",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B37",
                UnitCodes::NAME => "kilogram-force",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B51",
                UnitCodes::NAME => "kilopond",
                UnitCodes::DESCRIPTION => "Synonym => kilogram-force"
            ],
            [
                UnitCodes::CODE => "L40",
                UnitCodes::NAME => "ounce (avoirdupois)-force",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L94",
                UnitCodes::NAME => "ton-force (US short)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M75",
                UnitCodes::NAME => "kilopound-force",
                UnitCodes::DESCRIPTION => "1000-fold of the unit of the force pound-force (lbf) according to the Anglo-American system of units with the relationship."
            ],
            [
                UnitCodes::CODE => "M76",
                UnitCodes::NAME => "poundal",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the power, which corresponds to a mass of a pound multiplied with the acceleration of a foot per square second."
            ],
            [
                UnitCodes::CODE => "M77",
                UnitCodes::NAME => "kilogram metre per second squared",
                UnitCodes::DESCRIPTION => "Product of the SI base unit kilogram and the SI base unit metre divided by the power of the SI base unit second by exponent 2."
            ],
            [
                UnitCodes::CODE => "M78",
                UnitCodes::NAME => "pond",
                UnitCodes::DESCRIPTION => "0,001-fold of the unit of the weight, defined as a mass of 1 kg which finds out about a weight strength from 1 kp by the gravitational force at sea level which corresponds to a strength of 9,806 65 newton."
            ],
            [
                UnitCodes::CODE => "F17",
                UnitCodes::NAME => "pound-force per foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F48",
                UnitCodes::NAME => "pound-force per inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C54",
                UnitCodes::NAME => "newton metre squared per kilogram squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "NU",
                UnitCodes::NAME => "newton metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H40",
                UnitCodes::NAME => "newton per ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B74",
                UnitCodes::NAME => "meganewton metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B48",
                UnitCodes::NAME => "kilonewton metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D83",
                UnitCodes::NAME => "millinewton metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B93",
                UnitCodes::NAME => "micronewton metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DN",
                UnitCodes::NAME => "decinewton metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J72",
                UnitCodes::NAME => "centinewton metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M94",
                UnitCodes::NAME => "kilogram metre",
                UnitCodes::DESCRIPTION => "Unit of imbalance as a product of the SI base unit kilogram and the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "F88",
                UnitCodes::NAME => "newton centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F90",
                UnitCodes::NAME => "newton metre per ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F89",
                UnitCodes::NAME => "newton metre per degree",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G19",
                UnitCodes::NAME => "newton metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F47",
                UnitCodes::NAME => "newton per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M93",
                UnitCodes::NAME => "newton metre per radian",
                UnitCodes::DESCRIPTION => "Product of the derived SI unit newton and the SI base unit metre divided by the unit radian."
            ],
            [
                UnitCodes::CODE => "H41",
                UnitCodes::NAME => "newton metre watt to the power minus 0,5",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B38",
                UnitCodes::NAME => "kilogram-force metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "IA",
                UnitCodes::NAME => "inch pound (pound inch)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4Q",
                UnitCodes::NAME => "ounce inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4R",
                UnitCodes::NAME => "ounce foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F22",
                UnitCodes::NAME => "pound-force foot per ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F21",
                UnitCodes::NAME => "pound-force inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G20",
                UnitCodes::NAME => "pound-force foot per pound",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J94",
                UnitCodes::NAME => "dyne centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L41",
                UnitCodes::NAME => "ounce (avoirdupois)-force inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M92",
                UnitCodes::NAME => "pound-force foot",
                UnitCodes::DESCRIPTION => "Product of the unit pound-force according to the Anglo-American system of units and the unit foot according to the Anglo-American and the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "M95",
                UnitCodes::NAME => "poundal foot",
                UnitCodes::DESCRIPTION => "Product of the non SI-conforming unit of the force poundal and the unit foot according to the Anglo-American and Imperial system of units ."
            ],
            [
                UnitCodes::CODE => "M96",
                UnitCodes::NAME => "poundal inch",
                UnitCodes::DESCRIPTION => "Product of the non SI-conforming unit of the force poundal and the unit inch according to the Anglo-American and Imperial system of units ."
            ],
            [
                UnitCodes::CODE => "M97",
                UnitCodes::NAME => "dyne metre",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of the rotational moment."
            ],
            [
                UnitCodes::CODE => "C57",
                UnitCodes::NAME => "newton second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C53",
                UnitCodes::NAME => "newton metre second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "74",
                UnitCodes::NAME => "millipascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MPA",
                UnitCodes::NAME => "megapascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "PAL",
                UnitCodes::NAME => "pascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KPA",
                UnitCodes::NAME => "kilopascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BAR",
                UnitCodes::NAME => "bar [unit of pressure]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HBA",
                UnitCodes::NAME => "hectobar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MBR",
                UnitCodes::NAME => "millibar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KBA",
                UnitCodes::NAME => "kilobar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "ATM",
                UnitCodes::NAME => "standard atmosphere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A89",
                UnitCodes::NAME => "gigapascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B96",
                UnitCodes::NAME => "micropascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A97",
                UnitCodes::NAME => "hectopascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H75",
                UnitCodes::NAME => "decapascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B85",
                UnitCodes::NAME => "microbar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C55",
                UnitCodes::NAME => "newton per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C56",
                UnitCodes::NAME => "newton per square millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H07",
                UnitCodes::NAME => "pascal second per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F94",
                UnitCodes::NAME => "hectopascal cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F93",
                UnitCodes::NAME => "hectopascal litre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F82",
                UnitCodes::NAME => "hectopascal per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F83",
                UnitCodes::NAME => "kilopascal per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F98",
                UnitCodes::NAME => "megapascal cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F97",
                UnitCodes::NAME => "megapascal litre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F85",
                UnitCodes::NAME => "megapascal per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H07",
                UnitCodes::NAME => "pascal second per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F96",
                UnitCodes::NAME => "millibar cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F95",
                UnitCodes::NAME => "millibar litre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F84",
                UnitCodes::NAME => "millibar per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G01",
                UnitCodes::NAME => "pascal cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F99",
                UnitCodes::NAME => "pascal litre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F77",
                UnitCodes::NAME => "pascal second per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F85",
                UnitCodes::NAME => "megapascal per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E01",
                UnitCodes::NAME => "newton per square centimetre",
                UnitCodes::DESCRIPTION => "A measure of pressure expressed in newtons per square centimetre."
            ],
            [
                UnitCodes::CODE => "FP",
                UnitCodes::NAME => "pound per square foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "PS",
                UnitCodes::NAME => "pound-force per square inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B40",
                UnitCodes::NAME => "kilogram-force per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "UA",
                UnitCodes::NAME => "torr",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "ATT",
                UnitCodes::NAME => "technical atmosphere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "80",
                UnitCodes::NAME => "pound per square inch absolute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H78",
                UnitCodes::NAME => "conventional centimetre of water",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HP",
                UnitCodes::NAME => "conventional millimetre of water",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HN",
                UnitCodes::NAME => "conventional millimetre of mercury",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F79",
                UnitCodes::NAME => "inch of mercury",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F78",
                UnitCodes::NAME => "inch of water",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J89",
                UnitCodes::NAME => "centimetre of mercury",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K24",
                UnitCodes::NAME => "foot of water",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K25",
                UnitCodes::NAME => "foot of mercury",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K31",
                UnitCodes::NAME => "gram-force per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E42",
                UnitCodes::NAME => "kilogram-force per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E41",
                UnitCodes::NAME => "kilogram-force per square millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K85",
                UnitCodes::NAME => "pound-force per square foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K86",
                UnitCodes::NAME => "pound-force per square inch degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "84",
                UnitCodes::NAME => "A unit of pressure defining the number of kilopounds force per square inch.",
                UnitCodes::DESCRIPTION => "A unit of pressure defining the number of kilopounds force per square inch."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "Use kip per square inch (common code N20).",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N13",
                UnitCodes::NAME => "centimetre of mercury (0 ºC)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure, at which a value of 1 cmHg meets the static pressure, which is generated by a mercury at a temperature of 0 °C with a height of 1 centimetre ."
            ],
            [
                UnitCodes::CODE => "N14",
                UnitCodes::NAME => "centimetre of water (4 ºC)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure, at which a value of 1 cmH2O meets the static pressure, which is generated by a head of water at a temperature of 4 °C with a height of 1 centimetre ."
            ],
            [
                UnitCodes::CODE => "N15",
                UnitCodes::NAME => "foot of water (39.2 ºF)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure according to the Anglo-American and Imperial system for units, whereas the value of 1 ftH2O is equivalent to the static pressure, which is generated by a head of water at a temperature 39,2°F with a height of 1 foot ."
            ],
            [
                UnitCodes::CODE => "N16",
                UnitCodes::NAME => "inch of mercury (32 ºF)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure according to the Anglo-American and Imperial system for units, whereas the value of 1 inHg meets the static pressure, which is generated by a mercury at a temperature of 32°F with a height of 1 inch."
            ],
            [
                UnitCodes::CODE => "N17",
                UnitCodes::NAME => "inch of mercury (60 ºF)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure according to the Anglo-American and Imperial system for units, whereas the value of 1 inHg meets the static pressure, which is generated by a mercury at a temperature of 60°F with a height of 1 inch."
            ],
            [
                UnitCodes::CODE => "N18",
                UnitCodes::NAME => "inch of water (39.2 ºF)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure according to the Anglo-American and Imperial system for units, whereas the value of 1 inH2O meets the static pressure, which is generated by a head of water at a temperature of 39,2°F with a height of 1 inch ."
            ],
            [
                UnitCodes::CODE => "N19",
                UnitCodes::NAME => "inch of water (60 ºF)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure according to the Anglo-American and Imperial system for units, whereas the value of 1 inH2O meets the static pressure, which is generated by a head of water at a temperature of 60°F with a height of 1 inch ."
            ],
            [
                UnitCodes::CODE => "N20",
                UnitCodes::NAME => "kip per square inch",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the pressure according to the Anglo-American system of units as the 1000-fold of the unit of the force pound-force divided by the power of the unit inch by exponent 2."
            ],
            [
                UnitCodes::CODE => "N21",
                UnitCodes::NAME => "poundal per square foot",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of pressure by the Imperial system of units according to NIST => 1 pdl/ft² = 1,488 164 Pa."
            ],
            [
                UnitCodes::CODE => "N22",
                UnitCodes::NAME => "ounce (avoirdupois) per square inch",
                UnitCodes::DESCRIPTION => "Unit of the surface specific mass (avoirdupois ounce according to the avoirdupois system of units according to the surface square inch according to the Anglo-American and Imperial system of units)."
            ],
            [
                UnitCodes::CODE => "N23",
                UnitCodes::NAME => "conventional metre of water",
                UnitCodes::DESCRIPTION => "Not SI-conforming unit of pressure, whereas a value of 1 mH2O is equivalent to the static pressure, which is produced by one metre high water column ."
            ],
            [
                UnitCodes::CODE => "N24",
                UnitCodes::NAME => "gram per square millimetre",
                UnitCodes::DESCRIPTION => "0,001-fold of the SI base unit kilogram divided by the 0.000 001-fold of the power of the SI base unit meter by exponent 2."
            ],
            [
                UnitCodes::CODE => "N25",
                UnitCodes::NAME => "pound per square yard",
                UnitCodes::DESCRIPTION => "Unit for areal-related mass as a unit pound according to the avoirdupois unit system divided by the power of the unit yard according to the Anglo-American and Imperial system of units with exponent 2."
            ],
            [
                UnitCodes::CODE => "N26",
                UnitCodes::NAME => "poundal per square inch",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the pressure according to the Imperial system of units (poundal by square inch)."
            ],
            [
                UnitCodes::CODE => "E99",
                UnitCodes::NAME => "hectopascal per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F05",
                UnitCodes::NAME => "megapascal per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F04",
                UnitCodes::NAME => "millibar per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F07",
                UnitCodes::NAME => "pascal per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F03",
                UnitCodes::NAME => "kilopascal per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L52",
                UnitCodes::NAME => "psi per psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J56",
                UnitCodes::NAME => "bar per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C96",
                UnitCodes::NAME => "reciprocal pascal or pascal to the power minus one",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F58",
                UnitCodes::NAME => "reciprocal bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B83",
                UnitCodes::NAME => "metre to the fourth power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G77",
                UnitCodes::NAME => "millimetre to the fourth power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D69",
                UnitCodes::NAME => "inch to the fourth power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N27",
                UnitCodes::NAME => "foot to the fourth power",
                UnitCodes::DESCRIPTION => "Power of the unit foot according to the Anglo-American and Imperial system of units by exponent 4 according to NIST => 1 ft4 = 8,630 975 m4."
            ],
            [
                UnitCodes::CODE => "MTQ",
                UnitCodes::NAME => "cubic metre",
                UnitCodes::DESCRIPTION => "Synonym => metre cubed"
            ],
            [
                UnitCodes::CODE => "INQ",
                UnitCodes::NAME => "cubic inch",
                UnitCodes::DESCRIPTION => "Synonym => inch cubed"
            ],
            [
                UnitCodes::CODE => "C65",
                UnitCodes::NAME => "pascal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N37",
                UnitCodes::NAME => "kilogram per metre second",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity as a quotient SI base unit kilogram divided by the SI base unit metre and by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "N38",
                UnitCodes::NAME => "kilogram per metre minute",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity as a quotient SI base unit kilogram divided by the SI base unit metre and by the unit minute."
            ],
            [
                UnitCodes::CODE => "C24",
                UnitCodes::NAME => "millipascal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N36",
                UnitCodes::NAME => "newton second per square metre",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity as a product of unit of the pressure (newton by square metre) multiplied with the SI base unit second."
            ],
            [
                UnitCodes::CODE => "N39",
                UnitCodes::NAME => "kilogram per metre day",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity as a quotient SI base unit kilogram divided by the SI base unit metre and by the unit day."
            ],
            [
                UnitCodes::CODE => "N40",
                UnitCodes::NAME => "kilogram per metre hour",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity as a quotient SI base unit kilogram divided by the SI base unit metre and by the unit hour."
            ],
            [
                UnitCodes::CODE => "N41",
                UnitCodes::NAME => "gram per centimetre second",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity as a quotient of the 0,001-fold of the SI base unit kilogram divided by the 0,01-fold of the SI base unit metre and SI base unit second."
            ],
            [
                UnitCodes::CODE => "89",
                UnitCodes::NAME => "poise",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C7",
                UnitCodes::NAME => "centipoise",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F06",
                UnitCodes::NAME => "poise per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F86",
                UnitCodes::NAME => "poise per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J32",
                UnitCodes::NAME => "micropoise",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J73",
                UnitCodes::NAME => "centipoise per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J74",
                UnitCodes::NAME => "centipoise per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K67",
                UnitCodes::NAME => "pound per foot hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K68",
                UnitCodes::NAME => "pound per foot second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K91",
                UnitCodes::NAME => "pound-force second per square foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K92",
                UnitCodes::NAME => "pound-force second per square inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L15",
                UnitCodes::NAME => "millipascal second per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L16",
                UnitCodes::NAME => "millipascal second per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L64",
                UnitCodes::NAME => "slug per foot second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N34",
                UnitCodes::NAME => "poundal second per square foot",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of viscosity."
            ],
            [
                UnitCodes::CODE => "N35",
                UnitCodes::NAME => "poise per pascal",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit poise divided by the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "N42",
                UnitCodes::NAME => "poundal second per square inch",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of dynamic viscosity according to the Imperial system of units as product unit of the pressure (poundal by square inch) multiplied by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "N43",
                UnitCodes::NAME => "pound per foot minute",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity according to the Anglo-American unit system."
            ],
            [
                UnitCodes::CODE => "N44",
                UnitCodes::NAME => "pound per foot day",
                UnitCodes::DESCRIPTION => "Unit of the dynamic viscosity according to the Anglo-American unit system."
            ],
            [
                UnitCodes::CODE => "S4",
                UnitCodes::NAME => "square metre per second",
                UnitCodes::DESCRIPTION => "Synonym => metre squared per second (square metres/second US)"
            ],
            [
                UnitCodes::CODE => "M82",
                UnitCodes::NAME => "square metre per second pascal",
                UnitCodes::DESCRIPTION => "Power of the SI base unit metre with the exponent 2 divided by the SI base unit second and the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "C17",
                UnitCodes::NAME => "millimetre squared per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G41",
                UnitCodes::NAME => "square metre per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G09",
                UnitCodes::NAME => "square metre per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "91",
                UnitCodes::NAME => "stokes",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4C",
                UnitCodes::NAME => "centistokes",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G46",
                UnitCodes::NAME => "stokes per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G10",
                UnitCodes::NAME => "stokes per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "S3",
                UnitCodes::NAME => "square foot per second",
                UnitCodes::DESCRIPTION => "Synonym => foot squared per second"
            ],
            [
                UnitCodes::CODE => "G08",
                UnitCodes::NAME => "square inch per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M79",
                UnitCodes::NAME => "square foot per hour",
                UnitCodes::DESCRIPTION => "Power of the unit foot according to the Anglo-American and Imperial system of units by exponent 2 divided by the unit of time hour."
            ],
            [
                UnitCodes::CODE => "M80",
                UnitCodes::NAME => "stokes per pascal",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit stokes divided by the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "M81",
                UnitCodes::NAME => "square centimetre per second",
                UnitCodes::DESCRIPTION => "0,000 1-fold of the power of the SI base unit metre by exponent 2 divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "4P",
                UnitCodes::NAME => "newton per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C22",
                UnitCodes::NAME => "millinewton per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M23",
                UnitCodes::NAME => "newton per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N31",
                UnitCodes::NAME => "kilonewton per metre",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit newton divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "DX",
                UnitCodes::NAME => "dyne per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N32",
                UnitCodes::NAME => "poundal per inch",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the surface tension according to the Imperial unit system as quotient poundal by inch."
            ],
            [
                UnitCodes::CODE => "N33",
                UnitCodes::NAME => "pound-force per yard",
                UnitCodes::DESCRIPTION => "Unit of force per unit length based on the Anglo-American system of units."
            ],
            [
                UnitCodes::CODE => "M34",
                UnitCodes::NAME => "newton metre per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KJO",
                UnitCodes::NAME => "kilojoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A68",
                UnitCodes::NAME => "exajoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C68",
                UnitCodes::NAME => "petajoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D30",
                UnitCodes::NAME => "terajoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GV",
                UnitCodes::NAME => "gigajoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "3B",
                UnitCodes::NAME => "megajoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C15",
                UnitCodes::NAME => "millijoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A70",
                UnitCodes::NAME => "femtojoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A13",
                UnitCodes::NAME => "attojoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WHR",
                UnitCodes::NAME => "watt hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MWH",
                UnitCodes::NAME => "megawatt hour (1000 kW.h)",
                UnitCodes::DESCRIPTION => "A unit of power defining the total amount of bulk energy transferred or consumed."
            ],
            [
                UnitCodes::CODE => "KWH",
                UnitCodes::NAME => "kilowatt hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GWH",
                UnitCodes::NAME => "gigawatt hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D32",
                UnitCodes::NAME => "terawatt hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A53",
                UnitCodes::NAME => "electronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B71",
                UnitCodes::NAME => "megaelectronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A85",
                UnitCodes::NAME => "gigaelectronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B29",
                UnitCodes::NAME => "kiloelectronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A57",
                UnitCodes::NAME => "erg",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "85",
                UnitCodes::NAME => "foot pound-force",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B38",
                UnitCodes::NAME => "kilogram-force metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N46",
                UnitCodes::NAME => "foot poundal",
                UnitCodes::DESCRIPTION => "Unit of the work (force-path)."
            ],
            [
                UnitCodes::CODE => "N47",
                UnitCodes::NAME => "inch poundal",
                UnitCodes::DESCRIPTION => "Unit of work (force multiplied by path) according to the Imperial system of units as a product unit inch multiplied by poundal."
            ],
            [
                UnitCodes::CODE => "G20",
                UnitCodes::NAME => "pound-force foot per pound",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WTT",
                UnitCodes::NAME => "watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KWT",
                UnitCodes::NAME => "kilowatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MAW",
                UnitCodes::NAME => "megawatt",
                UnitCodes::DESCRIPTION => "A unit of power defining the rate of energy transferred or consumed when a current of 1000 amperes flows due to a potential of 1000 volts at unity power factor."
            ],
            [
                UnitCodes::CODE => "A90",
                UnitCodes::NAME => "gigawatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C31",
                UnitCodes::NAME => "milliwatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D80",
                UnitCodes::NAME => "microwatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F80",
                UnitCodes::NAME => "water horse power",
                UnitCodes::DESCRIPTION => "A unit of power defining the amount of power required to move a given volume of water against acceleration of gravity to a specified elevation (pressure head)."
            ],
            [
                UnitCodes::CODE => "A63",
                UnitCodes::NAME => "erg per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A74",
                UnitCodes::NAME => "foot pound-force per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B39",
                UnitCodes::NAME => "kilogram-force metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HJ",
                UnitCodes::NAME => "metric horse power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A25",
                UnitCodes::NAME => "cheval vapeur",
                UnitCodes::DESCRIPTION => "Synonym => metric horse power"
            ],
            [
                UnitCodes::CODE => "BHP",
                UnitCodes::NAME => "brake horse power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K15",
                UnitCodes::NAME => "foot pound-force per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K16",
                UnitCodes::NAME => "foot pound-force per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K42",
                UnitCodes::NAME => "horsepower (boiler)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N12",
                UnitCodes::NAME => "Pferdestaerke",
                UnitCodes::DESCRIPTION => "Obsolete unit of the power relating to DIN 1301-3 =>1979 => 1 PS = 735,498 75 W."
            ],
            [
                UnitCodes::CODE => "KGS",
                UnitCodes::NAME => "kilogram per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H56",
                UnitCodes::NAME => "kilogram per square metre second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M87",
                UnitCodes::NAME => "kilogram per second pascal",
                UnitCodes::DESCRIPTION => "SI base unit kilogram divided by the product of the SI base unit second and the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "4M",
                UnitCodes::NAME => "milligram per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F26",
                UnitCodes::NAME => "gram per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F62",
                UnitCodes::NAME => "gram per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F35",
                UnitCodes::NAME => "gram per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F27",
                UnitCodes::NAME => "gram per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F63",
                UnitCodes::NAME => "gram per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F36",
                UnitCodes::NAME => "gram per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F28",
                UnitCodes::NAME => "gram per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F64",
                UnitCodes::NAME => "gram per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F37",
                UnitCodes::NAME => "gram per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F29",
                UnitCodes::NAME => "gram per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F65",
                UnitCodes::NAME => "gram per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F38",
                UnitCodes::NAME => "gram per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F30",
                UnitCodes::NAME => "kilogram per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F66",
                UnitCodes::NAME => "kilogram per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F39",
                UnitCodes::NAME => "kilogram per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E93",
                UnitCodes::NAME => "kilogram per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F67",
                UnitCodes::NAME => "kilogram per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F40",
                UnitCodes::NAME => "kilogram per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F31",
                UnitCodes::NAME => "kilogram per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F68",
                UnitCodes::NAME => "kilogram per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F41",
                UnitCodes::NAME => "kilogram per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F69",
                UnitCodes::NAME => "kilogram per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F42",
                UnitCodes::NAME => "kilogram per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F32",
                UnitCodes::NAME => "milligram per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F70",
                UnitCodes::NAME => "milligram per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F43",
                UnitCodes::NAME => "milligram per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F71",
                UnitCodes::NAME => "milligram per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F44",
                UnitCodes::NAME => "milligram per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F33",
                UnitCodes::NAME => "milligram per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F72",
                UnitCodes::NAME => "milligram per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F45",
                UnitCodes::NAME => "milligram per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F34",
                UnitCodes::NAME => "milligram per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F73",
                UnitCodes::NAME => "milligram per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F46",
                UnitCodes::NAME => "milligram per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F25",
                UnitCodes::NAME => "gram per hertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4W",
                UnitCodes::NAME => "ton (US) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4U",
                UnitCodes::NAME => "pound per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K66",
                UnitCodes::NAME => "pound (avoirdupois) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K73",
                UnitCodes::NAME => "pound (avoirdupois) per hour degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K74",
                UnitCodes::NAME => "pound (avoirdupois) per hour psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K78",
                UnitCodes::NAME => "pound (avoirdupois) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K79",
                UnitCodes::NAME => "pound (avoirdupois) per minute degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K80",
                UnitCodes::NAME => "pound (avoirdupois) per minute psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K81",
                UnitCodes::NAME => "pound (avoirdupois) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K82",
                UnitCodes::NAME => "pound (avoirdupois) per second degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K83",
                UnitCodes::NAME => "pound (avoirdupois) per second psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L33",
                UnitCodes::NAME => "ounce (avoirdupois) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L34",
                UnitCodes::NAME => "ounce (avoirdupois) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L35",
                UnitCodes::NAME => "ounce (avoirdupois) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L36",
                UnitCodes::NAME => "ounce (avoirdupois) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L63",
                UnitCodes::NAME => "slug per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L66",
                UnitCodes::NAME => "slug per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L67",
                UnitCodes::NAME => "slug per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L68",
                UnitCodes::NAME => "slug per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L71",
                UnitCodes::NAME => "tonne per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L72",
                UnitCodes::NAME => "tonne per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L73",
                UnitCodes::NAME => "tonne per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E18",
                UnitCodes::NAME => "tonne per hour",
                UnitCodes::DESCRIPTION => "A unit of weight or mass equal to one tonne per hour."
            ],
            [
                UnitCodes::CODE => "L74",
                UnitCodes::NAME => "tonne per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L75",
                UnitCodes::NAME => "tonne per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L78",
                UnitCodes::NAME => "tonne per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L79",
                UnitCodes::NAME => "tonne per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L80",
                UnitCodes::NAME => "tonne per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L81",
                UnitCodes::NAME => "tonne per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L82",
                UnitCodes::NAME => "tonne per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L83",
                UnitCodes::NAME => "tonne per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L85",
                UnitCodes::NAME => "ton long per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L88",
                UnitCodes::NAME => "ton short per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L89",
                UnitCodes::NAME => "ton short per hour degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L90",
                UnitCodes::NAME => "ton short per hour psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M88",
                UnitCodes::NAME => "tonne per month",
                UnitCodes::DESCRIPTION => "Unit tonne divided by the unit month."
            ],
            [
                UnitCodes::CODE => "M89",
                UnitCodes::NAME => "tonne per year",
                UnitCodes::DESCRIPTION => "Unit tonne divided by the unit year with 365 days."
            ],
            [
                UnitCodes::CODE => "M90",
                UnitCodes::NAME => "kilopound per hour",
                UnitCodes::DESCRIPTION => "1000-fold of the unit of the mass avoirdupois pound according to the avoirdupois unit system divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "J33",
                UnitCodes::NAME => "microgram per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L32",
                UnitCodes::NAME => "nanogram per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "NA",
                UnitCodes::NAME => "milligram per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M29",
                UnitCodes::NAME => "kilogram per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M91",
                UnitCodes::NAME => "pound per pound",
                UnitCodes::DESCRIPTION => "Proportion of the mass consisting of the avoirdupois pound according to the avoirdupois unit system divided by the avoirdupois pound according to the avoirdupois unit system."
            ],
            [
                UnitCodes::CODE => "MQS",
                UnitCodes::NAME => "cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MQH",
                UnitCodes::NAME => "cubic metre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "40",
                UnitCodes::NAME => "millilitre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "41",
                UnitCodes::NAME => "millilitre per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "LD",
                UnitCodes::NAME => "litre per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2J",
                UnitCodes::NAME => "cubic centimetre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4X",
                UnitCodes::NAME => "kilolitre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L2",
                UnitCodes::NAME => "litre per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G47",
                UnitCodes::NAME => "cubic centimetre per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G78",
                UnitCodes::NAME => "cubic centimetre per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G61",
                UnitCodes::NAME => "cubic centimetre per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G48",
                UnitCodes::NAME => "cubic centimetre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G79",
                UnitCodes::NAME => "cubic centimetre per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G62",
                UnitCodes::NAME => "cubic centimetre per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G49",
                UnitCodes::NAME => "cubic centimetre per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G80",
                UnitCodes::NAME => "cubic centimetre per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G63",
                UnitCodes::NAME => "cubic centimetre per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G81",
                UnitCodes::NAME => "cubic centimetre per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G64",
                UnitCodes::NAME => "cubic centimetre per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E92",
                UnitCodes::NAME => "cubic decimetre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G52",
                UnitCodes::NAME => "cubic metre per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G86",
                UnitCodes::NAME => "cubic metre per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G69",
                UnitCodes::NAME => "cubic metre per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G87",
                UnitCodes::NAME => "cubic metre per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G70",
                UnitCodes::NAME => "cubic metre per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G53",
                UnitCodes::NAME => "cubic metre per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G88",
                UnitCodes::NAME => "cubic metre per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G71",
                UnitCodes::NAME => "cubic metre per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G89",
                UnitCodes::NAME => "cubic metre per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G72",
                UnitCodes::NAME => "cubic metre per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G82",
                UnitCodes::NAME => "litre per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G65",
                UnitCodes::NAME => "litre per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G83",
                UnitCodes::NAME => "litre per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G66",
                UnitCodes::NAME => "litre per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G84",
                UnitCodes::NAME => "litre per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G67",
                UnitCodes::NAME => "litre per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G51",
                UnitCodes::NAME => "litre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G85",
                UnitCodes::NAME => "litre per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G68",
                UnitCodes::NAME => "litre per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G54",
                UnitCodes::NAME => "millilitre per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G90",
                UnitCodes::NAME => "millilitre per day bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G73",
                UnitCodes::NAME => "millilitre per day kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G55",
                UnitCodes::NAME => "millilitre per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G91",
                UnitCodes::NAME => "millilitre per hour bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G74",
                UnitCodes::NAME => "millilitre per hour kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G92",
                UnitCodes::NAME => "millilitre per minute bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G75",
                UnitCodes::NAME => "millilitre per minute kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G93",
                UnitCodes::NAME => "millilitre per second bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G76",
                UnitCodes::NAME => "millilitre per second kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2K",
                UnitCodes::NAME => "cubic foot per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2L",
                UnitCodes::NAME => "cubic foot per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "5A",
                UnitCodes::NAME => "barrel (US) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G2",
                UnitCodes::NAME => "US gallon per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G3",
                UnitCodes::NAME => "Imperial gallon per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G56",
                UnitCodes::NAME => "cubic inch per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G57",
                UnitCodes::NAME => "cubic inch per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G58",
                UnitCodes::NAME => "cubic inch per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G50",
                UnitCodes::NAME => "gallon (US) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J58",
                UnitCodes::NAME => "barrel (UK petroleum) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J59",
                UnitCodes::NAME => "barrel (UK petroleum) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J60",
                UnitCodes::NAME => "barrel (UK petroleum) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J61",
                UnitCodes::NAME => "barrel (UK petroleum) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J62",
                UnitCodes::NAME => "barrel (US petroleum) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J63",
                UnitCodes::NAME => "barrel (US petroleum) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J64",
                UnitCodes::NAME => "bushel (UK) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J65",
                UnitCodes::NAME => "bushel (UK) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J66",
                UnitCodes::NAME => "bushel (UK) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J67",
                UnitCodes::NAME => "bushel (UK) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J68",
                UnitCodes::NAME => "bushel (US dry) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J69",
                UnitCodes::NAME => "bushel (US dry) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J70",
                UnitCodes::NAME => "bushel (US dry) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J71",
                UnitCodes::NAME => "bushel (US dry) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J90",
                UnitCodes::NAME => "cubic decimetre per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J92",
                UnitCodes::NAME => "cubic decimetre per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J93",
                UnitCodes::NAME => "cubic decimetre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N45",
                UnitCodes::NAME => "cubic metre per second pascal",
                UnitCodes::DESCRIPTION => "Power of the SI base unit meter by exponent 3 divided by the product of the SI base unit second and the derived SI base unit pascal."
            ],
            [
                UnitCodes::CODE => "J95",
                UnitCodes::NAME => "ounce (UK fluid) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J96",
                UnitCodes::NAME => "ounce (UK fluid) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J97",
                UnitCodes::NAME => "ounce (UK fluid) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J98",
                UnitCodes::NAME => "ounce (UK fluid) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J99",
                UnitCodes::NAME => "ounce (US fluid) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K10",
                UnitCodes::NAME => "ounce (US fluid) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K11",
                UnitCodes::NAME => "ounce (US fluid) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K12",
                UnitCodes::NAME => "ounce (US fluid) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K22",
                UnitCodes::NAME => "cubic foot per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K26",
                UnitCodes::NAME => "gallon (UK) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K27",
                UnitCodes::NAME => "gallon (UK) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K28",
                UnitCodes::NAME => "gallon (UK) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K30",
                UnitCodes::NAME => "gallon (US liquid) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K32",
                UnitCodes::NAME => "gill (UK) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K33",
                UnitCodes::NAME => "gill (UK) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K34",
                UnitCodes::NAME => "gill (UK) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K35",
                UnitCodes::NAME => "gill (UK) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K36",
                UnitCodes::NAME => "gill (US) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K37",
                UnitCodes::NAME => "gill (US) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K38",
                UnitCodes::NAME => "gill (US) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K39",
                UnitCodes::NAME => "gill (US) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K94",
                UnitCodes::NAME => "quart (UK liquid) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K95",
                UnitCodes::NAME => "quart (UK liquid) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K96",
                UnitCodes::NAME => "quart (UK liquid) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K97",
                UnitCodes::NAME => "quart (UK liquid) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K98",
                UnitCodes::NAME => "quart (US liquid) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K99",
                UnitCodes::NAME => "quart (US liquid) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L10",
                UnitCodes::NAME => "quart (US liquid) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L11",
                UnitCodes::NAME => "quart (US liquid) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L44",
                UnitCodes::NAME => "peck (UK) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L45",
                UnitCodes::NAME => "peck (UK) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L46",
                UnitCodes::NAME => "peck (UK) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L47",
                UnitCodes::NAME => "peck (UK) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L48",
                UnitCodes::NAME => "peck (US dry) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L49",
                UnitCodes::NAME => "peck (US dry) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L50",
                UnitCodes::NAME => "peck (US dry) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L51",
                UnitCodes::NAME => "peck (US dry) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L53",
                UnitCodes::NAME => "pint (UK) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L54",
                UnitCodes::NAME => "pint (UK) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L55",
                UnitCodes::NAME => "pint (UK) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L56",
                UnitCodes::NAME => "pint (UK) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L57",
                UnitCodes::NAME => "pint (US liquid) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L58",
                UnitCodes::NAME => "pint (US liquid) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L59",
                UnitCodes::NAME => "pint (US liquid) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L60",
                UnitCodes::NAME => "pint (US liquid) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M12",
                UnitCodes::NAME => "cubic yard per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M13",
                UnitCodes::NAME => "cubic yard per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M15",
                UnitCodes::NAME => "cubic yard per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M16",
                UnitCodes::NAME => "cubic yard per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H60",
                UnitCodes::NAME => "cubic metre per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F92",
                UnitCodes::NAME => "bar cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F91",
                UnitCodes::NAME => "bar litre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K87",
                UnitCodes::NAME => "psi cubic inch per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K88",
                UnitCodes::NAME => "psi litre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K89",
                UnitCodes::NAME => "psi cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K90",
                UnitCodes::NAME => "psi cubic yard per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "Q29",
                UnitCodes::NAME => "microgram per hectogram",
                UnitCodes::DESCRIPTION => "Microgram per hectogram."
            ],
            [
                UnitCodes::CODE => "Q37",
                UnitCodes::NAME => "Standard cubic metre per day",
                UnitCodes::DESCRIPTION => "Standard cubic metre (temperature 15°C and pressure 101325 millibars ) per day"
            ],
            [
                UnitCodes::CODE => "Q38",
                UnitCodes::NAME => "Standard cubic metre per hour",
                UnitCodes::DESCRIPTION => "Standard cubic metre (temperature 15°C and pressure 101325 millibars ) per hour"
            ],
            [
                UnitCodes::CODE => "Q39",
                UnitCodes::NAME => "Normalized cubic metre per day",
                UnitCodes::DESCRIPTION => "Normalized cubic metre (temperature 0°C and pressure 101325 millibars ) per day"
            ],
            [
                UnitCodes::CODE => "Q40",
                UnitCodes::NAME => "Normalized cubic metre per hour",
                UnitCodes::DESCRIPTION => "Normalized cubic metre (temperature 0°C and pressure 101325 millibars ) per hour"
            ],
            [
                UnitCodes::CODE => "KWN",
                UnitCodes::NAME => "Kilowatt hour per normalized cubic metre",
                UnitCodes::DESCRIPTION => "Kilowatt hour per normalized cubic metre (temperature 0°C and pressure 101325 millibars )."
            ],
            [
                UnitCodes::CODE => "KWS",
                UnitCodes::NAME => "Kilowatt hour per standard cubic metre",
                UnitCodes::DESCRIPTION => "Kilowatt hour per standard cubic metre (temperature 15°C and pressure 101325 millibars)."
            ],
            [
                UnitCodes::CODE => "Q41",
                UnitCodes::NAME => "Joule per normalised cubic metre",
                UnitCodes::DESCRIPTION => "Joule per normalised cubic metre (temperature 0°C and pressure 101325 millibars)."
            ],
            [
                UnitCodes::CODE => "Q42",
                UnitCodes::NAME => "Joule per standard cubic metre",
                UnitCodes::DESCRIPTION => "Joule per standard cubic metre (temperature 15°C and pressure 101325 millibars)."
            ],
            [
                UnitCodes::CODE => "MNJ",
                UnitCodes::NAME => "Mega Joule per Normalised cubic Metre",
                UnitCodes::DESCRIPTION => "Energy in Mega Joules per normalised cubic metre for gas (temperature 0°C and pressure 101325 millibars)"
            ],
            [
                UnitCodes::CODE => "KEL",
                UnitCodes::NAME => "kelvin",
                UnitCodes::DESCRIPTION => "Refer ISO 80000-5 (Quantities and units — Part 5 => Thermodynamics)"
            ],
            [
                UnitCodes::CODE => "CEL",
                UnitCodes::NAME => "degree Celsius",
                UnitCodes::DESCRIPTION => "Refer ISO 80000-5 (Quantities and units — Part 5 => Thermodynamics)"
            ],
            [
                UnitCodes::CODE => "H12",
                UnitCodes::NAME => "degree Celsius per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F60",
                UnitCodes::NAME => "degree Celsius per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E98",
                UnitCodes::NAME => "degree Celsius per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H13",
                UnitCodes::NAME => "degree Celsius per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H14",
                UnitCodes::NAME => "degree Celsius per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F61",
                UnitCodes::NAME => "kelvin per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F10",
                UnitCodes::NAME => "kelvin per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F02",
                UnitCodes::NAME => "kelvin per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F11",
                UnitCodes::NAME => "kelvin per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F12",
                UnitCodes::NAME => "kelvin per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N79",
                UnitCodes::NAME => "kelvin per pascal",
                UnitCodes::DESCRIPTION => "SI base unit kelvin divided by the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "J20",
                UnitCodes::NAME => "degree Fahrenheit per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J21",
                UnitCodes::NAME => "degree Fahrenheit per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J26",
                UnitCodes::NAME => "reciprocal degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A48",
                UnitCodes::NAME => "degree Rankine",
                UnitCodes::DESCRIPTION => "Refer ISO 80000-5 (Quantities and units — Part 5 => Thermodynamics)"
            ],
            [
                UnitCodes::CODE => "FAH",
                UnitCodes::NAME => "degree Fahrenheit",
                UnitCodes::DESCRIPTION => "Refer ISO 80000-5 (Quantities and units — Part 5 => Thermodynamics)"
            ],
            [
                UnitCodes::CODE => "J23",
                UnitCodes::NAME => "degree Fahrenheit per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J24",
                UnitCodes::NAME => "degree Fahrenheit per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J25",
                UnitCodes::NAME => "degree Fahrenheit per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J28",
                UnitCodes::NAME => "degree Rankine per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J29",
                UnitCodes::NAME => "degree Rankine per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J30",
                UnitCodes::NAME => "degree Rankine per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C91",
                UnitCodes::NAME => "reciprocal kelvin or kelvin to the power minus one",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M20",
                UnitCodes::NAME => "reciprocal megakelvin or megakelvin to the power minus one",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C64",
                UnitCodes::NAME => "pascal per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F81",
                UnitCodes::NAME => "bar per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C96",
                UnitCodes::NAME => "reciprocal pascal or pascal to the power minus one",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J55",
                UnitCodes::NAME => "watt second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BTU",
                UnitCodes::NAME => "British thermal unit (international table)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A1",
                UnitCodes::NAME => "15 °C calorie",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D70",
                UnitCodes::NAME => "calorie (international table)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J39",
                UnitCodes::NAME => "British thermal unit (mean)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J75",
                UnitCodes::NAME => "calorie (mean)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K51",
                UnitCodes::NAME => "kilocalorie (mean)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E14",
                UnitCodes::NAME => "kilocalorie (international table)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K53",
                UnitCodes::NAME => "kilocalorie (thermochemical)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N66",
                UnitCodes::NAME => "British thermal unit (39 ºF)",
                UnitCodes::DESCRIPTION => "Unit of heat energy according to the Imperial system of units in a reference temperature of 39 °F."
            ],
            [
                UnitCodes::CODE => "N67",
                UnitCodes::NAME => "British thermal unit (59 ºF)",
                UnitCodes::DESCRIPTION => "Unit of heat energy according to the Imperial system of units in a reference temperature of 59 °F."
            ],
            [
                UnitCodes::CODE => "N68",
                UnitCodes::NAME => "British thermal unit (60 ºF)",
                UnitCodes::DESCRIPTION => "Unit of head energy according to the Imperial system of units at a reference temperature of 60 °F."
            ],
            [
                UnitCodes::CODE => "N69",
                UnitCodes::NAME => "calorie (20 ºC)",
                UnitCodes::DESCRIPTION => "Unit for quantity of heat, which is to be required for 1 g air free water at a constant pressure from 101,325 kPa, to warm up the pressure of standard atmosphere at sea level, from 19,5 °C on 20,5 °C."
            ],
            [
                UnitCodes::CODE => "N70",
                UnitCodes::NAME => "quad (1015 BtuIT)",
                UnitCodes::DESCRIPTION => "Unit of heat energy according to the imperial system of units."
            ],
            [
                UnitCodes::CODE => "N71",
                UnitCodes::NAME => "therm (EC)",
                UnitCodes::DESCRIPTION => "Unit of heat energy in commercial use, within the EU defined => 1 thm (EC) = 100 000 BtuIT."
            ],
            [
                UnitCodes::CODE => "N72",
                UnitCodes::NAME => "therm (U.S.)",
                UnitCodes::DESCRIPTION => "Unit of heat energy in commercial use."
            ],
            [
                UnitCodes::CODE => "D35",
                UnitCodes::NAME => "calorie (thermochemical)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WTT",
                UnitCodes::NAME => "watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KWT",
                UnitCodes::NAME => "kilowatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2I",
                UnitCodes::NAME => "British thermal unit (international table) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J44",
                UnitCodes::NAME => "British thermal unit (international table) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J45",
                UnitCodes::NAME => "British thermal unit (international table) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J47",
                UnitCodes::NAME => "British thermal unit (thermochemical) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J51",
                UnitCodes::NAME => "British thermal unit (thermochemical) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J52",
                UnitCodes::NAME => "British thermal unit (thermochemical) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J81",
                UnitCodes::NAME => "calorie (thermochemical) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J82",
                UnitCodes::NAME => "calorie (thermochemical) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E15",
                UnitCodes::NAME => "kilocalorie (thermochemical) per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K54",
                UnitCodes::NAME => "kilocalorie (thermochemical) per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K55",
                UnitCodes::NAME => "kilocalorie (thermochemical) per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D54",
                UnitCodes::NAME => "watt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N48",
                UnitCodes::NAME => "watt per square centimetre",
                UnitCodes::DESCRIPTION => "Derived SI unit watt divided by the power of the 0,01-fold the SI base unit metre by exponent 2."
            ],
            [
                UnitCodes::CODE => "N49",
                UnitCodes::NAME => "watt per square inch",
                UnitCodes::DESCRIPTION => "Derived SI unit watt divided by the power of the unit inch according to the Anglo-American and Imperial system of units by exponent 2."
            ],
            [
                UnitCodes::CODE => "N50",
                UnitCodes::NAME => "British thermal unit (international table) per square foot hour",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N51",
                UnitCodes::NAME => "British thermal unit (thermochemical) per square foot hour",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N52",
                UnitCodes::NAME => "British thermal unit (thermochemical) per square foot minute",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N53",
                UnitCodes::NAME => "British thermal unit (international table) per square foot second",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N54",
                UnitCodes::NAME => "British thermal unit (thermochemical) per square foot second",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N55",
                UnitCodes::NAME => "British thermal unit (international table) per square inch second",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N56",
                UnitCodes::NAME => "calorie (thermochemical) per square centimetre minute",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N57",
                UnitCodes::NAME => "calorie (thermochemical) per square centimetre second",
                UnitCodes::DESCRIPTION => "Unit of the surface heat flux according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "D53",
                UnitCodes::NAME => "watt per metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N80",
                UnitCodes::NAME => "watt per metre degree Celsius",
                UnitCodes::DESCRIPTION => "Derived SI unit watt divided by the product of the SI base unit metre and the unit for temperature degree Celsius."
            ],
            [
                UnitCodes::CODE => "N81",
                UnitCodes::NAME => "kilowatt per metre kelvin",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit watt divided by the product of the SI base unit metre and the SI base unit kelvin."
            ],
            [
                UnitCodes::CODE => "N82",
                UnitCodes::NAME => "kilowatt per metre degree Celsius",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit watt divided by the product of the SI base unit metre and the unit for temperature degree Celsius."
            ],
            [
                UnitCodes::CODE => "A22",
                UnitCodes::NAME => "British thermal unit (international table) per second foot degree Rankine",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D71",
                UnitCodes::NAME => "calorie (international table) per second centimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D38",
                UnitCodes::NAME => "calorie (thermochemical) per second centimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J40",
                UnitCodes::NAME => "British thermal unit (international table) foot per hour square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J41",
                UnitCodes::NAME => "British thermal unit (international table) inch per hour square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J42",
                UnitCodes::NAME => "British thermal unit (international table) inch per second square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J46",
                UnitCodes::NAME => "British thermal unit (thermochemical) foot per hour square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J48",
                UnitCodes::NAME => "British thermal unit (thermochemical) inch per hour square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J49",
                UnitCodes::NAME => "British thermal unit (thermochemical) inch per second square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J78",
                UnitCodes::NAME => "calorie (thermochemical) per centimetre second degree Celsius",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K52",
                UnitCodes::NAME => "kilocalorie (international table) per hour metre degree Celsius",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D55",
                UnitCodes::NAME => "watt per square metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N78",
                UnitCodes::NAME => "kilowatt per square metre kelvin",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit watt divided by the product of the power of the SI base unit metre by exponent 2 and the SI base unit kelvin."
            ],
            [
                UnitCodes::CODE => "D72",
                UnitCodes::NAME => "calorie (international table) per second square centimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D39",
                UnitCodes::NAME => "calorie (thermochemical) per second square centimetre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A20",
                UnitCodes::NAME => "British thermal unit (international table) per second square foot degree Rankine",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A23",
                UnitCodes::NAME => "British thermal unit (international table) per hour square foot degree Rankine",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N74",
                UnitCodes::NAME => "British thermal unit (international table) per hour square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => "Unit of the heat transition coefficient according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N75",
                UnitCodes::NAME => "British thermal unit (thermochemical) per hour square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => "Unit of the heat transition coefficient according to the imperial system of units."
            ],
            [
                UnitCodes::CODE => "N76",
                UnitCodes::NAME => "British thermal unit (international table) per second square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => "Unit of the heat transition coefficient according to the imperial system of units."
            ],
            [
                UnitCodes::CODE => "N77",
                UnitCodes::NAME => "British thermal unit (thermochemical) per second square foot degree Fahrenheit",
                UnitCodes::DESCRIPTION => "Unit of the heat transition coefficient according to the imperial system of units."
            ],
            [
                UnitCodes::CODE => "D19",
                UnitCodes::NAME => "square metre kelvin per watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J19",
                UnitCodes::NAME => "degree Fahrenheit hour square foot per British thermal unit (thermochemical)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J22",
                UnitCodes::NAME => "degree Fahrenheit hour square foot per British thermal unit (international table)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J83",
                UnitCodes::NAME => "clo",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L14",
                UnitCodes::NAME => "square metre hour degree Celsius per kilocalorie (international table)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B21",
                UnitCodes::NAME => "kelvin per watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H35",
                UnitCodes::NAME => "kelvin metre per watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N84",
                UnitCodes::NAME => "degree Fahrenheit hour per British thermal unit (international table)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the thermal resistance according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N85",
                UnitCodes::NAME => "degree Fahrenheit hour per British thermal unit (thermochemical)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the thermal resistance according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N86",
                UnitCodes::NAME => "degree Fahrenheit second per British thermal unit (international table)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the thermal resistance according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N87",
                UnitCodes::NAME => "degree Fahrenheit second per British thermal unit (thermochemical)",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the thermal resistance according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N88",
                UnitCodes::NAME => "degree Fahrenheit hour square foot per British thermal unit (international table) inch",
                UnitCodes::DESCRIPTION => "Unit of specific thermal resistance according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N89",
                UnitCodes::NAME => "degree Fahrenheit hour square foot per British thermal unit (thermochemical) inch",
                UnitCodes::DESCRIPTION => "Unit of specific thermal resistance according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "D52",
                UnitCodes::NAME => "watt per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "S4",
                UnitCodes::NAME => "square metre per second",
                UnitCodes::DESCRIPTION => "Synonym => metre squared per second (square metres/second US)"
            ],
            [
                UnitCodes::CODE => "S3",
                UnitCodes::NAME => "square foot per second",
                UnitCodes::DESCRIPTION => "Synonym => foot squared per second"
            ],
            [
                UnitCodes::CODE => "E97",
                UnitCodes::NAME => "millimetre per degree Celcius metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F53",
                UnitCodes::NAME => "millimetre per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N83",
                UnitCodes::NAME => "metre per degree Celcius metre",
                UnitCodes::DESCRIPTION => "SI base unit metre divided by the product of the unit degree Celsius and the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "JE",
                UnitCodes::NAME => "joule per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B41",
                UnitCodes::NAME => "kilojoule per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J43",
                UnitCodes::NAME => "British thermal unit (international table) per pound degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J50",
                UnitCodes::NAME => "British thermal unit (thermochemical) per pound degree Fahrenheit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J76",
                UnitCodes::NAME => "calorie (international table) per gram degree Celsius",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J79",
                UnitCodes::NAME => "calorie (thermochemical) per gram degree Celsius",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N60",
                UnitCodes::NAME => "British thermal unit (international table) per degree Fahrenheit",
                UnitCodes::DESCRIPTION => "Unit of the heat capacity according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N61",
                UnitCodes::NAME => "British thermal unit (thermochemical) per degree Fahrenheit",
                UnitCodes::DESCRIPTION => "Unit of the heat capacity according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N62",
                UnitCodes::NAME => "British thermal unit (international table) per degree Rankine",
                UnitCodes::DESCRIPTION => "Unit of the heat capacity according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N63",
                UnitCodes::NAME => "British thermal unit (thermochemical) per degree Rankine",
                UnitCodes::DESCRIPTION => "Unit of the heat capacity according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N64",
                UnitCodes::NAME => "British thermal unit (thermochemical) per pound degree Rankine",
                UnitCodes::DESCRIPTION => "Unit of the heat capacity (British thermal unit according to the international table according to the Rankine degree) according to the Imperial system of units divided by the unit avoirdupois pound according to the avoirdupois system of units."
            ],
            [
                UnitCodes::CODE => "N65",
                UnitCodes::NAME => "kilocalorie (international table) per gram kelvin",
                UnitCodes::DESCRIPTION => "Unit of the mass-related heat capacity as quotient 1000-fold of the calorie (international table) divided by the product of the 0,001-fold of the SI base units kilogram and kelvin."
            ],
            [
                UnitCodes::CODE => "B11",
                UnitCodes::NAME => "joule per kilogram kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B43",
                UnitCodes::NAME => "kilojoule per kilogram kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A21",
                UnitCodes::NAME => "British thermal unit (international table) per pound degree Rankine",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D76",
                UnitCodes::NAME => "calorie (international table) per gram kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D37",
                UnitCodes::NAME => "calorie (thermochemical) per gram kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JE",
                UnitCodes::NAME => "joule per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J2",
                UnitCodes::NAME => "joule per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D95",
                UnitCodes::NAME => "joule per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JK",
                UnitCodes::NAME => "megajoule per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B42",
                UnitCodes::NAME => "kilojoule per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "AZ",
                UnitCodes::NAME => "British thermal unit (international table) per pound",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D75",
                UnitCodes::NAME => "calorie (international table) per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N73",
                UnitCodes::NAME => "British thermal unit (thermochemical) per pound",
                UnitCodes::DESCRIPTION => "Unit of the heat energy according to the Imperial system of units divided the unit avoirdupois pound according to the avoirdupois system of units."
            ],
            [
                UnitCodes::CODE => "B36",
                UnitCodes::NAME => "calorie (thermochemical) per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N58",
                UnitCodes::NAME => "British thermal unit (international table) per cubic foot",
                UnitCodes::DESCRIPTION => "Unit of the energy density according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "N59",
                UnitCodes::NAME => "British thermal unit (thermochemical) per cubic foot",
                UnitCodes::DESCRIPTION => "Unit of the energy density according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "Q31",
                UnitCodes::NAME => "kilojoule per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "AMP",
                UnitCodes::NAME => "ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B22",
                UnitCodes::NAME => "kiloampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H38",
                UnitCodes::NAME => "megaampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4K",
                UnitCodes::NAME => "milliampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B84",
                UnitCodes::NAME => "microampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C39",
                UnitCodes::NAME => "nanoampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C70",
                UnitCodes::NAME => "picoampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N96",
                UnitCodes::NAME => "biot",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of the electric power which is defined by a force of 2 dyn per cm between two parallel conductors of infinite length with negligible cross-section in the distance of 1 cm."
            ],
            [
                UnitCodes::CODE => "N97",
                UnitCodes::NAME => "gilbert",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of the magnetomotive force, which is defined by the work to increase the magnetic potential of a positive common pol with 1 erg."
            ],
            [
                UnitCodes::CODE => "COU",
                UnitCodes::NAME => "coulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A8",
                UnitCodes::NAME => "ampere second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H32",
                UnitCodes::NAME => "ampere squared second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "AMH",
                UnitCodes::NAME => "ampere hour",
                UnitCodes::DESCRIPTION => "A unit of electric charge defining the amount of charge accumulated by a steady flow of one ampere for one hour."
            ],
            [
                UnitCodes::CODE => "TAH",
                UnitCodes::NAME => "kiloampere hour (thousand ampere hour)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D77",
                UnitCodes::NAME => "megacoulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D86",
                UnitCodes::NAME => "millicoulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B26",
                UnitCodes::NAME => "kilocoulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B86",
                UnitCodes::NAME => "microcoulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C40",
                UnitCodes::NAME => "nanocoulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C71",
                UnitCodes::NAME => "picocoulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E09",
                UnitCodes::NAME => "milliampere hour",
                UnitCodes::DESCRIPTION => "A unit of power load delivered at the rate of one thousandth of an ampere over a period of one hour."
            ],
            [
                UnitCodes::CODE => "N95",
                UnitCodes::NAME => "ampere minute",
                UnitCodes::DESCRIPTION => "A unit of electric charge defining the amount of charge accumulated by a steady flow of one ampere for one minute.."
            ],
            [
                UnitCodes::CODE => "N94",
                UnitCodes::NAME => "franklin",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of the electrical charge, where the charge amounts to exactly 1 Fr where the force of 1 dyn on an equal load is performed at a distance of 1 cm."
            ],
            [
                UnitCodes::CODE => "A29",
                UnitCodes::NAME => "coulomb per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A84",
                UnitCodes::NAME => "gigacoulomb per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A30",
                UnitCodes::NAME => "coulomb per cubic millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B69",
                UnitCodes::NAME => "megacoulomb per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A28",
                UnitCodes::NAME => "coulomb per cubic centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B27",
                UnitCodes::NAME => "kilocoulomb per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D88",
                UnitCodes::NAME => "millicoulomb per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B87",
                UnitCodes::NAME => "microcoulomb per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A34",
                UnitCodes::NAME => "coulomb per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B70",
                UnitCodes::NAME => "megacoulomb per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A35",
                UnitCodes::NAME => "coulomb per square millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A33",
                UnitCodes::NAME => "coulomb per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B28",
                UnitCodes::NAME => "kilocoulomb per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D89",
                UnitCodes::NAME => "millicoulomb per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B88",
                UnitCodes::NAME => "microcoulomb per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D50",
                UnitCodes::NAME => "volt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H45",
                UnitCodes::NAME => "volt second per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D45",
                UnitCodes::NAME => "volt squared per kelvin squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D51",
                UnitCodes::NAME => "volt per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H24",
                UnitCodes::NAME => "volt per microsecond",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H62",
                UnitCodes::NAME => "millivolt per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H46",
                UnitCodes::NAME => "volt per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B79",
                UnitCodes::NAME => "megavolt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B55",
                UnitCodes::NAME => "kilovolt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D47",
                UnitCodes::NAME => "volt per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C30",
                UnitCodes::NAME => "millivolt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C3",
                UnitCodes::NAME => "microvolt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G60",
                UnitCodes::NAME => "volt per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N98",
                UnitCodes::NAME => "volt per pascal",
                UnitCodes::DESCRIPTION => "Derived SI unit volt divided by the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "F87",
                UnitCodes::NAME => "volt per litre minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H22",
                UnitCodes::NAME => "volt square inch per pound-force",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H23",
                UnitCodes::NAME => "volt per inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "VLT",
                UnitCodes::NAME => "volt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B78",
                UnitCodes::NAME => "megavolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KVT",
                UnitCodes::NAME => "kilovolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2Z",
                UnitCodes::NAME => "millivolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D82",
                UnitCodes::NAME => "microvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N99",
                UnitCodes::NAME => "picovolt",
                UnitCodes::DESCRIPTION => "0,000 000 000 001-fold of the derived SI unit volt."
            ],
            [
                UnitCodes::CODE => "FAR",
                UnitCodes::NAME => "farad",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H48",
                UnitCodes::NAME => "attofarad",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C10",
                UnitCodes::NAME => "millifarad",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4O",
                UnitCodes::NAME => "microfarad",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C41",
                UnitCodes::NAME => "nanofarad",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4T",
                UnitCodes::NAME => "picofarad",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N90",
                UnitCodes::NAME => "kilofarad",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit farad."
            ],
            [
                UnitCodes::CODE => "A69",
                UnitCodes::NAME => "farad per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H28",
                UnitCodes::NAME => "microfarad per kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H33",
                UnitCodes::NAME => "farad per kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B89",
                UnitCodes::NAME => "microfarad per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C42",
                UnitCodes::NAME => "nanofarad per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C72",
                UnitCodes::NAME => "picofarad per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A26",
                UnitCodes::NAME => "coulomb metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A41",
                UnitCodes::NAME => "ampere per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H31",
                UnitCodes::NAME => "ampere per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B66",
                UnitCodes::NAME => "megaampere per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A7",
                UnitCodes::NAME => "ampere per square millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A4",
                UnitCodes::NAME => "ampere per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B23",
                UnitCodes::NAME => "kiloampere per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G59",
                UnitCodes::NAME => "milliampere per litre minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N93",
                UnitCodes::NAME => "ampere per pascal",
                UnitCodes::DESCRIPTION => "SI base unit ampere divided by the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "F57",
                UnitCodes::NAME => "milliampere per pound-force per square inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F59",
                UnitCodes::NAME => "milliampere per bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "AE",
                UnitCodes::NAME => "ampere per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B24",
                UnitCodes::NAME => "kiloampere per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A3",
                UnitCodes::NAME => "ampere per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A2",
                UnitCodes::NAME => "ampere per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F76",
                UnitCodes::NAME => "milliampere per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F08",
                UnitCodes::NAME => "milliampere per inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P10",
                UnitCodes::NAME => "coulomb per metre",
                UnitCodes::DESCRIPTION => "Derived SI unit coulomb divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "D33",
                UnitCodes::NAME => "tesla",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C29",
                UnitCodes::NAME => "millitesla",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D81",
                UnitCodes::NAME => "microtesla",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C48",
                UnitCodes::NAME => "nanotesla",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P13",
                UnitCodes::NAME => "kilotesla",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit tesla."
            ],
            [
                UnitCodes::CODE => "P12",
                UnitCodes::NAME => "gamma",
                UnitCodes::DESCRIPTION => "Unit of magnetic flow density."
            ],
            [
                UnitCodes::CODE => "WEB",
                UnitCodes::NAME => "weber",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C33",
                UnitCodes::NAME => "milliweber",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P11",
                UnitCodes::NAME => "kiloweber",
                UnitCodes::DESCRIPTION => "1000 fold of the derived SI unit weber."
            ],
            [
                UnitCodes::CODE => "D59",
                UnitCodes::NAME => "weber per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B56",
                UnitCodes::NAME => "kiloweber per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D60",
                UnitCodes::NAME => "weber per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "81",
                UnitCodes::NAME => "henry",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C14",
                UnitCodes::NAME => "millihenry",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B90",
                UnitCodes::NAME => "microhenry",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C43",
                UnitCodes::NAME => "nanohenry",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C73",
                UnitCodes::NAME => "picohenry",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H03",
                UnitCodes::NAME => "henry per kiloohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H04",
                UnitCodes::NAME => "henry per ohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G98",
                UnitCodes::NAME => "microhenry per kiloohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G99",
                UnitCodes::NAME => "microhenry per ohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H05",
                UnitCodes::NAME => "millihenry per kiloohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H06",
                UnitCodes::NAME => "millihenry per ohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P24",
                UnitCodes::NAME => "kilohenry",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit henry."
            ],
            [
                UnitCodes::CODE => "A98",
                UnitCodes::NAME => "henry per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B91",
                UnitCodes::NAME => "microhenry per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C44",
                UnitCodes::NAME => "nanohenry per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A5",
                UnitCodes::NAME => "ampere square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "AE",
                UnitCodes::NAME => "ampere per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B8",
                UnitCodes::NAME => "joule per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D54",
                UnitCodes::NAME => "watt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MTS",
                UnitCodes::NAME => "metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "OHM",
                UnitCodes::NAME => "ohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A87",
                UnitCodes::NAME => "gigaohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B75",
                UnitCodes::NAME => "megaohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H44",
                UnitCodes::NAME => "teraohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B49",
                UnitCodes::NAME => "kiloohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E45",
                UnitCodes::NAME => "milliohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B94",
                UnitCodes::NAME => "microohm",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P22",
                UnitCodes::NAME => "nanoohm",
                UnitCodes::DESCRIPTION => "0,000 000 001-fold of the derived SI unit ohm."
            ],
            [
                UnitCodes::CODE => "M26",
                UnitCodes::NAME => "gigaohm per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "SIE",
                UnitCodes::NAME => "siemens",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B53",
                UnitCodes::NAME => "kilosiemens",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C27",
                UnitCodes::NAME => "millisiemens",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B99",
                UnitCodes::NAME => "microsiemens",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G42",
                UnitCodes::NAME => "microsiemens per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G43",
                UnitCodes::NAME => "microsiemens per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N92",
                UnitCodes::NAME => "picosiemens",
                UnitCodes::DESCRIPTION => "0,000 000 000 001-fold of the derived SI unit siemens."
            ],
            [
                UnitCodes::CODE => "NQ",
                UnitCodes::NAME => "mho",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "NR",
                UnitCodes::NAME => "micromho",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C61",
                UnitCodes::NAME => "ohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A88",
                UnitCodes::NAME => "gigaohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B76",
                UnitCodes::NAME => "megaohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H88",
                UnitCodes::NAME => "megaohm kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B50",
                UnitCodes::NAME => "kiloohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C60",
                UnitCodes::NAME => "ohm centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C23",
                UnitCodes::NAME => "milliohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B95",
                UnitCodes::NAME => "microohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C46",
                UnitCodes::NAME => "nanoohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M24",
                UnitCodes::NAME => "ohm kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P23",
                UnitCodes::NAME => "ohm circular-mil per foot",
                UnitCodes::DESCRIPTION => "Unit of resistivity."
            ],
            [
                UnitCodes::CODE => "F56",
                UnitCodes::NAME => "ohm per kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H26",
                UnitCodes::NAME => "ohm per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H37",
                UnitCodes::NAME => "megaohm per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F54",
                UnitCodes::NAME => "milliohm per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H36",
                UnitCodes::NAME => "megaohm per kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "F55",
                UnitCodes::NAME => "ohm per mile (statute mile)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D10",
                UnitCodes::NAME => "siemens per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H43",
                UnitCodes::NAME => "siemens per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H61",
                UnitCodes::NAME => "millisiemens per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B77",
                UnitCodes::NAME => "megasiemens per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B54",
                UnitCodes::NAME => "kilosiemens per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G45",
                UnitCodes::NAME => "nanosiemens per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "G44",
                UnitCodes::NAME => "nanosiemens per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L42",
                UnitCodes::NAME => "picosiemens per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C89",
                UnitCodes::NAME => "reciprocal henry",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WTT",
                UnitCodes::NAME => "watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P14",
                UnitCodes::NAME => "joule per second",
                UnitCodes::DESCRIPTION => "Quotient of the derived SI unit joule divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "KWT",
                UnitCodes::NAME => "kilowatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MAW",
                UnitCodes::NAME => "megawatt",
                UnitCodes::DESCRIPTION => "A unit of power defining the rate of energy transferred or consumed when a current of 1000 amperes flows due to a potential of 1000 volts at unity power factor."
            ],
            [
                UnitCodes::CODE => "A90",
                UnitCodes::NAME => "gigawatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D31",
                UnitCodes::NAME => "terawatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C31",
                UnitCodes::NAME => "milliwatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P15",
                UnitCodes::NAME => "joule per minute",
                UnitCodes::DESCRIPTION => "Quotient from the derived SI unit joule divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P16",
                UnitCodes::NAME => "joule per hour",
                UnitCodes::DESCRIPTION => "Quotient from the derived SI unit joule divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P17",
                UnitCodes::NAME => "joule per day",
                UnitCodes::DESCRIPTION => "Quotient from the derived SI unit joule divided by the unit day."
            ],
            [
                UnitCodes::CODE => "P18",
                UnitCodes::NAME => "kilojoule per second",
                UnitCodes::DESCRIPTION => "Quotient from the 1000-fold of the derived SI unit joule divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P19",
                UnitCodes::NAME => "kilojoule per minute",
                UnitCodes::DESCRIPTION => "Quotient from the 1000-fold of the derived SI unit joule divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P20",
                UnitCodes::NAME => "kilojoule per hour",
                UnitCodes::DESCRIPTION => "Quotient from the 1000-fold of the derived SI unit joule divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P21",
                UnitCodes::NAME => "kilojoule per day",
                UnitCodes::DESCRIPTION => "Quotient from the 1000-fold of the derived SI unit joule divided by the unit day."
            ],
            [
                UnitCodes::CODE => "D80",
                UnitCodes::NAME => "microwatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K43",
                UnitCodes::NAME => "horsepower (electric)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C49",
                UnitCodes::NAME => "nanowatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C75",
                UnitCodes::NAME => "picowatt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D46",
                UnitCodes::NAME => "volt - ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MVA",
                UnitCodes::NAME => "megavolt - ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KVA",
                UnitCodes::NAME => "kilovolt - ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M35",
                UnitCodes::NAME => "millivolt - ampere",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D44",
                UnitCodes::NAME => "var",
                UnitCodes::DESCRIPTION => "The name of the unit is an acronym for volt-ampere-reactive."
            ],
            [
                UnitCodes::CODE => "K5",
                UnitCodes::NAME => "kilovolt ampere (reactive)",
                UnitCodes::DESCRIPTION => "Use kilovar (common code KVR)"
            ],
            [
                UnitCodes::CODE => "KVR",
                UnitCodes::NAME => "kilovar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MAR",
                UnitCodes::NAME => "megavar",
                UnitCodes::DESCRIPTION => "A unit of electrical reactive power represented by a current of one thousand amperes flowing due a potential difference of one thousand volts where the sine of the phase angle between them is 1."
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WHR",
                UnitCodes::NAME => "watt hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "N91",
                UnitCodes::NAME => "reciprocal joule",
                UnitCodes::DESCRIPTION => "Reciprocal of the derived SI unit joule."
            ],
            [
                UnitCodes::CODE => "M30",
                UnitCodes::NAME => "reciprocal volt - ampere reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M17",
                UnitCodes::NAME => "kilohertz metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M18",
                UnitCodes::NAME => "gigahertz metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M27",
                UnitCodes::NAME => "megahertz metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M21",
                UnitCodes::NAME => "reciprocal kilovolt - ampere reciprocal hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H34",
                UnitCodes::NAME => "hertz metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H39",
                UnitCodes::NAME => "megahertz kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HTZ",
                UnitCodes::NAME => "hertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2A",
                UnitCodes::NAME => "radian per second",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C84",
                UnitCodes::NAME => "radian per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MTS",
                UnitCodes::NAME => "metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B8",
                UnitCodes::NAME => "joule per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JM",
                UnitCodes::NAME => "megajoule per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B14",
                UnitCodes::NAME => "joule per metre to the fourth power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WTT",
                UnitCodes::NAME => "watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B13",
                UnitCodes::NAME => "joule per square metre",
                UnitCodes::DESCRIPTION => "Synonym => joule per metre squared"
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D1",
                UnitCodes::NAME => "reciprocal second per steradian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D2",
                UnitCodes::NAME => "reciprocal second per steradian metre squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C99",
                UnitCodes::NAME => "reciprocal second per metre squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C93",
                UnitCodes::NAME => "reciprocal square metre",
                UnitCodes::DESCRIPTION => "Synonym => reciprocal metre squared"
            ],
            [
                UnitCodes::CODE => "D54",
                UnitCodes::NAME => "watt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H47",
                UnitCodes::NAME => "watt per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H74",
                UnitCodes::NAME => "watt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E43",
                UnitCodes::NAME => "joule per square centimetre",
                UnitCodes::DESCRIPTION => "A unit of energy defining the number of joules per square centimetre."
            ],
            [
                UnitCodes::CODE => "P37",
                UnitCodes::NAME => "British thermal unit (international table) per square foot",
                UnitCodes::DESCRIPTION => "Unit of the areal-related energy transmission according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "P38",
                UnitCodes::NAME => "British thermal unit (thermochemical) per square foot",
                UnitCodes::DESCRIPTION => "Unit of the areal-related energy transmission according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "P39",
                UnitCodes::NAME => "calorie (thermochemical) per square centimetre",
                UnitCodes::DESCRIPTION => "Unit of the areal-related energy transmission according to the Imperial system of units."
            ],
            [
                UnitCodes::CODE => "P40",
                UnitCodes::NAME => "langley",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of the areal-related energy transmission (as a measure of the incident quantity of heat of solar radiation on the earth's surface)."
            ],
            [
                UnitCodes::CODE => "D57",
                UnitCodes::NAME => "watt per steradian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D58",
                UnitCodes::NAME => "watt per steradian square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D56",
                UnitCodes::NAME => "watt per square metre kelvin to the fourth power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D18",
                UnitCodes::NAME => "metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CDL",
                UnitCodes::NAME => "candela",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P33",
                UnitCodes::NAME => "kilocandela",
                UnitCodes::DESCRIPTION => "1000-fold of the SI base unit candela."
            ],
            [
                UnitCodes::CODE => "P34",
                UnitCodes::NAME => "millicandela",
                UnitCodes::DESCRIPTION => "0,001-fold of the SI base unit candela."
            ],
            [
                UnitCodes::CODE => "P35",
                UnitCodes::NAME => "Hefner-Kerze",
                UnitCodes::DESCRIPTION => "Obsolete, non-legal unit of the power in Germany relating to DIN 1301-3 =>1979 => 1 HK = 0,903 cd."
            ],
            [
                UnitCodes::CODE => "P36",
                UnitCodes::NAME => "international candle",
                UnitCodes::DESCRIPTION => "Obsolete, non-legal unit of the power in Germany relating to DIN 1301-3 =>1979 => 1 HK = 1,019 cd."
            ],
            [
                UnitCodes::CODE => "LUM",
                UnitCodes::NAME => "lumen",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B62",
                UnitCodes::NAME => "lumen second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B59",
                UnitCodes::NAME => "lumen hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A24",
                UnitCodes::NAME => "candela per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P28",
                UnitCodes::NAME => "candela per square inch",
                UnitCodes::DESCRIPTION => "SI base unit candela divided by the power of unit inch according to the Anglo-American and Imperial system of units by exponent 2."
            ],
            [
                UnitCodes::CODE => "P29",
                UnitCodes::NAME => "footlambert",
                UnitCodes::DESCRIPTION => "Unit of the luminance according to the Anglo-American system of units, defined as emitted or reflected luminance of a lm/ft²."
            ],
            [
                UnitCodes::CODE => "P30",
                UnitCodes::NAME => "lambert",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of luminance, defined as the emitted or reflected luminance by one lumen per square centimetre."
            ],
            [
                UnitCodes::CODE => "P31",
                UnitCodes::NAME => "stilb",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of luminance, defined as emitted or reflected luminance by one lumen per square centimetre."
            ],
            [
                UnitCodes::CODE => "P32",
                UnitCodes::NAME => "candela per square foot",
                UnitCodes::DESCRIPTION => "Base unit SI candela divided by the power of the unit foot according to the Anglo-American and Imperial system of units by exponent 2."
            ],
            [
                UnitCodes::CODE => "B60",
                UnitCodes::NAME => "lumen per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "LUX",
                UnitCodes::NAME => "lux",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KLX",
                UnitCodes::NAME => "kilolux",
                UnitCodes::DESCRIPTION => "A unit of illuminance equal to one thousand lux."
            ],
            [
                UnitCodes::CODE => "P25",
                UnitCodes::NAME => "lumen per square foot",
                UnitCodes::DESCRIPTION => "Derived SI unit lumen divided by the power of the unit foot according to the Anglo-American and Imperial system of units by exponent 2."
            ],
            [
                UnitCodes::CODE => "P26",
                UnitCodes::NAME => "phot",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of the illuminance, defined as lumen by square centimetre."
            ],
            [
                UnitCodes::CODE => "P27",
                UnitCodes::NAME => "footcandle",
                UnitCodes::DESCRIPTION => "Non SI conform traditional unit, defined as density of light which impinges on a surface which has a distance of one foot from a light source, which shines with an intensity of an international candle."
            ],
            [
                UnitCodes::CODE => "B64",
                UnitCodes::NAME => "lux second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B63",
                UnitCodes::NAME => "lux hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B61",
                UnitCodes::NAME => "lumen per watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D22",
                UnitCodes::NAME => "square metre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "SEC",
                UnitCodes::NAME => "second [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "HTZ",
                UnitCodes::NAME => "hertz",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C59",
                UnitCodes::NAME => "octave",
                UnitCodes::DESCRIPTION => "A unit used in music to describe the ratio in frequency between notes."
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2A",
                UnitCodes::NAME => "radian per second",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C84",
                UnitCodes::NAME => "radian per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KMQ",
                UnitCodes::NAME => "kilogram per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of weight expressed in kilograms of a substance that fills a volume of one cubic metre."
            ],
            [
                UnitCodes::CODE => "PAL",
                UnitCodes::NAME => "pascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BAR",
                UnitCodes::NAME => "bar [unit of pressure]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D9",
                UnitCodes::NAME => "dyne per square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MTS",
                UnitCodes::NAME => "metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MSK",
                UnitCodes::NAME => "metre per second squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MQS",
                UnitCodes::NAME => "cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MTS",
                UnitCodes::NAME => "metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B8",
                UnitCodes::NAME => "joule per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A60",
                UnitCodes::NAME => "erg per cubic centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WTT",
                UnitCodes::NAME => "watt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A63",
                UnitCodes::NAME => "erg per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D54",
                UnitCodes::NAME => "watt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C32",
                UnitCodes::NAME => "milliwatt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D85",
                UnitCodes::NAME => "microwatt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C76",
                UnitCodes::NAME => "picowatt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A64",
                UnitCodes::NAME => "erg per second square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C67",
                UnitCodes::NAME => "pascal second per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A50",
                UnitCodes::NAME => "dyne second per cubic centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C66",
                UnitCodes::NAME => "pascal second per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A52",
                UnitCodes::NAME => "dyne second per centimetre to the fifth power",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M32",
                UnitCodes::NAME => "pascal second per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C58",
                UnitCodes::NAME => "newton second per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A51",
                UnitCodes::NAME => "dyne second per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2N",
                UnitCodes::NAME => "decibel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P43",
                UnitCodes::NAME => "bel per metre",
                UnitCodes::DESCRIPTION => "Unit bel divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H51",
                UnitCodes::NAME => "decibel per kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H52",
                UnitCodes::NAME => "decibel per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C51",
                UnitCodes::NAME => "neper per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "SEC",
                UnitCodes::NAME => "second [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C50",
                UnitCodes::NAME => "neper",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2N",
                UnitCodes::NAME => "decibel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "SEC",
                UnitCodes::NAME => "second [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C69",
                UnitCodes::NAME => "phon",
                UnitCodes::DESCRIPTION => "A unit of subjective sound loudness. A sound has loudness p phons if it seems to the listener to be equal in loudness to the sound of a pure tone of frequency 1 kilohertz and strength p decibels."
            ],
            [
                UnitCodes::CODE => "D15",
                UnitCodes::NAME => "sone",
                UnitCodes::DESCRIPTION => "A unit of subjective sound loudness. One sone is the loudness of a pure tone of frequency one kilohertz and strength 40 decibels."
            ],
            [
                UnitCodes::CODE => "P42",
                UnitCodes::NAME => "pascal squared second",
                UnitCodes::DESCRIPTION => "Unit of the set as a product of the power of derived SI unit pascal with exponent 2 and the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P41",
                UnitCodes::NAME => "decade (logarithmic)",
                UnitCodes::DESCRIPTION => "1 Dec  =>= log2 10 ˜ 3,32 according to the logarithm for frequency range between f1 and f2, when f2/f1 = 10."
            ],
            [
                UnitCodes::CODE => "C34",
                UnitCodes::NAME => "mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B45",
                UnitCodes::NAME => "kilomole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C18",
                UnitCodes::NAME => "millimole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "FH",
                UnitCodes::NAME => "micromole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "Z9",
                UnitCodes::NAME => "nanomole",
                UnitCodes::DESCRIPTION => "An SI unit of amount of substance equal to 10−9 moles"
            ],
            [
                UnitCodes::CODE => "P44",
                UnitCodes::NAME => "pound mole",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of quantity of a substance relating that one pound mole of a chemical composition corresponds to the same number of pounds as the molecular weight of one molecule of this composition in atomic mass units."
            ],
            [
                UnitCodes::CODE => "C95",
                UnitCodes::NAME => "reciprocal mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D74",
                UnitCodes::NAME => "kilogram per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A94",
                UnitCodes::NAME => "gram per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A40",
                UnitCodes::NAME => "cubic metre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A37",
                UnitCodes::NAME => "cubic decimetre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A36",
                UnitCodes::NAME => "cubic centimetre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B58",
                UnitCodes::NAME => "litre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B15",
                UnitCodes::NAME => "joule per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B44",
                UnitCodes::NAME => "kilojoule per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B15",
                UnitCodes::NAME => "joule per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B15",
                UnitCodes::NAME => "joule per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B16",
                UnitCodes::NAME => "joule per mole kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C86",
                UnitCodes::NAME => "reciprocal cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H50",
                UnitCodes::NAME => "reciprocal cubic centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L20",
                UnitCodes::NAME => "reciprocal cubic millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K20",
                UnitCodes::NAME => "reciprocal cubic foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K49",
                UnitCodes::NAME => "reciprocal cubic inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K63",
                UnitCodes::NAME => "reciprocal litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M10",
                UnitCodes::NAME => "reciprocal cubic yard",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KMQ",
                UnitCodes::NAME => "kilogram per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of weight expressed in kilograms of a substance that fills a volume of one cubic metre."
            ],
            [
                UnitCodes::CODE => "C36",
                UnitCodes::NAME => "mole per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C38",
                UnitCodes::NAME => "mole per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B35",
                UnitCodes::NAME => "kilogram per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C35",
                UnitCodes::NAME => "mole per cubic decimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B46",
                UnitCodes::NAME => "kilomole per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E95",
                UnitCodes::NAME => "mole per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M33",
                UnitCodes::NAME => "millimole per litre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P51",
                UnitCodes::NAME => "mol per kilogram pascal",
                UnitCodes::DESCRIPTION => "SI base unit mol divided by the product of the SI base unit kilogram and the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "P52",
                UnitCodes::NAME => "mol per cubic metre pascal",
                UnitCodes::DESCRIPTION => "SI base unit mol divided by the product of the power from the SI base unit metre with exponent 3 and the derived SI unit pascal."
            ],
            [
                UnitCodes::CODE => "K59",
                UnitCodes::NAME => "kilomole per cubic metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K60",
                UnitCodes::NAME => "kilomole per cubic metre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K93",
                UnitCodes::NAME => "reciprocal psi",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L24",
                UnitCodes::NAME => "mole per kilogram kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L25",
                UnitCodes::NAME => "mole per kilogram bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L26",
                UnitCodes::NAME => "mole per litre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L27",
                UnitCodes::NAME => "mole per litre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L28",
                UnitCodes::NAME => "mole per cubic metre kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L29",
                UnitCodes::NAME => "mole per cubic metre bar",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C19",
                UnitCodes::NAME => "mole per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D93",
                UnitCodes::NAME => "second per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D87",
                UnitCodes::NAME => "millimole per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H68",
                UnitCodes::NAME => "millimole per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P47",
                UnitCodes::NAME => "kilomole per kilogram",
                UnitCodes::DESCRIPTION => "1000-fold of the SI base unit mol divided by the SI base unit kilogram."
            ],
            [
                UnitCodes::CODE => "P48",
                UnitCodes::NAME => "pound mole per pound",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the material molar flux divided by the avoirdupois pound for mass according to the avoirdupois unit system."
            ],
            [
                UnitCodes::CODE => "PAL",
                UnitCodes::NAME => "pascal",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KAT",
                UnitCodes::NAME => "katal",
                UnitCodes::DESCRIPTION => "A unit of catalytic activity defining the catalytic activity of enzymes and other catalysts."
            ],
            [
                UnitCodes::CODE => "E94",
                UnitCodes::NAME => "kilomole per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P45",
                UnitCodes::NAME => "pound mole per second",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the power of the amount of substance non-SI compliant unit of the molar flux relating that a pound mole of a chemical composition the same number of pound corresponds like the molecular weight of a molecule of this composition in atomic mass units."
            ],
            [
                UnitCodes::CODE => "P46",
                UnitCodes::NAME => "pound mole per minute",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of the power of the amount of substance non-SI compliant unit of the molar flux relating that a pound mole of a chemical composition the same number of pound corresponds like the molecular weight of a molecule of this composition in atomic mass units."
            ],
            [
                UnitCodes::CODE => "KGM",
                UnitCodes::NAME => "kilogram",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams."
            ],
            [
                UnitCodes::CODE => "D43",
                UnitCodes::NAME => "unified atomic mass unit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A26",
                UnitCodes::NAME => "coulomb metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A27",
                UnitCodes::NAME => "coulomb metre squared per volt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JE",
                UnitCodes::NAME => "joule per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "S4",
                UnitCodes::NAME => "square metre per second",
                UnitCodes::DESCRIPTION => "Synonym => metre squared per second (square metres/second US)"
            ],
            [
                UnitCodes::CODE => "S4",
                UnitCodes::NAME => "square metre per second",
                UnitCodes::DESCRIPTION => "Synonym => metre squared per second (square metres/second US)"
            ],
            [
                UnitCodes::CODE => "COU",
                UnitCodes::NAME => "coulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A32",
                UnitCodes::NAME => "coulomb per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D10",
                UnitCodes::NAME => "siemens per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D12",
                UnitCodes::NAME => "siemens square metre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K58",
                UnitCodes::NAME => "kilomole per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "K61",
                UnitCodes::NAME => "kilomole per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L23",
                UnitCodes::NAME => "mole per hour",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L30",
                UnitCodes::NAME => "mole per minute",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C82",
                UnitCodes::NAME => "radian square metre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C83",
                UnitCodes::NAME => "radian square metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P49",
                UnitCodes::NAME => "newton square metre per ampere",
                UnitCodes::DESCRIPTION => "Product of the derived SI unit newton and the power of SI base unit metre with exponent 2 divided by the SI base unit ampere."
            ],
            [
                UnitCodes::CODE => "P50",
                UnitCodes::NAME => "weber metre",
                UnitCodes::DESCRIPTION => "Product of the derived SI unit weber and SI base unit metre."
            ],
            [
                UnitCodes::CODE => "Q30",
                UnitCodes::NAME => "pH (potential of Hydrogen)",
                UnitCodes::DESCRIPTION => "The activity of the (solvated) hydrogen ion (a logarithmic measure used to state the acidity or alkalinity of a chemical solution)."
            ],
            [
                UnitCodes::CODE => "KGM",
                UnitCodes::NAME => "kilogram",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams."
            ],
            [
                UnitCodes::CODE => "D43",
                UnitCodes::NAME => "unified atomic mass unit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KGM",
                UnitCodes::NAME => "kilogram",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams."
            ],
            [
                UnitCodes::CODE => "D43",
                UnitCodes::NAME => "unified atomic mass unit",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "COU",
                UnitCodes::NAME => "coulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B18",
                UnitCodes::NAME => "joule second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A5",
                UnitCodes::NAME => "ampere square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A10",
                UnitCodes::NAME => "ampere square metre per joule second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2A",
                UnitCodes::NAME => "radian per second",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "SEC",
                UnitCodes::NAME => "second [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A53",
                UnitCodes::NAME => "electronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CUR",
                UnitCodes::NAME => "curie",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MCU",
                UnitCodes::NAME => "millicurie",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "M5",
                UnitCodes::NAME => "microcurie",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2R",
                UnitCodes::NAME => "kilocurie",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BQL",
                UnitCodes::NAME => "becquerel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GBQ",
                UnitCodes::NAME => "gigabecquerel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2Q",
                UnitCodes::NAME => "kilobecquerel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "4N",
                UnitCodes::NAME => "megabecquerel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H08",
                UnitCodes::NAME => "microbecquerel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A42",
                UnitCodes::NAME => "curie per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A18",
                UnitCodes::NAME => "becquerel per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B67",
                UnitCodes::NAME => "megabecquerel per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B25",
                UnitCodes::NAME => "kilobecquerel per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A19",
                UnitCodes::NAME => "becquerel per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A53",
                UnitCodes::NAME => "electronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A57",
                UnitCodes::NAME => "erg",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A14",
                UnitCodes::NAME => "barn",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D24",
                UnitCodes::NAME => "square metre per steradian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A17",
                UnitCodes::NAME => "barn per steradian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D20",
                UnitCodes::NAME => "square metre per joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A15",
                UnitCodes::NAME => "barn per electronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D16",
                UnitCodes::NAME => "square centimetre per erg",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D25",
                UnitCodes::NAME => "square metre per steradian joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A16",
                UnitCodes::NAME => "barn per steradian electronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D17",
                UnitCodes::NAME => "square centimetre per steradian erg",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C93",
                UnitCodes::NAME => "reciprocal square metre",
                UnitCodes::DESCRIPTION => "Synonym => reciprocal metre squared"
            ],
            [
                UnitCodes::CODE => "B81",
                UnitCodes::NAME => "reciprocal metre squared reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B13",
                UnitCodes::NAME => "joule per square metre",
                UnitCodes::DESCRIPTION => "Synonym => joule per metre squared"
            ],
            [
                UnitCodes::CODE => "D54",
                UnitCodes::NAME => "watt per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A65",
                UnitCodes::NAME => "erg per square centimetre second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D21",
                UnitCodes::NAME => "square metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D22",
                UnitCodes::NAME => "square metre per mole",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B12",
                UnitCodes::NAME => "joule per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A54",
                UnitCodes::NAME => "electronvolt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A58",
                UnitCodes::NAME => "erg per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D73",
                UnitCodes::NAME => "joule square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A55",
                UnitCodes::NAME => "electronvolt square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A66",
                UnitCodes::NAME => "erg square centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B20",
                UnitCodes::NAME => "joule square metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A56",
                UnitCodes::NAME => "electronvolt square metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A67",
                UnitCodes::NAME => "erg square centimetre per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "28",
                UnitCodes::NAME => "kilogram per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D26",
                UnitCodes::NAME => "square metre per volt second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H58",
                UnitCodes::NAME => "metre per volt second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C86",
                UnitCodes::NAME => "reciprocal cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MQS",
                UnitCodes::NAME => "cubic metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MTS",
                UnitCodes::NAME => "metre per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "S4",
                UnitCodes::NAME => "square metre per second",
                UnitCodes::DESCRIPTION => "Synonym => metre squared per second (square metres/second US)"
            ],
            [
                UnitCodes::CODE => "C98",
                UnitCodes::NAME => "reciprocal second per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C87",
                UnitCodes::NAME => "reciprocal cubic metre per second",
                UnitCodes::DESCRIPTION => "Synonym => reciprocal second per cubic metre"
            ],
            [
                UnitCodes::CODE => "SEC",
                UnitCodes::NAME => "second [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "BQL",
                UnitCodes::NAME => "becquerel",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CUR",
                UnitCodes::NAME => "curie",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A95",
                UnitCodes::NAME => "gray",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C13",
                UnitCodes::NAME => "milligray",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C80",
                UnitCodes::NAME => "rad",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A61",
                UnitCodes::NAME => "erg per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D13",
                UnitCodes::NAME => "sievert",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C28",
                UnitCodes::NAME => "millisievert",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D91",
                UnitCodes::NAME => "rem",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "L31",
                UnitCodes::NAME => "milliroentgen aequivalent men",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A96",
                UnitCodes::NAME => "gray per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A62",
                UnitCodes::NAME => "erg per gram second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B12",
                UnitCodes::NAME => "joule per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A54",
                UnitCodes::NAME => "electronvolt per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A58",
                UnitCodes::NAME => "erg per centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D21",
                UnitCodes::NAME => "square metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CKG",
                UnitCodes::NAME => "coulomb per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C8",
                UnitCodes::NAME => "millicoulomb per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2C",
                UnitCodes::NAME => "roentgen",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2Y",
                UnitCodes::NAME => "milliroentgen",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "J53",
                UnitCodes::NAME => "coulomb square metre per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KR",
                UnitCodes::NAME => "kiloroentgen",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A31",
                UnitCodes::NAME => "coulomb per kilogram second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D6",
                UnitCodes::NAME => "roentgen per second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P54",
                UnitCodes::NAME => "milligray per second",
                UnitCodes::DESCRIPTION => "0,001-fold of the derived SI unit gray divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P55",
                UnitCodes::NAME => "microgray per second",
                UnitCodes::DESCRIPTION => "0,000 001-fold of the derived SI unit gray divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P56",
                UnitCodes::NAME => "nanogray per second",
                UnitCodes::DESCRIPTION => "0,000 000 001-fold of the derived SI unit gray divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P57",
                UnitCodes::NAME => "gray per minute",
                UnitCodes::DESCRIPTION => "SI derived unit gray divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P58",
                UnitCodes::NAME => "milligray per minute",
                UnitCodes::DESCRIPTION => "0,001-fold of the derived SI unit gray divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P59",
                UnitCodes::NAME => "microgray per minute",
                UnitCodes::DESCRIPTION => "0,000 001-fold of the derived SI unit gray divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P60",
                UnitCodes::NAME => "nanogray per minute",
                UnitCodes::DESCRIPTION => "0,000 000 001-fold of the derived SI unit gray divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P61",
                UnitCodes::NAME => "gray per hour",
                UnitCodes::DESCRIPTION => "SI derived unit gray divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P62",
                UnitCodes::NAME => "milligray per hour",
                UnitCodes::DESCRIPTION => "0,001-fold of the derived SI unit gray divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P63",
                UnitCodes::NAME => "microgray per hour",
                UnitCodes::DESCRIPTION => "0,000 001-fold of the derived SI unit gray divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P64",
                UnitCodes::NAME => "nanogray per hour",
                UnitCodes::DESCRIPTION => "0,000 000 001-fold of the derived SI unit gray divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P65",
                UnitCodes::NAME => "sievert per second",
                UnitCodes::DESCRIPTION => "Derived SI unit sievert divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P66",
                UnitCodes::NAME => "millisievert per second",
                UnitCodes::DESCRIPTION => "0,001-fold of the derived SI unit sievert divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P67",
                UnitCodes::NAME => "microsievert per second",
                UnitCodes::DESCRIPTION => "0,000 001-fold of the derived SI unit sievert divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P68",
                UnitCodes::NAME => "nanosievert per second",
                UnitCodes::DESCRIPTION => "0,000 000 001-fold of the derived SI unit sievert divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P69",
                UnitCodes::NAME => "rem per second",
                UnitCodes::DESCRIPTION => "Unit for the equivalent tin rate relating to DIN 1301-3 =>1979 => 1 rem/s = 0,01 J/(kg·s) = 1 Sv/s."
            ],
            [
                UnitCodes::CODE => "P70",
                UnitCodes::NAME => "sievert per hour",
                UnitCodes::DESCRIPTION => "Derived SI unit sievert divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P71",
                UnitCodes::NAME => "millisievert per hour",
                UnitCodes::DESCRIPTION => "0,001-fold of the derived SI unit sievert divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P72",
                UnitCodes::NAME => "microsievert per hour",
                UnitCodes::DESCRIPTION => "0,000 001-fold of the derived SI unit sievert divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P73",
                UnitCodes::NAME => "nanosievert per hour",
                UnitCodes::DESCRIPTION => "0,000 000 001-fold of the derived SI unit sievert divided by the unit hour."
            ],
            [
                UnitCodes::CODE => "P74",
                UnitCodes::NAME => "sievert per minute",
                UnitCodes::DESCRIPTION => "Derived SI unit sievert divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P75",
                UnitCodes::NAME => "millisievert per minute",
                UnitCodes::DESCRIPTION => "0,001-fold of the derived SI unit sievert divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P76",
                UnitCodes::NAME => "microsievert per minute",
                UnitCodes::DESCRIPTION => "0,000 001-fold of the derived SI unit sievert divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P77",
                UnitCodes::NAME => "nanosievert per minute",
                UnitCodes::DESCRIPTION => "0,000 000 001-fold of the derived SI unit sievert divided by the unit minute."
            ],
            [
                UnitCodes::CODE => "P78",
                UnitCodes::NAME => "reciprocal square inch",
                UnitCodes::DESCRIPTION => "Complement of the power of the unit inch according to the Anglo-American and Imperial system of units by exponent 2."
            ],
            [
                UnitCodes::CODE => "SEC",
                UnitCodes::NAME => "second [unit of time]",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WEB",
                UnitCodes::NAME => "weber",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P53",
                UnitCodes::NAME => "unit pole",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit for magnetic flux of a magnetic pole (according to the interaction of identical poles of 1 dyn at a distance of a cm)."
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C85",
                UnitCodes::NAME => "reciprocal angstrom",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C84",
                UnitCodes::NAME => "radian per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C92",
                UnitCodes::NAME => "reciprocal metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "2A",
                UnitCodes::NAME => "radian per second",
                UnitCodes::DESCRIPTION => "Refer ISO/TC12 SI Guide"
            ],
            [
                UnitCodes::CODE => "C97",
                UnitCodes::NAME => "reciprocal second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KEL",
                UnitCodes::NAME => "kelvin",
                UnitCodes::DESCRIPTION => "Refer ISO 80000-5 (Quantities and units — Part 5 => Thermodynamics)"
            ],
            [
                UnitCodes::CODE => "D94",
                UnitCodes::NAME => "second per cubic metre radian",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C90",
                UnitCodes::NAME => "reciprocal joule per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C88",
                UnitCodes::NAME => "reciprocal electron volt per cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C61",
                UnitCodes::NAME => "ohm metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A38",
                UnitCodes::NAME => "cubic metre per coulomb",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "VLT",
                UnitCodes::NAME => "volt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D33",
                UnitCodes::NAME => "tesla",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D48",
                UnitCodes::NAME => "volt per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "D49",
                UnitCodes::NAME => "millivolt per kelvin",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "JOU",
                UnitCodes::NAME => "joule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A53",
                UnitCodes::NAME => "electronvolt",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A70",
                UnitCodes::NAME => "femtojoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A13",
                UnitCodes::NAME => "attojoule",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A6",
                UnitCodes::NAME => "ampere per square metre kelvin squared",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "C86",
                UnitCodes::NAME => "reciprocal cubic metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KGM",
                UnitCodes::NAME => "kilogram",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams."
            ],
            [
                UnitCodes::CODE => "33",
                UnitCodes::NAME => "kilopascal square metre per gram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P79",
                UnitCodes::NAME => "pascal square metre per kilogram",
                UnitCodes::DESCRIPTION => "Unit of the burst index as derived unit for pressure pascal related to the substance, represented as a quotient from the SI base unit kilogram divided by the power of the SI base unit metre by exponent 2."
            ],
            [
                UnitCodes::CODE => "34",
                UnitCodes::NAME => "kilopascal per millimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H42",
                UnitCodes::NAME => "pascal per metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "H69",
                UnitCodes::NAME => "picopascal per kilometre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "P80",
                UnitCodes::NAME => "millipascal per metre",
                UnitCodes::DESCRIPTION => "0,001-fold of the derived SI unit pascal divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "P81",
                UnitCodes::NAME => "kilopascal per metre",
                UnitCodes::DESCRIPTION => "1000-fold of the derived SI unit pascal divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "P82",
                UnitCodes::NAME => "hectopascal per metre",
                UnitCodes::DESCRIPTION => "100-fold of the derived SI unit pascal divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "P83",
                UnitCodes::NAME => "standard atmosphere per metre",
                UnitCodes::DESCRIPTION => "Outdated unit of the pressure divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "P84",
                UnitCodes::NAME => "technical atmosphere per metre",
                UnitCodes::DESCRIPTION => "Obsolete and non-legal unit of the pressure which is generated by a 10 metre water column divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "P85",
                UnitCodes::NAME => "torr per metre",
                UnitCodes::DESCRIPTION => "CGS (Centimetre-Gram-Second system) unit of the pressure divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "P86",
                UnitCodes::NAME => "psi per inch",
                UnitCodes::DESCRIPTION => "Compound unit for pressure (pound-force according to the Anglo-American unit system divided by the power of the unit inch according to the Anglo-American and Imperial system of units with the exponent 2) divided by the unit inch according to the Anglo-American and Imperial system of units ."
            ],
            [
                UnitCodes::CODE => "35",
                UnitCodes::NAME => "millilitre per square centimetre second",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "36",
                UnitCodes::NAME => "cubic foot per minute per square foot",
                UnitCodes::DESCRIPTION => "Conversion factor required"
            ],
            [
                UnitCodes::CODE => "P87",
                UnitCodes::NAME => "cubic metre per second square metre",
                UnitCodes::DESCRIPTION => "Unit of volume flow cubic meters by second related to the transmission surface in square metres."
            ],
            [
                UnitCodes::CODE => "OPM",
                UnitCodes::NAME => "oscillations per minute",
                UnitCodes::DESCRIPTION => "The number of oscillation per minute"
            ],
            [
                UnitCodes::CODE => "KNM",
                UnitCodes::NAME => "kilonewton per square metre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "Q35",
                UnitCodes::NAME => "megawatts per minute",
                UnitCodes::DESCRIPTION => "A unit of power defining the total amount of bulk energy transferred or consumer per minute"
            ],
            [
                UnitCodes::CODE => "10",
                UnitCodes::NAME => "group",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of groups (group => set of items classified together)."
            ],
            [
                UnitCodes::CODE => "11",
                UnitCodes::NAME => "outfit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of outfits (outfit => a complete set of equipment / materials / objects used for a specific purpose)."
            ],
            [
                UnitCodes::CODE => "13",
                UnitCodes::NAME => "ration",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of rations (ration => a single portion of provisions)."
            ],
            [
                UnitCodes::CODE => "14",
                UnitCodes::NAME => "shot",
                UnitCodes::DESCRIPTION => "A unit of liquid measure, especially related to spirits."
            ],
            [
                UnitCodes::CODE => "15",
                UnitCodes::NAME => "stick, military",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of military sticks (military stick => bombs or paratroops released in rapid succession from an aircraft)."
            ],
            [
                UnitCodes::CODE => "20",
                UnitCodes::NAME => "twenty foot container",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of shipping containers that measure 20 foot in length."
            ],
            [
                UnitCodes::CODE => "21",
                UnitCodes::NAME => "forty foot container",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of shipping containers that measure 40 foot in length."
            ],
            [
                UnitCodes::CODE => "24",
                UnitCodes::NAME => "theoretical pound",
                UnitCodes::DESCRIPTION => "A unit of mass defining the expected mass of material expressed as the number of pounds."
            ],
            [
                UnitCodes::CODE => "27",
                UnitCodes::NAME => "theoretical ton",
                UnitCodes::DESCRIPTION => "A unit of mass defining the expected mass of material, expressed as the number of tons."
            ],
            [
                UnitCodes::CODE => "38",
                UnitCodes::NAME => "ounce per square foot per 0,01inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "56",
                UnitCodes::NAME => "sitas",
                UnitCodes::DESCRIPTION => "A unit of area for tin plate equal to a surface area of 100 square metres."
            ],
            [
                UnitCodes::CODE => "57",
                UnitCodes::NAME => "mesh",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of strands per inch as a measure of the fineness of a woven product."
            ],
            [
                UnitCodes::CODE => "58",
                UnitCodes::NAME => "net kilogram",
                UnitCodes::DESCRIPTION => "A unit of mass defining the total number of kilograms after deductions."
            ],
            [
                UnitCodes::CODE => "59",
                UnitCodes::NAME => "part per million",
                UnitCodes::DESCRIPTION => "A unit of proportion equal to 10⁻⁶."
            ],
            [
                UnitCodes::CODE => "60",
                UnitCodes::NAME => "percent weight",
                UnitCodes::DESCRIPTION => "A unit of proportion equal to 10⁻²."
            ],
            [
                UnitCodes::CODE => "61",
                UnitCodes::NAME => "part per billion (US)",
                UnitCodes::DESCRIPTION => "A unit of proportion equal to 10⁻⁹."
            ],
            [
                UnitCodes::CODE => "64",
                UnitCodes::NAME => "pound per square inch, gauge",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "66",
                UnitCodes::NAME => "oersted",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "76",
                UnitCodes::NAME => "gauss",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "78",
                UnitCodes::NAME => "kilogauss",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "1I",
                UnitCodes::NAME => "fixed rate",
                UnitCodes::DESCRIPTION => "A unit of quantity expressed as a predetermined or set rate for usage of a facility or service."
            ],
            [
                UnitCodes::CODE => "2G",
                UnitCodes::NAME => "volt AC",
                UnitCodes::DESCRIPTION => "A unit of electric potential in relation to alternating current (AC)."
            ],
            [
                UnitCodes::CODE => "2H",
                UnitCodes::NAME => "volt DC",
                UnitCodes::DESCRIPTION => "A unit of electric potential in relation to direct current (DC)."
            ],
            [
                UnitCodes::CODE => "2P",
                UnitCodes::NAME => "kilobyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10³ (1000) bytes."
            ],
            [
                UnitCodes::CODE => "3C",
                UnitCodes::NAME => "manmonth",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of months for a person or persons to perform an undertaking."
            ],
            [
                UnitCodes::CODE => "4L",
                UnitCodes::NAME => "megabyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10⁶ (1000000) bytes."
            ],
            [
                UnitCodes::CODE => "5B",
                UnitCodes::NAME => "batch",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of batches (batch => quantity of material produced in one operation or number of animals or persons coming at once)."
            ],
            [
                UnitCodes::CODE => "5E",
                UnitCodes::NAME => "MMSCF/day",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one million (1000000) cubic feet of gas per day."
            ],
            [
                UnitCodes::CODE => "5J",
                UnitCodes::NAME => "hydraulic horse power",
                UnitCodes::DESCRIPTION => "A unit of power defining the hydraulic horse power delivered by a fluid pump depending on the viscosity of the fluid."
            ],
            [
                UnitCodes::CODE => "A43",
                UnitCodes::NAME => "deadweight tonnage",
                UnitCodes::DESCRIPTION => "A unit of mass defining the difference between the weight of a ship when completely empty and its weight when completely loaded, expressed as the number of tons."
            ],
            [
                UnitCodes::CODE => "A47",
                UnitCodes::NAME => "decitex",
                UnitCodes::DESCRIPTION => "A unit of yarn density. One decitex equals a mass of 1 gram per 10 kilometres of length."
            ],
            [
                UnitCodes::CODE => "A49",
                UnitCodes::NAME => "denier",
                UnitCodes::DESCRIPTION => "A unit of yarn density. One denier equals a mass of 1 gram per 9 kilometres of length."
            ],
            [
                UnitCodes::CODE => "A59",
                UnitCodes::NAME => "8-part cloud cover",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of eighth-parts as a measure of the celestial dome cloud coverage."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "",
                UnitCodes::DESCRIPTION => "Synonym => OKTA , OCTA"
            ],
            [
                UnitCodes::CODE => "A75",
                UnitCodes::NAME => "freight ton",
                UnitCodes::DESCRIPTION => "A unit of information typically used for billing purposes, defined as either the number of metric tons or the number of cubic metres, whichever is the larger."
            ],
            [
                UnitCodes::CODE => "A77",
                UnitCodes::NAME => "Gaussian CGS (Centimetre-Gram-Second system) unit of displacement",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A78",
                UnitCodes::NAME => "Gaussian CGS (Centimetre-Gram-Second system) unit of electric current",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A79",
                UnitCodes::NAME => "Gaussian CGS (Centimetre-Gram-Second system) unit of electric charge",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A80",
                UnitCodes::NAME => "Gaussian CGS (Centimetre-Gram-Second system) unit of electric field strength",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A81",
                UnitCodes::NAME => "Gaussian CGS (Centimetre-Gram-Second system) unit of electric polarization",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A82",
                UnitCodes::NAME => "Gaussian CGS (Centimetre-Gram-Second system) unit of electric potential",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A83",
                UnitCodes::NAME => "Gaussian CGS (Centimetre-Gram-Second system) unit of magnetization",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "A9",
                UnitCodes::NAME => "rate",
                UnitCodes::DESCRIPTION => "A unit of quantity expressed as a rate for usage of a facility or service."
            ],
            [
                UnitCodes::CODE => "A99",
                UnitCodes::NAME => "bit",
                UnitCodes::DESCRIPTION => "A unit of information equal to one binary digit."
            ],
            [
                UnitCodes::CODE => "AA",
                UnitCodes::NAME => "ball",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of balls (ball => object formed in the shape of sphere)."
            ],
            [
                UnitCodes::CODE => "AB",
                UnitCodes::NAME => "bulk pack",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of items per bulk pack."
            ],
            [
                UnitCodes::CODE => "ACT",
                UnitCodes::NAME => "activity",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of activities (activity => a unit of work or action)."
            ],
            [
                UnitCodes::CODE => "AD",
                UnitCodes::NAME => "byte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 8 bits."
            ],
            [
                UnitCodes::CODE => "AH",
                UnitCodes::NAME => "additional minute",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of minutes in addition to the referenced minutes."
            ],
            [
                UnitCodes::CODE => "AI",
                UnitCodes::NAME => "average minute per call",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of minutes for the average interval of a call."
            ],
            [
                UnitCodes::CODE => "AL",
                UnitCodes::NAME => "access line",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of telephone access lines."
            ],
            [
                UnitCodes::CODE => "AQ",
                UnitCodes::NAME => "anti-hemophilic factor (AHF) unit",
                UnitCodes::DESCRIPTION => "A unit of measure for blood potency (US)."
            ],
            [
                UnitCodes::CODE => "AS",
                UnitCodes::NAME => "assortment",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of assortments (assortment => set of items grouped in a mixed collection)."
            ],
            [
                UnitCodes::CODE => "ASM",
                UnitCodes::NAME => "alcoholic strength by mass",
                UnitCodes::DESCRIPTION => "A unit of mass defining the alcoholic strength of a liquid."
            ],
            [
                UnitCodes::CODE => "ASU",
                UnitCodes::NAME => "alcoholic strength by volume",
                UnitCodes::DESCRIPTION => "A unit of volume defining the alcoholic strength of a liquid (e.g. spirit, wine, beer, etc), often at a specific temperature."
            ],
            [
                UnitCodes::CODE => "AY",
                UnitCodes::NAME => "assembly",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of assemblies (assembly => items that consist of component parts)."
            ],
            [
                UnitCodes::CODE => "B1",
                UnitCodes::NAME => "barrel (US) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B10",
                UnitCodes::NAME => "bit per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to one binary digit per second."
            ],
            [
                UnitCodes::CODE => "B17",
                UnitCodes::NAME => "credit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of entries made to the credit side of an account."
            ],
            [
                UnitCodes::CODE => "B19",
                UnitCodes::NAME => "digit",
                UnitCodes::DESCRIPTION => "A unit of information defining the quantity of numerals used to form a number."
            ],
            [
                UnitCodes::CODE => "B3",
                UnitCodes::NAME => "batting pound",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of pounds of wadded fibre."
            ],
            [
                UnitCodes::CODE => "B30",
                UnitCodes::NAME => "gibibit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2³⁰ bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "B4",
                UnitCodes::NAME => "barrel, imperial",
                UnitCodes::DESCRIPTION => "A unit of volume used to measure beer.  One beer barrel equals 36 imperial gallons."
            ],
            [
                UnitCodes::CODE => "B65",
                UnitCodes::NAME => "maxwell",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "B68",
                UnitCodes::NAME => "gigabit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10⁹ bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "B7",
                UnitCodes::NAME => "cycle",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of cycles (cycle => a recurrent period of definite duration)."
            ],
            [
                UnitCodes::CODE => "B80",
                UnitCodes::NAME => "gigabit per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10⁹ bits (binary digits) per second."
            ],
            [
                UnitCodes::CODE => "B82",
                UnitCodes::NAME => "inch per linear foot",
                UnitCodes::DESCRIPTION => "A unit of length defining the number of inches per linear foot."
            ],
            [
                UnitCodes::CODE => "BB",
                UnitCodes::NAME => "base box",
                UnitCodes::DESCRIPTION => "A unit of area of 112 sheets of tin mil products (tin plate, tin free steel or black plate) 14 by 20 inches, or 31,360 square inches."
            ],
            [
                UnitCodes::CODE => "BFT",
                UnitCodes::NAME => "board foot",
                UnitCodes::DESCRIPTION => "A unit of volume defining the number of cords (cord => a stack of firewood of 128 cubic feet)."
            ],
            [
                UnitCodes::CODE => "BIL",
                UnitCodes::NAME => "billion (EUR)",
                UnitCodes::DESCRIPTION => "Synonym => trillion (US)"
            ],
            [
                UnitCodes::CODE => "BP",
                UnitCodes::NAME => "hundred board foot",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one hundred board foot."
            ],
            [
                UnitCodes::CODE => "BPM",
                UnitCodes::NAME => "beats per minute",
                UnitCodes::DESCRIPTION => "The number of beats per minute."
            ],
            [
                UnitCodes::CODE => "C0",
                UnitCodes::NAME => "call",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of calls (call => communication session or visitation)."
            ],
            [
                UnitCodes::CODE => "C21",
                UnitCodes::NAME => "kibibit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2¹⁰ (1024) bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "C37",
                UnitCodes::NAME => "kilobit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10³ (1000) bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "C74",
                UnitCodes::NAME => "kilobit per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10³ (1000) bits (binary digits) per second."
            ],
            [
                UnitCodes::CODE => "C79",
                UnitCodes::NAME => "kilovolt ampere hour",
                UnitCodes::DESCRIPTION => "A unit of accumulated energy of 1000 volt amperes over a period of one hour."
            ],
            [
                UnitCodes::CODE => "C9",
                UnitCodes::NAME => "coil group",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of coil groups (coil group => groups of items arranged by lengths of those items placed in a joined sequence of concentric circles)."
            ],
            [
                UnitCodes::CODE => "CCT",
                UnitCodes::NAME => "carrying capacity in metric ton",
                UnitCodes::DESCRIPTION => "A unit of mass defining the carrying capacity, expressed as the number of metric tons."
            ],
            [
                UnitCodes::CODE => "CEN",
                UnitCodes::NAME => "hundred",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of units in multiples of 100."
            ],
            [
                UnitCodes::CODE => "CG",
                UnitCodes::NAME => "card",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of units of card (card => thick stiff paper or cardboard)."
            ],
            [
                UnitCodes::CODE => "CLF",
                UnitCodes::NAME => "hundred leave",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of leaves, expressed in units of one hundred leaves."
            ],
            [
                UnitCodes::CODE => "CNP",
                UnitCodes::NAME => "hundred pack",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of hundred-packs (hundred-pack => set of one hundred items packaged together)."
            ],
            [
                UnitCodes::CODE => "CNT",
                UnitCodes::NAME => "cental (UK)",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one hundred weight (US)."
            ],
            [
                UnitCodes::CODE => "CTG",
                UnitCodes::NAME => "content gram",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of grams of a named item in a product."
            ],
            [
                UnitCodes::CODE => "CTM",
                UnitCodes::NAME => "metric carat",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "CTN",
                UnitCodes::NAME => "content ton (metric)",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of metric tons of a named item in a product."
            ],
            [
                UnitCodes::CODE => "D03",
                UnitCodes::NAME => "kilowatt hour per hour",
                UnitCodes::DESCRIPTION => "A unit of accumulated energy of a thousand watts over a period of one hour."
            ],
            [
                UnitCodes::CODE => "D04",
                UnitCodes::NAME => "lot [unit of weight]",
                UnitCodes::DESCRIPTION => "A unit of weight equal to about 1/2 ounce or 15 grams."
            ],
            [
                UnitCodes::CODE => "D11",
                UnitCodes::NAME => "mebibit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2²⁰ (1048576) bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "D23",
                UnitCodes::NAME => "pen gram (protein)",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of grams of amino acid prescribed for parenteral/enteral therapy."
            ],
            [
                UnitCodes::CODE => "D34",
                UnitCodes::NAME => "tex",
                UnitCodes::DESCRIPTION => "A unit of yarn density. One decitex equals a mass of 1 gram per 1 kilometre of length."
            ],
            [
                UnitCodes::CODE => "D36",
                UnitCodes::NAME => "megabit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10⁶ (1000000) bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "D63",
                UnitCodes::NAME => "book",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of books (book => set of items bound together or written document of a material whole)."
            ],
            [
                UnitCodes::CODE => "D65",
                UnitCodes::NAME => "round",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of rounds (round => A circular or cylindrical object)."
            ],
            [
                UnitCodes::CODE => "D68",
                UnitCodes::NAME => "number of words",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of words."
            ],
            [
                UnitCodes::CODE => "D78",
                UnitCodes::NAME => "megajoule per second",
                UnitCodes::DESCRIPTION => "A unit of accumulated energy equal to one million joules per second."
            ],
            [
                UnitCodes::CODE => "DAD",
                UnitCodes::NAME => "ten day",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of days in multiples of 10."
            ],
            [
                UnitCodes::CODE => "DB",
                UnitCodes::NAME => "dry pound",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of pounds of a product, disregarding the water content of the product."
            ],
            [
                UnitCodes::CODE => "DEC",
                UnitCodes::NAME => "decade",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of decades (decade => quantity equal to 10 or time equal to 10 years)."
            ],
            [
                UnitCodes::CODE => "DMO",
                UnitCodes::NAME => "standard kilolitre",
                UnitCodes::DESCRIPTION => "A unit of volume defining the number of kilolitres of a product at a temperature of 15 degrees Celsius, especially in relation to hydrocarbon oils."
            ],
            [
                UnitCodes::CODE => "DPC",
                UnitCodes::NAME => "dozen piece",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pieces in multiples of 12 (piece => a single item, article or exemplar)."
            ],
            [
                UnitCodes::CODE => "DPR",
                UnitCodes::NAME => "dozen pair",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pairs in multiples of 12 (pair => item described by two's)."
            ],
            [
                UnitCodes::CODE => "DPT",
                UnitCodes::NAME => "displacement tonnage",
                UnitCodes::DESCRIPTION => "A unit of mass defining the volume of sea water a ship displaces, expressed as the number of tons."
            ],
            [
                UnitCodes::CODE => "DRA",
                UnitCodes::NAME => "dram (US)",
                UnitCodes::DESCRIPTION => "Synonym => drachm (UK), troy dram"
            ],
            [
                UnitCodes::CODE => "DRI",
                UnitCodes::NAME => "dram (UK)",
                UnitCodes::DESCRIPTION => "Synonym => avoirdupois dram"
            ],
            [
                UnitCodes::CODE => "DRL",
                UnitCodes::NAME => "dozen roll",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of rolls, expressed in twelve roll units."
            ],
            [
                UnitCodes::CODE => "DT",
                UnitCodes::NAME => "dry ton",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of tons of a product, disregarding the water content of the product."
            ],
            [
                UnitCodes::CODE => "DWT",
                UnitCodes::NAME => "pennyweight",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "DZN",
                UnitCodes::NAME => "dozen",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of units in multiples of 12."
            ],
            [
                UnitCodes::CODE => "DZP",
                UnitCodes::NAME => "dozen pack",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of packs in multiples of 12 (pack => standard packaging unit)."
            ],
            [
                UnitCodes::CODE => "E07",
                UnitCodes::NAME => "megawatt hour per hour",
                UnitCodes::DESCRIPTION => "A unit of accumulated energy of a million watts over a period of one hour."
            ],
            [
                UnitCodes::CODE => "E08",
                UnitCodes::NAME => "megawatt per hertz",
                UnitCodes::DESCRIPTION => "A unit of energy expressed as the load change in million watts that will cause a frequency shift of one hertz."
            ],
            [
                UnitCodes::CODE => "E10",
                UnitCodes::NAME => "degree day",
                UnitCodes::DESCRIPTION => "A unit of measure used in meteorology and engineering to measure the demand for heating or cooling over a given period of days."
            ],
            [
                UnitCodes::CODE => "E11",
                UnitCodes::NAME => "gigacalorie",
                UnitCodes::DESCRIPTION => "A unit of heat energy equal to one thousand million calories."
            ],
            [
                UnitCodes::CODE => "E12",
                UnitCodes::NAME => "mille",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of cigarettes in units of 1000."
            ],
            [
                UnitCodes::CODE => "E16",
                UnitCodes::NAME => "million Btu(IT) per hour",
                UnitCodes::DESCRIPTION => "A unit of power equal to one million British thermal units per hour."
            ],
            [
                UnitCodes::CODE => "E17",
                UnitCodes::NAME => "cubic foot per second",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one cubic foot passing a given point in a period of one second."
            ],
            [
                UnitCodes::CODE => "E19",
                UnitCodes::NAME => "ping",
                UnitCodes::DESCRIPTION => "A unit of area equal to 3.3 square metres."
            ],
            [
                UnitCodes::CODE => "E20",
                UnitCodes::NAME => "megabit per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10⁶ (1000000) bits (binary digits) per second."
            ],
            [
                UnitCodes::CODE => "E21",
                UnitCodes::NAME => "shares",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of shares (share => a total or portion of the parts into which a business entity’s capital is divided)."
            ],
            [
                UnitCodes::CODE => "E22",
                UnitCodes::NAME => "TEU",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of twenty-foot equivalent units (TEUs) as a measure of containerized cargo capacity."
            ],
            [
                UnitCodes::CODE => "E23",
                UnitCodes::NAME => "tyre",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of tyres (a solid or air-filled covering placed around a wheel rim to form a soft contact with the road, absorb shock and provide traction)."
            ],
            [
                UnitCodes::CODE => "E25",
                UnitCodes::NAME => "active unit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of active units within a substance."
            ],
            [
                UnitCodes::CODE => "E27",
                UnitCodes::NAME => "dose",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of doses (dose => a definite quantity of a medicine or drug)."
            ],
            [
                UnitCodes::CODE => "E28",
                UnitCodes::NAME => "air dry ton",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of tons of a product, disregarding the water content of the product."
            ],
            [
                UnitCodes::CODE => "E30",
                UnitCodes::NAME => "strand",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of strands (strand => long, thin, flexible, single thread, strip of fibre, constituent filament or multiples of the same, twisted together)."
            ],
            [
                UnitCodes::CODE => "E31",
                UnitCodes::NAME => "square metre per litre",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of square metres per litre."
            ],
            [
                UnitCodes::CODE => "E32",
                UnitCodes::NAME => "litre per hour",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of litres per hour."
            ],
            [
                UnitCodes::CODE => "E33",
                UnitCodes::NAME => "foot per thousand",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of feet per thousand units."
            ],
            [
                UnitCodes::CODE => "E34",
                UnitCodes::NAME => "gigabyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10⁹ bytes."
            ],
            [
                UnitCodes::CODE => "E35",
                UnitCodes::NAME => "terabyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10¹² bytes."
            ],
            [
                UnitCodes::CODE => "E36",
                UnitCodes::NAME => "petabyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10¹⁵ bytes."
            ],
            [
                UnitCodes::CODE => "E37",
                UnitCodes::NAME => "pixel",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pixels (pixel => picture element)."
            ],
            [
                UnitCodes::CODE => "E38",
                UnitCodes::NAME => "megapixel",
                UnitCodes::DESCRIPTION => "A unit of count equal to 10⁶ (1000000) pixels (picture elements)."
            ],
            [
                UnitCodes::CODE => "E39",
                UnitCodes::NAME => "dots per inch",
                UnitCodes::DESCRIPTION => "A unit of information defining the number of dots per linear inch as a measure of the resolution or sharpness of a graphic image."
            ],
            [
                UnitCodes::CODE => "E4",
                UnitCodes::NAME => "gross kilogram",
                UnitCodes::DESCRIPTION => "A unit of mass defining the total number of kilograms before deductions."
            ],
            [
                UnitCodes::CODE => "E40",
                UnitCodes::NAME => "part per hundred thousand",
                UnitCodes::DESCRIPTION => "A unit of proportion equal to 10⁻⁵."
            ],
            [
                UnitCodes::CODE => "E44",
                UnitCodes::NAME => "kilogram-force metre per square centimetre",
                UnitCodes::DESCRIPTION => "A unit of torsion defining the torque kilogram-force metre per square centimetre."
            ],
            [
                UnitCodes::CODE => "E46",
                UnitCodes::NAME => "kilowatt hour per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of energy consumption expressed as kilowatt hour per cubic metre."
            ],
            [
                UnitCodes::CODE => "E47",
                UnitCodes::NAME => "kilowatt hour per kelvin",
                UnitCodes::DESCRIPTION => "A unit of energy consumption expressed as kilowatt hour per kelvin."
            ],
            [
                UnitCodes::CODE => "E48",
                UnitCodes::NAME => "service unit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of service units (service unit => defined period / property / facility / utility of supply)."
            ],
            [
                UnitCodes::CODE => "E49",
                UnitCodes::NAME => "working day",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of working days (working day => a day on which work is ordinarily performed)."
            ],
            [
                UnitCodes::CODE => "E50",
                UnitCodes::NAME => "accounting unit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of accounting units."
            ],
            [
                UnitCodes::CODE => "E51",
                UnitCodes::NAME => "job",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of jobs."
            ],
            [
                UnitCodes::CODE => "E52",
                UnitCodes::NAME => "run foot",
                UnitCodes::DESCRIPTION => "A unit of count defining the number feet per run."
            ],
            [
                UnitCodes::CODE => "E53",
                UnitCodes::NAME => "test",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of tests."
            ],
            [
                UnitCodes::CODE => "E54",
                UnitCodes::NAME => "trip",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of trips."
            ],
            [
                UnitCodes::CODE => "E55",
                UnitCodes::NAME => "use",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of times an object is used."
            ],
            [
                UnitCodes::CODE => "E56",
                UnitCodes::NAME => "well",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of wells."
            ],
            [
                UnitCodes::CODE => "E57",
                UnitCodes::NAME => "zone",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of zones."
            ],
            [
                UnitCodes::CODE => "E58",
                UnitCodes::NAME => "exabit per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10¹⁸ bits (binary digits) per second."
            ],
            [
                UnitCodes::CODE => "E59",
                UnitCodes::NAME => "exbibyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁶⁰ bytes."
            ],
            [
                UnitCodes::CODE => "E60",
                UnitCodes::NAME => "pebibyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁵⁰ bytes."
            ],
            [
                UnitCodes::CODE => "E61",
                UnitCodes::NAME => "tebibyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁴⁰ bytes."
            ],
            [
                UnitCodes::CODE => "E62",
                UnitCodes::NAME => "gibibyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2³⁰ bytes."
            ],
            [
                UnitCodes::CODE => "E63",
                UnitCodes::NAME => "mebibyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2²⁰ bytes."
            ],
            [
                UnitCodes::CODE => "E64",
                UnitCodes::NAME => "kibibyte",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2¹⁰ bytes."
            ],
            [
                UnitCodes::CODE => "E65",
                UnitCodes::NAME => "exbibit per metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁶⁰ bits (binary digits) per metre."
            ],
            [
                UnitCodes::CODE => "E66",
                UnitCodes::NAME => "exbibit per square metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁶⁰ bits (binary digits) per square metre."
            ],
            [
                UnitCodes::CODE => "E67",
                UnitCodes::NAME => "exbibit per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁶⁰ bits (binary digits) per cubic metre."
            ],
            [
                UnitCodes::CODE => "E68",
                UnitCodes::NAME => "gigabyte per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10⁹ bytes per second."
            ],
            [
                UnitCodes::CODE => "E69",
                UnitCodes::NAME => "gibibit per metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2³⁰ bits (binary digits) per metre."
            ],
            [
                UnitCodes::CODE => "E70",
                UnitCodes::NAME => "gibibit per square metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2³⁰ bits (binary digits) per square metre."
            ],
            [
                UnitCodes::CODE => "E71",
                UnitCodes::NAME => "gibibit per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2³⁰ bits (binary digits) per cubic metre."
            ],
            [
                UnitCodes::CODE => "E72",
                UnitCodes::NAME => "kibibit per metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2¹⁰ bits (binary digits) per metre."
            ],
            [
                UnitCodes::CODE => "E73",
                UnitCodes::NAME => "kibibit per square metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2¹⁰ bits (binary digits) per square metre."
            ],
            [
                UnitCodes::CODE => "E74",
                UnitCodes::NAME => "kibibit per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2¹⁰ bits (binary digits) per cubic metre."
            ],
            [
                UnitCodes::CODE => "E75",
                UnitCodes::NAME => "mebibit per metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2²⁰ bits (binary digits) per metre."
            ],
            [
                UnitCodes::CODE => "E76",
                UnitCodes::NAME => "mebibit per square metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2²⁰ bits (binary digits) per square metre."
            ],
            [
                UnitCodes::CODE => "E77",
                UnitCodes::NAME => "mebibit per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2²⁰ bits (binary digits) per cubic metre."
            ],
            [
                UnitCodes::CODE => "E78",
                UnitCodes::NAME => "petabit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10¹⁵ bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "E79",
                UnitCodes::NAME => "petabit per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10¹⁵ bits (binary digits) per second."
            ],
            [
                UnitCodes::CODE => "E80",
                UnitCodes::NAME => "pebibit per metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁵⁰ bits (binary digits) per metre."
            ],
            [
                UnitCodes::CODE => "E81",
                UnitCodes::NAME => "pebibit per square metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁵⁰ bits (binary digits) per square metre."
            ],
            [
                UnitCodes::CODE => "E82",
                UnitCodes::NAME => "pebibit per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁵⁰ bits (binary digits) per cubic metre."
            ],
            [
                UnitCodes::CODE => "E83",
                UnitCodes::NAME => "terabit",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10¹² bits (binary digits)."
            ],
            [
                UnitCodes::CODE => "E84",
                UnitCodes::NAME => "terabit per second",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10¹² bits (binary digits) per second."
            ],
            [
                UnitCodes::CODE => "E85",
                UnitCodes::NAME => "tebibit per metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁴⁰ bits (binary digits) per metre."
            ],
            [
                UnitCodes::CODE => "E86",
                UnitCodes::NAME => "tebibit per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁴⁰ bits (binary digits) per cubic metre."
            ],
            [
                UnitCodes::CODE => "E87",
                UnitCodes::NAME => "tebibit per square metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 2⁴⁰ bits (binary digits) per square metre."
            ],
            [
                UnitCodes::CODE => "E88",
                UnitCodes::NAME => "bit per metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 1 bit (binary digit) per metre."
            ],
            [
                UnitCodes::CODE => "E89",
                UnitCodes::NAME => "bit per square metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 1 bit (binary digit) per square metre."
            ],
            [
                UnitCodes::CODE => "E90",
                UnitCodes::NAME => "reciprocal centimetre",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "E91",
                UnitCodes::NAME => "reciprocal day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "EA",
                UnitCodes::NAME => "each",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of items regarded as separate units."
            ],
            [
                UnitCodes::CODE => "EB",
                UnitCodes::NAME => "electronic mail box",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of electronic mail boxes."
            ],
            [
                UnitCodes::CODE => "EQ",
                UnitCodes::NAME => "equivalent gallon",
                UnitCodes::DESCRIPTION => "A unit of volume defining the number of gallons of product produced from concentrate."
            ],
            [
                UnitCodes::CODE => "F01",
                UnitCodes::NAME => "bit per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of information equal to 1 bit (binary digit) per cubic metre."
            ],
            [
                UnitCodes::CODE => "FBM",
                UnitCodes::NAME => "fibre metre",
                UnitCodes::DESCRIPTION => "A unit of length defining the number of metres of individual fibre."
            ],
            [
                UnitCodes::CODE => "FC",
                UnitCodes::NAME => "thousand cubic foot",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one thousand cubic foot."
            ],
            [
                UnitCodes::CODE => "FF",
                UnitCodes::NAME => "hundred cubic metre",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one hundred cubic metres."
            ],
            [
                UnitCodes::CODE => "FIT",
                UnitCodes::NAME => "failures in time",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of failures that can be expected over a specified time interval. Failure rates of semiconductor components are often specified as FIT (failures in time unit) where 1 FIT = 10⁻⁹ /h."
            ],
            [
                UnitCodes::CODE => "FL",
                UnitCodes::NAME => "flake ton",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of tons of a flaked substance (flake => a small flattish fragment)."
            ],
            [
                UnitCodes::CODE => "GB",
                UnitCodes::NAME => "gallon (US) per day",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GDW",
                UnitCodes::NAME => "gram, dry weight",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of grams of a product, disregarding the water content of the product."
            ],
            [
                UnitCodes::CODE => "GFI",
                UnitCodes::NAME => "gram of fissile isotope",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of grams of a fissile isotope (fissile isotope => an isotope whose nucleus is able to be split when irradiated with low energy neutrons)."
            ],
            [
                UnitCodes::CODE => "GGR",
                UnitCodes::NAME => "great gross",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of units in multiples of 1728 (12 x 12 x 12)."
            ],
            [
                UnitCodes::CODE => "GIA",
                UnitCodes::NAME => "gill (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GIC",
                UnitCodes::NAME => "gram, including container",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of grams of a product, including its container."
            ],
            [
                UnitCodes::CODE => "GII",
                UnitCodes::NAME => "gill (UK)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "GIP",
                UnitCodes::NAME => "gram, including inner packaging",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of grams of a product, including its inner packaging materials."
            ],
            [
                UnitCodes::CODE => "GRO",
                UnitCodes::NAME => "gross",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of units in multiples of 144 (12 x 12)."
            ],
            [
                UnitCodes::CODE => "GRT",
                UnitCodes::NAME => "gross register ton",
                UnitCodes::DESCRIPTION => "A unit of mass equal to the total cubic footage before deductions, where 1 register ton is equal to 100 cubic feet. Refer International Convention on tonnage measurement of ships."
            ],
            [
                UnitCodes::CODE => "GT",
                UnitCodes::NAME => "gross ton",
                UnitCodes::DESCRIPTION => "A unit of mass equal to 2240 pounds. Refer International Convention on Tonnage measurement of Ships."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "",
                UnitCodes::DESCRIPTION => "Synonym => ton (UK) or long ton (US) (common code LTN)"
            ],
            [
                UnitCodes::CODE => "H21",
                UnitCodes::NAME => "blank",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of blanks."
            ],
            [
                UnitCodes::CODE => "H25",
                UnitCodes::NAME => "percent per kelvin",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to the SI base unit Kelvin."
            ],
            [
                UnitCodes::CODE => "H71",
                UnitCodes::NAME => "percent per month",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to a month."
            ],
            [
                UnitCodes::CODE => "H72",
                UnitCodes::NAME => "percent per hectobar",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to 100-fold of the unit bar."
            ],
            [
                UnitCodes::CODE => "H73",
                UnitCodes::NAME => "percent per decakelvin",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to 10-fold of the SI base unit Kelvin."
            ],
            [
                UnitCodes::CODE => "H77",
                UnitCodes::NAME => "module width",
                UnitCodes::DESCRIPTION => "A unit of measure used to describe the breadth of electronic assemblies as an installation standard or mounting dimension."
            ],
            [
                UnitCodes::CODE => "H80",
                UnitCodes::NAME => "rack unit",
                UnitCodes::DESCRIPTION => "A unit of measure used to describe the height in rack units of equipment intended for mounting in a 19-inch rack or a 23-inch rack. One rack unit is 1.75 inches (44.45 mm) high."
            ],
            [
                UnitCodes::CODE => "H82",
                UnitCodes::NAME => "big point",
                UnitCodes::DESCRIPTION => "A unit of length defining the number of big points (big point => Adobe software(US) defines the big point to be exactly 1/72 inch (0.013 888 9 inch or 0.352 777 8 millimeters))"
            ],
            [
                UnitCodes::CODE => "H87",
                UnitCodes::NAME => "piece",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pieces (piece => a single item, article or exemplar)."
            ],
            [
                UnitCodes::CODE => "H89",
                UnitCodes::NAME => "percent per ohm",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to the SI derived unit ohm."
            ],
            [
                UnitCodes::CODE => "H90",
                UnitCodes::NAME => "percent per degree",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to an angle of one degree."
            ],
            [
                UnitCodes::CODE => "H91",
                UnitCodes::NAME => "percent per ten thousand",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to multiples of ten thousand."
            ],
            [
                UnitCodes::CODE => "H92",
                UnitCodes::NAME => "percent per one hundred thousand",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to multiples of one hundred thousand."
            ],
            [
                UnitCodes::CODE => "H93",
                UnitCodes::NAME => "percent per hundred",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to multiples of one hundred."
            ],
            [
                UnitCodes::CODE => "H94",
                UnitCodes::NAME => "percent per thousand",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to multiples of one thousand."
            ],
            [
                UnitCodes::CODE => "H95",
                UnitCodes::NAME => "percent per volt",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to the SI derived unit volt."
            ],
            [
                UnitCodes::CODE => "H96",
                UnitCodes::NAME => "percent per bar",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to an atmospheric pressure of one bar."
            ],
            [
                UnitCodes::CODE => "H98",
                UnitCodes::NAME => "percent per inch",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to an inch."
            ],
            [
                UnitCodes::CODE => "H99",
                UnitCodes::NAME => "percent per metre",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to a metre."
            ],
            [
                UnitCodes::CODE => "HA",
                UnitCodes::NAME => "hank",
                UnitCodes::DESCRIPTION => "A unit of length, typically for yarn."
            ],
            [
                UnitCodes::CODE => "HBX",
                UnitCodes::NAME => "hundred boxes",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of boxes in multiples of one hundred box units."
            ],
            [
                UnitCodes::CODE => "HC",
                UnitCodes::NAME => "hundred count",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of units counted in multiples of 100."
            ],
            [
                UnitCodes::CODE => "HDW",
                UnitCodes::NAME => "hundred kilogram, dry weight",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of hundred kilograms of a product, disregarding the water content of the product."
            ],
            [
                UnitCodes::CODE => "HEA",
                UnitCodes::NAME => "head",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of heads (head => a person or animal considered as one of a number)."
            ],
            [
                UnitCodes::CODE => "HH",
                UnitCodes::NAME => "hundred cubic foot",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one hundred cubic foot."
            ],
            [
                UnitCodes::CODE => "HIU",
                UnitCodes::NAME => "hundred international unit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of international units in multiples of 100."
            ],
            [
                UnitCodes::CODE => "HKM",
                UnitCodes::NAME => "hundred kilogram, net mass",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of hundred kilograms of a product, after deductions."
            ],
            [
                UnitCodes::CODE => "HMQ",
                UnitCodes::NAME => "million cubic metre",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one million cubic metres."
            ],
            [
                UnitCodes::CODE => "HPA",
                UnitCodes::NAME => "hectolitre of pure alcohol",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one hundred litres of pure alcohol."
            ],
            [
                UnitCodes::CODE => "IE",
                UnitCodes::NAME => "person",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of persons."
            ],
            [
                UnitCodes::CODE => "ISD",
                UnitCodes::NAME => "international sugar degree",
                UnitCodes::DESCRIPTION => "A unit of measure defining the sugar content of a solution, expressed in degrees."
            ],
            [
                UnitCodes::CODE => "IUG",
                UnitCodes::NAME => "international unit per gram",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of international units per gram."
            ],
            [
                UnitCodes::CODE => "J10",
                UnitCodes::NAME => "percent per millimetre",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to a millimetre."
            ],
            [
                UnitCodes::CODE => "J12",
                UnitCodes::NAME => "per mille per psi",
                UnitCodes::DESCRIPTION => "A unit of pressure equal to one thousandth of a psi (pound-force per square inch)."
            ],
            [
                UnitCodes::CODE => "J13",
                UnitCodes::NAME => "degree API",
                UnitCodes::DESCRIPTION => "A unit of relative density as a measure of how heavy or light a petroleum liquid is compared to water (API => American Petroleum Institute)."
            ],
            [
                UnitCodes::CODE => "J14",
                UnitCodes::NAME => "degree Baume (origin scale)",
                UnitCodes::DESCRIPTION => "A traditional unit of relative density for liquids. Named after Antoine Baumé."
            ],
            [
                UnitCodes::CODE => "J15",
                UnitCodes::NAME => "degree Baume (US heavy)",
                UnitCodes::DESCRIPTION => "A unit of relative density for liquids heavier than water."
            ],
            [
                UnitCodes::CODE => "J16",
                UnitCodes::NAME => "degree Baume (US light)",
                UnitCodes::DESCRIPTION => "A unit of relative density for liquids lighter than water."
            ],
            [
                UnitCodes::CODE => "J17",
                UnitCodes::NAME => "degree Balling",
                UnitCodes::DESCRIPTION => "A unit of density as a measure of sugar content, especially of beer wort. Named after Karl Balling."
            ],
            [
                UnitCodes::CODE => "J18",
                UnitCodes::NAME => "degree Brix",
                UnitCodes::DESCRIPTION => "A unit of proportion used in measuring the dissolved sugar-to-water mass ratio of a liquid. Named after Adolf Brix."
            ],
            [
                UnitCodes::CODE => "J27",
                UnitCodes::NAME => "degree Oechsle",
                UnitCodes::DESCRIPTION => "A unit of density as a measure of sugar content of must, the unfermented liqueur from which wine is made. Named after Ferdinand Oechsle."
            ],
            [
                UnitCodes::CODE => "J31",
                UnitCodes::NAME => "degree Twaddell",
                UnitCodes::DESCRIPTION => "A unit of density for liquids that are heavier than water.  1 degree Twaddle represents a difference in specific gravity of 0.005."
            ],
            [
                UnitCodes::CODE => "J38",
                UnitCodes::NAME => "baud",
                UnitCodes::DESCRIPTION => "A unit of signal transmission speed equal to one signalling event per second."
            ],
            [
                UnitCodes::CODE => "J54",
                UnitCodes::NAME => "megabaud",
                UnitCodes::DESCRIPTION => "A unit of signal transmission speed equal to 10⁶ (1000000) signaling events per second."
            ],
            [
                UnitCodes::CODE => "JNT",
                UnitCodes::NAME => "pipeline joint",
                UnitCodes::DESCRIPTION => "A count of the number of pipeline joints."
            ],
            [
                UnitCodes::CODE => "JPS",
                UnitCodes::NAME => "hundred metre",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of 100 metre lengths."
            ],
            [
                UnitCodes::CODE => "JWL",
                UnitCodes::NAME => "number of jewels",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of jewels (jewel => precious stone)."
            ],
            [
                UnitCodes::CODE => "K1",
                UnitCodes::NAME => "kilowatt demand",
                UnitCodes::DESCRIPTION => "A unit of measure defining the power load measured at predetermined intervals."
            ],
            [
                UnitCodes::CODE => "K2",
                UnitCodes::NAME => "kilovolt ampere reactive demand",
                UnitCodes::DESCRIPTION => "A unit of measure defining the reactive power demand equal to one kilovolt ampere of reactive power."
            ],
            [
                UnitCodes::CODE => "K3",
                UnitCodes::NAME => "kilovolt ampere reactive hour",
                UnitCodes::DESCRIPTION => "A unit of measure defining the accumulated reactive energy equal to one kilovolt ampere of reactive power per hour."
            ],
            [
                UnitCodes::CODE => "K50",
                UnitCodes::NAME => "kilobaud",
                UnitCodes::DESCRIPTION => "A unit of signal transmission speed equal to 10³ (1000) signaling events per second."
            ],
            [
                UnitCodes::CODE => "KA",
                UnitCodes::NAME => "cake",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of cakes (cake => object shaped into a flat, compact mass)."
            ],
            [
                UnitCodes::CODE => "KB",
                UnitCodes::NAME => "kilocharacter",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10³ (1000) characters."
            ],
            [
                UnitCodes::CODE => "KCC",
                UnitCodes::NAME => "kilogram of choline chloride",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of choline chloride."
            ],
            [
                UnitCodes::CODE => "KDW",
                UnitCodes::NAME => "kilogram drained net weight",
                UnitCodes::DESCRIPTION => "A unit of mass defining the net number of kilograms of a product, disregarding the liquid content of the product."
            ],
            [
                UnitCodes::CODE => "KHY",
                UnitCodes::NAME => "kilogram of hydrogen peroxide",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of hydrogen peroxide."
            ],
            [
                UnitCodes::CODE => "KI",
                UnitCodes::NAME => "kilogram per millimetre width",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "KIC",
                UnitCodes::NAME => "kilogram, including container",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of kilograms of a product, including its container."
            ],
            [
                UnitCodes::CODE => "KIP",
                UnitCodes::NAME => "kilogram, including inner packaging",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of kilograms of a product, including its inner packaging materials."
            ],
            [
                UnitCodes::CODE => "KJ",
                UnitCodes::NAME => "kilosegment",
                UnitCodes::DESCRIPTION => "A unit of information equal to 10³ (1000) segments."
            ],
            [
                UnitCodes::CODE => "KLK",
                UnitCodes::NAME => "lactic dry material percentage",
                UnitCodes::DESCRIPTION => "A unit of proportion defining the percentage of dry lactic material in a product."
            ],
            [
                UnitCodes::CODE => "KMA",
                UnitCodes::NAME => "kilogram of methylamine",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of methylamine."
            ],
            [
                UnitCodes::CODE => "KNI",
                UnitCodes::NAME => "kilogram of nitrogen",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of nitrogen."
            ],
            [
                UnitCodes::CODE => "KNS",
                UnitCodes::NAME => "kilogram named substance",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one kilogram of a named substance."
            ],
            [
                UnitCodes::CODE => "KO",
                UnitCodes::NAME => "milliequivalence caustic potash per gram of product",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of milligrams of potassium hydroxide per gram of product as a measure of the concentration of potassium hydroxide in the product."
            ],
            [
                UnitCodes::CODE => "KPH",
                UnitCodes::NAME => "kilogram of potassium hydroxide (caustic potash)",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of potassium hydroxide (caustic potash)."
            ],
            [
                UnitCodes::CODE => "KPO",
                UnitCodes::NAME => "kilogram of potassium oxide",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of potassium oxide."
            ],
            [
                UnitCodes::CODE => "KPP",
                UnitCodes::NAME => "kilogram of phosphorus pentoxide (phosphoric anhydride)",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of phosphorus pentoxide phosphoric anhydride."
            ],
            [
                UnitCodes::CODE => "KSD",
                UnitCodes::NAME => "kilogram of substance 90 % dry",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of a named substance that is 90% dry."
            ],
            [
                UnitCodes::CODE => "KSH",
                UnitCodes::NAME => "kilogram of sodium hydroxide (caustic soda)",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of sodium hydroxide (caustic soda)."
            ],
            [
                UnitCodes::CODE => "KT",
                UnitCodes::NAME => "kit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of kits (kit => tub, barrel or pail)."
            ],
            [
                UnitCodes::CODE => "KUR",
                UnitCodes::NAME => "kilogram of uranium",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of uranium."
            ],
            [
                UnitCodes::CODE => "KWY",
                UnitCodes::NAME => "kilowatt year",
                UnitCodes::DESCRIPTION => "killowatt year"
            ],
            [
                UnitCodes::CODE => "KWO",
                UnitCodes::NAME => "kilogram of tungsten trioxide",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of tungsten trioxide."
            ],
            [
                UnitCodes::CODE => "LAC",
                UnitCodes::NAME => "lactose excess percentage",
                UnitCodes::DESCRIPTION => "A unit of proportion defining the percentage of lactose in a product that exceeds a defined percentage level."
            ],
            [
                UnitCodes::CODE => "LBT",
                UnitCodes::NAME => "troy pound (US)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "LEF",
                UnitCodes::NAME => "leaf",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of leaves."
            ],
            [
                UnitCodes::CODE => "LF",
                UnitCodes::NAME => "linear foot",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of feet (12-inch) in length of a uniform width object."
            ],
            [
                UnitCodes::CODE => "LH",
                UnitCodes::NAME => "labour hour",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of labour hours."
            ],
            [
                UnitCodes::CODE => "LK",
                UnitCodes::NAME => "link",
                UnitCodes::DESCRIPTION => "A unit of distance equal to 0.01 chain."
            ],
            [
                UnitCodes::CODE => "LM",
                UnitCodes::NAME => "linear metre",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of metres in length of a uniform width object."
            ],
            [
                UnitCodes::CODE => "LN",
                UnitCodes::NAME => "length",
                UnitCodes::DESCRIPTION => "A unit of distance defining the linear extent of an item measured from end to end."
            ],
            [
                UnitCodes::CODE => "LO",
                UnitCodes::NAME => "lot [unit of procurement]",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of lots (lot => a collection of associated items)."
            ],
            [
                UnitCodes::CODE => "LP",
                UnitCodes::NAME => "liquid pound",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of pounds of a liquid substance."
            ],
            [
                UnitCodes::CODE => "LPA",
                UnitCodes::NAME => "litre of pure alcohol",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one litre of pure alcohol."
            ],
            [
                UnitCodes::CODE => "LR",
                UnitCodes::NAME => "layer",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of layers."
            ],
            [
                UnitCodes::CODE => "LS",
                UnitCodes::NAME => "lump sum",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of whole or a complete monetary amounts."
            ],
            [
                UnitCodes::CODE => "LUB",
                UnitCodes::NAME => "metric ton, lubricating oil",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of metric tons of lubricating oil."
            ],
            [
                UnitCodes::CODE => "LY",
                UnitCodes::NAME => "linear yard",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of 36-inch units in length of a uniform width object."
            ],
            [
                UnitCodes::CODE => "M19",
                UnitCodes::NAME => "Beaufort",
                UnitCodes::DESCRIPTION => "An empirical measure for describing wind speed based mainly on observed sea conditions. The Beaufort scale indicates the wind speed by numbers that typically range from 0 for calm, to 12 for hurricane."
            ],
            [
                UnitCodes::CODE => "M25",
                UnitCodes::NAME => "percent per degree Celsius",
                UnitCodes::DESCRIPTION => "A unit of proportion, equal to 0.01, in relation to a temperature of one degree."
            ],
            [
                UnitCodes::CODE => "M36",
                UnitCodes::NAME => "30-day month",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of months expressed in multiples of 30 days, one day equals 24 hours."
            ],
            [
                UnitCodes::CODE => "M37",
                UnitCodes::NAME => "actual/360",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of years expressed in multiples of 360 days, one day equals 24 hours."
            ],
            [
                UnitCodes::CODE => "M4",
                UnitCodes::NAME => "monetary value",
                UnitCodes::DESCRIPTION => "A unit of measure expressed as a monetary amount."
            ],
            [
                UnitCodes::CODE => "M9",
                UnitCodes::NAME => "million Btu per 1000 cubic foot",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MAH",
                UnitCodes::NAME => "megavolt ampere reactive hour",
                UnitCodes::DESCRIPTION => "A unit of electrical reactive power defining the total amount of reactive power across a power system."
            ],
            [
                UnitCodes::CODE => "MBE",
                UnitCodes::NAME => "thousand standard brick equivalent",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of one thousand brick equivalent units."
            ],
            [
                UnitCodes::CODE => "MBF",
                UnitCodes::NAME => "thousand board foot",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one thousand board foot."
            ],
            [
                UnitCodes::CODE => "MD",
                UnitCodes::NAME => "air dry metric ton",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of metric tons of a product, disregarding the water content of the product."
            ],
            [
                UnitCodes::CODE => "MIL",
                UnitCodes::NAME => "thousand",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MIO",
                UnitCodes::NAME => "million",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "MIU",
                UnitCodes::NAME => "million international unit",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of international units in multiples of 10⁶."
            ],
            [
                UnitCodes::CODE => "MLD",
                UnitCodes::NAME => "milliard",
                UnitCodes::DESCRIPTION => "Synonym => billion (US)"
            ],
            [
                UnitCodes::CODE => "MND",
                UnitCodes::NAME => "kilogram, dry weight",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of kilograms of a product, disregarding the water content of the product."
            ],
            [
                UnitCodes::CODE => "N1",
                UnitCodes::NAME => "pen calorie",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of calories prescribed daily for parenteral/enteral therapy."
            ],
            [
                UnitCodes::CODE => "N3",
                UnitCodes::NAME => "print point",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "NAR",
                UnitCodes::NAME => "number of articles",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of articles (article => item)."
            ],
            [
                UnitCodes::CODE => "NCL",
                UnitCodes::NAME => "number of cells",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of cells (cell => an enclosed or circumscribed space, cavity, or volume)."
            ],
            [
                UnitCodes::CODE => "NF",
                UnitCodes::NAME => "message",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of messages."
            ],
            [
                UnitCodes::CODE => "NIL",
                UnitCodes::NAME => "nil",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of instances of nothing."
            ],
            [
                UnitCodes::CODE => "NIU",
                UnitCodes::NAME => "number of international units",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of international units."
            ],
            [
                UnitCodes::CODE => "NL",
                UnitCodes::NAME => "load",
                UnitCodes::DESCRIPTION => "A unit of volume defining the number of loads (load => a quantity of items carried or processed at one time)."
            ],
            [
                UnitCodes::CODE => "NMP",
                UnitCodes::NAME => "number of packs",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of packs (pack => a collection of objects packaged together)."
            ],
            [
                UnitCodes::CODE => "NPR",
                UnitCodes::NAME => "number of pairs",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pairs (pair => item described by two's)."
            ],
            [
                UnitCodes::CODE => "NPT",
                UnitCodes::NAME => "number of parts",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of parts (part => component of a larger entity)."
            ],
            [
                UnitCodes::CODE => "NT",
                UnitCodes::NAME => "net ton",
                UnitCodes::DESCRIPTION => "A unit of mass equal to 2000 pounds, see ton (US).  Refer International Convention on tonnage measurement of Ships."
            ],
            [
                UnitCodes::CODE => "NTT",
                UnitCodes::NAME => "net register ton",
                UnitCodes::DESCRIPTION => "A unit of mass equal to the total cubic footage after deductions, where 1 register ton is equal to 100 cubic feet. Refer International Convention on tonnage measurement of Ships."
            ],
            [
                UnitCodes::CODE => "NX",
                UnitCodes::NAME => "part per thousand",
                UnitCodes::DESCRIPTION => "A unit of proportion equal to 10⁻³."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "",
                UnitCodes::DESCRIPTION => "Synonym => per mille"
            ],
            [
                UnitCodes::CODE => "OA",
                UnitCodes::NAME => "panel",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of panels (panel => a distinct, usually rectangular, section of a surface)."
            ],
            [
                UnitCodes::CODE => "ODE",
                UnitCodes::NAME => "ozone depletion equivalent",
                UnitCodes::DESCRIPTION => "A unit of mass defining the ozone depletion potential in kilograms of a product relative to the calculated depletion for the reference substance, Trichlorofluoromethane (CFC-11)."
            ],
            [
                UnitCodes::CODE => "ODG",
                UnitCodes::NAME => "ODS Grams",
                UnitCodes::DESCRIPTION => "A unit of measure calculated by multiplying the mass of the substance in grams and the ozone-depleting potential for the substance."
            ],
            [
                UnitCodes::CODE => "ODK",
                UnitCodes::NAME => "ODS Kilograms",
                UnitCodes::DESCRIPTION => "A unit of measure calculated by multiplying the mass of the substance in kilograms and the ozone-depleting potential for the substance."
            ],
            [
                UnitCodes::CODE => "ODM",
                UnitCodes::NAME => "ODS Milligrams",
                UnitCodes::DESCRIPTION => "A unit of measure calculated by multiplying the mass of the substance in milligrams and the ozone-depleting potential for the substance."
            ],
            [
                UnitCodes::CODE => "OT",
                UnitCodes::NAME => "overtime hour",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of overtime hours."
            ],
            [
                UnitCodes::CODE => "OZ",
                UnitCodes::NAME => "ounce av",
                UnitCodes::DESCRIPTION => "A unit of measure equal to 1/16 of a pound or about 28.3495 grams (av = avoirdupois). Use ounce (common code ONZ)."
            ],
            [
                UnitCodes::CODE => "P1",
                UnitCodes::NAME => "percent",
                UnitCodes::DESCRIPTION => "A unit of proportion equal to 0.01."
            ],
            [
                UnitCodes::CODE => "P5",
                UnitCodes::NAME => "five pack",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of five-packs (five-pack => set of five items packaged together)."
            ],
            [
                UnitCodes::CODE => "P88",
                UnitCodes::NAME => "rhe",
                UnitCodes::DESCRIPTION => "Non SI-conforming unit of fluidity of dynamic viscosity."
            ],
            [
                UnitCodes::CODE => "P89",
                UnitCodes::NAME => "pound-force foot per inch",
                UnitCodes::DESCRIPTION => "Unit for length-related rotational moment according to the Anglo-American and Imperial system of units."
            ],
            [
                UnitCodes::CODE => "P90",
                UnitCodes::NAME => "pound-force inch per inch",
                UnitCodes::DESCRIPTION => "Unit for length-related rotational moment according to the Anglo-American and Imperial system of units."
            ],
            [
                UnitCodes::CODE => "P91",
                UnitCodes::NAME => "perm (0 ºC)",
                UnitCodes::DESCRIPTION => "Traditional unit for the ability of a material to allow the transition of the steam, defined at a temperature of 0 °C as steam transmittance, where the mass of one grain steam penetrates an area of one foot squared at a pressure from one inch mercury per hour."
            ],
            [
                UnitCodes::CODE => "P92",
                UnitCodes::NAME => "perm (23 ºC)",
                UnitCodes::DESCRIPTION => "Traditional unit for the ability of a material to allow the transition of the steam, defined at a temperature of 23 °C as steam transmittance at which the mass of one grain of steam penetrates an area of one square foot at a pressure of one inch mercury per hour."
            ],
            [
                UnitCodes::CODE => "P93",
                UnitCodes::NAME => "byte per second",
                UnitCodes::DESCRIPTION => "Unit byte divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P94",
                UnitCodes::NAME => "kilobyte per second",
                UnitCodes::DESCRIPTION => "1000-fold of the unit byte divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P95",
                UnitCodes::NAME => "megabyte per second",
                UnitCodes::DESCRIPTION => "1 000 000-fold of the unit byte divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "P96",
                UnitCodes::NAME => "reciprocal volt",
                UnitCodes::DESCRIPTION => "Reciprocal of the derived SI unit volt."
            ],
            [
                UnitCodes::CODE => "P97",
                UnitCodes::NAME => "reciprocal radian",
                UnitCodes::DESCRIPTION => "Reciprocal of the unit radian."
            ],
            [
                UnitCodes::CODE => "P98",
                UnitCodes::NAME => "pascal to the power sum of stoichiometric numbers",
                UnitCodes::DESCRIPTION => "Unit of the equilibrium constant on the basis of the pressure(ISO 80000-9 =>2009, 9-35.a)."
            ],
            [
                UnitCodes::CODE => "P99",
                UnitCodes::NAME => "mole per cubiv metre to the power sum of stoichiometric numbers",
                UnitCodes::DESCRIPTION => "Unit of the equilibrium constant on the basis of the concentration (ISO 80000-9 =>2009, 9-36.a)."
            ],
            [
                UnitCodes::CODE => "PD",
                UnitCodes::NAME => "pad",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pads (pad => block of paper sheets fastened together at one end)."
            ],
            [
                UnitCodes::CODE => "PFL",
                UnitCodes::NAME => "proof litre",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one litre of proof spirits, or the alcohol equivalent thereof. Used for measuring the strength of distilled alcoholic liquors, expressed as a percentage of the alcohol content of a standard mixture at a specific temperature."
            ],
            [
                UnitCodes::CODE => "PGL",
                UnitCodes::NAME => "proof gallon",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one gallon of proof spirits, or the alcohol equivalent thereof. Used for measuring the strength of distilled alcoholic liquors, expressed as a percentage of the alcohol content of a standard mixture at a specific temperature."
            ],
            [
                UnitCodes::CODE => "PI",
                UnitCodes::NAME => "pitch",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of characters that fit in a horizontal inch."
            ],
            [
                UnitCodes::CODE => "PLA",
                UnitCodes::NAME => "degree Plato",
                UnitCodes::DESCRIPTION => "A unit of proportion defining the sugar content of a product, especially in relation to beer."
            ],
            [
                UnitCodes::CODE => "PQ",
                UnitCodes::NAME => "page per inch",
                UnitCodes::DESCRIPTION => "A unit of quantity defining the degree of thickness of a bound publication, expressed as the number of pages per inch of thickness."
            ],
            [
                UnitCodes::CODE => "PR",
                UnitCodes::NAME => "pair",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pairs (pair => item described by two's)."
            ],
            [
                UnitCodes::CODE => "PTN",
                UnitCodes::NAME => "portion",
                UnitCodes::DESCRIPTION => "A quantity of allowance of food allotted to, or enough for, one person."
            ],
            [
                UnitCodes::CODE => "Q10",
                UnitCodes::NAME => "joule per tesla",
                UnitCodes::DESCRIPTION => "Unit of the magnetic dipole moment of the molecule as derived SI unit joule divided by the derived SI unit tesla."
            ],
            [
                UnitCodes::CODE => "Q11",
                UnitCodes::NAME => "erlang",
                UnitCodes::DESCRIPTION => "Unit of the market value according to the feature of a single feature as a statistical measurement of the existing utilization."
            ],
            [
                UnitCodes::CODE => "Q12",
                UnitCodes::NAME => "octet",
                UnitCodes::DESCRIPTION => "Synonym for byte => 1 octet = 8 bit = 1 byte."
            ],
            [
                UnitCodes::CODE => "Q13",
                UnitCodes::NAME => "octet per second",
                UnitCodes::DESCRIPTION => "Unit octet divided by the SI base unit second."
            ],
            [
                UnitCodes::CODE => "Q14",
                UnitCodes::NAME => "shannon",
                UnitCodes::DESCRIPTION => "Logarithmic unit for information equal to the content of decision of a sentence of two mutually exclusive events, expressed as a logarithm to base 2."
            ],
            [
                UnitCodes::CODE => "Q15",
                UnitCodes::NAME => "hartley",
                UnitCodes::DESCRIPTION => "Logarithmic unit for information equal to the content of decision of a sentence of ten mutually exclusive events, expressed as a logarithm to base 10."
            ],
            [
                UnitCodes::CODE => "Q16",
                UnitCodes::NAME => "natural unit of information",
                UnitCodes::DESCRIPTION => "Logarithmic unit for information equal to the content of decision of a sentence of ,718 281 828 459 mutually exclusive events, expressed as a logarithm to base Euler value e."
            ],
            [
                UnitCodes::CODE => "Q17",
                UnitCodes::NAME => "shannon per second",
                UnitCodes::DESCRIPTION => "Time related logarithmic unit for information equal to the content of decision of a sentence of two mutually exclusive events, expressed as a logarithm to base 2."
            ],
            [
                UnitCodes::CODE => "Q18",
                UnitCodes::NAME => "hartley per second",
                UnitCodes::DESCRIPTION => "Time related logarithmic unit for information equal to the content of decision of a sentence of ten mutually exclusive events, expressed as a logarithm to base 10."
            ],
            [
                UnitCodes::CODE => "Q19",
                UnitCodes::NAME => "natural unit of information per second",
                UnitCodes::DESCRIPTION => "Time related logarithmic unit for information equal to the content of decision of a sentence of 2,718 281 828 459 mutually exclusive events, expressed as a logarithm to base of the Euler value e."
            ],
            [
                UnitCodes::CODE => "Q20",
                UnitCodes::NAME => "second per kilogramm",
                UnitCodes::DESCRIPTION => "Unit of the Einstein transition probability for spontaneous or inducing emissions and absorption according to ISO 80000-7 =>2008, expressed as SI base unit second divided by the SI base unit kilogram."
            ],
            [
                UnitCodes::CODE => "Q21",
                UnitCodes::NAME => "watt square metre",
                UnitCodes::DESCRIPTION => "Unit of the first radiation constants c1 = 2·p·h·c0², the value of which is 3,741 771 18·10?¹6-fold   that of the comparative value of the product of the derived SI unit watt multiplied with the power of the SI base unit metre with the exponent 2."
            ],
            [
                UnitCodes::CODE => "Q22",
                UnitCodes::NAME => "second per radian cubic metre",
                UnitCodes::DESCRIPTION => "Unit of the density of states as an expression of angular frequency as complement of the product of hertz and radiant and the power of SI base unit metre by exponent 3 ."
            ],
            [
                UnitCodes::CODE => "Q23",
                UnitCodes::NAME => "weber to the power minus one",
                UnitCodes::DESCRIPTION => "Complement of the derived SI unit weber as unit of the Josephson constant, which value is equal to the 384 597,891-fold of the reference value gigahertz divided by volt."
            ],
            [
                UnitCodes::CODE => "Q24",
                UnitCodes::NAME => "reciprocal inch",
                UnitCodes::DESCRIPTION => "Complement of the unit inch according to the Anglo-American and Imperial system of units."
            ],
            [
                UnitCodes::CODE => "Q25",
                UnitCodes::NAME => "dioptre",
                UnitCodes::DESCRIPTION => "Unit used at the statement of relative refractive indexes of optical systems as complement of the focal length with correspondence to => 1 dpt = 1/m."
            ],
            [
                UnitCodes::CODE => "Q26",
                UnitCodes::NAME => "one per one",
                UnitCodes::DESCRIPTION => "Value of the quotient from two physical units of the same kind as a numerator and denominator whereas the units are shortened mutually."
            ],
            [
                UnitCodes::CODE => "Q27",
                UnitCodes::NAME => "newton metre per metre",
                UnitCodes::DESCRIPTION => "Unit for length-related rotational moment as product of the derived SI unit newton and the SI base unit metre divided by the SI base unit metre."
            ],
            [
                UnitCodes::CODE => "Q28",
                UnitCodes::NAME => "kilogram per square metre pascal second",
                UnitCodes::DESCRIPTION => "Unit for the ability of a material to allow the transition of steam."
            ],
            [
                UnitCodes::CODE => "Q36",
                UnitCodes::NAME => "square metre per cubic metre",
                UnitCodes::DESCRIPTION => "A unit of the amount of surface area per unit volume of an object or collection of objects."
            ],
            [
                UnitCodes::CODE => "Q3",
                UnitCodes::NAME => "meal",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of meals (meal => an amount of food to be eaten on a single occasion)."
            ],
            [
                UnitCodes::CODE => "QA",
                UnitCodes::NAME => "page - facsimile",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of facsimile pages."
            ],
            [
                UnitCodes::CODE => "QAN",
                UnitCodes::NAME => "quarter (of a year)",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of quarters (3 months)."
            ],
            [
                UnitCodes::CODE => "QB",
                UnitCodes::NAME => "page - hardcopy",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of hardcopy pages (hardcopy page => a page rendered as printed or written output on paper, film, or other permanent medium)."
            ],
            [
                UnitCodes::CODE => "QR",
                UnitCodes::NAME => "quire",
                UnitCodes::DESCRIPTION => "A unit of count for paper, expressed as the number of quires (quire => a number of paper sheets, typically 25)."
            ],
            [
                UnitCodes::CODE => "QTR",
                UnitCodes::NAME => "quarter (UK)",
                UnitCodes::DESCRIPTION => "A traditional unit of weight equal to 1/4 hundredweight. In the United Kingdom, one quarter equals 28 pounds."
            ],
            [
                UnitCodes::CODE => "R1",
                UnitCodes::NAME => "pica",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of picas. (pica => typographical length equal to 12 points or 4.22 mm (approx.))."
            ],
            [
                UnitCodes::CODE => "R9",
                UnitCodes::NAME => "thousand cubic metre",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one thousand cubic metres."
            ],
            [
                UnitCodes::CODE => "RH",
                UnitCodes::NAME => "running or operating hour",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of hours of operation."
            ],
            [
                UnitCodes::CODE => "RM",
                UnitCodes::NAME => "ream",
                UnitCodes::DESCRIPTION => "A unit of count for paper, expressed as the number of reams (ream => a large quantity of paper sheets, typically 500)."
            ],
            [
                UnitCodes::CODE => "ROM",
                UnitCodes::NAME => "room",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of rooms."
            ],
            [
                UnitCodes::CODE => "RP",
                UnitCodes::NAME => "pound per ream",
                UnitCodes::DESCRIPTION => "A unit of mass for paper, expressed as pounds per ream. (ream => a large quantity of paper, typically 500 sheets)."
            ],
            [
                UnitCodes::CODE => "RT",
                UnitCodes::NAME => "revenue ton mile",
                UnitCodes::DESCRIPTION => "A unit of information typically used for billing purposes, expressed as the number of revenue tons (revenue ton => either a metric ton or a cubic metres, whichever is the larger), moved over a distance of one mile."
            ],
            [
                UnitCodes::CODE => "SAN",
                UnitCodes::NAME => "half year (6 months)",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of half years (6 months)."
            ],
            [
                UnitCodes::CODE => "SCO",
                UnitCodes::NAME => "score",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of units in multiples of 20."
            ],
            [
                UnitCodes::CODE => "SCR",
                UnitCodes::NAME => "scruple",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "SET",
                UnitCodes::NAME => "set",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of sets (set => a number of objects grouped together)."
            ],
            [
                UnitCodes::CODE => "SG",
                UnitCodes::NAME => "segment",
                UnitCodes::DESCRIPTION => "A unit of information equal to 64000 bytes."
            ],
            [
                UnitCodes::CODE => "SHT",
                UnitCodes::NAME => "shipping ton",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of tons for shipping."
            ],
            [
                UnitCodes::CODE => "SQ",
                UnitCodes::NAME => "square",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of squares (square => rectangular shape)."
            ],
            [
                UnitCodes::CODE => "SQR",
                UnitCodes::NAME => "square, roofing",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of squares of roofing materials, measured in multiples of 100 square feet."
            ],
            [
                UnitCodes::CODE => "SR",
                UnitCodes::NAME => "strip",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of strips (strip => long narrow piece of an object)."
            ],
            [
                UnitCodes::CODE => "STC",
                UnitCodes::NAME => "stick",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of sticks (stick => slender and often cylindrical piece of a substance)."
            ],
            [
                UnitCodes::CODE => "STK",
                UnitCodes::NAME => "stick, cigarette",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of cigarettes in the smallest unit for stock-taking and/or duty computation."
            ],
            [
                UnitCodes::CODE => "STL",
                UnitCodes::NAME => "standard litre",
                UnitCodes::DESCRIPTION => "A unit of volume defining the number of litres of a product at a temperature of 15 degrees Celsius, especially in relation to hydrocarbon oils."
            ],
            [
                UnitCodes::CODE => "STW",
                UnitCodes::NAME => "straw",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of straws (straw => a slender tube used for sucking up liquids)."
            ],
            [
                UnitCodes::CODE => "SW",
                UnitCodes::NAME => "skein",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of skeins (skein => a loosely-coiled bundle of yarn or thread)."
            ],
            [
                UnitCodes::CODE => "SX",
                UnitCodes::NAME => "shipment",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of shipments (shipment => an amount of goods shipped or transported)."
            ],
            [
                UnitCodes::CODE => "SYR",
                UnitCodes::NAME => "syringe",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of syringes (syringe => a small device for pumping, spraying and/or injecting liquids through a small aperture)."
            ],
            [
                UnitCodes::CODE => "T0",
                UnitCodes::NAME => "telecommunication line in service",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of lines in service."
            ],
            [
                UnitCodes::CODE => "T3",
                UnitCodes::NAME => "thousand piece",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pieces in multiples of 1000 (piece => a single item, article or exemplar)."
            ],
            [
                UnitCodes::CODE => "TAN",
                UnitCodes::NAME => "total acid number",
                UnitCodes::DESCRIPTION => "A unit of chemistry defining the amount of potassium hydroxide (KOH) in milligrams that is needed to neutralize the acids in one gram of oil. It is an important quality measurement of crude oil."
            ],
            [
                UnitCodes::CODE => "TI",
                UnitCodes::NAME => "thousand square inch",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "TIC",
                UnitCodes::NAME => "metric ton, including container",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of metric tons of a product, including its container."
            ],
            [
                UnitCodes::CODE => "TIP",
                UnitCodes::NAME => "metric ton, including inner packaging",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of metric tons of a product, including its inner packaging materials."
            ],
            [
                UnitCodes::CODE => "TKM",
                UnitCodes::NAME => "tonne kilometre",
                UnitCodes::DESCRIPTION => "A unit of information typically used for billing purposes, expressed as the number of tonnes (metric tons) moved over a distance of one kilometre. "
            ],
            [
                UnitCodes::CODE => "TMS",
                UnitCodes::NAME => "kilogram of imported meat, less offal",
                UnitCodes::DESCRIPTION => "A unit of mass equal to one thousand grams of imported meat, disregarding less valuable by-products such as the entrails."
            ],
            [
                UnitCodes::CODE => "TP",
                UnitCodes::NAME => "ten pack",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of items in multiples of 10."
            ],
            [
                UnitCodes::CODE => "TPI",
                UnitCodes::NAME => "teeth per inch",
                UnitCodes::DESCRIPTION => "The number of teeth per inch."
            ],
            [
                UnitCodes::CODE => "TPR",
                UnitCodes::NAME => "ten pair",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pairs in multiples of 10 (pair => item described by two's)."
            ],
            [
                UnitCodes::CODE => "TQD",
                UnitCodes::NAME => "thousand cubic metre per day",
                UnitCodes::DESCRIPTION => "A unit of volume equal to one thousand cubic metres per day."
            ],
            [
                UnitCodes::CODE => "TRL",
                UnitCodes::NAME => "trillion (EUR)",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "TST",
                UnitCodes::NAME => "ten set",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of sets in multiples of 10 (set => a number of objects grouped together)."
            ],
            [
                UnitCodes::CODE => "TTS",
                UnitCodes::NAME => "ten thousand sticks",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of sticks in multiples of 10000 (stick => slender and often cylindrical piece of a substance)."
            ],
            [
                UnitCodes::CODE => "U1",
                UnitCodes::NAME => "treatment",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of treatments (treatment => subjection to the action of a chemical, physical or biological agent)."
            ],
            [
                UnitCodes::CODE => "U2",
                UnitCodes::NAME => "tablet",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of tablets (tablet => a small flat or compressed solid object)."
            ],
            [
                UnitCodes::CODE => "UB",
                UnitCodes::NAME => "telecommunication line in service average",
                UnitCodes::DESCRIPTION => "A unit of count defining the average number of lines in service."
            ],
            [
                UnitCodes::CODE => "UC",
                UnitCodes::NAME => "telecommunication port",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of network access ports."
            ],
            [
                UnitCodes::CODE => "VA",
                UnitCodes::NAME => "volt - ampere per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "VP",
                UnitCodes::NAME => "percent volume",
                UnitCodes::DESCRIPTION => "A measure of concentration, typically expressed as the percentage volume of a solute in a solution."
            ],
            [
                UnitCodes::CODE => "W2",
                UnitCodes::NAME => "wet kilo",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of kilograms of a product, including the water content of the product."
            ],
            [
                UnitCodes::CODE => "WA",
                UnitCodes::NAME => "watt per kilogram",
                UnitCodes::DESCRIPTION => ""
            ],
            [
                UnitCodes::CODE => "WB",
                UnitCodes::NAME => "wet pound",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of pounds of a material, including the water content of the material."
            ],
            [
                UnitCodes::CODE => "WCD",
                UnitCodes::NAME => "cord",
                UnitCodes::DESCRIPTION => "A unit of volume used for measuring lumber. One board foot equals 1/12 of a cubic foot."
            ],
            [
                UnitCodes::CODE => "WE",
                UnitCodes::NAME => "wet ton",
                UnitCodes::DESCRIPTION => "A unit of mass defining the number of tons of a material, including the water content of the material."
            ],
            [
                UnitCodes::CODE => "WG",
                UnitCodes::NAME => "wine gallon",
                UnitCodes::DESCRIPTION => "A unit of volume equal to 231 cubic inches."
            ],
            [
                UnitCodes::CODE => "WM",
                UnitCodes::NAME => "working month",
                UnitCodes::DESCRIPTION => "A unit of time defining the number of working months."
            ],
            [
                UnitCodes::CODE => "WSD",
                UnitCodes::NAME => "standard",
                UnitCodes::DESCRIPTION => "A unit of volume of finished lumber equal to 165 cubic feet."
            ],
            [
                UnitCodes::CODE => "",
                UnitCodes::NAME => "",
                UnitCodes::DESCRIPTION => "Synonym => standard cubic foot"
            ],
            [
                UnitCodes::CODE => "WW",
                UnitCodes::NAME => "millilitre of water",
                UnitCodes::DESCRIPTION => "A unit of volume equal to the number of millilitres of water."
            ],
            [
                UnitCodes::CODE => "Z11",
                UnitCodes::NAME => "hanging container",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of hanging containers."
            ],
            [
                UnitCodes::CODE => "ZP",
                UnitCodes::NAME => "page",
                UnitCodes::DESCRIPTION => "A unit of count defining the number of pages."
            ],
            [
                UnitCodes::CODE => "ZZ",
                UnitCodes::NAME => "mutually defined",
                UnitCodes::DESCRIPTION => "A unit of measure as agreed in common between two or more parties."
            ],
            [
                UnitCodes::CODE => "MRW",
                UnitCodes::NAME => "Metre Week",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time, as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MKW",
                UnitCodes::NAME => "Square Metre Week",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MQW",
                UnitCodes::NAME => "Cubic Metre Week",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "HWE",
                UnitCodes::NAME => "Piece Week",
                UnitCodes::DESCRIPTION => "Unit for measuring the item amount and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MRD",
                UnitCodes::NAME => "Metre Day",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MKD",
                UnitCodes::NAME => "Square Metre Day",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MQD",
                UnitCodes::NAME => "Cubic Metre Day",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "HAD",
                UnitCodes::NAME => "Piece Day",
                UnitCodes::DESCRIPTION => "Unit for measuring the item amount and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MRM",
                UnitCodes::NAME => "Metre Month",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MKM",
                UnitCodes::NAME => "Square Metre Month",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "MQM",
                UnitCodes::NAME => "Cubic Metre Month",
                UnitCodes::DESCRIPTION => "Unit for measuring physical dimensions and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "HMO",
                UnitCodes::NAME => "Piece Month",
                UnitCodes::DESCRIPTION => "Unit for measuring the item amount and time as required by DIN 18451"
            ],
            [
                UnitCodes::CODE => "DBW",
                UnitCodes::NAME => "Decibel watt",
                UnitCodes::DESCRIPTION => "The decibel watt or dBW is a unit for the measurement of the strength of a signal expressed in decibels relative to one watt."
            ],
            [
                UnitCodes::CODE => "DBM",
                UnitCodes::NAME => "Decibel-milliwatts",
                UnitCodes::DESCRIPTION => "dBm (sometimes dBmW or decibel-milliwatts) is unit of level used to indicate that a power ratio is expressed in decibels (dB) with reference to one milliwatt (mW)."
            ],
            [
                UnitCodes::CODE => "FNU",
                UnitCodes::NAME => "Formazin nephelometric unit",
                UnitCodes::DESCRIPTION => "Formazin nephelometric unit (FNU) is used for water turbidity level evaluation"
            ],
            [
                UnitCodes::CODE => "NTU",
                UnitCodes::NAME => "Nephelometric turbidity unit",
                UnitCodes::DESCRIPTION => "Nephelometric turbidity unit (NTU) is used for water turbidity level evaluation"
            ]
        ];
    }
}