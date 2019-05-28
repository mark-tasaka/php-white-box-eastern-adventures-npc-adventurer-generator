<?php

function getBushiSave ($level)
{
    $save = 15 - $level;

    return $save;
}


function getSohieSave ($level)
{
    $save = 16 - $level;

    return $save;
}

function getSavingThrow ($level, $class)
{
    $save = 0;

    if($class === 'Bushi' || $class === 'Ninja')
    {
        $save = getBushiSave ($level);
    }
    else
    {
        $save = getSohieSave ($level);
    }
    
    return $save;

}

function getSaveBonus ($class)
{
    $message = ' ';

    if($class === 'Bushi')
    {
        $message = '+2 vs. death & poison';
    }
    
    if($class === 'Ninja')
    {
        $message = '+2 vs. traps';
    }
    
    if($class === 'Shugenja')
    {
        $message = '+2 vs. spells & magical attacks';
    }
    
    
    if($class === 'Sohei')
    {
        $message = '+2 vs. poison & paralysis';
    }

    return $message;

}

function SaveBonusRace ($race)
{
    $message = '';

    if($race === 'Koropokuru')
    {
        $message = '<br/>+4 vs. magic';
    }

    return $message;
}





?>