<?php

function checkBushi ($level)
{
    $race = '';

    if($level <= 4)
    {
        $chance = rand(0, 5);

        if($chance >= 0 && $chance <= 3)
        {
            $race = "Human";
        }
        else if($chance === 4)
        {
            $race = "Koropokuru";
        }
        else if($chance === 5)
        {
            $race = "Tengu";
        }

        return $race;
    }

    
    if($level >=5 && $level <=8)
    {
        $chance = rand(0, 5);

        if($chance >= 0 && $chance <= 3)
        {
            $race = "Human";
        }
        else if($chance >= 4)
        {
            $race = "Koropokuru";
        }

        return $race;
    }
    
    if($level >= 9)
    {
        $race = "Human";

        return $race;
    }
    return $race;
}

function checkNinja ($level)
{
    $race = '';

    if($level <= 4)
    {
        $chance = rand(0, 5);

        if($chance >= 0 && $chance <= 2)
        {
            $race = "Human";
        }
        else if($chance === 3)
        {
            $race = "Koropokuru";
        }
        else if($chance === 4)
        {
            $race = "Kitsune";
        }
        else if($chance === 5)
        {
            $race = "Tengu";
        }

        return $race;
    }

    
    if($level >=5 && $level <=8)
    {
        $chance = rand(0, 5);

        if($chance >= 0 && $chance <= 3)
        {
            $race = "Human";
        }
        else if($chance === 4)
        {
            $race = "Kitsune";
        }
        else if($chance === 5)
        {
            $race = "Tengu";
        }

        return $race;
    }
    
    if($level >= 9)
    {
        $race = "Human";

        return $race;
    }
    return $race;
}


function checkShugenja ($level)
{
    $race = '';

    if($level <=8)
    {
        $chance = rand(0, 3);

        if($chance >= 0 && $chance <= 2)
        {
            $race = "Human";
        }
        else if($chance === 3)
        {
            $race = "Kitsune";
        }
        return $race;
    }
    
    if($level >= 9)
    {
        $race = "Human";

        return $race;
    }
    return $race;
}



function getSpecies ($option, $class, $level)
{
    $race = '';

    if($option === '2')
    {
        $race = "Human";
        return $race;
    }

    if($class === 'Sohei')
    {
        $race = "Human";
        return $race;
    }

    if($class === 'Bushi')
    {
        $race = checkBushi ($level);
        return $race;
    }

    if($class === 'Ninja')
    {
        $race = checkNinja ($level);
        return $race;
    }

    if($class === 'Shugenja')
    {
        $race = checkShugenja ($level);
        return $race;
    }

    return $race;
}


function raceAbilities ($race)
{
    $message = '';

    if($race === 'Kitsune')
    {
        $message = 'Shape-shifting<br/>Keen Senses: secret doors<br/>Dark Vision';
    }

    if($race === 'Koropokuru')
    {
        $message = 'Keen Detection: detecting traps<br/>Dark Vision';
    }
    
    if($race === 'Tengu')
    {
        $message = 'Flight<br/>Mimicry';
    }

    return $message;
}



?>