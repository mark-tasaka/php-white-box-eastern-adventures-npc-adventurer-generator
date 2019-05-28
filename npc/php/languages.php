<?php

$languagesHuman = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
"Kappa", "Feline", "Forest Dialect", "Koropokuru", "Nezumi", "Oceanic",
"The Old Tongue", "Ogre", "Oni", "Sea Dialect", "Tengu", "The Undying Tongue");

$languagesKoropokuru = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
"Kappa", "Feline", "Forest Dialect", "Nezumi", "Oceanic",
"The Old Tongue", "Ogre", "Oni", "Sea Dialect", "Tengu", "The Undying Tongue");

$languagesTengu = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
"Kappa", "Feline", "Forest Dialect", "Koropokuru", "Nezumi", "Oceanic",
"The Old Tongue", "Ogre", "Oni", "Sea Dialect", "The Undying Tongue");

function bonusLanguages ($intelligence)
{
    $bonusLanguages = 0;

    if($intelligence === 11 || $intelligence === 12)
    {
        $bonusLanguages = 1;
    }

    if($intelligence === 13 || $intelligence === 14)
    {
        $bonusLanguages = 2;
    }

    if($intelligence === 15 || $intelligence === 16)
    {
        $bonusLanguages = 3;
    }

    if($intelligence === 17)
    {
        $bonusLanguages = 4;
    }

    if($intelligence === 18)
    {
        $bonusLanguages = 5;
    }

    return $bonusLanguages;

}

function BonusLanguagesHuman ($bonus)
{
    
    $languagesHuman = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
    "Kappa", "Feline", "Forest Dialect", "Koropokuru", "Nezumi", "Oceanic",
    "The Old Tongue", "Ogre", "Oni", "Sea Dialect", "Tengu", "The Undying Tongue");

    
    shuffle($languagesHuman);
    
    $languages = array();

    array_push($languages, 'Common');


    if($bonus > 0)
    {
        for($count = 0; $count < $bonus; ++$count)
        {
            array_push($languages, $languagesHuman[$count]);
        }
    }
    
    return $languages;

    //return $languagesHuman;

}


function getLanguages ($bonus)
{

    $languages = array();
    
    $languages = BonusLanguagesHuman ($bonus);

    return $languages;



}


?>