<?php

class Pessoa {
    
    private $nome;
    private $email;
    private $tel;
    
    public function __construct($nome, $email, $tel) {
          
        $this->nome = $nome;
        $this->email = $email;
        $this->tel = $tel;
              
    }
    
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTel() {
        return $this->tel;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }


    
    
}

class Cliente extends Pessoa {
    
      private $tipoCliente;
      
      public function __construct($nome, $email, $tel, $tipoCliente) {
          
          parent::__construct($nome, $email, $tel);
          
          $this->tipoCliente = $tipoCliente;
          
          
      }
      
      function getTipoCliente() {
          return $this->tipoCliente;
      }

      function setTipoCliente($tipoCliente) {
          $this->tipoCliente = $tipoCliente;
      }


      public function showInfo() {
          
          echo "nome: {$this->nome} email: {$this->email} tel: {$this->tel} tipo de cliente: {$this->tipoCliente}";
      }
      
    
}
 

$cliente = new Cliente("Rodrigo", "rod@email.com", "71 898928312", "Pessoa Fisica");


echo get_class($cliente);
echo '<br>';
echo get_parent_class($cliente);

echo '<br>';
echo is_subclass_of($cliente, 'Pessoa');
echo '<br>';
echo is_subclass_of('Cliente', 'Pessoa');
echo '<br>';

print_r(get_object_vars($cliente));
echo '<br>';
print_r(get_class_methods($cliente));

echo '<br>';
echo '<br>';
echo '<br>';

call_user_func(array($cliente, 'showInfo'), null );


echo method_exists($cliente, 'showInfo');








