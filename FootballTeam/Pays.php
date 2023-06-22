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

    public function __toString()
    {
        return $this->nom;
    }
}