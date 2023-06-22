<?php

require('Equipe.php');
require('Joueur.php');
require('Pays.php');
require('Transfere.php');

$p1 = new Pays("France");
$p2 = new Pays("Italie");

$e1 = new Equipe("PSG", "01/01/1970", $p1);
$e2 = new Equipe("Juve", "01/01/1897", $p2);

$j1 = new Joueur("Mbappe", "Kylian", "01/01/1998", $p1);
$j2 = new Joueur("Pogba", "Paul", "01/01/1993", $p1);

$t1 = new Transfere(500, "01/01/2022", $j2, $e2);
$t2 = new Transfere(30000, "01/01/2017", $j1, $e1);

$e2->listeJoueurs();
$j2->listeEquipes();

$e1->infosEquipe();
$t1->listeTransfere();
$t2->listeTransfere();
