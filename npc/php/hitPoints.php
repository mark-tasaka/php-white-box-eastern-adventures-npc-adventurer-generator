<?php

function hitPointsModifier ($constitution)
{

    $hitPointMod = 0;

    if($constitution >= 15)
    {
        $hitPointMod = 1;
    }

    if($constitution <= 6)
    {
        $hitPointMod = -1;
    }

    return $hitPointMod;

}

function bushiHitPoints ($level, $constitution)
{

    $conMod = hitPointsModifier($constitution);

    $hitPoints = 0;

    $roll1 = rand(4,7) + $conMod;
    $roll2 = rand(3,6) + $conMod;
    $roll3 = rand(3,6) + $conMod;
    $roll4 = rand(3,6) + $conMod;
    $roll5 = rand(3,6) + $conMod;
    $roll6 = rand(3,6) + $conMod;
    $roll7 = rand(3,6) + $conMod;
    $roll8 = rand(3,6) + $conMod;
    $roll9 = rand(3,6) + $conMod;
    $roll10 = rand(3,6) + $conMod;

    switch($level)
    {
        case 1:
        $hitPoints = $roll1;
        break;
        
        case 2:
        $hitPoints = $roll1 + $roll2;
        break;
        
        case 3:
        $hitPoints = $roll1 + $roll2 + $roll3;
        break;
        
        case 4:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4;
        break;
        
        case 5:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5;
        break;
        
        case 6:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6;
        break;
        
        case 7:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6 + $roll7;
        break;
        
        case 8:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6 + $roll7 + $roll8;
        break;
        
        case 9:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6 + $roll7 + $roll8 + $roll9;
        break;
        
        case 10:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6 + $roll7 + $roll8 + $roll9 + $roll10;
        break;

        default:
        $hitPoints = -1;

    }

    return $hitPoints;

}

function bushiHitDice ($level)
{

    $hitDice = '';


    switch($level)
    {
        case 1:
        $hitDice = '(HD 1+1)';
        break;
        
        case 2:
        $hitDice = '(HD 2)';
        break;
        
        case 3:
        $hitDice = '(HD 3)';
        break;
        
        case 4:
        $hitDice = '(HD 4)';
        break;
        
        case 5:
        $hitDice = '(HD 5)';
        break;
        
        case 6:
        $hitDice = '(HD 6)';
        break;
        
        case 7:
        $hitDice = '(HD 7)';
        break;
        
        case 8:
        $hitDice = '(HD 8)';
        break;
        
        case 9:
        $hitDice = '(HD 9)';
        break;
        
        case 10:
        $hitDice = '(HD 10)';
        break;

        default:
        $hitDice = 'Error';

    }

    return $hitDice;

}


function ninjaHitPoints ($level, $constitution)
{

    $conMod = hitPointsModifier($constitution);

    $hitPoints = 0;

    $roll1 = rand(3,6) + $conMod;
    $roll2 = rand(3,6) + $conMod;
    $roll3 = rand(3,6) + $conMod;
    $roll4 = rand(3,6) + $conMod;
    $roll5 = rand(3,6) + $conMod;

    switch($level)
    {
        case 1:
        $hitPoints = $roll1;
        break;
        
        case 2:
        $hitPoints = $roll1 + 1;
        break;
        
        case 3:
        $hitPoints = $roll1 + $roll2;
        break;
        
        case 4:
        $hitPoints = $roll1 + $roll2 + 1;
        break;
        
        case 5:
        $hitPoints = $roll1 + $roll2 + $roll3;
        break;
        
        case 6:
        $hitPoints = $roll1 + $roll2 + $roll3 + 1;
        break;
        
        case 7:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4;
        break;
        
        case 8:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + 1;
        break;
        
        case 9:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5;
        break;
        
        case 10:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + 1;
        break;

        default:
        $hitPoints = -1;

    }

    return $hitPoints;

}

