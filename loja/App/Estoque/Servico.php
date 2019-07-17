<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 29/03/2019
 * Time: 22:58
 */
namespace App\Estoque;

class Servico
{



    private $titulo;
    private $precoHora;

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getPrecoHora()
    {
        return $this->precoHora;
    }

    /**
     * @param mixed $precoHora
     */
    public function setPrecoHora($precoHora)
    {
        $this->precoHora = $precoHora;
    }




}