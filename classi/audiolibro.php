<?php

include_once __DIR__ . '/prodotto.php';
include_once __DIR__ . '/../traits/traits.php';
// include_once __DIR__ . '../traits/traits.php';

class audioLibro extends prodotto{
  use AnnoProduzione;
  // use AnnoProduzione;
  public $durata;
  public $piattaforma;
  public $link;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Int $durata,
    String $piattaforma,
    String $link,
    String $annoProduzione 
    ) {
    $this->durata = $durata;
    $this->piattaforma = $piattaforma;
    $this->link = $link;
    $this->annoProduzione = $annoProduzione;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }


}

?>