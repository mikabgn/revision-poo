<?php

class Acteur
{
    private string $nom;
    private string $prenom;

    private array $acteur = [];

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getNom(): string{
        return $this->nom;
    }
    public function getPrenom(): string{
        return $this->prenom;
    }
    public function ajouterActeur(Acteur $acteur) : void
    {
        $this->acteur[] = $acteur;
    }

    /**
     *
     * @return array|Acteur
     */
    public function getActeur(): ?Acteur
    {
        return $this->acteur;
    }
}