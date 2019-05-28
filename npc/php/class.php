<?php

function getClass ($type)
{
    $class = '';
    
    if($type == '1')
    {
        $choice = rand(0, 4);
    
        if($choice === 0 || $choice === 4)
        {
            $class = 'Bushi'; 
        }
        else if($choice === 1)
        {
            $class = 'Ninja'; 
        }
        else if($choice === 2)
        {
            $class = 'Shugenja'; 
        }
        else if($choice === 3)
        {
            $class = 'Sohei'; 
        }
    }
    
     
    if($type == '2')
    {
        $class = 'Bushi'; 
    }
    
     
    if($type == '3')
    {
        $class = 'Ninja'; 
    }
    
    
     
    if($type == '4')
    {
        $class = 'Sohei'; 
    }
    
    
    
     
    if($type == '5')
    {
        $class = 'Shugenja'; 
    }

    
    return $class;
    
    
}



?>