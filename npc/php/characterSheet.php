<?php

function getCharacterSheet ($type)
{
    $charSheet = 'bushi.png';

     
    if($type === 'Bushi')
    {
            $charSheet = 'bushi.png';  
    }
    
     
    if($type === 'Ninja')
    {
            $charSheet = 'ninja.png';  
    }
    
    
     
    if($type === 'Sohei')
    {
            $charSheet = 'sohei.png';  
    }
    
    
    
     
    if($type === 'Shugenja')
    {
            $charSheet = 'shugenja.png';  
    }

    
    return $charSheet;
    
    
}


?>