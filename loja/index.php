<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 29/03/2019
 * Time: 23:03
 * Demostração de Autoload usando composer / Autoload sample using composer
 */
 
use App\Venda\Venda;
use App\Estoque\Produto;

require_once "vendor/autoload.php";



$prod = new Produto();


$prod->setTitulo("mochila targus");
$prod->setDesc("mochila preta 30 l targus");
$prod->setPreco(120);

echo $prod->getTitulo();



