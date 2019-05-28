<?php

function getMaxHirelings ($charisma, $honour)
{
    $addHonour = 0;

    if($honour >=5 && $honour <=14)
    {
        $addHonour = 1;
    }

    if($honour >=15)
    {
        $addHonour = 2;
    }

    $maxHirelings = 0;

    if($charisma === 3)
    {
        $maxHirelings = 1;
    }
    else if($charisma >=4 && $charisma <=6)
    {
        $maxHirelings = 2;
    }
    else if($charisma >=7 && $charisma <=14)
    {
        $maxHirelings = 4;
    }
    else if($charisma >=15 && $charisma <=17)
    {
        $maxHirelings = 5;
    }
    else if($charisma === 18)
    {
        $maxHirelings = 6;
    }

    return $maxHirelings + $addHonour;
}


function getHirelingMorale ($charisma, $honour)
{
    $addHonour = 0;

    if($honour >=5 && $honour <=9)
    {
        $addHonour = 1;
    }
    else if($honour >=10 && $honour <=14)
    {
        $addHonour = 2;
    }
    else if($honour >=15 && $honour <=19)
    {
        $addHonour = 3;
    }
    else if($honour === 20)
    {
        $addHonour = 4;
    }


    $morale = 0;

    if($charisma === 3)
    {
        $morale = 12;
    }
    else if($charisma >=4 && $charisma <=6)
    {
        $morale = 11;
    }
    else if($charisma >=7 && $charisma <=14)
    {
        $morale = 9;
    }
    else if($charisma >=15 && $charisma <=17)
    {
        $morale = 7;
    }
    else if($charisma === 18)
    {
        $morale = 6;
    }

    return $morale - $addHonour;
}



function getHirelingLoyalty ($charisma, $honour)
{
    $addHonour = 0;

    if($honour >=5 && $honour <=9)
    {
        $addHonour = 2;
    }
    else if($honour >=10 && $honour <=14)
    {
        $addHonour = 4;
    }
    else if($honour >=15 && $honour <=19)
    {
        $addHonour = 6;
    }
    else if($honour === 20)
    {
        $addHonour = 8;
    }


    $loyality = 0;

    if($charisma === 3)
    {
        $loyality = 14;
    }
    else if($charisma >=4 && $charisma <=6)
    {
        $loyality = 13;
    }
    else if($charisma >=7 && $charisma <=14)
    {
        $loyality = 11;
    }
    else if($charisma >=15 && $charisma <=17)
    {
        $loyality = 9;
    }
    else if($charisma === 18)
    {
        $loyality = 8;
    }

    $loyalityTotal = $loyality - $addHonour;

    if($loyalityTotal < 2)
    {
        $loyalityTotal = 2;
    }

    return $loyalityTotal;
}



?>