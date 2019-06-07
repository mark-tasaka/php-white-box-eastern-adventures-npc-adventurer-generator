<?php

function bushiArmour ($level)
{
    $armour = '';

    if($level >= 1 && $level <=3)
    {
        $number = rand(1,3);

        if($number === 1)
        {
            $armour = 'heavy armour';
        }
        else
        {
            $armour = 'medium armour';
        }
    }
    else
    {
        $armour = 'heavy armour';
    }

    return $armour;
}


function soheiArmour ($level)
{
    $armour = '';

    if($level >= 1 && $level <=2)
    {
        $number = rand(1,3);

        if($number === 1)
        {
            $armour = 'light armour';
        }
        else
        {
            $armour = 'medium armour';
        }
    }
    else if($level >= 3 && $level <=6)
    {
        $number = rand(1,3);

        if($number === 1)
        {
            $armour = 'heavy armour';
        }
        else
        {
            $armour = 'medium armour';
        }
    }
    else
    {
        $armour = 'heavy armour';
    }

    return $armour;
}



function getArmour ($class, $level)
{
    $armour = '';

    if($class === 'Bushi')
    {
        $armour = bushiArmour ($level);
    }

    if($class === 'Ninja')
    {
        $armour = 'kusari katabira (light armour)';
    }

    if($class === 'Sohei')
    {
        $armour = soheiArmour ($level);
    }

    return $armour;
}


?>