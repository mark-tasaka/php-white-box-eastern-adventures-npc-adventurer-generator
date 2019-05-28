<?php

function getSpecies ($option)
{
    $race = '';

    if($option === '1')
    {
        $chance = rand(0, 5);

        if($chance >= 0 && $chance <= 2)
        {
            $race = "Human";
        }
        else if($chance === 3)
        {
            $race = "Kitsune";
        }
        else if($chance === 4)
        {
            $race = "Koropokuru";
        }
        else if($chance === 5)
        {
            $race = "Tengu";
        }

    }
    else if($option === '2')
    {
        $race = "Human";
    }
    else if($option === '3')
    {
        $race = "Kitsune";
    }
    else if($option === '4')
    {
        $race = "Koropokuru";
    }
    else if($option === '5')
    {
        $race = "Tengu";
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