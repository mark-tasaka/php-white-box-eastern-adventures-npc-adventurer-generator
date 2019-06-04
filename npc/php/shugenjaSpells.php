<?php

function ShugenjaLevel1Spells ()
{
    $shugenjaLevelOne = array ("Detect Magic", "Flaming Orb", "Frost Bolt", 
    "Identify Magic", "Iron Shards", "Levitation", "Lock", "Sticky Paper");

    shuffle($shugenjaLevelOne);

    return $shugenjaLevelOne;
}


function ShugenjaLevel2Spells ()
{
    $shugenjaLevelTwo = array ("Conjure Illusion", "Dark Vision", "Flaming Servant", 
    "Fire Cracker", "Influence Others", "Languages", "Poisoned Arrow", "Ray of Paralysation");

    shuffle($shugenjaLevelTwo);

    return $shugenjaLevelTwo;
}


function ShugenjaLevel3Spells ()
{
    $shugenjaLevelThree = array ("Dispel Magic", "Growth", "Globe of Flames", 
    "Lightening Strike", "Spider's Web", "Telepathic Link");

    shuffle($shugenjaLevelThree);

    return $shugenjaLevelThree;
}


function ShugenjaLevel4Spells ()
{
    $shugenjaLevelFour = array ("Breathe Water", "Death Whisper", "Silence", 
    "Summon Elemental", "Poisonous Cloud");

    shuffle($shugenjaLevelFour);

    return $shugenjaLevelFour;
}


function getShugenjaSpellList ($class, $level)
{

    $spellList = array();

    
    if($class != 'Shugenja')
    {
        return $spellList;
    }


    $spellsLevelOne = array();
    $spellsLevelTwo = array();
    $spellsLevelThree = array();
    $spellsLevelFour = array();

    $spellsLevelOne = ShugenjaLevel1Spells ();
    $spellsLevelTwo = ShugenjaLevel2Spells ();
    $spellsLevelThree = ShugenjaLevel3Spells ();
    $spellsLevelFour = ShugenjaLevel4Spells ();

    $level1Spells = 0;
    $level2Spells = 0;
    $level3Spells = 0;
    $level4Spells = 0;

    if($level === 1)
    {
        $level1Spells = 3;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);

            if($i === 0)
            {
                array_push($spellList, ', ');
            }

            
            if($i === 1)
            {
                array_push($spellList, ' and ');
            }

        }
    }
    
    if($level === 2)
    {
        $level1Spells = 5;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);

            if($i <=2)
            {
                array_push($spellList, ', ');
            }

            
            if($i === 3)
            {
                array_push($spellList, ' and ');
            }

        }
    }
        
    if($level === 3)
    {
        $level1Spells = 5;
        $level2Spells = 2;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            if($i === 0)
            {
                array_push($spellList, ' and ');
            }
            
        }
    }
        
    if($level === 4)
    {
        $level1Spells = 6;
        $level2Spells = 3;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            if($i === 0)
            {
                array_push($spellList, ', ');
            }
            
            if($i === 1)
            {
                array_push($spellList, ' and ');
            }
            
        }
    }

            
    if($level === 5)
    {
        $level1Spells = 6;
        $level2Spells = 3;
        $level3Spells = 2;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level3Spells; ++$i)
        {
            array_push($spellList, $spellsLevelThree[$i]);
            
            if($i === 0)
            {
                array_push($spellList, ' and ');
            }
            
        }
    }

            
    if($level === 6)
    {
        $level1Spells = 7;
        $level2Spells = 4;
        $level3Spells = 2;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level3Spells; ++$i)
        {
            array_push($spellList, $spellsLevelThree[$i]);
            
            if($i === 0)
            {
                array_push($spellList, ' and ');
            }
            
        }
    }

            
    if($level === 7)
    {
        $level1Spells = 7;
        $level2Spells = 6;
        $level3Spells = 2;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level3Spells; ++$i)
        {
            array_push($spellList, $spellsLevelThree[$i]);
            
            if($i === 0)
            {
                array_push($spellList, ' and ');
            }
            
        }
    }

    
            
    if($level === 8)
    {
        $level1Spells = 7;
        $level2Spells = 6;
        $level3Spells = 2;
        $level4Spells = 2;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level3Spells; ++$i)
        {
            array_push($spellList, $spellsLevelThree[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level4Spells; ++$i)
        {
            array_push($spellList, $spellsLevelFour[$i]);
            
            if($i === 0)
            {
                array_push($spellList, ' and ');
            }
            
        }
    }

        
            
    if($level === 9)
    {
        $level1Spells = 7;
        $level2Spells = 6;
        $level3Spells = 4;
        $level4Spells = 2;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            array_push($spellList, ', ');
            
        }
        
        for($i = 0; $i < $level3Spells; ++$i)
        {
            array_push($spellList, $spellsLevelThree[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level4Spells; ++$i)
        {
            array_push($spellList, $spellsLevelFour[$i]);
            
            if($i === 0)
            {
                array_push($spellList, ' and ');
            }
            
        }
    }

                
    if($level === 10)
    {
        $level1Spells = 7;
        $level2Spells = 6;
        $level3Spells = 5;
        $level4Spells = 3;

        for($i = 0; $i < $level1Spells; ++$i)
        {
            array_push($spellList, $spellsLevelOne[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level2Spells; ++$i)
        {
            array_push($spellList, $spellsLevelTwo[$i]);
            
            array_push($spellList, ', ');
            
        }
        
        for($i = 0; $i < $level3Spells; ++$i)
        {
            array_push($spellList, $spellsLevelThree[$i]);
            
            array_push($spellList, ', ');
            
        }

        for($i = 0; $i < $level4Spells; ++$i)
        {
            array_push($spellList, $spellsLevelFour[$i]);
            
            
            if($i === 0)
            {
                array_push($spellList, ', ');
            }
            
            if($i === 1)
            {
                array_push($spellList, ' and ');
            }
        }
    }



    return $spellList;

}


?>