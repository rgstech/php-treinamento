<?php


$nome = 'Rodrigo';

$show = function() use ($nome) { // acessa escopo externo 
    
    echo $nome;
};


$show();