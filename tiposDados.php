<?php

declare(strict_types=1); //passar a verficar tipos nos parametros

function teste(string $msg, int $salario) : string {
    
    echo " mensagem: " . $msg . " salario: " . $salario;
    
    return "OK";
}


teste("Rodrigo",'3500'); 
