<?php

function getFuncao($qual) {
    
    switch ($qual){
        
        case 'somar':
            
            return function($a,$b) { return $a + $b; };
            
        case 'subtrair': 
             
            return function($a,$b) { return $a - $b; };
                    
    }
    
}

$minhaFunc = getFuncao('somar');

echo $minhaFunc(10,10);
echo '<br> <br>';

$arFunc = [function($a,$b) { return $a + $b; }, function($a,$b) { return $a - $b; }];

echo $arFunc[1](45,20);