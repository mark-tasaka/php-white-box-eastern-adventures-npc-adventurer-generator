<?php

function bushiSchool ($class)
{
    $school = '';

    if($class === 'Bushi')
    {
        $selection = rand(1,4);

        switch($selection)
        {
            case 1:
            $school = 'Twin Blades';
            break;

            case 2:
            $school = 'Polearm/Spear Fighting';
            break;

            case 3:
            $school = 'Archery';
            break;

            case 4:
            $school = 'Death Strike';
            break;

            default:
            $school = 'ERROR';

        }

    }

    return $school;
}

function getNinjutsu ($class, $level)
{
    $ninja = '';

    if($class === 'Ninja')
    {

        if($level >= 4 &&  $level <= 6)
        {
            $ninja = '3';
        }
        else if($level >= 7 &&  $level <= 9)
        {
            $ninja = '4';
        }
        else if($level === 10)
        {
            $ninja = '5';
        }
        else
        {
            $ninja = '2';
        }
        
    }

    return $ninja;
}


function getShugenjaSpells ($level)
{
    $spells = '';

    switch($level)
    {
        case 1:
        $spells = 'Level 1: 2 spells';
        break;

        case 2:
        $spells = 'Level 1: 3 spells';
        break;

        case 3:
        $spells = 'Level 1: 4 spells
        <br/>Level 2: 1 spell';
        break;

        case 4:
        $spells = 'Level 1: 5 spells
        <br/>Level 2: 2 spells';
        break;

        case 5:
        $spells = 'Level 1: 5 spells
        <br/>Level 2: 3 spells<br/>Level 3: 1 spell';
        break;

        case 6:
        $spells = 'Level 1: 6 spells
        <br/>Level 2: 4 spells<br/>Level 3: 1 spell';
        break;

        case 7:
        $spells = 'Level 1: 6 spells
        <br/>Level 2: 5 spells<br/>Level 3: 2 spells';
        break;

        case 8:
        $spells = 'Level 1: 6 spells
        <br/>Level 2: 5 spells<br/>Level 3: 3 spells<br/>Level 4: 1 spell';
        break;

        case 9:
        $spells = 'Level 1: 6 spells
        <br/>Level 2: 6 spells<br/>Level 3: 4 spells<br/>Level 4: 2 spells';
        break;

        case 10:
        $spells = 'Level 1: 6 spells
        <br/>Level 2: 6 spells<br/>Level 3: 5 spells<br/>Level 4: 3 spells';
        break;


        default:
        $spells = 'ERROR';

    }

    return $spells;
}



function getSoheiSpells ($level)
{
    $spells = '';
    switch($level)
    {
        case 1:
        $spells = 'Level 1: 1 spell';
        break;

        case 2:
        $spells = 'Level 1: 2 spells';
        break;

        case 3:
        $spells = 'Level 1: 3 spells';
        break;

        case 4:
        $spells = 'Level 1: 3 spells
        <br/>Level 2: 1 spell';
        break;

        case 5:
        $spells = 'Level 1: 3 spells
        <br/>Level 2: 2 spells';
        break;

        case 6:
        $spells = 'Level 1: 3 spells
        <br/>Level 2: 3 spells';
        break;

        case 7:
        $spells = 'Level 1: 3 spells
        <br/>Level 2: 3 spells<br/>Level 3: 1 spell';
        break;

        case 8:
        $spells = 'Level 1: 3 spells
        <br/>Level 2: 3 spells<br/>Level 3: 2 spells';
        break;

        case 9:
        $spells = 'Level 1: 3 spells
        <br/>Level 2: 3 spells<br/>Level 3: 3 spells';
        break;

        case 10:
        $spells = 'Level 1: 3 spells
        <br/>Level 2: 3 spells<br/>Level 3: 3 spells<br/>Level 4: 1 spell';
        break;

        default:
        $spells = 'ERROR';

    }

    return $spells;

}




function getSpellsCount ($class, $level)
{
    $spells = '';

    if($class === 'Shugenja')
    {
        $spells = getShugenjaSpells ($level);
    }

    if($class === 'Sohei')
    {
        $spells = getSoheiSpells ($level);
    }

    return $spells;

}

?>