<?php


function soma($a = 0,$b = 0) 
{
    
     function somaVerdadeira($a = 0,$b = 0)
     {
           return $a + $b;
     }
    
       return somaVerdadeira($a, $b);
};



echo soma(20,20);


//function somaFactory() // nao funciona
//{
//    
//     function somaVerdadeira($a = 0,$b = 0)
//     {
//           return $a + $b;
//     }
//    
//       return somaVerdadeira;
//};
//
//$soma = somaFactory();
//
//echo $soma(10,10);
