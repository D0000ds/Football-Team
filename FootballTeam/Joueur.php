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
        $pays->ajouterUnJoueur($this);
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
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

    public function getAge()
    {
        $now = date('Y-m-d');
        $now2 = new DateTime($now);
        $diff = $now2->diff($this->date_naissance);
        $age = $diff->y;

        return $age;
    }

    public function ajouterUneEquipe(Transfere $equipes)
    {
        $this->equipes[] = $equipes;
    }

    public function listeEquipes()
    {
        $total = 0;
        foreach($this->equipes as $equipesListe)
        {
            echo "Il a joué au ".$equipesListe->getEquipe()." en ".$equipesListe->getDateSignature()." pour ".$equipesListe->getMontant()." €<br>";
            $total = $total +$equipesListe->getMontant();
            
        }
        echo "Total : ".$total." € <br>";
    }

    public function __toString()
    {
        return "$this->nom $this->prenom $this->pays ".$this->getAge()." ans";
    }
}