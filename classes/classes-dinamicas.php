<?php


class Produto {
    
    
    private $titulo;
    private $desc;
    private $preco;
    
    function __construct() {
        
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDesc() {
        return $this->desc;
    }

    function getPreco() {
        return $this->preco;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDesc($desc) {
        $this->desc = $desc;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }


    
}

class Cliente {
    
    
    private $nome;
    private $email;
    private $telefone;
    
    function __construct() {
        
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }


    
}


function createObj($vclass = 'stdClass') {
    
    return new $vclass;
    
}


$obj = createObj('Cliente');

$obj->setNome('Rodrigo');

$obj2 = createObj('Produto');

$obj2->setTitulo('Smartfone Alcatel');



echo "nome do cliente: " . $obj->getNome(). PHP_EOL . '<br>';
echo "titulo produto: " . $obj2->getTitulo() . PHP_EOL . '<br>';

$genObj = createObj();

$genObj->nome = "Obj generico";




echo "Nome do obj generico " .  $genObj->nome . PHP_EOL;







