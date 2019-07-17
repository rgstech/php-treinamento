<?php

require_once 'HelloWorldTrait.php';

class traitclient {
    
    public $msg = 'Hello world';
    
    use HelloWorldTrait {
        showMsg as writeline;
    }

}



$t = new traitclient();

$t->writeline();
