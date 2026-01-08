<?php

/**
 * @copyright Copyright (c) 2024 Sean Kau (kliensheng2020@gmail.com)
 * @license https://github.com/klsheng/myinvois-php-sdk/blob/main/LICENSE
 */

namespace Klsheng\Myinvois\Ubl\Constant;

/**
 * MSIC codes
 * 
 * @author Sean Kau (kliensheng2020@gmail.com)
 * @since 1.0.0
 */
class MSICCodes
{
    const CODE = 'Code';
    const DESCRIPTION = 'Description';
    const CATEGORY_REF = 'MSIC Category Reference';

    public static function getItems()
    {
        return [
            [
                MSICCodes::CODE => "00000",
                MSICCodes::DESCRIPTION => "NOT APPLICABLE",
                MSICCodes::CATEGORY_REF => ""
            ],
            [
                MSICCodes::CODE => "01111",
                MSICCodes::DESCRIPTION => "Growing of maize",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01112",
                MSICCodes::DESCRIPTION => "Growing of leguminous crops",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01113",
                MSICCodes::DESCRIPTION => "Growing of oil seeds",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01119",
                MSICCodes::DESCRIPTION => "Growing of other cereals n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01120",
                MSICCodes::DESCRIPTION => "Growing of paddy",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01131",
                MSICCodes::DESCRIPTION => "Growing of leafy or stem vegetables",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01132",
                MSICCodes::DESCRIPTION => "Growing of fruits bearing vegetables",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01133",
                MSICCodes::DESCRIPTION => "Growing of melons",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01134",
                MSICCodes::DESCRIPTION => "Growing of mushrooms and truffles",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01135",
                MSICCodes::DESCRIPTION => "Growing of vegetables seeds, except beet seeds",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01136",
                MSICCodes::DESCRIPTION => "Growing of other vegetables",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01137",
                MSICCodes::DESCRIPTION => "Growing of sugar beet",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01138",
                MSICCodes::DESCRIPTION => "Growing of roots, tubers, bulb or tuberous vegetables",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01140",
                MSICCodes::DESCRIPTION => "Growing of sugar cane",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01150",
                MSICCodes::DESCRIPTION => "Growing of tobacco",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01160",
                MSICCodes::DESCRIPTION => "Growing of fibre crops",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01191",
                MSICCodes::DESCRIPTION => "Growing of flowers",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01192",
                MSICCodes::DESCRIPTION => "Growing of flower seeds",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01193",
                MSICCodes::DESCRIPTION => "Growing of sago (rumbia)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01199",
                MSICCodes::DESCRIPTION => "Growing of other non-perennial crops n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01210",
                MSICCodes::DESCRIPTION => "Growing of grapes",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01221",
                MSICCodes::DESCRIPTION => "Growing of banana",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01222",
                MSICCodes::DESCRIPTION => "Growing of mango",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01223",
                MSICCodes::DESCRIPTION => "Growing of durian",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01224",
                MSICCodes::DESCRIPTION => "Growing of rambutan",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01225",
                MSICCodes::DESCRIPTION => "Growing of star fruit",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01226",
                MSICCodes::DESCRIPTION => "Growing of papaya",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01227",
                MSICCodes::DESCRIPTION => "Growing of pineapple",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01228",
                MSICCodes::DESCRIPTION => "Growing of pitaya (dragon fruit)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01229",
                MSICCodes::DESCRIPTION => "Growing of other tropical and subtropical fruits n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01231",
                MSICCodes::DESCRIPTION => "Growing of pomelo",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01232",
                MSICCodes::DESCRIPTION => "Growing of lemon and limes",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01233",
                MSICCodes::DESCRIPTION => "Growing of tangerines and mandarin",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01239",
                MSICCodes::DESCRIPTION => "Growing of other citrus fruits n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01241",
                MSICCodes::DESCRIPTION => "Growing of guava",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01249",
                MSICCodes::DESCRIPTION => "Growing of other pome fruits and stones fruits n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01251",
                MSICCodes::DESCRIPTION => "Growing of berries",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01252",
                MSICCodes::DESCRIPTION => "Growing of fruit seeds",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01253",
                MSICCodes::DESCRIPTION => "Growing of edible nuts",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01259",
                MSICCodes::DESCRIPTION => "Growing of other tree and bush fruits",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01261",
                MSICCodes::DESCRIPTION => "Growing of oil palm (estate)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01262",
                MSICCodes::DESCRIPTION => "Growing of oil palm (smallholdings)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01263",
                MSICCodes::DESCRIPTION => "Growing of coconut (estate and smallholdings)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01269",
                MSICCodes::DESCRIPTION => "Growing of other oleaginous fruits n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01271",
                MSICCodes::DESCRIPTION => "Growing of coffee",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01272",
                MSICCodes::DESCRIPTION => "Growing of tea",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01273",
                MSICCodes::DESCRIPTION => "Growing of cocoa",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01279",
                MSICCodes::DESCRIPTION => "Growing of other beverage crops n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01281",
                MSICCodes::DESCRIPTION => "Growing of pepper (piper nigrum)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01282",
                MSICCodes::DESCRIPTION => "Growing of chilies and pepper (capsicum spp.)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01283",
                MSICCodes::DESCRIPTION => "Growing of nutmeg",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01284",
                MSICCodes::DESCRIPTION => "Growing of ginger",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01285",
                MSICCodes::DESCRIPTION => "Growing of plants used primarily in perfumery, in pharmacy or for insecticidal, fungicidal or similar purposes",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01289",
                MSICCodes::DESCRIPTION => "Growing of other spices and aromatic crops n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01291",
                MSICCodes::DESCRIPTION => "Growing  of rubber trees (estate)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01292",
                MSICCodes::DESCRIPTION => "Growing of rubber trees (smallholdings)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01293",
                MSICCodes::DESCRIPTION => "Growing of trees for extraction of sap",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01294",
                MSICCodes::DESCRIPTION => "Growing of nipa palm",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01295",
                MSICCodes::DESCRIPTION => "Growing of areca",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01296",
                MSICCodes::DESCRIPTION => "Growing of roselle",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01299",
                MSICCodes::DESCRIPTION => "Growing of other perennial crops n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01301",
                MSICCodes::DESCRIPTION => "Growing of plants for planting",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01302",
                MSICCodes::DESCRIPTION => "Growing of plants for ornamental purposes",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01303",
                MSICCodes::DESCRIPTION => "Growing of live plants for bulbs, tubers and roots; cuttings and slips; mushroom spawn",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01304",
                MSICCodes::DESCRIPTION => "Operation of tree nurseries",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01411",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of cattle or buffaloes",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01412",
                MSICCodes::DESCRIPTION => "Production of raw milk from cows or buffaloes",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01413",
                MSICCodes::DESCRIPTION => "Production of bovine semen",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01420",
                MSICCodes::DESCRIPTION => "Raising and breeding of horses, asses, mules or hinnes",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01430",
                MSICCodes::DESCRIPTION => "Raising and breeding of camels (dromedary) and camelids",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01441",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of sheep and goats",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01442",
                MSICCodes::DESCRIPTION => "Production of raw sheep or goat’s milk",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01443",
                MSICCodes::DESCRIPTION => "Production of raw wool",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01450",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of swine/pigs",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01461",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of chicken, broiler",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01462",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of ducks",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01463",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of geese",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01464",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of quails",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01465",
                MSICCodes::DESCRIPTION => "Raising and breeding of other poultry n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01466",
                MSICCodes::DESCRIPTION => "Production of chicken eggs",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01467",
                MSICCodes::DESCRIPTION => "Production of duck eggs",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01468",
                MSICCodes::DESCRIPTION => "Production of other poultry eggs n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01469",
                MSICCodes::DESCRIPTION => "Operation of poultry hatcheries",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01491",
                MSICCodes::DESCRIPTION => "Raising, breeding and production of semi-domesticated",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01492",
                MSICCodes::DESCRIPTION => "Production of fur skins, reptile or bird’s skin from ranching operation",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01493",
                MSICCodes::DESCRIPTION => "Operation of worm farms, land mollusc farms, snail farms",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01494",
                MSICCodes::DESCRIPTION => "Raising of silk worms and production of silk worm cocoons",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01495",
                MSICCodes::DESCRIPTION => "Bee keeping and production of honey and beeswax",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01496",
                MSICCodes::DESCRIPTION => "Raising and breeding of pet animals",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01497",
                MSICCodes::DESCRIPTION => "Raising and breeding of swiflet",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01499",
                MSICCodes::DESCRIPTION => "Raising of diverse/other animals n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01500",
                MSICCodes::DESCRIPTION => "Mixed Farming",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01610",
                MSICCodes::DESCRIPTION => "Agricultural activities for crops production on a fee or contract basis",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01620",
                MSICCodes::DESCRIPTION => "Agricultural activities for animal production on a fee or contract basis",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01631",
                MSICCodes::DESCRIPTION => "Preparation of crops for primary markets",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01632",
                MSICCodes::DESCRIPTION => "Preparation of tobacco leaves",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01633",
                MSICCodes::DESCRIPTION => "Preparation of cocoa beans",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01634",
                MSICCodes::DESCRIPTION => "Sun-drying of fruits and vegetables",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01640",
                MSICCodes::DESCRIPTION => "Seed processing for propagation",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01701",
                MSICCodes::DESCRIPTION => "Hunting and trapping on a commercial basis",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "01702",
                MSICCodes::DESCRIPTION => "Taking of animals (dead or alive)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02101",
                MSICCodes::DESCRIPTION => "Planting, replanting, transplanting, thinning and conserving of forests and timber tracts",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02102",
                MSICCodes::DESCRIPTION => "Growing of coppice, pulpwood and fire wood",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02103",
                MSICCodes::DESCRIPTION => "Operation of forest tree nurseries",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02104",
                MSICCodes::DESCRIPTION => "Collection and raising of wildings (peat swamp forest tree species)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02105",
                MSICCodes::DESCRIPTION => "Forest plantation",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02201",
                MSICCodes::DESCRIPTION => "Production of round wood for forest-based manufacturing industries",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02202",
                MSICCodes::DESCRIPTION => "Production of round wood used in an unprocessed form",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02203",
                MSICCodes::DESCRIPTION => "Production of charcoal in the forest (using traditional methods)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02204",
                MSICCodes::DESCRIPTION => "Rubber wood logging",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02301",
                MSICCodes::DESCRIPTION => "Collection of rattan, bamboo",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02302",
                MSICCodes::DESCRIPTION => "Bird’s nest collection",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02303",
                MSICCodes::DESCRIPTION => "Wild sago palm collection",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02309",
                MSICCodes::DESCRIPTION => "Gathering of non-wood forest products n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02401",
                MSICCodes::DESCRIPTION => "Carrying out part of the forestry and forest plantation operation on a fee or contract basis for forestry service activities",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "02402",
                MSICCodes::DESCRIPTION => "Carrying out part of the forestry operation on a fee or contract basis for logging service activities",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03111",
                MSICCodes::DESCRIPTION => "Fishing on a commercial basis in ocean and coastal waters",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03112",
                MSICCodes::DESCRIPTION => "Collection of marine crustaceans and molluscs",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03113",
                MSICCodes::DESCRIPTION => "Taking of aquatic animals: sea squirts, tunicates, sea urchins",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03114",
                MSICCodes::DESCRIPTION => "Activities of vessels engaged both in fishing and in processing and preserving of fish",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03115",
                MSICCodes::DESCRIPTION => "Gathering of other marine organisms and materials (natural pearls, sponges, coral and algae)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03119",
                MSICCodes::DESCRIPTION => "Marine fishing n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03121",
                MSICCodes::DESCRIPTION => "Fishing on a commercial basis in inland waters",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03122",
                MSICCodes::DESCRIPTION => "Taking of freshwater crustaceans and molluscs",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03123",
                MSICCodes::DESCRIPTION => "Taking of freshwater aquatic animals",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03124",
                MSICCodes::DESCRIPTION => "Gathering of freshwater flora and fauna",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03129",
                MSICCodes::DESCRIPTION => "Freshwater fishing n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03211",
                MSICCodes::DESCRIPTION => "Fish farming in sea water",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03212",
                MSICCodes::DESCRIPTION => "Production of bivalve spat (oyster, mussel), lobster lings, shrimp post-larvae, fish fry and fingerlings",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03213",
                MSICCodes::DESCRIPTION => "Growing of laver and other edible seaweeds",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03214",
                MSICCodes::DESCRIPTION => "Culture of crustaceans, bivalves, other molluscs and other aquatic animals in sea water",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03215",
                MSICCodes::DESCRIPTION => "Aquaculture activities in brackish water",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03216",
                MSICCodes::DESCRIPTION => "Aquaculture activities in salt water filled tanks or reservoirs",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03217",
                MSICCodes::DESCRIPTION => "Operation of  hatcheries (marine)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03218",
                MSICCodes::DESCRIPTION => "Operation of marine worm farms for fish feed",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03219",
                MSICCodes::DESCRIPTION => "Marine aquaculture n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03221",
                MSICCodes::DESCRIPTION => "Fish farming in freshwater",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03222",
                MSICCodes::DESCRIPTION => "Shrimp farming in freshwater",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03223",
                MSICCodes::DESCRIPTION => "Culture of freshwater crustaceans, bivalves, other molluscs and other aquatic animals",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03224",
                MSICCodes::DESCRIPTION => "Operation of hatcheries (freshwater)",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03225",
                MSICCodes::DESCRIPTION => "Farming of frogs",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "03229",
                MSICCodes::DESCRIPTION => "Freshwater aquaculture n.e.c.",
                MSICCodes::CATEGORY_REF => "A"
            ],
            [
                MSICCodes::CODE => "05100",
                MSICCodes::DESCRIPTION => "Mining of hard coal",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "05200",
                MSICCodes::DESCRIPTION => "Mining of lignite (brown coal)",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06101",
                MSICCodes::DESCRIPTION => "Extraction of crude petroleum oils",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06102",
                MSICCodes::DESCRIPTION => "Extraction of bituminous or oil shale and tar sand",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06103",
                MSICCodes::DESCRIPTION => "Production of crude petroleum from bituminous shale and sand",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06104",
                MSICCodes::DESCRIPTION => "Processes to obtain crude oils",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06201",
                MSICCodes::DESCRIPTION => "Production of crude gaseous hydrocarbon (natural gas)",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06202",
                MSICCodes::DESCRIPTION => "Extraction of condensates",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06203",
                MSICCodes::DESCRIPTION => "Draining and separation of liquid hydrocarbon fractions",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06204",
                MSICCodes::DESCRIPTION => "Gas desulphurization",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "06205",
                MSICCodes::DESCRIPTION => "Mining of hydrocarbon liquids, obtain through liquefaction or pyrolysis",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07101",
                MSICCodes::DESCRIPTION => "Mining of ores valued chiefly for iron content",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07102",
                MSICCodes::DESCRIPTION => "Beneficiation and agglomeration of iron ores",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07210",
                MSICCodes::DESCRIPTION => "Mining of uranium and thorium ores",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07291",
                MSICCodes::DESCRIPTION => "Mining of tin ores",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07292",
                MSICCodes::DESCRIPTION => "Mining of copper",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07293",
                MSICCodes::DESCRIPTION => "Mining of bauxite (aluminium)",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07294",
                MSICCodes::DESCRIPTION => "Mining of ilmenite",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07295",
                MSICCodes::DESCRIPTION => "Mining of gold",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07296",
                MSICCodes::DESCRIPTION => "Mining of silver",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07297",
                MSICCodes::DESCRIPTION => "Mining of platinum",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07298",
                MSICCodes::DESCRIPTION => "Amang retreatment",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "07299",
                MSICCodes::DESCRIPTION => "Mining of other non-ferrous metal ores n.e.c.",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08101",
                MSICCodes::DESCRIPTION => "Quarrying, rough trimming and sawing of monumental and building stone such as marble, granite (dimension stone), sandstone",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08102",
                MSICCodes::DESCRIPTION => "Quarrying, crushing and breaking of limestone",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08103",
                MSICCodes::DESCRIPTION => "Mining of gypsum and anhydrite",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08104",
                MSICCodes::DESCRIPTION => "Mining of chalk and uncalcined dolomite",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08105",
                MSICCodes::DESCRIPTION => "Extraction and dredging of industrial sand, sand for construction and gravel",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08106",
                MSICCodes::DESCRIPTION => "Breaking and crushing of stone and gravel",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08107",
                MSICCodes::DESCRIPTION => "Quarrying of sand",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08108",
                MSICCodes::DESCRIPTION => "Mining of clays, refractory clays and kaolin",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08109",
                MSICCodes::DESCRIPTION => "Quarrying, crushing and breaking of granite",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08911",
                MSICCodes::DESCRIPTION => "Mining of natural phosphates",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08912",
                MSICCodes::DESCRIPTION => "Mining of natural potassium salts",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08913",
                MSICCodes::DESCRIPTION => "Mining of native sulphur",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08914",
                MSICCodes::DESCRIPTION => "Extraction and preparation of pyrites and pyrrhotite, except roasting",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08915",
                MSICCodes::DESCRIPTION => "Mining of natural barium sulphate and carbonate (barytes and witherite)",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08916",
                MSICCodes::DESCRIPTION => "Mining of natural borates, natural magnesium sulphates (kieserite)",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08917",
                MSICCodes::DESCRIPTION => "Mining of earth colours, fluorspar and other minerals valued chiefly as a source of chemicals",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08918",
                MSICCodes::DESCRIPTION => "Guano mining",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08921",
                MSICCodes::DESCRIPTION => "Peat digging",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08922",
                MSICCodes::DESCRIPTION => "Peat agglomeration",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08923",
                MSICCodes::DESCRIPTION => "Preparation of peat to improve quality or facilitate transport or storage",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08931",
                MSICCodes::DESCRIPTION => "Extraction of salt from underground",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08932",
                MSICCodes::DESCRIPTION => "Salt production by evaporation of sea water or other saline waters",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08933",
                MSICCodes::DESCRIPTION => "Crushing, purification and refining of salt by the producer",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08991",
                MSICCodes::DESCRIPTION => "Mining and quarrying of abrasive materials",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08992",
                MSICCodes::DESCRIPTION => "Mining and quarrying of asbestos",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08993",
                MSICCodes::DESCRIPTION => "Mining and quarrying of siliceous fossil meals",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08994",
                MSICCodes::DESCRIPTION => "Mining and quarrying of natural graphite",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08995",
                MSICCodes::DESCRIPTION => "Mining and quarrying of steatite (talc)",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08996",
                MSICCodes::DESCRIPTION => "Mining and quarrying of gemstones",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "08999",
                MSICCodes::DESCRIPTION => "Other mining and quarrying n.e.c.",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "09101",
                MSICCodes::DESCRIPTION => "Oil and gas extraction service activities provided on a fee or contract basis",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "09102",
                MSICCodes::DESCRIPTION => "Oil and gas field fire fighting services",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "09900",
                MSICCodes::DESCRIPTION => "Support activities for other mining and quarrying",
                MSICCodes::CATEGORY_REF => "B"
            ],
            [
                MSICCodes::CODE => "10101",
                MSICCodes::DESCRIPTION => "Processing and preserving of meat and production of meat products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10102",
                MSICCodes::DESCRIPTION => "Processing and preserving of poultry and poultry products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10103",
                MSICCodes::DESCRIPTION => "Production of hides and skins originating from slaughterhouses",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10104",
                MSICCodes::DESCRIPTION => "Operation of slaughterhouses engaged in killing, houses dressing or packing meat",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10109",
                MSICCodes::DESCRIPTION => "Processing and preserving of meat n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10201",
                MSICCodes::DESCRIPTION => "Canning of fish, crustaceans and mollusks",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10202",
                MSICCodes::DESCRIPTION => "Processing, curing and preserving of fish, crustacean and molluscs",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10203",
                MSICCodes::DESCRIPTION => "Production of fish meals for human consumption or animal feed",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10204",
                MSICCodes::DESCRIPTION => "Production of keropok including keropok lekor",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10205",
                MSICCodes::DESCRIPTION => "Processing of seaweed",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10301",
                MSICCodes::DESCRIPTION => "Manufacture of fruits and vegetable food products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10302",
                MSICCodes::DESCRIPTION => "Manufacture of fruit and vegetable juices",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10303",
                MSICCodes::DESCRIPTION => "Pineapple canning",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10304",
                MSICCodes::DESCRIPTION => "Manufacture of jams, marmalades and table jellies",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10305",
                MSICCodes::DESCRIPTION => "Manufacture of nuts and nut products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10306",
                MSICCodes::DESCRIPTION => "Manufacture of bean curd products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10401",
                MSICCodes::DESCRIPTION => "Manufacture of crude palm oil",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10402",
                MSICCodes::DESCRIPTION => "Manufacture of refined palm oil",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10403",
                MSICCodes::DESCRIPTION => "Manufacture of palm kernel oil",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10404",
                MSICCodes::DESCRIPTION => "Manufacture of crude and refined vegetable oil",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10405",
                MSICCodes::DESCRIPTION => "Manufacture of coconut oil",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10406",
                MSICCodes::DESCRIPTION => "Manufacture of compound cooking fats",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10407",
                MSICCodes::DESCRIPTION => "Manufacture of animal oils and fats",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10501",
                MSICCodes::DESCRIPTION => "Manufacture of ice cream and other edible ice such as sorbet",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10502",
                MSICCodes::DESCRIPTION => "Manufacture of condensed, powdered and evaporated milk",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10509",
                MSICCodes::DESCRIPTION => "Manufacture of other dairy products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10611",
                MSICCodes::DESCRIPTION => "Rice milling",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10612",
                MSICCodes::DESCRIPTION => "Provision of milling services",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10613",
                MSICCodes::DESCRIPTION => "Flour milling",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10619",
                MSICCodes::DESCRIPTION => "Manufacture of grain mill products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10621",
                MSICCodes::DESCRIPTION => "Manufacture of starches and starch products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10622",
                MSICCodes::DESCRIPTION => "Manufacture of glucose, glucose syrup, maltose, inulin",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10623",
                MSICCodes::DESCRIPTION => "Manufacture of sago and tapioca flour/products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10711",
                MSICCodes::DESCRIPTION => "Manufacture of biscuits and cookies",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10712",
                MSICCodes::DESCRIPTION => "Manufacture of bread, cakes and other bakery products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10713",
                MSICCodes::DESCRIPTION => "Manufacture of snack products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10714",
                MSICCodes::DESCRIPTION => "Manufacture of frozen bakery products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10721",
                MSICCodes::DESCRIPTION => "Manufacture of sugar",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10722",
                MSICCodes::DESCRIPTION => "Manufacture of sugar products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10731",
                MSICCodes::DESCRIPTION => "Manufacture of cocoa products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10732",
                MSICCodes::DESCRIPTION => "Manufacture of chocolate and chocolate products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10733",
                MSICCodes::DESCRIPTION => "Manufacture of sugar confectionery",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10741",
                MSICCodes::DESCRIPTION => "Manufacture of meehoon, noodles and other related products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10742",
                MSICCodes::DESCRIPTION => "Manufacture of pastas",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10750",
                MSICCodes::DESCRIPTION => "Manufacture of prepared meals and dishes",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10791",
                MSICCodes::DESCRIPTION => "Manufacture of coffee",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10792",
                MSICCodes::DESCRIPTION => "Manufacture of tea",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10793",
                MSICCodes::DESCRIPTION => "Manufacture of sauces and condiments",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10794",
                MSICCodes::DESCRIPTION => "Manufacture of spices and curry powder",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10795",
                MSICCodes::DESCRIPTION => "Manufacture of egg products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10799",
                MSICCodes::DESCRIPTION => "Manufacture of other food products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "10800",
                MSICCodes::DESCRIPTION => "Manufacture of prepared animal feeds",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "11010",
                MSICCodes::DESCRIPTION => "Distilling, rectifying and blending of spirits",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "11020",
                MSICCodes::DESCRIPTION => "Manufacture of wines",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "11030",
                MSICCodes::DESCRIPTION => "Manufacture of malt liquors and malt",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "11041",
                MSICCodes::DESCRIPTION => "Manufacture of soft drinks",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "11042",
                MSICCodes::DESCRIPTION => "Production of natural mineral water and other bottled water",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "12000",
                MSICCodes::DESCRIPTION => "MANUFACTURE OF TOBACCO PRODUCTS",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13110",
                MSICCodes::DESCRIPTION => "Preparation and spinning of textile fibres",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13120",
                MSICCodes::DESCRIPTION => "Weaving of textiles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13131",
                MSICCodes::DESCRIPTION => "Batik making",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13132",
                MSICCodes::DESCRIPTION => "Dyeing, bleaching, printing and finishing of yarns and fabrics",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13139",
                MSICCodes::DESCRIPTION => "Other finishing textiles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13910",
                MSICCodes::DESCRIPTION => "Manufacture of knitted and crocheted fabrics",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13921",
                MSICCodes::DESCRIPTION => "Manufacture of made-up articles of any textile materials, including of knitted or crocheted fabrics",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13922",
                MSICCodes::DESCRIPTION => "Manufacture of made-up furnishing articles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13930",
                MSICCodes::DESCRIPTION => "Manufacture of carpets and rugs",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13940",
                MSICCodes::DESCRIPTION => "Manufacture of cordage, rope, twine and netting",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "13990",
                MSICCodes::DESCRIPTION => "Manufacture of other textiles n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "14101",
                MSICCodes::DESCRIPTION => "Manufacture of specific wearing apparel",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "14102",
                MSICCodes::DESCRIPTION => "Manufacture of clothings",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "14103",
                MSICCodes::DESCRIPTION => "Custom tailoring",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "14109",
                MSICCodes::DESCRIPTION => "Manufacture of other clothing accessories",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "14200",
                MSICCodes::DESCRIPTION => "Manufacture of articles made of fur skins",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "14300",
                MSICCodes::DESCRIPTION => "Manufacture of knitted and crocheted apparel",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "15110",
                MSICCodes::DESCRIPTION => "Tanning and dressing of leather; dressing and dyeing of fur",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "15120",
                MSICCodes::DESCRIPTION => "Manufacture of luggage, handbags and the like, saddlery and harness",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "15201",
                MSICCodes::DESCRIPTION => "Manufacture of leather footwear",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "15202",
                MSICCodes::DESCRIPTION => "Manufacture of plastic footwear",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "15203",
                MSICCodes::DESCRIPTION => "Manufacture of rubber footwear",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "15209",
                MSICCodes::DESCRIPTION => "Manufacture of other footwear n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "16100",
                MSICCodes::DESCRIPTION => "Sawmilling and planning of wood",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "16211",
                MSICCodes::DESCRIPTION => "Manufacture of veneer sheets and plywood",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "16212",
                MSICCodes::DESCRIPTION => "Manufacture of particle board and fibreboard",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "16222",
                MSICCodes::DESCRIPTION => "Manufacture of joinery wood products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "16230",
                MSICCodes::DESCRIPTION => "Manufacture of wooden containers",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "16291",
                MSICCodes::DESCRIPTION => "Manufacture of wood charcoal",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "16292",
                MSICCodes::DESCRIPTION => "Manufacture of other products of wood, cane, articles of cork, straw and plaiting materials",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "17010",
                MSICCodes::DESCRIPTION => "Manufacture of pulp, paper and paperboard",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "17020",
                MSICCodes::DESCRIPTION => "Manufacture of corrugated paper and paperboard and of containers of paper and paperboard",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "17091",
                MSICCodes::DESCRIPTION => "Manufacture of envelopes and letter-card",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "17092",
                MSICCodes::DESCRIPTION => "Manufacture of household and personal hygiene paper",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "17093",
                MSICCodes::DESCRIPTION => "Manufacture of gummed or adhesive paper in strips or rolls and labels and wall paper",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "17094",
                MSICCodes::DESCRIPTION => "Manufacture of effigies, funeral paper goods, joss paper",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "17099",
                MSICCodes::DESCRIPTION => "Manufacture of other articles of paper and paperboard n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "18110",
                MSICCodes::DESCRIPTION => "Printing",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "18120",
                MSICCodes::DESCRIPTION => "Service activities related to printing",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "18200",
                MSICCodes::DESCRIPTION => "Reproduction of recorded media",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "19100",
                MSICCodes::DESCRIPTION => "Manufacture of coke oven products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "19201",
                MSICCodes::DESCRIPTION => "Manufacture of refined petroleum products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "19202",
                MSICCodes::DESCRIPTION => "Manufacture of bio-diesel products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20111",
                MSICCodes::DESCRIPTION => "Manufacture of liquefied or compressed inorganic industrial or medical gases",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20112",
                MSICCodes::DESCRIPTION => "Manufacture of basic organic chemicals",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20113",
                MSICCodes::DESCRIPTION => "Manufacture of inorganic compounds",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20119",
                MSICCodes::DESCRIPTION => "Manufacture of other basic chemicals n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20121",
                MSICCodes::DESCRIPTION => "Manufacture of fertilizers",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20129",
                MSICCodes::DESCRIPTION => "Manufacture of associated nitrogen products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20131",
                MSICCodes::DESCRIPTION => "Manufacture of plastic in primary forms",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20132",
                MSICCodes::DESCRIPTION => "Manufacture of synthetic rubber in primary forms: synthetic rubber, factice",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20133",
                MSICCodes::DESCRIPTION => "Manufacture of mixtures of synthetic rubber and natural rubber or rubber - like gums",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20210",
                MSICCodes::DESCRIPTION => "Manufacture of pesticides and other agrochemical products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20221",
                MSICCodes::DESCRIPTION => "Manufacture of paints, varnishes and similar coatings ink and mastics",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20222",
                MSICCodes::DESCRIPTION => "Manufacture of printing ink",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20231",
                MSICCodes::DESCRIPTION => "Manufacture of soap and detergents, cleaning and polishing preparations",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20232",
                MSICCodes::DESCRIPTION => "Manufacture of perfumes and toilet preparations",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20291",
                MSICCodes::DESCRIPTION => "Manufacture of photographic plates, films, sensitized paper and other sensitized unexposed materials",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20292",
                MSICCodes::DESCRIPTION => "Manufacture of writing and drawing ink",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20299",
                MSICCodes::DESCRIPTION => "Manufacture of other chemical products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "20300",
                MSICCodes::DESCRIPTION => "Manufacture of man-made fibres",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21001",
                MSICCodes::DESCRIPTION => "Manufacture of medicinal active substances to be used for their pharmacological properties in the manufacture of medicaments",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21002",
                MSICCodes::DESCRIPTION => "Processing of blood",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21003",
                MSICCodes::DESCRIPTION => "Manufacture of medicaments",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21004",
                MSICCodes::DESCRIPTION => "Manufacture of chemical contraceptive products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21005",
                MSICCodes::DESCRIPTION => "Manufacture of medical diagnostic preparation",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21006",
                MSICCodes::DESCRIPTION => "Manufacture of radioactive in-vivo diagnostic substances",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21007",
                MSICCodes::DESCRIPTION => "Manufacture of biotech pharmaceuticals",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "21009",
                MSICCodes::DESCRIPTION => "Manufacture of other pharmaceuticals, medicinal chemical and botanical products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22111",
                MSICCodes::DESCRIPTION => "Manufacture of rubber tyres for vehicles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22112",
                MSICCodes::DESCRIPTION => "Manufacture of interchangeable tyre treads and retreading rubber tyres",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22191",
                MSICCodes::DESCRIPTION => "Manufacture of other products of natural or synthetic rubber, unvulcanized, vulcanized or hardened",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22192",
                MSICCodes::DESCRIPTION => "Manufacture of rubber gloves",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22193",
                MSICCodes::DESCRIPTION => "Rubber remilling and latex processing",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22199",
                MSICCodes::DESCRIPTION => "Manufacture of other rubber products n.e.c",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22201",
                MSICCodes::DESCRIPTION => "Manufacture of semi-manufactures of plastic products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22202",
                MSICCodes::DESCRIPTION => "Manufacture of finished plastic products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22203",
                MSICCodes::DESCRIPTION => "Manufacture of plastic articles for the packing of goods",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22204",
                MSICCodes::DESCRIPTION => "Manufacture of builders' plastics ware",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22205",
                MSICCodes::DESCRIPTION => "Manufacture of plastic tableware, kitchenware and toilet articles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "22209",
                MSICCodes::DESCRIPTION => "Manufacture of diverse plastic products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23101",
                MSICCodes::DESCRIPTION => "Manufacture of flat glass, including wired, coloured or tinted flat glass",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23102",
                MSICCodes::DESCRIPTION => "Manufacture of laboratory, hygienic or pharmaceutical glassware",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23109",
                MSICCodes::DESCRIPTION => "Manufacture of other glass products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23911",
                MSICCodes::DESCRIPTION => "Manufacture of refractory mortars and concretes",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23912",
                MSICCodes::DESCRIPTION => "Manufacture of refractory ceramic goods",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23921",
                MSICCodes::DESCRIPTION => "Manufacture of non-refractory ceramic",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23929",
                MSICCodes::DESCRIPTION => "Manufacture of other clay building materials",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23930",
                MSICCodes::DESCRIPTION => "Manufacture of other porcelain and ceramic products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23941",
                MSICCodes::DESCRIPTION => "Manufacture of hydraulic cement",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23942",
                MSICCodes::DESCRIPTION => "Manufacture of lime and plaster",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23951",
                MSICCodes::DESCRIPTION => "Manufacture of ready-mix and dry-mix concrete and mortars",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23952",
                MSICCodes::DESCRIPTION => "Manufacture of precast concrete, cement or artificial stone articles for use in construction",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23953",
                MSICCodes::DESCRIPTION => "Manufacture of prefabricated structural components for building or civil engineering of cement, concrete or artificial stone",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23959",
                MSICCodes::DESCRIPTION => "Manufacture of other articles of concrete, cement and plaster n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23960",
                MSICCodes::DESCRIPTION => "Cutting, shaping and finishing of stone",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "23990",
                MSICCodes::DESCRIPTION => "Manufacture of other non-metallic mineral products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24101",
                MSICCodes::DESCRIPTION => "Production of pig iron and spiegeleisen in pigs, blocks or other primary forms",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24102",
                MSICCodes::DESCRIPTION => "Production of bars and rods of stainless steel or other alloy steel",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24103",
                MSICCodes::DESCRIPTION => "Manufacture of seamless tubes, by hot rolling, hot extrusion or hot drawing, or by cold drawing or cold rolling",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24104",
                MSICCodes::DESCRIPTION => "Manufacture of steel tube fittings",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24109",
                MSICCodes::DESCRIPTION => "Manufacture of other basic iron and steel products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24201",
                MSICCodes::DESCRIPTION => "Tin smelting",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24202",
                MSICCodes::DESCRIPTION => "Production of aluminium from alumina",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24209",
                MSICCodes::DESCRIPTION => "Manufacture of other basic precious and other non-ferrous metals n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24311",
                MSICCodes::DESCRIPTION => "Casting of iron",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24312",
                MSICCodes::DESCRIPTION => "Casting of steel",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "24320",
                MSICCodes::DESCRIPTION => "Casting of non-ferrous metals",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25111",
                MSICCodes::DESCRIPTION => "Manufacture of industrial frameworks in metal",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25112",
                MSICCodes::DESCRIPTION => "Manufacture of prefabricated buildings mainly of metal",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25113",
                MSICCodes::DESCRIPTION => "Manufacture of metal doors, windows and their frames, shutters and gates",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25119",
                MSICCodes::DESCRIPTION => "Manufacture of other structural metal products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25120",
                MSICCodes::DESCRIPTION => "Manufacture of tanks, reservoirs and containers of metal",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25130",
                MSICCodes::DESCRIPTION => "Manufacture of steam generators, except central heating hot water boilers",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25200",
                MSICCodes::DESCRIPTION => "Manufacture of weapons and ammunition",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25910",
                MSICCodes::DESCRIPTION => "Forging, pressing, stamping and roll-forming of metal; powder metallurgy",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25920",
                MSICCodes::DESCRIPTION => "Treatment and coating of metals; machining",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25930",
                MSICCodes::DESCRIPTION => "Manufacture of cutlery, hand tools and general hardware",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25991",
                MSICCodes::DESCRIPTION => "Manufacture of tins and cans for food products, collapsible tubes and boxes",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25992",
                MSICCodes::DESCRIPTION => "Manufacture of metal cable, plaited bands and similar articles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25993",
                MSICCodes::DESCRIPTION => "Manufacture of bolts, screws, nuts and similar threaded products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25994",
                MSICCodes::DESCRIPTION => "Manufacture of metal household articles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "25999",
                MSICCodes::DESCRIPTION => "Manufacture of any other fabricated metal products n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26101",
                MSICCodes::DESCRIPTION => "Manufacture of diodes, transistors and similar semiconductor devices",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26102",
                MSICCodes::DESCRIPTION => "Manufacture electronic integrated circuits micro assemblies",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26103",
                MSICCodes::DESCRIPTION => "Manufacture of electrical capacitors and resistors",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26104",
                MSICCodes::DESCRIPTION => "Manufacture of printed circuit boards",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26105",
                MSICCodes::DESCRIPTION => "Manufacture of display components",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26109",
                MSICCodes::DESCRIPTION => "Manufacture of other components for electronic applications",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26201",
                MSICCodes::DESCRIPTION => "Manufacture of computers",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26202",
                MSICCodes::DESCRIPTION => "Manufacture of peripheral equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26300",
                MSICCodes::DESCRIPTION => "Manufacture of communication equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26400",
                MSICCodes::DESCRIPTION => "Manufacture of consumer electronics",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26511",
                MSICCodes::DESCRIPTION => "Manufacture of measuring, testing, navigating and control equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26512",
                MSICCodes::DESCRIPTION => "Manufacture of industrial process control equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26520",
                MSICCodes::DESCRIPTION => "Manufacture of watches and clocks and parts",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26600",
                MSICCodes::DESCRIPTION => "Manufacture of irradiation, electro medical and electrotherapeutic equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26701",
                MSICCodes::DESCRIPTION => "Manufacture of optical instruments and equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26702",
                MSICCodes::DESCRIPTION => "Manufacture of photographic equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "26800",
                MSICCodes::DESCRIPTION => "Manufacture of magnetic and optical recording media",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27101",
                MSICCodes::DESCRIPTION => "Manufacture of electric motors, generators and transformers",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27102",
                MSICCodes::DESCRIPTION => "Manufacture of electricity distribution and control apparatus",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27200",
                MSICCodes::DESCRIPTION => "Manufacture of batteries and accumulators",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27310",
                MSICCodes::DESCRIPTION => "Manufacture of fibre optic cables",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27320",
                MSICCodes::DESCRIPTION => "Manufacture of other electronic and electric wires and cables",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27330",
                MSICCodes::DESCRIPTION => "Manufacture of current-carrying and non current-carrying wiring devices for electrical circuits regardless of material",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27400",
                MSICCodes::DESCRIPTION => "Manufacture of electric lighting equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27500",
                MSICCodes::DESCRIPTION => "Manufacture of domestic appliances",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "27900",
                MSICCodes::DESCRIPTION => "Manufacture of miscellaneous electrical equipment other than motors, generators and transformers, batteries and accumulators, wires and wiring devices, lighting equipment or domestic appliances",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28110",
                MSICCodes::DESCRIPTION => "Manufacture of engines and turbines, except aircraft, vehicle and cycle engines",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28120",
                MSICCodes::DESCRIPTION => "Manufacture of fluid power equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28130",
                MSICCodes::DESCRIPTION => "Manufacture of other pumps, compressors, taps and valves",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28140",
                MSICCodes::DESCRIPTION => "Manufacture of bearings, gears, gearing and driving elements",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28150",
                MSICCodes::DESCRIPTION => "Manufacture of ovens, furnaces and furnace burners",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28160",
                MSICCodes::DESCRIPTION => "Manufacture of lifting and handling equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28170",
                MSICCodes::DESCRIPTION => "Manufacture of office machinery and equipment (except computers and peripheral equipment)",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28180",
                MSICCodes::DESCRIPTION => "Manufacture of power-driven hand tools with self-contained electric or non-electric motor or pneumatic drives",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28191",
                MSICCodes::DESCRIPTION => "Manufacture of refrigerating or freezing industrial equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28192",
                MSICCodes::DESCRIPTION => "Manufacture of air-conditioning machines, including for motor vehicles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28199",
                MSICCodes::DESCRIPTION => "Manufacture of other general-purpose machinery n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28210",
                MSICCodes::DESCRIPTION => "Manufacture of agricultural and forestry machinery",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28220",
                MSICCodes::DESCRIPTION => "Manufacture of metal-forming machinery and machine tools",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28230",
                MSICCodes::DESCRIPTION => "Manufacture of machinery for metallurgy",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28240",
                MSICCodes::DESCRIPTION => "Manufacture of machinery for mining, quarrying and construction",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28250",
                MSICCodes::DESCRIPTION => "Manufacture of machinery for food, beverage and tobacco processing",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28260",
                MSICCodes::DESCRIPTION => "Manufacture of machinery for textile, apparel and leather production",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "28290",
                MSICCodes::DESCRIPTION => "Manufacture of other special-purpose machinery n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "29101",
                MSICCodes::DESCRIPTION => "Manufacture of passenger cars",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "29102",
                MSICCodes::DESCRIPTION => "Manufacture of commercial vehicles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "29200",
                MSICCodes::DESCRIPTION => "Manufacture of bodies (coachwork) for motor vehicles; manufacture of trailers and semi- trailers",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "29300",
                MSICCodes::DESCRIPTION => "Manufacture of parts and accessories for motor vehicles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30110",
                MSICCodes::DESCRIPTION => "Building of ships and floating structures",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30120",
                MSICCodes::DESCRIPTION => "Building of pleasure and sporting boats",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30200",
                MSICCodes::DESCRIPTION => "Manufacture of railway locomotives and rolling stock",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30300",
                MSICCodes::DESCRIPTION => "Manufacture of air and spacecraft and related machinery",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30400",
                MSICCodes::DESCRIPTION => "Manufacture of military fighting vehicles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30910",
                MSICCodes::DESCRIPTION => "Manufacture of motorcycles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30920",
                MSICCodes::DESCRIPTION => "Manufacture of bicycles and invalid carriages",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "30990",
                MSICCodes::DESCRIPTION => "Manufacture of other transport equipments n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "31001",
                MSICCodes::DESCRIPTION => "Manufacture of wooden and cane furniture",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "31002",
                MSICCodes::DESCRIPTION => "Manufacture of metal furniture",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "31003",
                MSICCodes::DESCRIPTION => "Manufacture of mattress",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "31009",
                MSICCodes::DESCRIPTION => "Manufacture of other furniture, except of stone, concrete or ceramic",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32110",
                MSICCodes::DESCRIPTION => "Manufacture of jewellery and related articles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32120",
                MSICCodes::DESCRIPTION => "Manufacture of imitation jewellery and related articles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32200",
                MSICCodes::DESCRIPTION => "Manufacture of musical instruments",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32300",
                MSICCodes::DESCRIPTION => "Manufacture of sports goods",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32400",
                MSICCodes::DESCRIPTION => "Manufacture of games and toys",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32500",
                MSICCodes::DESCRIPTION => "Manufacture of medical and dental instrument and supplies",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32901",
                MSICCodes::DESCRIPTION => "Manufacture of stationery",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "32909",
                MSICCodes::DESCRIPTION => "Other manufacturing n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33110",
                MSICCodes::DESCRIPTION => "Repair of fabricated metal products",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33120",
                MSICCodes::DESCRIPTION => "Repair and maintenance of industrial machinery and equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33131",
                MSICCodes::DESCRIPTION => "Repair and maintenance of the measuring, testing, navigating and control equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33132",
                MSICCodes::DESCRIPTION => "Repair and maintenance of irradiation, electro medical and electrotherapeutic equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33133",
                MSICCodes::DESCRIPTION => "Repair of optical instruments and photographic equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33140",
                MSICCodes::DESCRIPTION => "Repair and maintenance of electrical equipment except domestic appliances",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33150",
                MSICCodes::DESCRIPTION => "Repair and maintenance of transport equipment except motorcycles and bicycles",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33190",
                MSICCodes::DESCRIPTION => "Repair and maintenance of other equipment n.e.c.",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "33200",
                MSICCodes::DESCRIPTION => "Installation of industrial machinery and equipment",
                MSICCodes::CATEGORY_REF => "C"
            ],
            [
                MSICCodes::CODE => "35101",
                MSICCodes::DESCRIPTION => "Operation of generation facilities that produce electric energy",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "35102",
                MSICCodes::DESCRIPTION => "Operation of transmission, distribution and sales of electricity",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "35201",
                MSICCodes::DESCRIPTION => "Manufacture of gaseous fuels with a specified calorific value, by purification, blending and other processes from gases of various types including natural gas",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "35202",
                MSICCodes::DESCRIPTION => "Transportation, distribution and supply of gaseous fuels of all kinds through a system of mains",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "35203",
                MSICCodes::DESCRIPTION => "Sale of gas to the user through mains",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "35301",
                MSICCodes::DESCRIPTION => "Production, collection and distribution of steam and hot water for heating, power and other purposes",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "35302",
                MSICCodes::DESCRIPTION => "Production and distribution of cooled air, chilled water for cooling purposes",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "35303",
                MSICCodes::DESCRIPTION => "Production of ice, including ice for food and non-food (e.g. cooling) purposes",
                MSICCodes::CATEGORY_REF => "D"
            ],
            [
                MSICCodes::CODE => "36001",
                MSICCodes::DESCRIPTION => "Purification and distribution of water for water supply purposes",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "36002",
                MSICCodes::DESCRIPTION => "Desalting of sea or ground water to produce water as the principal product of interest",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "37000",
                MSICCodes::DESCRIPTION => "Sewerage and similar activities",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38111",
                MSICCodes::DESCRIPTION => "Collection of non-hazardous solid waste (i.e. garbage) within a local area",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38112",
                MSICCodes::DESCRIPTION => "Collection of recyclable materials",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38113",
                MSICCodes::DESCRIPTION => "Collection of refuse in litter-bins in public places",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38114",
                MSICCodes::DESCRIPTION => "Collection of construction and demolition waste",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38115",
                MSICCodes::DESCRIPTION => "Operation of waste transfer stations for non-hazardous waste",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38121",
                MSICCodes::DESCRIPTION => "Collection of hazardous waste",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38122",
                MSICCodes::DESCRIPTION => "Operation of waste transfer stations for hazardous waste",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38210",
                MSICCodes::DESCRIPTION => "Treatment and disposal of non-hazardous waste",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38220",
                MSICCodes::DESCRIPTION => "Treatment and disposal of hazardous waste",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38301",
                MSICCodes::DESCRIPTION => "Mechanical crushing of metal waste",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38302",
                MSICCodes::DESCRIPTION => "Dismantling of automobiles, computers, televisions and other equipment for material recover",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38303",
                MSICCodes::DESCRIPTION => "Reclaiming of rubber such as used tires to produce secondary raw material",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38304",
                MSICCodes::DESCRIPTION => "Reuse of rubber products",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "38309",
                MSICCodes::DESCRIPTION => "Materials recovery n.e.c.",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "39000",
                MSICCodes::DESCRIPTION => "Remediation activities and other waste management services",
                MSICCodes::CATEGORY_REF => "E"
            ],
            [
                MSICCodes::CODE => "41001",
                MSICCodes::DESCRIPTION => "Residential buildings",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "41002",
                MSICCodes::DESCRIPTION => "Non-residential buildings",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "41003",
                MSICCodes::DESCRIPTION => "Assembly and erection of prefabricated constructions on the site",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "41009",
                MSICCodes::DESCRIPTION => "Construction of buildings n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42101",
                MSICCodes::DESCRIPTION => "Construction of motorways, streets, roads, other vehicular and pedestrian ways",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42102",
                MSICCodes::DESCRIPTION => "Surface work on streets, roads, highways, bridges or tunnels",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42103",
                MSICCodes::DESCRIPTION => "Construction of bridges, including those for elevated highways",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42104",
                MSICCodes::DESCRIPTION => "Construction of tunnels",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42105",
                MSICCodes::DESCRIPTION => "Construction of railways and subways",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42106",
                MSICCodes::DESCRIPTION => "Construction of airfield/airports runways",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42109",
                MSICCodes::DESCRIPTION => "Construction of roads and railways n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42201",
                MSICCodes::DESCRIPTION => "Long-distance pipelines, communication and power lines",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42202",
                MSICCodes::DESCRIPTION => "Urban pipelines, urban communication and power lines; ancillary urban works",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42203",
                MSICCodes::DESCRIPTION => "Water main and line construction",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42204",
                MSICCodes::DESCRIPTION => "Reservoirs",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42205",
                MSICCodes::DESCRIPTION => "Construction of irrigation systems (canals)",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42206",
                MSICCodes::DESCRIPTION => "Construction of sewer systems (including repair) and sewage disposal plants",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42207",
                MSICCodes::DESCRIPTION => "Construction of power plants",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42209",
                MSICCodes::DESCRIPTION => "Construction of utility projects n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42901",
                MSICCodes::DESCRIPTION => "Construction of refineries",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42902",
                MSICCodes::DESCRIPTION => "Construction of waterways, harbour and river works, pleasure ports (marinas), locks",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42903",
                MSICCodes::DESCRIPTION => "Construction of dams and dykes",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42904",
                MSICCodes::DESCRIPTION => "Dredging of waterways",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42905",
                MSICCodes::DESCRIPTION => "Outdoor sports facilities",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42906",
                MSICCodes::DESCRIPTION => "Land subdivision with land improvement",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "42909",
                MSICCodes::DESCRIPTION => "Construction of other engineering projects n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43110",
                MSICCodes::DESCRIPTION => "Demolition or wrecking of buildings and other structures",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43121",
                MSICCodes::DESCRIPTION => "Clearing of building sites",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43122",
                MSICCodes::DESCRIPTION => "Earth moving",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43123",
                MSICCodes::DESCRIPTION => "Drilling, boring and core sampling for construction, geophysical, geological or similar purposes",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43124",
                MSICCodes::DESCRIPTION => "Site preparation for mining",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43125",
                MSICCodes::DESCRIPTION => "Drainage of agricultural or forestry land",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43126",
                MSICCodes::DESCRIPTION => "Land reclamation work",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43129",
                MSICCodes::DESCRIPTION => "Other site preparation activities n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43211",
                MSICCodes::DESCRIPTION => "Electrical wiring and fittings",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43212",
                MSICCodes::DESCRIPTION => "Telecommunications wiring",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43213",
                MSICCodes::DESCRIPTION => "Computer network and cable television wiring",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43214",
                MSICCodes::DESCRIPTION => "Satellite dishes",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43215",
                MSICCodes::DESCRIPTION => "Lighting systems",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43216",
                MSICCodes::DESCRIPTION => "Security systems",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43219",
                MSICCodes::DESCRIPTION => "Electrical installation n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43221",
                MSICCodes::DESCRIPTION => "Installation of heating systems (electric, gas and oil)",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43222",
                MSICCodes::DESCRIPTION => "Installation of furnaces, cooling towers",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43223",
                MSICCodes::DESCRIPTION => "Installation of non-electric solar energy collectors",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43224",
                MSICCodes::DESCRIPTION => "Installation of plumbing and sanitary equipment",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43225",
                MSICCodes::DESCRIPTION => "Installation of ventilation, refrigeration or air-conditioning equipment and ducts",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43226",
                MSICCodes::DESCRIPTION => "Installation of gas fittings",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43227",
                MSICCodes::DESCRIPTION => "Installation of fire and lawn sprinkler systems",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43228",
                MSICCodes::DESCRIPTION => "Steam piping",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43229",
                MSICCodes::DESCRIPTION => "Plumbing, heat and air-conditioning installation n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43291",
                MSICCodes::DESCRIPTION => "Installation of elevators, escalators in buildings or other construction projects",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43292",
                MSICCodes::DESCRIPTION => "Installation of automated and revolving doors in buildings or other construction projects",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43293",
                MSICCodes::DESCRIPTION => "Installation of lighting conductors in buildings or other construction projects",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43294",
                MSICCodes::DESCRIPTION => "Installation vacuum cleaning systems in buildings or other construction projects",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43295",
                MSICCodes::DESCRIPTION => "Installation thermal, sound or vibration insulation in buildings or other construction projects",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43299",
                MSICCodes::DESCRIPTION => "Other construction installation n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43301",
                MSICCodes::DESCRIPTION => "Installation of doors, windows, door and window frames of wood or other materials, fitted kitchens, staircases, shop fittings and furniture",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43302",
                MSICCodes::DESCRIPTION => "Laying, tiling, hanging or fitting in buildings or other construction projects of various types of materials",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43303",
                MSICCodes::DESCRIPTION => "Interior and exterior painting of buildings",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43304",
                MSICCodes::DESCRIPTION => "Painting of civil engineering structures",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43305",
                MSICCodes::DESCRIPTION => "Installation of glass, mirrors",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43306",
                MSICCodes::DESCRIPTION => "Interior completion",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43307",
                MSICCodes::DESCRIPTION => "Cleaning of new buildings after construction",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43309",
                MSICCodes::DESCRIPTION => "Other building completion and finishing work n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43901",
                MSICCodes::DESCRIPTION => "Construction of foundations, including pile driving",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43902",
                MSICCodes::DESCRIPTION => "Erection of non-self-manufactured steel elements",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43903",
                MSICCodes::DESCRIPTION => "Scaffolds and work platform erecting and dismantling",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43904",
                MSICCodes::DESCRIPTION => "Bricklaying and stone setting",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43905",
                MSICCodes::DESCRIPTION => "Construction of outdoor swimming pools",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43906",
                MSICCodes::DESCRIPTION => "Steam cleaning, sand blasting and similar activities for building exteriors",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43907",
                MSICCodes::DESCRIPTION => "Renting of construction machinery and equipment with operator (e.g. cranes)",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "43909",
                MSICCodes::DESCRIPTION => "Other specialized construction activities, n.e.c.",
                MSICCodes::CATEGORY_REF => "F"
            ],
            [
                MSICCodes::CODE => "45101",
                MSICCodes::DESCRIPTION => "Wholesale and retail of new motor vehicles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45102",
                MSICCodes::DESCRIPTION => "Wholesale and retail of used motor vehicles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45103",
                MSICCodes::DESCRIPTION => "Sale of industrial, commercial and agriculture vehicles – new",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45104",
                MSICCodes::DESCRIPTION => "Sale of industrial, commercial and agriculture vehicles – used",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45105",
                MSICCodes::DESCRIPTION => "Sale by commission agents",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45106",
                MSICCodes::DESCRIPTION => "Car auctions",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45109",
                MSICCodes::DESCRIPTION => "Sale of other motor vehicles n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45201",
                MSICCodes::DESCRIPTION => "Maintenance and repair of motor vehicles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45202",
                MSICCodes::DESCRIPTION => "Spraying and painting",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45203",
                MSICCodes::DESCRIPTION => "Washing and polishing (car wash)",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45204",
                MSICCodes::DESCRIPTION => "Repair of motor vehicle seats",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45205",
                MSICCodes::DESCRIPTION => "Installation of parts and accessories not as part of the manufacturing process",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45300",
                MSICCodes::DESCRIPTION => "Wholesale and retail sale of all kinds of parts, components, supplies, tools and accessories for motor vehicles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45401",
                MSICCodes::DESCRIPTION => "Wholesale and retail sale of motorcycles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45402",
                MSICCodes::DESCRIPTION => "Wholesale and retail sale of parts and accessories for motorcycles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "45403",
                MSICCodes::DESCRIPTION => "Repair and maintenance of motorcycles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46100",
                MSICCodes::DESCRIPTION => "Wholesale on a fee or contract basis",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46201",
                MSICCodes::DESCRIPTION => "Wholesale of rubber",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46202",
                MSICCodes::DESCRIPTION => "Wholesale of palm oil",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46203",
                MSICCodes::DESCRIPTION => "Wholesale of lumber and timber",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46204",
                MSICCodes::DESCRIPTION => "Wholesale of flowers and plants",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46205",
                MSICCodes::DESCRIPTION => "Wholesale of livestock",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46209",
                MSICCodes::DESCRIPTION => "Wholesale of agricultural raw material and live animal n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46311",
                MSICCodes::DESCRIPTION => "Wholesale of meat, poultry and eggs",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46312",
                MSICCodes::DESCRIPTION => "Wholesale of fish and other seafood",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46313",
                MSICCodes::DESCRIPTION => "Wholesale of fruits",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46314",
                MSICCodes::DESCRIPTION => "Wholesale of vegetables",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46319",
                MSICCodes::DESCRIPTION => "Wholesale of meat, fish, fruits and vegetables n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46321",
                MSICCodes::DESCRIPTION => "Wholesale of rice, other grains, flour and sugars",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46322",
                MSICCodes::DESCRIPTION => "Wholesale of dairy products",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46323",
                MSICCodes::DESCRIPTION => "Wholesale of confectionary",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46324",
                MSICCodes::DESCRIPTION => "Wholesale of  biscuits, cakes, breads and other bakery products",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46325",
                MSICCodes::DESCRIPTION => "Wholesale of coffee, tea, cocoa and other beverages",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46326",
                MSICCodes::DESCRIPTION => "Wholesale of beer, wine and spirits",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46327",
                MSICCodes::DESCRIPTION => "Wholesale of tobacco, cigar, cigarettes",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46329",
                MSICCodes::DESCRIPTION => "Wholesale of other foodstuffs",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46411",
                MSICCodes::DESCRIPTION => "Wholesale of yarn and fabrics",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46412",
                MSICCodes::DESCRIPTION => "Wholesale of household linen, towels, blankets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46413",
                MSICCodes::DESCRIPTION => "Wholesale of clothing",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46414",
                MSICCodes::DESCRIPTION => "Wholesale of clothing accessories",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46415",
                MSICCodes::DESCRIPTION => "Wholesale of fur articles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46416",
                MSICCodes::DESCRIPTION => "Wholesale of footwear",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46417",
                MSICCodes::DESCRIPTION => "Wholesale of haberdashery",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46419",
                MSICCodes::DESCRIPTION => "Wholesale of textiles, clothing n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46421",
                MSICCodes::DESCRIPTION => "Wholesale of pharmaceutical and medical goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46422",
                MSICCodes::DESCRIPTION => "Wholesale of perfumeries, cosmetics, soap and toiletries",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46431",
                MSICCodes::DESCRIPTION => "Wholesale of bicycles and their parts and accessories",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46432",
                MSICCodes::DESCRIPTION => "Wholesale of photographic and optical goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46433",
                MSICCodes::DESCRIPTION => "Wholesale of leather goods and travel accessories",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46434",
                MSICCodes::DESCRIPTION => "Wholesale of musical instruments, games and toys, sports goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46441",
                MSICCodes::DESCRIPTION => "Wholesale of handicrafts and artificial flowers",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46442",
                MSICCodes::DESCRIPTION => "Wholesale of cut flowers and plants",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46443",
                MSICCodes::DESCRIPTION => "Wholesale of watches and clocks",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46444",
                MSICCodes::DESCRIPTION => "Wholesale of jewellery",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46491",
                MSICCodes::DESCRIPTION => "Wholesale of household furniture",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46492",
                MSICCodes::DESCRIPTION => "Wholesale of household appliances",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46493",
                MSICCodes::DESCRIPTION => "Wholesale of lighting equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46494",
                MSICCodes::DESCRIPTION => "Wholesale of household utensils and cutlery, crockery, glassware, chinaware and pottery",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46495",
                MSICCodes::DESCRIPTION => "Wholesale of woodenware, wickerwork and corkware",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46496",
                MSICCodes::DESCRIPTION => "Wholesale of electrical and electronic goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46497",
                MSICCodes::DESCRIPTION => "Wholesale of stationery, books, magazines and newspapers",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46499",
                MSICCodes::DESCRIPTION => "Wholesale of other household goods n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46510",
                MSICCodes::DESCRIPTION => "Wholesale of computer hardware, software and peripherals",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46521",
                MSICCodes::DESCRIPTION => "Wholesale of telephone and telecommunications equipment, cell phones, pagers",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46522",
                MSICCodes::DESCRIPTION => "Wholesale of electronic components and wiring accessories",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46531",
                MSICCodes::DESCRIPTION => "Wholesale of agricultural machinery, equipment and supplies",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46532",
                MSICCodes::DESCRIPTION => "Wholesale of lawn mowers however operated",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46591",
                MSICCodes::DESCRIPTION => "Wholesale of office machinery and business equipment, except computers and computer peripheral equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46592",
                MSICCodes::DESCRIPTION => "Wholesale of office furniture",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46593",
                MSICCodes::DESCRIPTION => "Wholesale of computer-controlled machines tools",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46594",
                MSICCodes::DESCRIPTION => "Wholesale of industrial machinery, equipment and supplies",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46595",
                MSICCodes::DESCRIPTION => "Wholesale of construction and civil engineering machinery and equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46596",
                MSICCodes::DESCRIPTION => "Wholesale of lift escalators, air-conditioning, security and fire fighting equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46599",
                MSICCodes::DESCRIPTION => "Wholesale of other machinery for use in industry, trade and navigation and other services n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46611",
                MSICCodes::DESCRIPTION => "Wholesale of petrol, diesel, lubricants",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46612",
                MSICCodes::DESCRIPTION => "Wholesale of liquefied petroleum gas",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46619",
                MSICCodes::DESCRIPTION => "Wholesale of other solid, liquid and gaseous fuels and related products n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46621",
                MSICCodes::DESCRIPTION => "Wholesale of ferrous and non-ferrous metal ores and metals",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46622",
                MSICCodes::DESCRIPTION => "Wholesale of ferrous and non-ferrous semi-finished metal ores and products n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46631",
                MSICCodes::DESCRIPTION => "Wholesale of logs, sawn timber, plywood, veneer and related products",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46632",
                MSICCodes::DESCRIPTION => "Wholesale of paints and varnish",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46633",
                MSICCodes::DESCRIPTION => "Wholesale of construction materials",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46634",
                MSICCodes::DESCRIPTION => "Wholesale of fittings and fixtures",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46635",
                MSICCodes::DESCRIPTION => "Wholesale of hot water heaters",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46636",
                MSICCodes::DESCRIPTION => "Wholesale of sanitary installation and equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46637",
                MSICCodes::DESCRIPTION => "Wholesale of tools",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46639",
                MSICCodes::DESCRIPTION => "Wholesale of other construction materials, hardware, plumbing and heating equipment and supplies n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46691",
                MSICCodes::DESCRIPTION => "Wholesale of industrial chemicals",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46692",
                MSICCodes::DESCRIPTION => "Wholesale of fertilizers and agrochemical products",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46693",
                MSICCodes::DESCRIPTION => "Wholesale of plastic materials in primary forms",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46694",
                MSICCodes::DESCRIPTION => "Wholesale of rubber scrap",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46695",
                MSICCodes::DESCRIPTION => "Wholesale of textile fibres",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46696",
                MSICCodes::DESCRIPTION => "Wholesale of paper in bulk, packaging materials",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46697",
                MSICCodes::DESCRIPTION => "Wholesale of precious stones",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46698",
                MSICCodes::DESCRIPTION => "Wholesale of metal and non-metal waste and scrap and materials for recycling",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46699",
                MSICCodes::DESCRIPTION => "Dismantling of automobiles, computer, televisions and other equipment to obtain and re-sell usable parts",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46901",
                MSICCodes::DESCRIPTION => "Wholesale of aquarium fishes, pet birds and animals",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46902",
                MSICCodes::DESCRIPTION => "Wholesale of animal/pet food",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "46909",
                MSICCodes::DESCRIPTION => "Wholesale of a variety of goods without any particular specialization n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47111",
                MSICCodes::DESCRIPTION => "Provision stores",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47112",
                MSICCodes::DESCRIPTION => "Supermarket",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47113",
                MSICCodes::DESCRIPTION => "Mini market",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47114",
                MSICCodes::DESCRIPTION => "Convenience stores",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47191",
                MSICCodes::DESCRIPTION => "Department stores",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47192",
                MSICCodes::DESCRIPTION => "Department stores and supermarket",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47193",
                MSICCodes::DESCRIPTION => "Hypermarket",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47194",
                MSICCodes::DESCRIPTION => "News agent and miscellaneous goods store",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47199",
                MSICCodes::DESCRIPTION => "Other retail sale in non-specialized stores n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47211",
                MSICCodes::DESCRIPTION => "Retail sale of rice, flour, other grains and sugars",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47212",
                MSICCodes::DESCRIPTION => "Retail sale of fresh or preserved vegetables and fruits",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47213",
                MSICCodes::DESCRIPTION => "Retail sale of dairy products and eggs",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47214",
                MSICCodes::DESCRIPTION => "Retail sale of meat and meat products (including poultry)",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47215",
                MSICCodes::DESCRIPTION => "Retail sale of fish, other seafood and products thereof",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47216",
                MSICCodes::DESCRIPTION => "Retail sale of bakery products and sugar confectionery",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47217",
                MSICCodes::DESCRIPTION => "Retail sale of mee, kuey teow, mee hoon, wantan skins and other food products made from flour or soya",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47219",
                MSICCodes::DESCRIPTION => "Retail sale of other food products n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47221",
                MSICCodes::DESCRIPTION => "Retail sale of beer, wine and spirits",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47222",
                MSICCodes::DESCRIPTION => "Retail sale of tea, coffee, soft drinks, mineral water and other beverages",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47230",
                MSICCodes::DESCRIPTION => "Retail sale of tobacco products in specialized store",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47300",
                MSICCodes::DESCRIPTION => "Retail sale of automotive fuel in specialized stores",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47411",
                MSICCodes::DESCRIPTION => "Retail sale of computers, computer equipment and supplies",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47412",
                MSICCodes::DESCRIPTION => "Retail sale of video game consoles and non-customized software",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47413",
                MSICCodes::DESCRIPTION => "Retail sale of telecommunication equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47420",
                MSICCodes::DESCRIPTION => "Retail sale of audio and video equipment in specialized store",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47510",
                MSICCodes::DESCRIPTION => "Retail sale of textiles in specialized stores",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47520",
                MSICCodes::DESCRIPTION => "Retail sale of construction materials, hardware, paints and glass",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47531",
                MSICCodes::DESCRIPTION => "Retail sale of carpets and rugs",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47532",
                MSICCodes::DESCRIPTION => "Retail sale of curtains and net curtains",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47533",
                MSICCodes::DESCRIPTION => "Retail sale of wallpaper and floor coverings",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47591",
                MSICCodes::DESCRIPTION => "Retail sale of household furniture",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47592",
                MSICCodes::DESCRIPTION => "Retail sale of articles for lighting",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47593",
                MSICCodes::DESCRIPTION => "Retail sale of household utensils and cutlery, crockery, glassware, chinaware and pottery",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47594",
                MSICCodes::DESCRIPTION => "Retail sale of wood, cork goods and wickerwork goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47595",
                MSICCodes::DESCRIPTION => "Retail sale of household appliances",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47596",
                MSICCodes::DESCRIPTION => "Retail sale of musical instruments and scores",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47597",
                MSICCodes::DESCRIPTION => "Retail sale of security systems",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47598",
                MSICCodes::DESCRIPTION => "Retail sale of household articles and equipment n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47611",
                MSICCodes::DESCRIPTION => "Retail sale of office supplies and equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47620",
                MSICCodes::DESCRIPTION => "Retail sale of musical records, audio tapes, compact discs , cassettes, video tapes, VCDs and DVDs, blank tapes and discs",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47612",
                MSICCodes::DESCRIPTION => "Retail sale of books, newspapers and stationary",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47631",
                MSICCodes::DESCRIPTION => "Retail sale of sports goods and equipments",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47632",
                MSICCodes::DESCRIPTION => "Retail sale of fishing equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47633",
                MSICCodes::DESCRIPTION => "Retail sale of camping goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47634",
                MSICCodes::DESCRIPTION => "Retail sale of boats and equipments",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47635",
                MSICCodes::DESCRIPTION => "Retail sale of bicycles and related parts and accessories",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47640",
                MSICCodes::DESCRIPTION => "Retail sale of games and toys, made of all materials",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47711",
                MSICCodes::DESCRIPTION => "Retail sale of articles of clothing, articles of fur and clothing accessories",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47712",
                MSICCodes::DESCRIPTION => "Retail sale of footwear",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47713",
                MSICCodes::DESCRIPTION => "Retail sale of leather goods, accessories of leather and leather substitutes",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47721",
                MSICCodes::DESCRIPTION => "Stores specialized in retail sale of pharmaceuticals, medical and orthopaedic goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47722",
                MSICCodes::DESCRIPTION => "Stores specialized in retail sale of perfumery, cosmetic and toilet articles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47731",
                MSICCodes::DESCRIPTION => "Retail sale of photographic and precision equipment",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47732",
                MSICCodes::DESCRIPTION => "Retail sale of watches and clocks",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47733",
                MSICCodes::DESCRIPTION => "Retail sale of jewellery",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47734",
                MSICCodes::DESCRIPTION => "Retail sale of flowers, plants, seeds, fertilizers",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47735",
                MSICCodes::DESCRIPTION => "Retail sale of souvenirs, craftwork and religious articles",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47736",
                MSICCodes::DESCRIPTION => "Retail sale of household fuel oil, cooking gas, coal and fuel wood",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47737",
                MSICCodes::DESCRIPTION => "Retail sale of spectacles and other optical goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47738",
                MSICCodes::DESCRIPTION => "Retail sale of aquarium fishes, pet animals and pet food",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47739",
                MSICCodes::DESCRIPTION => "Other retail sale of new goods in specialized stores n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47741",
                MSICCodes::DESCRIPTION => "Retail sale of second-hand books",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47742",
                MSICCodes::DESCRIPTION => "Retail sale of second-hand electrical and electronic goods",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47743",
                MSICCodes::DESCRIPTION => "Retail sale of antiques",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47744",
                MSICCodes::DESCRIPTION => "Activities of auctioning houses (retail)",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47749",
                MSICCodes::DESCRIPTION => "Retail sale of second-hand goods n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47810",
                MSICCodes::DESCRIPTION => "Retail sale of food, beverages and tobacco products via stalls or markets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47820",
                MSICCodes::DESCRIPTION => "Retail sale of textiles, clothing and footwear via stalls or markets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47891",
                MSICCodes::DESCRIPTION => "Retail sale of books via stalls or markets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47892",
                MSICCodes::DESCRIPTION => "Retail sale of carpets and rugs via stalls or markets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47893",
                MSICCodes::DESCRIPTION => "Retail sale of games and toys via stalls or markets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47894",
                MSICCodes::DESCRIPTION => "Retail sale of household appliances and consumer electronics via stall or markets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47895",
                MSICCodes::DESCRIPTION => "Retail sale of music and video recordings via stall or markets",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47911",
                MSICCodes::DESCRIPTION => "Retail sale of any kind of product by mail order",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47912",
                MSICCodes::DESCRIPTION => "Retail sale of any kind of product over the Internet",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47913",
                MSICCodes::DESCRIPTION => "Direct sale via television, radio and telephone",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47914",
                MSICCodes::DESCRIPTION => "Internet retail auctions",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47991",
                MSICCodes::DESCRIPTION => "Retail sale of any kind of product by direct sales or door-to-door sales persons",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47992",
                MSICCodes::DESCRIPTION => "Retail sale of any kind of product through vending machines",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "47999",
                MSICCodes::DESCRIPTION => "Other retail sale not in stores, stalls or markets n.e.c.",
                MSICCodes::CATEGORY_REF => "G"
            ],
            [
                MSICCodes::CODE => "49110",
                MSICCodes::DESCRIPTION => "Passenger transport by inter-urban railways",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49120",
                MSICCodes::DESCRIPTION => "Freight transport by inter-urban, suburban and urban railways",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49211",
                MSICCodes::DESCRIPTION => "City bus services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49212",
                MSICCodes::DESCRIPTION => "Urban and suburban railway passenger transport service",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49221",
                MSICCodes::DESCRIPTION => "Express bus services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49222",
                MSICCodes::DESCRIPTION => "Employees bus services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49223",
                MSICCodes::DESCRIPTION => "School bus services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49224",
                MSICCodes::DESCRIPTION => "Taxi operation and limousine services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49225",
                MSICCodes::DESCRIPTION => "Rental of cars with driver",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49229",
                MSICCodes::DESCRIPTION => "Other passenger land transport n.e.c.",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49230",
                MSICCodes::DESCRIPTION => "Freight transport by road",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "49300",
                MSICCodes::DESCRIPTION => "Transport via pipeline",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50111",
                MSICCodes::DESCRIPTION => "Operation of excursion, cruise or sightseeing boats",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50112",
                MSICCodes::DESCRIPTION => "Operation of ferries, water taxis",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50113",
                MSICCodes::DESCRIPTION => "Rental of pleasure boats with crew for sea and coastal water transport",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50121",
                MSICCodes::DESCRIPTION => "Transport of freight overseas and coastal waters, whether scheduled or not",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50122",
                MSICCodes::DESCRIPTION => "Transport by towing or pushing of barges, oil rigs",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50211",
                MSICCodes::DESCRIPTION => "Transport of passenger via rivers, canals, lakes and other inland waterways",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50212",
                MSICCodes::DESCRIPTION => "Rental of pleasure boats with crew for inland water transport",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "50220",
                MSICCodes::DESCRIPTION => "Transport of freight via rivers, canals, lakes and other inland waterways",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "51101",
                MSICCodes::DESCRIPTION => "Transport of passengers by air over regular routes and on regular schedules",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "51102",
                MSICCodes::DESCRIPTION => "Non-scheduled transport of passenger by air",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "51103",
                MSICCodes::DESCRIPTION => "Renting of air-transport equipment with operator for the purpose of passenger transportation",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "51201",
                MSICCodes::DESCRIPTION => "Transport freight by air over regular routes and on regular schedules",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "51202",
                MSICCodes::DESCRIPTION => "Non-scheduled transport of freight by air",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "51203",
                MSICCodes::DESCRIPTION => "Renting of air-transport equipment with operator for the purpose of freight transportation",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52100",
                MSICCodes::DESCRIPTION => "Warehousing and storage services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52211",
                MSICCodes::DESCRIPTION => "Operation of terminal facilities",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52212",
                MSICCodes::DESCRIPTION => "Towing and road side assistance",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52213",
                MSICCodes::DESCRIPTION => "Operation of parking facilities for motor vehicles (parking lots)",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52214",
                MSICCodes::DESCRIPTION => "Highway, bridge and tunnel operation services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52219",
                MSICCodes::DESCRIPTION => "Other service activities incidental to land transportation n.e.c.",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52221",
                MSICCodes::DESCRIPTION => "Port, harbours and piers operation services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52222",
                MSICCodes::DESCRIPTION => "Vessel salvage and refloating services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52229",
                MSICCodes::DESCRIPTION => "Other service activities incidental to water transportation n.e.c.",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52231",
                MSICCodes::DESCRIPTION => "Operation of terminal facilities",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52232",
                MSICCodes::DESCRIPTION => "Airport and air-traffic-control activities",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52233",
                MSICCodes::DESCRIPTION => "Ground service activities on airfields",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52234",
                MSICCodes::DESCRIPTION => "Fire fighting and fire-prevention services at airports",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52239",
                MSICCodes::DESCRIPTION => "Other service activities incidental to air transportation n.e.c.",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52241",
                MSICCodes::DESCRIPTION => "Stevedoring services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52249",
                MSICCodes::DESCRIPTION => "Other cargo handling activities n.e.c.",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52291",
                MSICCodes::DESCRIPTION => "Forwarding of freight",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52292",
                MSICCodes::DESCRIPTION => "Brokerage for ship and aircraft space",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "52299",
                MSICCodes::DESCRIPTION => "Other transportation support activities n.e.c.",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "53100",
                MSICCodes::DESCRIPTION => "National postal services",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "53200",
                MSICCodes::DESCRIPTION => "Courier activities other than national post activities",
                MSICCodes::CATEGORY_REF => "H"
            ],
            [
                MSICCodes::CODE => "55101",
                MSICCodes::DESCRIPTION => "Hotels and resort hotels",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55102",
                MSICCodes::DESCRIPTION => "Motels",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55103",
                MSICCodes::DESCRIPTION => "Apartment hotels",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55104",
                MSICCodes::DESCRIPTION => "Chalets",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55105",
                MSICCodes::DESCRIPTION => "Rest house/guest house",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55106",
                MSICCodes::DESCRIPTION => "Bed and breakfast units",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55107",
                MSICCodes::DESCRIPTION => "Hostels",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55108",
                MSICCodes::DESCRIPTION => "Home stay",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55109",
                MSICCodes::DESCRIPTION => "Other short term accommodation activities n.e.c.",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55200",
                MSICCodes::DESCRIPTION => "Camping grounds, recreational vehicle parks and trailer parks",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "55900",
                MSICCodes::DESCRIPTION => "Other accommodation",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56101",
                MSICCodes::DESCRIPTION => "Restaurants and restaurant cum night clubs",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56102",
                MSICCodes::DESCRIPTION => "Cafeterias/canteens ",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56103",
                MSICCodes::DESCRIPTION => "Fast-food restaurants",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56104",
                MSICCodes::DESCRIPTION => "Ice cream truck vendors and parlours",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56105",
                MSICCodes::DESCRIPTION => "Mobile food carts",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56106",
                MSICCodes::DESCRIPTION => "Food stalls/hawkers",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56107",
                MSICCodes::DESCRIPTION => "Food or beverage, food and beverage preparation in market stalls/hawkers",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56210",
                MSICCodes::DESCRIPTION => "Event/food caterers",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56290",
                MSICCodes::DESCRIPTION => "Other food service activities",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56301",
                MSICCodes::DESCRIPTION => "Pubs, bars, discotheques, coffee houses, cocktail lounges and karaoke",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56302",
                MSICCodes::DESCRIPTION => "Coffee shops",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56303",
                MSICCodes::DESCRIPTION => "Drink stalls/hawkers",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56304",
                MSICCodes::DESCRIPTION => "Mobile beverage",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "56309",
                MSICCodes::DESCRIPTION => "Others drinking places n.e.c.",
                MSICCodes::CATEGORY_REF => "I"
            ],
            [
                MSICCodes::CODE => "58110",
                MSICCodes::DESCRIPTION => "Publishing of books, brochures and other publications",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "58120",
                MSICCodes::DESCRIPTION => "Publishing of mailing lists, telephone book, other directories",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "58130",
                MSICCodes::DESCRIPTION => "Publishing of newspapers, journals, magazines and periodicals in print or electronic form",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "58190",
                MSICCodes::DESCRIPTION => "Publishing of catalogues, photos, engraving and postcards, greeting cards, forms, posters, reproduction of works of art, advertising material and other printed matter n.e.c.",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "58201",
                MSICCodes::DESCRIPTION => "Business and other applications",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "58202",
                MSICCodes::DESCRIPTION => "Computer games for all platforms",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "58203",
                MSICCodes::DESCRIPTION => "Operating systems",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "59110",
                MSICCodes::DESCRIPTION => "Motion picture, video and television programme production activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "59120",
                MSICCodes::DESCRIPTION => "Motion picture, video and television programme post-production activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "59130",
                MSICCodes::DESCRIPTION => "Motion picture, video and television programme distribution activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "59140",
                MSICCodes::DESCRIPTION => "Motion picture projection activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "59200",
                MSICCodes::DESCRIPTION => "Sound recording and music publishing activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "60100",
                MSICCodes::DESCRIPTION => "Radio broadcasting",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "60200",
                MSICCodes::DESCRIPTION => "Television programming and broadcasting activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61101",
                MSICCodes::DESCRIPTION => "Wired telecommunications services",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61102",
                MSICCodes::DESCRIPTION => "Internet access providers by the operator of the wired infrastructure",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61201",
                MSICCodes::DESCRIPTION => "Wireless telecommunications services",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61202",
                MSICCodes::DESCRIPTION => "Internet access providers by the operator of the wireless infrastructure",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61300",
                MSICCodes::DESCRIPTION => "Satellite telecommunications services",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61901",
                MSICCodes::DESCRIPTION => "Provision of Internet access over networks between the client and the ISP not owned or controlled by the ISP",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61902",
                MSICCodes::DESCRIPTION => "Provision of telecommunications services over existing telecom connection",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61903",
                MSICCodes::DESCRIPTION => "Telecommunications resellers",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61904",
                MSICCodes::DESCRIPTION => "Provision of telecommunications services over existing telecom connections VOIP (Voice Over Internet Protocol) provision",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61905",
                MSICCodes::DESCRIPTION => "Provision of specialized telecommunications applications",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "61909",
                MSICCodes::DESCRIPTION => "Other telecommunications activities n.e.c.",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "62010",
                MSICCodes::DESCRIPTION => "Computer programming activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "62021",
                MSICCodes::DESCRIPTION => "Computer consultancy",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "62022",
                MSICCodes::DESCRIPTION => "Computer facilities management activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "62091",
                MSICCodes::DESCRIPTION => "Information Communication Technology (ICT) system security",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "62099",
                MSICCodes::DESCRIPTION => "Other information technology service activities n.e.c.",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "63111",
                MSICCodes::DESCRIPTION => "Activities of providing infrastructure for hosting, data processing services and related activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "63112",
                MSICCodes::DESCRIPTION => "Data processing activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "63120",
                MSICCodes::DESCRIPTION => "Web portals",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "63910",
                MSICCodes::DESCRIPTION => "News syndicate and news agency activities",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "63990",
                MSICCodes::DESCRIPTION => "Other information service activities n.e.c.",
                MSICCodes::CATEGORY_REF => "J"
            ],
            [
                MSICCodes::CODE => "64110",
                MSICCodes::DESCRIPTION => "Central banking",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64191",
                MSICCodes::DESCRIPTION => "Commercial Banks",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64192",
                MSICCodes::DESCRIPTION => "Islamic Banks",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64193",
                MSICCodes::DESCRIPTION => "Offshore Banks",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64194",
                MSICCodes::DESCRIPTION => "Investment Banks",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64195",
                MSICCodes::DESCRIPTION => "Development financial institutions (with deposit taking functions)",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64199",
                MSICCodes::DESCRIPTION => "Other monetary intermediation (with deposit taking functions) n.e.c.",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64200",
                MSICCodes::DESCRIPTION => "Activities of holding companies",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64301",
                MSICCodes::DESCRIPTION => "Venture capital companies",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64302",
                MSICCodes::DESCRIPTION => "Unit trust fund excludes REITs",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64303",
                MSICCodes::DESCRIPTION => "Property unit trust (REITs)",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64304",
                MSICCodes::DESCRIPTION => "Other administration of trusts accounts",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64309",
                MSICCodes::DESCRIPTION => "Trusts, funds and similar financial entities n.e.c.",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64910",
                MSICCodes::DESCRIPTION => "Financial leasing activities",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64921",
                MSICCodes::DESCRIPTION => "Development financial institutions (without deposit taking functions)",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64922",
                MSICCodes::DESCRIPTION => "Credit card services",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64923",
                MSICCodes::DESCRIPTION => "Licensed money lending activities",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64924",
                MSICCodes::DESCRIPTION => "Pawnshops and pawnbrokers includes Ar-Rahnu",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64925",
                MSICCodes::DESCRIPTION => "Co-operative with credits functions",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64929",
                MSICCodes::DESCRIPTION => "Other credit granting n.e.c.",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64991",
                MSICCodes::DESCRIPTION => "Factoring companies",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64992",
                MSICCodes::DESCRIPTION => "Representative office of foreign banks",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64993",
                MSICCodes::DESCRIPTION => "Nominee companies",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "64999",
                MSICCodes::DESCRIPTION => "Other financial service activities, except insurance/takaful and pension funding n.e.c.",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65111",
                MSICCodes::DESCRIPTION => "Life insurance",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65112",
                MSICCodes::DESCRIPTION => "Family takaful",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65121",
                MSICCodes::DESCRIPTION => "General insurance",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65122",
                MSICCodes::DESCRIPTION => "General takaful",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65123",
                MSICCodes::DESCRIPTION => "Composite insurance",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65124",
                MSICCodes::DESCRIPTION => "Offshore insurance",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65125",
                MSICCodes::DESCRIPTION => "Offshore takaful",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65201",
                MSICCodes::DESCRIPTION => "Life reinsurance",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65202",
                MSICCodes::DESCRIPTION => "Family retakaful",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65203",
                MSICCodes::DESCRIPTION => "General reinsurance",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65204",
                MSICCodes::DESCRIPTION => "General retakaful",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65205",
                MSICCodes::DESCRIPTION => "Composite retakaful",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65206",
                MSICCodes::DESCRIPTION => "Offshore reinsurance",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65207",
                MSICCodes::DESCRIPTION => "Offshore retakaful",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65301",
                MSICCodes::DESCRIPTION => "Pension funding",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "65302",
                MSICCodes::DESCRIPTION => "Provident funding",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66111",
                MSICCodes::DESCRIPTION => "Stock exchanges",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66112",
                MSICCodes::DESCRIPTION => "Exchanges for commodity contracts",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66113",
                MSICCodes::DESCRIPTION => "Securities exchange",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66114",
                MSICCodes::DESCRIPTION => "Exchanges for commodity futures contracts",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66119",
                MSICCodes::DESCRIPTION => "Administration of financial markets n.e.c.",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66121",
                MSICCodes::DESCRIPTION => "Stock, share and bond brokers",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66122",
                MSICCodes::DESCRIPTION => "Commodity brokers and dealers",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66123",
                MSICCodes::DESCRIPTION => "Gold bullion dealers",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66124",
                MSICCodes::DESCRIPTION => "Foreign exchange broker and dealers (Bureaux de change)",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66125",
                MSICCodes::DESCRIPTION => "Money-changing services",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66129",
                MSICCodes::DESCRIPTION => "Other financial and commodity futures brokers and dealers",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66191",
                MSICCodes::DESCRIPTION => "Investment advisory services",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66192",
                MSICCodes::DESCRIPTION => "Financial consultancy services",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66199",
                MSICCodes::DESCRIPTION => "Activities auxiliary to finance n.e.c.",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66211",
                MSICCodes::DESCRIPTION => "Insurance adjusting service",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66212",
                MSICCodes::DESCRIPTION => "Takaful adjusting service",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66221",
                MSICCodes::DESCRIPTION => "Insurance agents",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66222",
                MSICCodes::DESCRIPTION => "Takaful agents",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66223",
                MSICCodes::DESCRIPTION => "Insurance brokers",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66224",
                MSICCodes::DESCRIPTION => "Takaful brokers",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66290",
                MSICCodes::DESCRIPTION => "Other activities auxiliary to insurance, takaful and pension funding",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66301",
                MSICCodes::DESCRIPTION => "Management of pension funds",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66302",
                MSICCodes::DESCRIPTION => "Assets/portfolio management",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "66303",
                MSICCodes::DESCRIPTION => "Unit trust management companies",
                MSICCodes::CATEGORY_REF => "K"
            ],
            [
                MSICCodes::CODE => "68101",
                MSICCodes::DESCRIPTION => "Buying, selling, renting and operating of self-owned or leased real estate – residential buildings",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68102",
                MSICCodes::DESCRIPTION => "Buying, selling, renting and operating of self-owned or leased real estate – non-residential buildings",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68103",
                MSICCodes::DESCRIPTION => "Buying, selling, renting and operating of self-owned or leased real estate – land",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68104",
                MSICCodes::DESCRIPTION => "Development of building projects for own operation, i.e. for renting of space in these buildings",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68109",
                MSICCodes::DESCRIPTION => "Real estate activities with own or leased property n.e.c.",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68201",
                MSICCodes::DESCRIPTION => "Activities of real estate agents and brokers for buying, selling and renting of real estate",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68202",
                MSICCodes::DESCRIPTION => "Management of real estate on a fee or contract basis",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68203",
                MSICCodes::DESCRIPTION => "Appraisal services for real estate",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "68209",
                MSICCodes::DESCRIPTION => "Real estate activities on a fee or contract basis n.e.c.",
                MSICCodes::CATEGORY_REF => "L"
            ],
            [
                MSICCodes::CODE => "69100",
                MSICCodes::DESCRIPTION => "Legal activities",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "69200",
                MSICCodes::DESCRIPTION => "Accounting, bookkeeping and auditing activities; tax consultancy",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "70100",
                MSICCodes::DESCRIPTION => "Activities of head offices",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "70201",
                MSICCodes::DESCRIPTION => "Business management consultancy services",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "70202",
                MSICCodes::DESCRIPTION => "Human resource consultancy services",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "70203",
                MSICCodes::DESCRIPTION => "Consultancy services in public relation and communications",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "70209",
                MSICCodes::DESCRIPTION => "Other management consultancy activities n.e.c",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "71101",
                MSICCodes::DESCRIPTION => "Architectural services",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "71102",
                MSICCodes::DESCRIPTION => "Engineering services",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "71103",
                MSICCodes::DESCRIPTION => "Land surveying services",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "71109",
                MSICCodes::DESCRIPTION => "Other architectural and engineering activities and related technical consultancy n.e.c.",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "71200",
                MSICCodes::DESCRIPTION => "Technical testing and analysis",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72101",
                MSICCodes::DESCRIPTION => "Research and development on natural sciences",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72102",
                MSICCodes::DESCRIPTION => "Research and development on engineering and technology",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72103",
                MSICCodes::DESCRIPTION => "Research and development on medical sciences",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72104",
                MSICCodes::DESCRIPTION => "Research and development on biotechnology",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72105",
                MSICCodes::DESCRIPTION => "Research and development on agricultural sciences",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72106",
                MSICCodes::DESCRIPTION => "Research and development on Information Communication Technology (ICT)",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72109",
                MSICCodes::DESCRIPTION => "Research and development on other natural science and engineering n.e.c.",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72201",
                MSICCodes::DESCRIPTION => "Research and development on social sciences",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72202",
                MSICCodes::DESCRIPTION => "Research and development on humanities",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "72209",
                MSICCodes::DESCRIPTION => "Research and development of other social sciences and humanities n.e.c.",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "73100",
                MSICCodes::DESCRIPTION => "Advertising",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "73200",
                MSICCodes::DESCRIPTION => "Market research and public opinion polling",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74101",
                MSICCodes::DESCRIPTION => "Activities of interior decorators",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74102",
                MSICCodes::DESCRIPTION => "Services of graphic designers",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74103",
                MSICCodes::DESCRIPTION => "Fashion design services",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74109",
                MSICCodes::DESCRIPTION => "Specialized design activities n.e.c.",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74200",
                MSICCodes::DESCRIPTION => "Photographic activities",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74901",
                MSICCodes::DESCRIPTION => "Translation and interpretation activities",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74902",
                MSICCodes::DESCRIPTION => "Business brokerage activities",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74903",
                MSICCodes::DESCRIPTION => "Security consulting",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74904",
                MSICCodes::DESCRIPTION => "Activities of quantity surveyors",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74905",
                MSICCodes::DESCRIPTION => "Activities of consultants other than architecture, engineering and management consultants",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "74909",
                MSICCodes::DESCRIPTION => "Any other professional, scientific and technical activities n.e.c.",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "75000",
                MSICCodes::DESCRIPTION => "VETERINARY ACTIVITIES",
                MSICCodes::CATEGORY_REF => "M"
            ],
            [
                MSICCodes::CODE => "77101",
                MSICCodes::DESCRIPTION => "Renting and operational leasing of passenger cars (without driver)",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77102",
                MSICCodes::DESCRIPTION => "Renting and operational leasing of trucks, utility trailers and recreational vehicles",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77211",
                MSICCodes::DESCRIPTION => "Renting and leasing of pleasure boats, canoes, sailboats",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77212",
                MSICCodes::DESCRIPTION => "Renting and leasing of bicycles",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77213",
                MSICCodes::DESCRIPTION => "Renting and leasing of beach chairs and umbrellas",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77219",
                MSICCodes::DESCRIPTION => "Renting and leasing of other sports equipment n.e.c.",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77220",
                MSICCodes::DESCRIPTION => "Renting of video tapes, records, CDs, DVDs",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77291",
                MSICCodes::DESCRIPTION => "Renting and leasing of textiles, wearing apparel and footwear",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77292",
                MSICCodes::DESCRIPTION => "Renting and leasing of furniture, pottery and glass, kitchen and tableware, electrical appliances and house wares",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77293",
                MSICCodes::DESCRIPTION => "Renting and leasing of jewellery, musical instruments, scenery and costumes",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77294",
                MSICCodes::DESCRIPTION => "Renting and leasing of books, journals and magazines",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77295",
                MSICCodes::DESCRIPTION => "Renting and leasing of machinery and equipment used by amateurs or as a hobby",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77296",
                MSICCodes::DESCRIPTION => "Renting of flowers and plants",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77297",
                MSICCodes::DESCRIPTION => "Renting and leasing of electronic equipment for household use",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77299",
                MSICCodes::DESCRIPTION => "Renting and leasing of other personal and household goods n.e.c.",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77301",
                MSICCodes::DESCRIPTION => "Renting and operational leasing, without operator, of other machinery and equipment that are generally used as capital goods by industries",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77302",
                MSICCodes::DESCRIPTION => "Renting and operational leasing of land-transport equipment (other than motor vehicles) without drivers",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77303",
                MSICCodes::DESCRIPTION => "Renting and operational leasing of water-transport equipment without operator",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77304",
                MSICCodes::DESCRIPTION => "Renting and operational leasing of air transport equipment without operator",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77305",
                MSICCodes::DESCRIPTION => "Renting and operational leasing of agricultural and forestry machinery and equipment without operator",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77306",
                MSICCodes::DESCRIPTION => "Renting and operational leasing of construction and civil-engineering machinery and equipment without operator",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77307",
                MSICCodes::DESCRIPTION => "Rental and operational leasing of office machinery and equipment without operator",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77309",
                MSICCodes::DESCRIPTION => "Renting and leasing of other machinery, equipment and tangible goods n.e.c.",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "77400",
                MSICCodes::DESCRIPTION => "Leasing of intellectual property and similar products, except copyrighted works",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "78100",
                MSICCodes::DESCRIPTION => "Activities of employment placement agencies",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "78200",
                MSICCodes::DESCRIPTION => "Temporary employment agency activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "78300",
                MSICCodes::DESCRIPTION => "Provision of human resources for client businesses",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "79110",
                MSICCodes::DESCRIPTION => "Travel agency activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "79120",
                MSICCodes::DESCRIPTION => "Tour operator activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "79900",
                MSICCodes::DESCRIPTION => "Other reservation service and related activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "80100",
                MSICCodes::DESCRIPTION => "Private security activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "80200",
                MSICCodes::DESCRIPTION => "Security systems service activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "80300",
                MSICCodes::DESCRIPTION => "Investigation and detective activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81100",
                MSICCodes::DESCRIPTION => "Combined facilities support activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81210",
                MSICCodes::DESCRIPTION => "General cleaning of buildings",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81291",
                MSICCodes::DESCRIPTION => "Cleaning of buildings of all types",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81292",
                MSICCodes::DESCRIPTION => "Swimming pool cleaning and maintenance services",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81293",
                MSICCodes::DESCRIPTION => "Cleaning of industrial machinery",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81294",
                MSICCodes::DESCRIPTION => "Cleaning of trains, buses, planes",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81295",
                MSICCodes::DESCRIPTION => "Cleaning of pest control services not in connection with agriculture",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81296",
                MSICCodes::DESCRIPTION => "Disinfecting and exterminating activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81297",
                MSICCodes::DESCRIPTION => "Cleaning of sea tankers",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81299",
                MSICCodes::DESCRIPTION => "Other building and industrial cleaning activities, n.e.c.",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "81300",
                MSICCodes::DESCRIPTION => "Landscape care and maintenance service activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82110",
                MSICCodes::DESCRIPTION => "Combined office administrative service activities",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82191",
                MSICCodes::DESCRIPTION => "Document preparation, editing and/or proofreading",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82192",
                MSICCodes::DESCRIPTION => "Typing, word processing or desktop publishing",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82193",
                MSICCodes::DESCRIPTION => "Secretarial support services",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82194",
                MSICCodes::DESCRIPTION => "Transcription of documents and other secretarial services",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82195",
                MSICCodes::DESCRIPTION => "Provision of mailbox rental and other postal and mailing services",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82196",
                MSICCodes::DESCRIPTION => "Photocopying, duplicating, blueprinting",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82199",
                MSICCodes::DESCRIPTION => "Photocopying, document preparation and other specialized office support activities n.e.c.",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82200",
                MSICCodes::DESCRIPTION => "Activities of call centres",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82301",
                MSICCodes::DESCRIPTION => "Organization, promotions and/or management of event",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82302",
                MSICCodes::DESCRIPTION => "Meeting, incentive, convention, exhibition (MICE)",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82910",
                MSICCodes::DESCRIPTION => "Activities of collection agencies and credit bureaus",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82920",
                MSICCodes::DESCRIPTION => "Packaging activities on a fee or contract basis, whether or not these involve an automated process",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "82990",
                MSICCodes::DESCRIPTION => "Other business support service activities n.e.c.",
                MSICCodes::CATEGORY_REF => "N"
            ],
            [
                MSICCodes::CODE => "84111",
                MSICCodes::DESCRIPTION => "General (overall) public administration activities",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84112",
                MSICCodes::DESCRIPTION => "Ancillary service activities for the government as a whole",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84121",
                MSICCodes::DESCRIPTION => "Administrative educational services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84122",
                MSICCodes::DESCRIPTION => "Administrative health care services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84123",
                MSICCodes::DESCRIPTION => "Administrative housing and local government services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84124",
                MSICCodes::DESCRIPTION => "Administrative recreational, cultural, arts and sports services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84125",
                MSICCodes::DESCRIPTION => "Administrative religious affairs services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84126",
                MSICCodes::DESCRIPTION => "Administrative welfare services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84129",
                MSICCodes::DESCRIPTION => "Other community and social affairs services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84131",
                MSICCodes::DESCRIPTION => "Domestic and international trade affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84132",
                MSICCodes::DESCRIPTION => "Agriculture and rural development affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84133",
                MSICCodes::DESCRIPTION => "Primary industries affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84134",
                MSICCodes::DESCRIPTION => "Public works affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84135",
                MSICCodes::DESCRIPTION => "Transport affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84136",
                MSICCodes::DESCRIPTION => "Energy, telecommunication and postal affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84137",
                MSICCodes::DESCRIPTION => "Tourism affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84138",
                MSICCodes::DESCRIPTION => "Human resource affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84139",
                MSICCodes::DESCRIPTION => "Other regulation of and contribution to more efficient operation of businesses n.e.c.",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84210",
                MSICCodes::DESCRIPTION => "Foreign affairs",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84220",
                MSICCodes::DESCRIPTION => "Military and civil defence services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84231",
                MSICCodes::DESCRIPTION => "Police service",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84232",
                MSICCodes::DESCRIPTION => "Prison service",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84233",
                MSICCodes::DESCRIPTION => "Immigration service",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84234",
                MSICCodes::DESCRIPTION => "National registration service",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84235",
                MSICCodes::DESCRIPTION => "Judiciary and legal service",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84236",
                MSICCodes::DESCRIPTION => "Firefighting and fire prevention",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84239",
                MSICCodes::DESCRIPTION => "Other public order and safety affairs related services",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "84300",
                MSICCodes::DESCRIPTION => "Compulsory social security activities e.g. SOCSO",
                MSICCodes::CATEGORY_REF => "O"
            ],
            [
                MSICCodes::CODE => "85101",
                MSICCodes::DESCRIPTION => "Pre-primary education (Public)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85102",
                MSICCodes::DESCRIPTION => "Pre-primary education (Private)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85103",
                MSICCodes::DESCRIPTION => "Primary education (Public)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85104",
                MSICCodes::DESCRIPTION => "Primary education (Private)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85211",
                MSICCodes::DESCRIPTION => "General school secondary education (Public)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85212",
                MSICCodes::DESCRIPTION => "General school secondary education (Private)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85221",
                MSICCodes::DESCRIPTION => "Technical and vocational education below the level of higher education (Public)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85222",
                MSICCodes::DESCRIPTION => "Technical and vocational education below the level of higher education (Private)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85301",
                MSICCodes::DESCRIPTION => "College and university education (Public)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85302",
                MSICCodes::DESCRIPTION => "College and university education (Private)",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85411",
                MSICCodes::DESCRIPTION => "Sports instruction",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85412",
                MSICCodes::DESCRIPTION => "Martial arts instruction",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85419",
                MSICCodes::DESCRIPTION => "Any other sports and recreation education n.e.c",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85421",
                MSICCodes::DESCRIPTION => "Music and dancing school",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85429",
                MSICCodes::DESCRIPTION => "Any other cultural education n.e.c.",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85491",
                MSICCodes::DESCRIPTION => "Tuition centre",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85492",
                MSICCodes::DESCRIPTION => "Driving school",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85493",
                MSICCodes::DESCRIPTION => "Religious instruction",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85494",
                MSICCodes::DESCRIPTION => "Computer training",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85499",
                MSICCodes::DESCRIPTION => "Others education n.e.c",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "85500",
                MSICCodes::DESCRIPTION => "Educational support services for provision of non-instructional services",
                MSICCodes::CATEGORY_REF => "P"
            ],
            [
                MSICCodes::CODE => "86101",
                MSICCodes::DESCRIPTION => "Hospital activities",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86102",
                MSICCodes::DESCRIPTION => "Maternity home services (outside hospital)",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86201",
                MSICCodes::DESCRIPTION => "General medical services",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86202",
                MSICCodes::DESCRIPTION => "Specialized medical services",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86203",
                MSICCodes::DESCRIPTION => "Dental services",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86901",
                MSICCodes::DESCRIPTION => "Dialysis Centres",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86902",
                MSICCodes::DESCRIPTION => "Medical laboratories",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86903",
                MSICCodes::DESCRIPTION => "Physiotherapy and occupational therapy service",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86904",
                MSICCodes::DESCRIPTION => "Acupuncture services",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86905",
                MSICCodes::DESCRIPTION => "Herbalist and homeopathy services",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86906",
                MSICCodes::DESCRIPTION => "Ambulance services",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "86909",
                MSICCodes::DESCRIPTION => "Other human health services n.e.c.",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87101",
                MSICCodes::DESCRIPTION => "Homes for the elderly with nursing care",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87102",
                MSICCodes::DESCRIPTION => "Nursing homes",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87103",
                MSICCodes::DESCRIPTION => "Palliative or hospices",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87201",
                MSICCodes::DESCRIPTION => "Drug rehabilitation centres",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87209",
                MSICCodes::DESCRIPTION => "Other residential care activities for mental retardation n.e.c.",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87300",
                MSICCodes::DESCRIPTION => "Residential care activities for the elderly and disabled",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87901",
                MSICCodes::DESCRIPTION => "Orphanages",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87902",
                MSICCodes::DESCRIPTION => "Welfare homes services",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "87909",
                MSICCodes::DESCRIPTION => "Other residential care activities n.e.c.",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "88101",
                MSICCodes::DESCRIPTION => "Day-care activities for the elderly or for handicapped adults",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "88109",
                MSICCodes::DESCRIPTION => "Others social work activities without accommodation for the elderly and disabled",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "88901",
                MSICCodes::DESCRIPTION => "Counselling service",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "88902",
                MSICCodes::DESCRIPTION => "Child day-care activities",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "88909",
                MSICCodes::DESCRIPTION => "Other social work activities without accommodation n.e.c.",
                MSICCodes::CATEGORY_REF => "Q"
            ],
            [
                MSICCodes::CODE => "90001",
                MSICCodes::DESCRIPTION => "Theatrical producer, singer group band and orchestra entertainment services",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "90002",
                MSICCodes::DESCRIPTION => "Operation of concert and theatre halls and other arts facilities",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "90003",
                MSICCodes::DESCRIPTION => "Activities of sculptors, painters, cartoonists, engravers, etchers",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "90004",
                MSICCodes::DESCRIPTION => "Activities of individual writers, for all subjects",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "90005",
                MSICCodes::DESCRIPTION => "Activities of independent journalists",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "90006",
                MSICCodes::DESCRIPTION => "Restoring of works of art such as painting",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "90007",
                MSICCodes::DESCRIPTION => "Activities of producers or entrepreneurs of arts live events, with or without facilities",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "90009",
                MSICCodes::DESCRIPTION => "Creative, arts and entertainment activities n.e.c.",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "91011",
                MSICCodes::DESCRIPTION => "Documentation and information activities of libraries of all kinds",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "91012",
                MSICCodes::DESCRIPTION => "Stock photo libraries and services",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "91021",
                MSICCodes::DESCRIPTION => "Operation of museums of all kinds",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "91022",
                MSICCodes::DESCRIPTION => "Operation of historical sites and buildings",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "91031",
                MSICCodes::DESCRIPTION => "Operation of botanical and zoological gardens",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "91032",
                MSICCodes::DESCRIPTION => "Operation of nature reserves, including wildlife preservation",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "92000",
                MSICCodes::DESCRIPTION => "GAMBLING AND BETTING ACTIVITIES",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93111",
                MSICCodes::DESCRIPTION => "Football, hockey, cricket, baseball, badminton, futsal, paintball",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93112",
                MSICCodes::DESCRIPTION => "Racetracks for auto",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93113",
                MSICCodes::DESCRIPTION => "Equestrian clubs",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93114",
                MSICCodes::DESCRIPTION => "Swimming pools and stadiums, ice-skating arenas",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93115",
                MSICCodes::DESCRIPTION => "Track and field stadium",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93116",
                MSICCodes::DESCRIPTION => "Golf courses",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93117",
                MSICCodes::DESCRIPTION => "Bowling centre",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93118",
                MSICCodes::DESCRIPTION => "Fitness centres",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93119",
                MSICCodes::DESCRIPTION => "Organization and operation of outdoor or indoor sports events for professionals or amateurs by organizations with own facilities",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93120",
                MSICCodes::DESCRIPTION => "The operation of sports clubs such as football club, bowling club, swimming club",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93191",
                MSICCodes::DESCRIPTION => "Activities of producers or promoters of sports events, with or without facilities",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93192",
                MSICCodes::DESCRIPTION => "Activities of sports leagues and regulating bodies",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93193",
                MSICCodes::DESCRIPTION => "Activities of related to promotion of sporting events",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93199",
                MSICCodes::DESCRIPTION => "Other sports activities n.e.c.",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93210",
                MSICCodes::DESCRIPTION => "Activities of amusement parks and theme parks",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93291",
                MSICCodes::DESCRIPTION => "Activities of recreation parks and beaches",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93292",
                MSICCodes::DESCRIPTION => "Operation of recreational transport facilities",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93293",
                MSICCodes::DESCRIPTION => "Renting of leisure and pleasure equipment as an integral part of recreational facilities",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93294",
                MSICCodes::DESCRIPTION => "Operation of fairs and shows of a recreational nature",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93295",
                MSICCodes::DESCRIPTION => "Operation of discotheques and dance floors",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93296",
                MSICCodes::DESCRIPTION => "Activities of producers or entrepreneurs of live events other than arts or sports events, with or without facilities",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93297",
                MSICCodes::DESCRIPTION => "Cyber Café/Internet Centre",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "93299",
                MSICCodes::DESCRIPTION => "Any other amusement and recreation activities n.e.c.",
                MSICCodes::CATEGORY_REF => "R"
            ],
            [
                MSICCodes::CODE => "94110",
                MSICCodes::DESCRIPTION => "Activities of business and employers membership organizations",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "94120",
                MSICCodes::DESCRIPTION => "Activities of professional membership organizations",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "94200",
                MSICCodes::DESCRIPTION => "Activities of trade unions",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "94910",
                MSICCodes::DESCRIPTION => "Activities of religious organizations",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "94920",
                MSICCodes::DESCRIPTION => "Activities of political organizations",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "94990",
                MSICCodes::DESCRIPTION => "Activities of other membership organizations n.e.c.",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95111",
                MSICCodes::DESCRIPTION => "Repair of electronic equipment",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95112",
                MSICCodes::DESCRIPTION => "Repair and maintenance of computer terminals",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95113",
                MSICCodes::DESCRIPTION => "Repair and maintenance of hand-held computers (PDA's)",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95121",
                MSICCodes::DESCRIPTION => "Repair and maintenance of cordless telephones",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95122",
                MSICCodes::DESCRIPTION => "Repair and maintenance of cellular phones",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95123",
                MSICCodes::DESCRIPTION => "Repair and maintenance of carrier equipment modems",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95124",
                MSICCodes::DESCRIPTION => "Repair and maintenance of fax machines",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95125",
                MSICCodes::DESCRIPTION => "Repair and maintenance of communications transmission equipment",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95126",
                MSICCodes::DESCRIPTION => "Repair and maintenance of two-way radios",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95127",
                MSICCodes::DESCRIPTION => "Repair and maintenance of commercial TV and video cameras",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95211",
                MSICCodes::DESCRIPTION => "Repair and maintenance of television, radio receivers",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95212",
                MSICCodes::DESCRIPTION => "Repair and maintenance of VCR/DVD/VCD",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95213",
                MSICCodes::DESCRIPTION => "Repair and maintenance of CD players",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95214",
                MSICCodes::DESCRIPTION => "Repair and maintenance of household-type video cameras",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95221",
                MSICCodes::DESCRIPTION => "Repair and servicing of household appliances",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95222",
                MSICCodes::DESCRIPTION => "Repair and servicing of home and garden equipment",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95230",
                MSICCodes::DESCRIPTION => "Repair of footwear and leather goods",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95240",
                MSICCodes::DESCRIPTION => "Repair of furniture and home furnishings",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95291",
                MSICCodes::DESCRIPTION => "Repair of bicycles",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95292",
                MSICCodes::DESCRIPTION => "Repair and alteration of clothing",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95293",
                MSICCodes::DESCRIPTION => "Repair and alteration of jewellery",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95294",
                MSICCodes::DESCRIPTION => "Repair of watches, clocks and their parts",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95295",
                MSICCodes::DESCRIPTION => "Repair of sporting goods",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95296",
                MSICCodes::DESCRIPTION => "Repair of musical instruments",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "95299",
                MSICCodes::DESCRIPTION => "Repair of other personal and household goods n.e.c.",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96011",
                MSICCodes::DESCRIPTION => "Laundering and dry-cleaning, pressing",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96012",
                MSICCodes::DESCRIPTION => "Carpet and rug shampooing, and drapery and curtain cleaning, whether on clients' premises or not",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96013",
                MSICCodes::DESCRIPTION => "Provision of linens, work uniforms and related items by laundries",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96014",
                MSICCodes::DESCRIPTION => "Diaper supply services",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96020",
                MSICCodes::DESCRIPTION => "Hairdressing and other beauty treatment",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96031",
                MSICCodes::DESCRIPTION => "Preparing the dead for burial or cremation and embalming and morticians' services",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96032",
                MSICCodes::DESCRIPTION => "Providing burial or cremation services",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96033",
                MSICCodes::DESCRIPTION => "Rental of equipped space in funeral parlours",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96034",
                MSICCodes::DESCRIPTION => "Rental or sale of graves",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96035",
                MSICCodes::DESCRIPTION => "Maintenance of graves and mausoleums",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96091",
                MSICCodes::DESCRIPTION => "Activities of sauna, steam baths, massage salons",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96092",
                MSICCodes::DESCRIPTION => "Astrological and spiritualists' activities",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96093",
                MSICCodes::DESCRIPTION => "Social activities such as escort services, dating services, services of marriage bureaux",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96094",
                MSICCodes::DESCRIPTION => "Pet care services",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96095",
                MSICCodes::DESCRIPTION => "Genealogical organizations",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96096",
                MSICCodes::DESCRIPTION => "Shoe shiners, porters, valet car parkers",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96097",
                MSICCodes::DESCRIPTION => "Concession operation of coin-operated personal service machines",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "96099",
                MSICCodes::DESCRIPTION => "Other service activities n.e.c.",
                MSICCodes::CATEGORY_REF => "S"
            ],
            [
                MSICCodes::CODE => "97000",
                MSICCodes::DESCRIPTION => "Activities of households as employers of domestic personnel",
                MSICCodes::CATEGORY_REF => "T"
            ],
            [
                MSICCodes::CODE => "98100",
                MSICCodes::DESCRIPTION => "Undifferentiated goods-producing activities of private households for own use",
                MSICCodes::CATEGORY_REF => "T"
            ],
            [
                MSICCodes::CODE => "98200",
                MSICCodes::DESCRIPTION => "Undifferentiated service-producing activities of private households for own use",
                MSICCodes::CATEGORY_REF => "T"
            ],
            [
                MSICCodes::CODE => "99000",
                MSICCodes::DESCRIPTION => "Activities of extraterritorial organization and bodies",
                MSICCodes::CATEGORY_REF => "U"
            ],
        ];
    }

    public static function getDescription($code)
    {
        $list = self::getItems();

        if(!in_array($code, array_column($list, MSICCodes::CODE))) {
            return '';
        }

        $found_key = array_search($code, array_column($list, MSICCodes::CODE));
        return $list[$found_key][MSICCodes::DESCRIPTION];
    }
}
