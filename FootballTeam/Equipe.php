<?php

Class Equipe
{
    private string $nom;
    private DateTime $date_creation;
    private Pays $pays;
    private array $joueurs;

    public function __construct($nom, $date_creation, $pays)
    {
        $this->nom = $nom;
        $this->date_creation = new DateTime($date_creation);
        $this->pays = $pays;
        $pays->ajouterUneEquipe($this);
    }

    public function getPays()
    {
        return $this->pays;
    }
    public function setPays(Pays $pays)
    {
        $this->pays = $pays;
    }

    public function getDateCreation()
    {
        return $date_creation = $this->date_creation->format('Y');
    }
    public function setDateCreation(string $date_creation)
    {
        $this->date_creation = new DateTime($date_creation);
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function ajouterUnJoueur(Transfere $joueurs)
    {
        $this->joueurs[] = $joueurs;
    }

    public function listeJoueurs()
    {
        foreach($this->joueurs as $joueursListe)
        {
            echo $joueursListe;
        }
    }

    public function infosEquipe()
    {
        echo "Le ".$this->getNom()." creer en ".$this->getDateCreation()." est un club originaire de ".$this->getPays()."<br>";
    }

    public function __toString()
    {
        return "$this->nom $this->pays";
    }
}