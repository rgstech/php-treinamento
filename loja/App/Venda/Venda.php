<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 29/03/2019
 * Time: 23:00
 */
namespace App\Venda;

class Venda
{

    private $item = [];



    public function addItem($item) {

        $this->item[] = $item;
    }

     public function showItem() {

        foreach($this->item as $it){
            echo $it;
         }
     }
}