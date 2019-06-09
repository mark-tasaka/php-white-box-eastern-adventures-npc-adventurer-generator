<?php

function bushiArmour ($level)
{
    $armour = '';

    if($level >= 1 && $level <=3)
    {
        $number = rand(1,3);

        if($number === 1)
        {
            $armour = 'Heavy Armour';
}
        else
        {
            $armour = 'Medium Armour';
        }
    }
    else
    {
        $armour = 'Heavy Armour';
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
            $armour = 'Light Armour';
        }
        else
        {
            $armour = 'Medium Armour';
        }
    }
    else if($level >= 3 && $level <=6)
    {
        $number = rand(1,3);

        if($number === 1)
        {
            $armour = 'Heavy Armour';
}
        else
        {
            $armour = 'Medium Armour';
        }
    }
    else
    {
        $armour = 'Heavy Armour';
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
        $armour = 'Light Armour (kusari katabira)';
    }

    if($class === 'Sohei')
    {
        $armour = soheiArmour ($level);
    }

    return $armour;
}


?>