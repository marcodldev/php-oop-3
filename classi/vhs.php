<?php

include_once __DIR__ . '/prodotto.php';
include_once __DIR__ . '/../traits/traits.php';
// include_once __DIR__ . '../traits/traits.php';
class vhs extends prodotto {
  use AnnoProduzione;
  // use AnnoProduzione;
  public $durata;
  public $poster;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Int $durata,
    String $poster,
    String $annoProduzione
    ) {
    $this->durata = $durata;
    $this->poster = $poster;
    $this->annoProduzione = $annoProduzione;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }
}

?>