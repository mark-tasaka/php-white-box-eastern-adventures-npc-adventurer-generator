<?php

function getEquipment ($class)
{
    $equipment = array();

    array_push($equipment, 'Backpack');
    array_push($equipment, 'Flint & Steel');

    $lightNum = rand(1, 2);

    if($lightNum === 1)
    {
        array_push($equipment, 'Lantern');

        $num = rand(2, 5);

        $lanternOil = 'Oil (' . $num . ' pints)';

        array_push($equipment, $lanternOil);
    }
    else
    {
        $num = rand(5, 11);
        $torches = 'Torches (' . $num . ')';
        array_push($equipment, $torches);
    }

    $rationsNumber = rand(3, 10);

    $rations = 'Rations (' . $rationsNumber . ' days)';

    array_push($equipment, $rations);

    $waterskin = array('Waterskin', 'Wineskin', 'Canteen');
    shuffle($waterskin);
    
    $rope = array('Rope (50ft, hemp)', 'Rope (50ft, silk)');
    shuffle($rope);

    for($i = 0; $i < 1; ++$i)
    {
        array_push($equipment, $waterskin[$i]);
        array_push($equipment, $rope[$i]);
    }

    if($class === 'Shugenja')
    {
        array_push($equipment, 'Spellbook');
    }
    
    if($class === 'Ninja')
    {
        array_push($equipment, 'Ninja Kit');
    }
    
    if($class === 'Sohei')
    {
        array_push($equipment, 'Holy Symbol');
        array_push($equipment, 'Holy Water (vial)');
    }

    $gear = array('Crowbar', 'Hammer', 'Grappling Hook', 'Mirror (small)', 'Pole (10ft)', 
    'Sack (small)', 'Sack (large)', 'Shovel', 'Spikes (12)', 'Tent (1 person)');

    shuffle($gear);

    $num2 = 0;

    if($class === 'Bushi')
    {
        $num2 = rand(3,7);
    }
    else
    {
        $num2 = rand(2,5);
    }

    for($i = 0; $i < $num2; ++$i)
    {
        array_push($equipment, $gear[$i]);
    }

    $euipmentCount = sizeof($equipment);
    $countMinus1 = ($euipmentCount - 1);
    $countMinus3 = ($euipmentCount - 3);

    $equipment2 = array();

    for($j = 0; $j < $countMinus1; ++$j)
    {
        if($j === $countMinus3)
        {
            array_push($equipment2, $equipment[$j]);
            array_push($equipment2, ' & ');
            array_push($equipment2, $equipment[$j+1]);

            break;
        }

        array_push($equipment2, $equipment[$j]);
        array_push($equipment2, ', ');
    }

    return $equipment2;

}



?>