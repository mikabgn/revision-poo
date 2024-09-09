<?php

class Film
{
    //Attributs
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;

    //Association avec la classe auteur


    //Méthodes
    //Constructeur permetent la creation des objets(instance) d'une class, instanciation

    public function __construct(string $titre, string $realisateur, DateTime $dateSortie, array $acteur)
    {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
        $this->acteur = $acteur;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getAnciennete() : int {
        $dateJour = new DateTime();
        $intervalle = $dateJour->diff($this->dateSortie);
        return $intervalle ->y;
    }

}
