<?php

include_once __DIR__ . './traits.php';

 class impiegato {

    use AnnoProduzione;
    public $nome;
    public $cognome;

    public function __construct(
        $nome,
        $cognome
    )
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    } 

 }


?>