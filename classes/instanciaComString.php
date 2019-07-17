<?php


class Cliente {
    
          public $nome;
          public $email;
    
     
   
     
     public function _construct($nome , $email){
         
          $this->nome  = $nome;
          $this->email = $email;
        
     }
     
      public function showInfo() {
        // return "nome: {$this->nome} <br> email: {$this->email} <br> cnpj: {$this->cnpj} <br>";
         
         echo "nome: {$this->nome} <br> email: {$this->email} <br>";
     }
        
}

$mclass = "Cliente";

$vclass = new $mclass;



$vclass->nome = 'Rodrigo';
$vclass->email = 'rodrigo@email.com';

$vclass->showInfo();