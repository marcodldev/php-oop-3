<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/vhs.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/traits/impiegato.php';

$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
var_dump($generi);

$prodotti = [
  new Libro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile','1993'),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com','1965'),
  new vhs('Il ritorno di Blockbuster', 'vhs production', 12.22, $generi['horror'], false, 'https://immagine-copertina.com', '160', 'testposter','1987')
];

$impiegato = new impiegato('Mario', 'Rossi');

$impiegato->annoProduzione = "1992";


var_dump($prodotti);

try{
  $impiegato->annoFunc("due");
} catch(Exception $e) {
  echo "Si è verificato un errore:". $e->getMessage();
}



foreach ($prodotti as $elem) {
  echo get_class($elem);
  echo "<br>";
}

?>