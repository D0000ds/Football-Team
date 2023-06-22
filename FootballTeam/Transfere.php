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
        $equipe->ajouterUnJoueur($this);
        $joueur->ajouterUneEquipe($this);

        $this->joueurs[] = $joueur;
    }

    public function getMontant()
    {
        return $this->montant;
    }
    public function setMontant(float $montant)
    {
        $this->montant = $montant;
    }

    public function getDateSignature()
    {
        return $date_signature = $this->date_signature->format('Y');
    }
    public function setDateSignature(string $date_signature)
    {
         $this->date_signature = new DateTime($date_signature);
    }

    public function getJoueur()
    {
        return $this->joueur;
    }
    public function setJoueur(Joueur $joueur)
    {
         $this->joueur = $joueur;
 
    }

    public function getEquipe()
    {
        return $this->equipe;
    }

    public function listeTransfere()
    {
        foreach($this->joueurs as $transfereListe)
        {
            echo $transfereListe." ". $this->getMontant()." (".$this->getDateSignature().")<br>";
        }
    }

    public function __toString()
    {
        return $this->getJoueur()." (". $this->getDateSignature().") <br>";
    }
}