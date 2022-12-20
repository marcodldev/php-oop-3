<?php


/*
IMPORTARE CON LA "/" PRIMA DEL PATH, IN QUESTO MODO 
include_once __DIR__ . '/../traits/traits.php'; */

trait AnnoProduzione
{
    public $annoProduzione;



    public function annoFunc($annoProduzione)
    {
        if (!is_numeric($annoProduzione)) {
            throw new Exception("Attenzione, $annoProduzione non è un numero <br>", 1);
        } else {
            $this->annoProduzione = $annoProduzione;
        };

    }
}

?>