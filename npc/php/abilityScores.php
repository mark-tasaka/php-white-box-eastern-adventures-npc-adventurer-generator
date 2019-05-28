<?php

function threeD6()
{
    $d6a = rand(1,6);
    $d6b = rand(1,6);
    $d6c = rand(1,6);

    $result = $d6a + $d6b + $d6c;

    return $result;
}

function plus6()
{
    $d6a = rand(1,6);
    $d6b = rand(1,6);

    $result = $d6a + $d6b + 6;

    return $result;
}

function abilityModifier ($abilityScore)
{
    $modifier = '';

    if($abilityScore <= 6)
    {
        $modifier = '(-1)';
    }
    
    if($abilityScore >= 15)
    {
        $modifier = '(+1)';
    }

    return $modifier;
}

function strength ($class)
{
    $score = 0;

    if($class === 'Bushi')
    {
        $score = plus6();
    }
    else
    {
        $score = threeD6();
    }

    return $score;
}

function strengthMod ($strength)
{
    $modifier = abilityModifier ($strength);

    return $modifier;
}

function dexterity ($class)
{
    $score = 0;

    if($class === 'Ninja')
    {
        $score = plus6();
    }
    else
    {
        $score = threeD6();
    }

    return $score;
}

function dexterityMod ($dexterity)
{
    $modifier = abilityModifier ($dexterity);

    return $modifier;
}


function constitution ()
{
    $score = threeD6();

    return $score;
}

function constitutionMod ($constitution)
{
    $modifier = abilityModifier ($constitution);

    return $modifier;
}


function intelligence ($class)
{
    $score = 0;

    if($class === 'Shugenja')
    {
        $score = plus6();
    }
    else
    {
        $score = threeD6();
    }

    return $score;
}

function intelligenceMod ($intelligence)
{
    $modifier = abilityModifier ($intelligence);

    return $modifier;
}

function wisdom ($class)
{
    $score = 0;

    if($class === 'Sohei')
    {
        $score = plus6();
    }
    else
    {
        $score = threeD6();
    }

    return $score;
}

function wisdomMod ($wisdom)
{
    $modifier = abilityModifier ($wisdom);

    return $modifier;
}



function charisma ()
{
    $score = threeD6();

    return $score;
}

function charismaMod ($charisma)
{
    $modifier = abilityModifier ($charisma);

    return $modifier;
}


function strengthMesssage ($modifier)
{
    $message = '';

    if($modifier === '(-1)')
    {
        $message = 'Melee Attacks: -1 to-hit/damage<br/>';
    }
    
    if($modifier === '(+1)')
    {
        $message = 'Melee Attacks: +1 to-hit/damage<br/>';
    }

    return $message;
}


function dexterityMesssage ($modifier)
{
    $message = '';

    if($modifier === '(-1)')
    {
        $message = 'Missile Attacks: -1 to-hit<br/>';
    }
    
    if($modifier === '(+1)')
    {
        $message = 'Missile Attacks: +1 to-hit<br/>';
    }

    return $message;
}



?>