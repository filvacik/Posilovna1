<?php

include 'class/iustrednyVacik.php'; // inkludovani interfacu
include 'class/ustrednyVacik.php'; // inkludovani abstraktni tridy
include 'class/ustrednaVacik.php'; // inkludovani dedici tridy

$napetiVacik = 24; // atribut podle ktereho nastavime napeti

$newVacik = new ustrednaVacik(); // instance tridy ustrednaVacik

var_dump($newVacik::TYPE); // vypsani ve var dump constanty TYPE


/*
 *
 */

$newVacik->setNapetiVacik($napetiVacik);     // nastaveni atributu pomoci instacniho pristupu k fuknci

var_dump($newVacik->getNapetiVacik());        // vypsani atributu ve var dump instancnim zpusobem

?>

