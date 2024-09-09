<?php

require_once "../vendor/autoload.php";

use App\Entites\Equipe;
use App\Personne;
use App\Championnat;

$kc = new Equipe("KC");
$m8 = new Equipe("M8");
$ligue1 = new Championnat("Ligue 1");
$dupond = new Personne("Dupond");
$durand = new Personne("Durand");

$ligue1->ajouterEquipe($kc);
$ligue1->ajouterEquipe($m8);
echo "il y a " . $ligue1->getNombreEquipes() . " en ligue 1";
echo PHP_EOL;
$dupond->liker($kc);
$durand->liker($m8);
echo $m8->getNom() . " a " . $m8->getNombreLikes() . "en ligue 1";

dump($ligue1);