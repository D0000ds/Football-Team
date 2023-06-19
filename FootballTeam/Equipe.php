<?php

Class Equipe
{
    private string $nom;
    private DateTime $date_creation;
    private Pays $pays;

    public function __construct($nom, $date_creation, $pays)
    {
        $this->nom = $nom;
        $this->date_creation = new DateTime($date_creation);
        $this->pays = $pays;
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

    public function getDateCreation()
    {
        $date_creation = $this->date_creation->format('Y');
        echo $date_creation."<br>";
    }
    public function setDateCreation(string $date_creation)
    {
        $this->date_creation = new DateTime($date_creation);
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

    public function __toString()
    {
        $date_creation = $this->date_creation->format('Y');
        return "$this->nom $this->pays  $date_creation ";
    }
}