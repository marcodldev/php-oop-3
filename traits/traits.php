<?php 


/*
IMPORTARE CON LA "/" PRIMA DEL PATH, IN QUESTO MODO 
include_once __DIR__ . '/../traits/traits.php'; */

trait AnnoProduzione  {
    public $annoProduzione;

    public function annoFunc(){
        return "$this->annoProduzione";
    }
}

?>