function ninjaHitDice ($level)
{

    $hitDice = '';


    switch($level)
    {
        case 1:
        $hitDice = '(HD 1)';
        break;
        
        case 2:
        $hitDice = '(HD 1+1)';
        break;
        
        case 3:
        $hitDice = '(HD 2)';
        break;
        
        case 4:
        $hitDice = '(HD 2+1)';
        break;
        
        case 5:
        $hitDice = '(HD 3)';
        break;
        
        case 6:
        $hitDice = '(HD 3+1)';
        break;
        
        case 7:
        $hitDice = '(HD 4)';
        break;
        
        case 8:
        $hitDice = '(HD 4+1)';
        break;
        
        case 9:
        $hitDice = '(HD 5)';
        break;
        
        case 10:
        $hitDice = '(HD 5+1)';
        break;

        default:
        $hitDice = 'Error';

    }

    return $hitDice;

}



function soheiHitPoints ($level, $constitution)
{

    $conMod = hitPointsModifier($constitution);

    $hitPoints = 0;

    $roll1 = rand(3,6) + $conMod;
    $roll2 = rand(3,6) + $conMod;
    $roll3 = rand(3,6) + $conMod;
    $roll4 = rand(3,6) + $conMod;
    $roll5 = rand(3,6) + $conMod;
    $roll6 = rand(3,6) + $conMod;
    $roll7 = rand(3,6) + $conMod;
    $roll8 = rand(3,6) + $conMod;

    switch($level)
    {
        case 1:
        $hitPoints = $roll1;
        break;
        
        case 2:
        $hitPoints = $roll1 + $roll2;
        break;
        
        case 3:
        $hitPoints = $roll1 + $roll2 + $roll3;
        break;
        
        case 4:
        $hitPoints = $roll1 + $roll2 + $roll3 + 1;
        break;
        
        case 5:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4;
        break;
        
        case 6:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5;
        break;
        
        case 7:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6;
        break;
        
        case 8:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6 + 1;
        break;
        
        case 9:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6 + $roll7;
        break;
        
        case 10:
        $hitPoints = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6 + $roll7 + $roll8;
        break;

        default:
        $hitPoints = -1;

    }

    return $hitPoints;

}

function soheiHitDice ($level)
{

    $hitDice = '';


    switch($level)
    {
        case 1:
        $hitDice = '(HD 1)';
        break;
        
        case 2:
        $hitDice = '(HD 2)';
        break;
        
        case 3:
        $hitDice = '(HD 3)';
        break;
        
        case 4:
        $hitDice = '(HD 3+1)';
        break;
        
        case 5:
        $hitDice = '(HD 4)';
        break;
        
        case 6:
        $hitDice = '(HD 5)';
        break;
        
        case 7:
        $hitDice = '(HD 6)';
        break;
        
        case 8:
        $hitDice = '(HD 6+1)';
        break;
        
        case 9:
        $hitDice = '(HD 7)';
        break;
        
        case 10:
        $hitDice = '(HD 8)';
        break;

        default:
        $hitDice = 'Error';

    }

    return $hitDice;

}


function getHitPoints($class, $level, $constitution)
{
    $hitPoints = 0;

    if($class === 'Bushi')
    {
        $hitPoints = bushiHitPoints($level, $constitution);
    }
    
    if($class === 'Ninja' || $class === 'Shugenja')
    {
        $hitPoints = ninjaHitPoints($level, $constitution);
    }
    
    if($class === 'Sohei')
    {
        $hitPoints = soheiHitPoints($level, $constitution);
    }
    
    return $hitPoints;
}



function getHitDice($class, $level)
{
    $hitDice = '';

    if($class === 'Bushi')
    {
        $hitDice = bushiHitDice ($level);
    }
    
    if($class === 'Ninja' || $class === 'Shugenja')
    {
        $hitDice = ninjaHitDice ($level);
    }
    
    if($class === 'Sohei')
    {
        $hitDice = soheiHitDice ($level);
    }
    
    return $hitDice;
}



?>