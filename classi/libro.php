<?php

include_once __DIR__ . '/prodotto.php';
include_once __DIR__ . '../traits/Traits.php';

class libro extends prodotto {

  use AnnoProduzione;
  public $pagine;
  public $copertina;
      
  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Int $pagine,
    String $copertina,
    String $annoProduzione 
    ) {
    $this->pagine = $pagine;
    $this->copertina = $copertina;
    $this->annoProduzione = $annoProduzione;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }
}

?>