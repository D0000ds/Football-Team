<?php

Class Pays
{
    private string $nom;
    private array $joueurs;
    private array $equipes;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function ajouterUneEquipe(Equipe $equipes)
    {
        $this->equipes[] = $equipes;
    }

    public function listeEquipes()
    {
        foreach($this->equipes as $equipesListe)
        {
            echo $equipesListe."<br>";
        }
    }

    public function ajouterUnJoueur(Joueur $joueurs)
    {
        $this->joueurs[] = $joueurs;
    }

    public function listeJoueurs()
    {
        foreach($this->joueurs as $joueursListe)
        {
            echo $joueursListe."<br>";
        }
    }

    public function __toString()
    {
        return $this->nom;
    }
}