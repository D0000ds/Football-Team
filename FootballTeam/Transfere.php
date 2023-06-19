<?php

Class Transfere
{
    private float $montant;
    private DateTime $date_signature;
    private Joueur $joueur;
    private Equipe $equipe;
    private array $joueurs;

    public function __construct($montant, $date_signature, $joueur, $equipe)
    {
        $this->montant = $montant;
        $this->date_signature = new DateTime($date_signature);
        $this->joueur = $joueur;
        $this->equipe = $equipe;
    }

    public function getMontant()
    {
        echo $this->montant."<br>";
    }
    public function setMontant(float $montant)
    {
        $this->montant = $montant;
        echo $this->montant."<br>";
    }

    public function getDateSignature()
    {
        $date_signature = $this->date_signature->format('Y');
        echo $date_signature."<br>";
    }
    public function setDateSignature(string $date_signature)
    {
        $this->date_signature = new DateTime($date_signature);
    }

    public function getJoueur()
    {
        echo $this->joueur."<br>";
    }
    public function setJoueur(Joueur $joueur)
    {
        $this->joueur = $joueur;
        echo $this->joueur."<br>";
    }
}