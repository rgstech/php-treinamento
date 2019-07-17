<?php

abstract class Cliente {
    
    protected $nome;
    protected $email;
            
}

class ClientePessoaFisica extends Cliente {
    
    private $rg;
   
    
     public function _construct($nome , $email, $rg)
     {
          $this->nome = $nome;
          $this->email = $email;
          $this->rg = $rg;
     }
     
     public function showInfo() {
         
         return " nome: {$this->nome} <br> email: {$this->email} <br> rg: {$this->rg} <br>";
         
     }
       
}


class ClientePessoaJuridica extends Cliente {
    
    private $cnpj;
   
     
     public function _construct($nome , $email, $cnpj){
         
          $this->nome  = $nome;
          $this->email = $email;
          $this->cnpj  = $cnpj;
     }
     
      public function showInfo() {
        // return "nome: {$this->nome} <br> email: {$this->email} <br> cnpj: {$this->cnpj} <br>";
         
         echo "nome: {$this->nome} <br> email: {$this->email} <br> cnpj: {$this->cnpj} <br>";
     }
        
}


$pf = new ClientePessoaFisica('Rodrigo', 'rod@email.com', 123456);
$pj = new ClientePessoaJuridica('RGSTECH', 'comercial@email.com', 654321);

//echo $pf->showInfo();
//echo $pj->showInfo();


echo $pj->showInfo();