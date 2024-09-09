<?php

require_once '../src/Film.php' ;

//Instqncier la classe film
$film1 = new Film("ouiss",",moi,", DateTime::createFromFormat("d/m/Y", "12/03/2023"));

echo $film1 ->getTitre();
echo PHP_EOL;
echo $film1 ->getAnciennete();
$film1->ajouterActeur(new Acteur("jean","pierre"));
$film1->ajouterActeur(new Acteur("pierre","dupond"));
$film1->ajouterActeur(new Acteur("anne","martin"));
print_r($film1->getActeur());


foreach ($film1->getActeur() as $acteur) {
    echo $acteur->getNom();
    echo PHP_EOL;
}