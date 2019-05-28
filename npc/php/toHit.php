<?php

function bushiToHit ($level)
{
    $hit = 0;

    if($level === 1)
    {
        $hit = 10;
    }
    else if($level === 2)
    {
        $hit = 9;
    }
    else if($level === 3 || $level === 4)
    {
        $hit = 8;
    }
    else if($level === 5)
    {
        $hit = 7;
    }
    else if($level === 6 || $level === 7)
    {
        $hit = 6;
    }
    else if($level === 8)
    {
        $hit = 5;
    }
    else if($level === 9 || $level === 10)
    {
        $hit = 4;
    }

    return $hit;
}


function ninjaSoheiToHit ($level)
{
    $hit = 0;

    if($level >= 1 && $level <= 3)
    {
        $hit = 10;
    }
    else if($level === 4 || $level === 5)
    {
        $hit = 9;
    }
    else if($level === 6 || $level === 7)
    {
        $hit = 8;
    }
    else if($level === 8)
    {
        $hit = 7;
    }
    else if($level === 9)
    {
        $hit = 6;
    }
    else if($level === 10)
    {
        $hit = 5;
    }

    return $hit;

}


function shugenjaToHit ($level)
{
    $hit = 0;

    if($level >= 1 && $level <= 4)
    {
        $hit = 10;
    }
    else if($level === 5 || $level === 6)
    {
        $hit = 9;
    }
    else if($level === 7 || $level === 8)
    {
        $hit = 8;
    }
    else if($level === 9 || $level === 10)
    {
        $hit = 7;
    }

    return $hit;

}


function getToHit ($class, $level)
{

    $hit = 0;

    if($class === 'Bushi')
    {
        $hit = bushiToHit ($level);
    }
    else if($class === 'Ninja' || $class === 'Sohei')
    {
        $hit = ninjaSoheiToHit ($level);
    }
    else if($class === 'Shugenja')
    {
        $hit = shugenjaToHit ($level);
    }

    return $hit;

}



?>