<?php

class Cliente {
    
     private $nome;
     
    function __construct($nome) {
        
        $this->nome = $nome;   
    }
    function __invoke($sobrenome) {
        echo ' Nome: ' . $this->nome . ' '. $sobrenome;
    }
    
}

$cliente = new Cliente('Rodrigo');

$cliente('Guimaraes'); //chama como funcão, e invoca internamente o metodo __invoke