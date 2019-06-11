<?php

function bushiAddBow ($race)
{
    $bow = "Longbow";

    if($race === 'Koropokuru')
    {
        $bow = "Short Bow"; 
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

    $addBow = rand(1, 2);

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

function getSoheiWeapons ()
{
    $weapons = array();

    $martialWeapons = array ("Katana (long sword)*", "Wakazashi (short sword)*", "Ono (axe)*", "Tanto (long dagger)*", " Chigiriki (mace)*", "Tetsubo (great club)**", "No-Dachi (great sword)**");

    shuffle($martialWeapons);

    $addBow = rand(1, 2);
    
    array_push($weapons, 'Naginata (polearm)**');
    
    if($addBow === 1)
    {
        array_push($weapons, 'Longbow');
        array_push($weapons, 'Quiver with 20 arrows');
    }
    
    $number = rand(1,2);
        
    for($count = 0; $count < $number; ++$count)
    {
        array_push($weapons, $martialWeapons[$count]);
    }

    return $weapons;
}


function getNinjaWeapons()
{
    
    $weapons = array();

    $ninjaWeapons = array ("Kunai (knife)*", "Kusari-gama*", "Kusari-fudo*", "Tanto (long dagger)*");

    shuffle($ninjaWeapons);

    $addBow = rand(1, 2);
    
    array_push($weapons, 'Ninjato (sword)*');
    
    array_push($weapons, 'Shurikens x 6');
    
    $number = rand(0,2);
        
    for($count = 0; $count < $number; ++$count)
    {
        array_push($weapons, $ninjaWeapons[$count]);
    }
    
    if($addBow === 1)
    {
        array_push($weapons, 'Short Bow');
        array_push($weapons, 'Quiver with 20 arrows');
    }

    return $weapons;
}

function getShugenjaWeapons ()
{
    $weapons = array();

    $shugenjaWeapons = array ("Jo (staff)", "Kama (sickle)", "Gunsen (war fan)", "Jitte", "Tonfu", "Kuwa", "Walking Stick", "Club");

    shuffle($shugenjaWeapons);
    
    $number = rand(2,4);
        
    for($count = 0; $count < $number; ++$count)
    {
        array_push($weapons, $shugenjaWeapons[$count]);
    }

    return $weapons;
    
}

function getWeapons ($class, $race, $school)
{
    $weapons = array();

    if($class === 'Bushi')
    {
        $weapons = getBushiWeapons ($school, $race);
    }

    if($class === 'Ninja')
    {
        $weapons = getNinjaWeapons();
    }
    
    if($class === 'Sohei')
    {
        $weapons = getSoheiWeapons();
    }
    
    if($class === 'Shugenja')
    {
        $weapons = getShugenjaWeapons();
    }

    return $weapons;
}


function getWeaponDescription ($class)
{
    $description = '';

    if($class === 'Bushi' || $class === 'Ninja' || $class === 'Sohei')
    {
        $description = '*Martial Weapon <br/>**Two-handed Martial Weapon';
    }

    return $description;
}


?>