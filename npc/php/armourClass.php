<?php

function dexModifier ($dexterity)
{
    $dexMod = 0;

    if($dexterity >= 15)
    {
        $dexMod = 1;
    }


    if($dexterity <= 6)
    {
        $dexMod = -1;
    }

    return $dexMod;
}

function getDAC ($armour, $dexMod)
{
    $ac = 9;

    $armourAdjust = 0;

    if($armour === 'Light Armour' || $armour === 'Light Armour (kusari katabira)')
    {
        $armourAdjust = 2;
    }
    
    if($armour === 'Medium Armour')
    {
        $armourAdjust = 4;
    }
    
    if($armour === 'Heavy Armour')
    {
        $armourAdjust = 6;
    }

    $ac = $ac - ($dexMod) - $armourAdjust;

    return $ac;
}



function getAAC ($armour, $dexMod)
{
    $ac = 10;

    $armourAdjust = 0;

    if($armour === 'Light Armour' || $armour === 'Light Armour (kusari katabira)')
    {
        $armourAdjust = 2;
    }
    
    if($armour === 'Medium Armour')
    {
        $armourAdjust = 4;
    }
    
    if($armour === 'Heavy Armour')
    {
        $armourAdjust = 6;
    }

    $ac = $ac + ($dexMod) + $armourAdjust;

    return $ac;
}




?>