<?php


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

//Languages for Human NPCs
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

}

//Languages for Koropokuru NPCs
function BonusLanguagesKoropokuru ($bonus)
{
    
    $languagesKoropokuru = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
    "Kappa", "Feline", "Forest Dialect", "Nezumi", "Oceanic",
    "The Old Tongue", "Ogre", "Oni", "Sea Dialect", "Tengu", "The Undying Tongue");
    
    shuffle($languagesKoropokuru);
    
    $languages = array();

    array_push($languages, 'Common');
    array_push($languages, 'Koropokuru');


    if($bonus > 0)
    {
        for($count = 0; $count < $bonus; ++$count)
        {
            array_push($languages, $languagesKoropokuru[$count]);
        }
    }
    
    return $languages;

}


//Languages for Kitsune NPCs
function BonusLanguagesKitsune ($bonus)
{
    
    $languagesHuman = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
    "Kappa", "Feline", "Forest Dialect", "Koropokuru", "Nezumi", "Oceanic",
    "The Old Tongue", "Ogre", "Oni", "Sea Dialect", "Tengu", "The Undying Tongue");
    
    shuffle($languagesHuman);
    
    $languages = array();

    array_push($languages, 'Common');
    array_push($languages, 'Kitsune');


    if($bonus > 0)
    {
        for($count = 0; $count < $bonus; ++$count)
        {
            array_push($languages, $languagesHuman[$count]);
        }
    }
    
    return $languages;

}



//Languages for Tengu NPCs
function BonusLanguagesTengu ($bonus)
{
    
    $languagesTengu = array("Bakemono", "Celestial Dialect", "Dark Speech", "Draconic",
    "Kappa", "Feline", "Forest Dialect", "Koropokuru", "Nezumi", "Oceanic",
    "The Old Tongue", "Ogre", "Oni", "Sea Dialect", "The Undying Tongue");

    shuffle($languagesTengu);
    
    $languages = array();

    array_push($languages, 'Common');
    array_push($languages, 'Tengu');;
    array_push($languages, 'Language of Birds');


    if($bonus > 0)
    {
        for($count = 0; $count < $bonus; ++$count)
        {
            array_push($languages, $languagesTengu[$count]);
        }
    }
    
    return $languages;

}

function getLanguages ($bonus, $race)
{

    $languages = array();

    if($race === 'Human')
    {
        $languages = BonusLanguagesHuman ($bonus);
    }
    
    if($race === 'Koropokuru')
    {
        $languages = BonusLanguagesKoropokuru ($bonus);
    }
    
    if($race === 'Kitsune')
    {
        $languages = BonusLanguagesKitsune ($bonus);
    }
    
    if($race === 'Tengu')
    {
        $languages = BonusLanguagesTengu ($bonus);
    }

    return $languages;



}


?>