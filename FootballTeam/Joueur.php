<?php

Class Joueur
{
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private Pays $pays;

    public function __construct($nom, $prenom, $date_naissance, $pays)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);
        $this->pays = $pays;
    }

    public function getNom()
    {
        echo $this->nom."<br>";
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
        echo $this->nom."<br>";
    }

    public function getPrenom()
    {
        echo $this->prenom."<br>";
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
        echo $this->prenom."<br>";
    }

    public function getPays()
    {
        echo $this->pays."<br>";
    }
    public function setPays(Pays $pays)
    {
        $this->pays = $pays;
        echo $this->pays."<br>";
    }

    public function getDateNaissance()
    {
        $date_naissance = $this->date_naissance->format('Y');
        echo $date_naissance."<br>";
    }
    public function setDateNaissance(string $date_naissance)
    {
        $this->date_naissance = new DateTime($date_naissance);
    }
}