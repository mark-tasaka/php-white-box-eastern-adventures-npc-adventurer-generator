<?php

function getLevel ($option)
{
    $level = 0;

    if($option === '1')
    {
        $level = rand(1,3);
    }
    else if($option === '2')
    {
        $level = rand(4,6);
    }
    else if($option === '3')
    {
        $level = rand(7,8);
    }
    else if($option === '4')
    {
        $level = rand(9,10);
    }
    else if($option === '5')
    {
        $level = 1;
    }
    else if($option === '6')
    {
        $level = 2;
    }
    else if($option === '7')
    {
        $level = 3;
    }
    else if($option === '8')
    {
        $level = 4;
    }
    else if($option === '9')
    {
        $level = 5;
    }
    else if($option === '10')
    {
        $level = 6;
    }
    else if($option === '11')
    {
        $level = 7;
    }
    else if($option === '12')
    {
        $level = 8;
    }
    else if($option === '13')
    {
        $level = 9;
    }
    else if($option === '14')
    {
        $level = 10;
    }

    return $level;

}



?>