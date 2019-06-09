<?php

function bushiAddBow ($race)
{
    $bow = "long bow";

    if($race === 'Koropokuru')
    {
        $bow = "short bow"; 
    }

    return $bow;

}

function getBushiWeapons ($school, $race)
{
    $weapons = array();

    $martialWeapons = array ("Ono (axe)*", "Tanto (long dagger)*", " Chigiriki (mace)*", "Tetsubo (great club)**", "No-Dachi (great sword)**");

    $polearms = array ("Yari (great spear)**", "Naginata (polearm)**", "Nagimaki (polearm)**", "Sasumata (polearm)**");

    shuffle($martialWeapons);
    shuffle($polearms);

    $addBow = rand(1, 3);

    if($school === 'Twin Blades')
    {
        array_push($weapons, 'Katana (long sword)*');
        array_push($weapons, 'Wakazashi (short sword)*');

        if($addBow === 1)
        {
            $bow = bushiAddBow ($race);
            array_push($weapons, $bow);
            array_push($weapons, 'Quiver with 20 arrows');
        }

        for($count = 0; $count < 1; ++$count)
        {
            array_push($weapons, $martialWeapons[$count]);
        }

    }

    
    if($school === 'Polearm/Spear Fighting')
    {

        for($count = 0; $count < 1; ++$count)
        {
            array_push($weapons, $polearms[$count]);
        }

        $number = rand(1,2);
        

        for($count = 0; $count < $number; ++$count)
        {
            array_push($weapons, $martialWeapons[$count]);
        }

        if($addBow === 1)
        {
            $bow = bushiAddBow ($race);
            array_push($weapons, $bow);
            array_push($weapons, 'Quiver with 20 arrows');
        }

    }

    
    if($school === 'Archery')
    {
        
        $bow = bushiAddBow ($race);
        array_push($weapons, $bow);
        array_push($weapons, 'Quiver with 20 arrows');

        $number = rand(0,2);
        
        for($count = 0; $count < $number; ++$count)
        {
            array_push($weapons, $martialWeapons[$count]);
        }

        for($count = 0; $count < 1; ++$count)
        {
            array_push($weapons, $polearms[$count]);
        }

    }

    
    if($school === 'Death Strike')
    {
        array_push($weapons, 'Katana (long sword)*');

        if($addBow === 1)
        {
            $bow = bushiAddBow ($race);
            array_push($weapons, $bow);
            array_push($weapons, 'Quiver with 20 arrows');
        }
        
        $number = rand(0,1);

        for($count = 0; $count < $number; ++$count)
        {
            array_push($weapons, $martialWeapons[$count]);
        }
        
        $number2 = rand(0,1);

        for($count = 0; $count < $number2; ++$count)
        {
            array_push($weapons, $polearms[$count]);
        }

    }

    return $weapons;

}



?>