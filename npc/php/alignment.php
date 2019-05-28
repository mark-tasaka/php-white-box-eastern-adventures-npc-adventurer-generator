<?php

function getAlignment ($option)
{
    $alignment = '';

    if($option === '1')
    {
        $number = rand(1,3);

        switch($number)
        {
            case '1':
            $alignment = 'Lawful';
            break;
            
            case '2':
            $alignment = 'Neutral';
            break;
            
            case '3':
            $alignment = 'Chaotic';
            break;

            default:
            echo 'Error';
        }

    }
    else if($option === '2')
    {
        $alignment = 'Lawful';
    }
    else if($option === '3')
    {
        $alignment = 'Neutral';
    }
    else if($option === '4')
    {
        $alignment = 'Chaotic';
    }



    return $alignment;
}




?>