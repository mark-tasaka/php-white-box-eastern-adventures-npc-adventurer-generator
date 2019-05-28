<?php

function getFamilyStatus ()
{
    $die1 = rand (1,6);
    $die2 = rand (1,6);
    $die3 = rand (1,6);

    $total = $die1 + $die2 + $die3;

    $status = 0;

    if($total === 4)
    {    
        $status = 1;
    }
    else if($total === 5)
    {    
        $status = 2;
    }
    else if($total >= 6 && $total  <= 7)
    {    
        $status = 3;
    }
    else if($total >= 8 && $total  <= 9)
    {    
        $status = 4;
    }
    else if($total >= 10 && $total  <= 11)
    {    
        $status = 5;
    }
    else if($total >= 12 && $total  <= 13)
    {    
        $status = 6;
    }
    else if($total >= 14 && $total  <= 15)
    {    
        $status = 7;
    }
    else if($total === 16)
    {
        $status = 8;
    }
    else if($total === 17)
    {
        $status = 9;
    }
    else if($total === 18)
    {
        $status = 10;
    }

    return $status;
}

function getMerit($level)
{
    $merit = 0;

    if($level >= 1 && $level <=3)
    {
        $merit = rand(0,4);
    }
    else if($level >= 4 && $level <=6)
    {
        $merit = rand(3,7);
    }
    else if($level > 6)
    {
        $merit = rand(5,10);
    }

    return $merit;
}




?>