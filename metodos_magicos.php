<?php

class Cliente {


  private $data;

       
      public function __constuct(){ }

      public function __set($prop, $value) 
      {
           if (!isset($this->data[$prop])){
              $this->data[$prop] = $value; 
           }
      }


      public function __get($prop) 
      {
          if (isset($this->data[$prop])){
              return $this->data[$prop];
           }
      }
      
      public function __call($method, $args = null)
      {
          
          call_user_func($method, get_object_vars($this));
          
      }


}

$cliente = new Cliente();

$cliente->nome = 'Rodrigo';
$cliente->email = 'rodrigo@email.com';

echo "CLIENTE -> NOME: {$cliente->nome}  E-MAIL: {$cliente->email}";

echo '<br>';

$cliente->print_r();