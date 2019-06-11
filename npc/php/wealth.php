<?php

function getModestWeath()
{
    $ryu = rand(2,5);
    $shu = rand(5,15);
    $mon = rand(10,30);

    return $ryu . " ryu, " . $shu . " shu & " . $mon . " mon";
}


function getPoorWeath()
{
    $shu = rand(2,5);
    $mon = rand(5,15);

    return $shu . " shu & " . $mon . " mon";
}

function getComfortableWealth()
{
    $ryu = rand(5,20);
    $shu = rand(5,20);
    $mon = rand(10,30);

    return $ryu . " ryu, " . $shu . " shu & " . $mon . " mon";
}


function getAffluentWealth()
{
    $gems = rand(2,10);
    $jewelry = rand(2,4);
    $ryu = rand(5,20);
    $shu = rand(5,20);

    return $gems . " gems, ". $jewelry . " pieces of jewelry, " . $ryu . " ryu & " . $shu . " shu";
}


function getWealth ($choice)
{
    $wealth = '';

    switch($choice)
    {
        case 1:
        $wealth = getModestWeath();
        break;
        
        case 2:
        $wealth = getPoorWeath();
        break;
        
        case 3:
        $wealth = getComfortableWealth();
        break;
        
        case 4:
        $wealth = getAffluentWealth();
        break;

        default:
        $wealth = 'ERROR';
    }

    return $wealth;
}



?>