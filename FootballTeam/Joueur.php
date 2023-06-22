<?php

Class Joueur
{
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private Pays $pays;
    private array $equipes;

    public function __construct($nom, $prenom, $date_naissance, $pays)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);
        $this->pays = $pays;
    }

    public function getNom()
    {
        return $this->nom."<br>";
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom."<br>";
    }
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPays()
    {
        return $this->pays."<br>";
    }
    public function setPays(Pays $pays)
    {
        $this->pays = $pays;
    }

    public function getDateNaissance()
    {
       return $date_naissance = $this->date_naissance->format('Y');
    }
    public function setDateNaissance(string $date_naissance)
    {
        $this->date_naissance = new DateTime($date_naissance);
    }

    public function ajouterUneEquipe(Transfere $equipes)
    {
        $this->equipes[] = $equipes;
    }

    public function listeEquipes()
    {
        foreach($this->equipes as $equipesListe)
        {
            echo $equipesListe->getEquipe()." (".$equipesListe->getDateSignature().")<br>";
        }
    }

    public function __toString()
    {
        return "$this->nom $this->prenom $this->pays";
    }
}