<?php

require('Equipe.php');
require('Joueur.php');
require('Pays.php');
require('Transfere.php');

$p1 = new Pays("France");
$p2 = new Pays("Italie");
$p3 = new Pays("Espagne");

$e1 = new Equipe("PSG", "01/01/1970", $p1);
$e2 = new Equipe("FC Juve", "01/01/1897", $p2);
$e3 = new Equipe("Barca", "01/01/1899", $p3);
$e4 = new Equipe("Real", "01/01/1902", $p3);

$j1 = new Joueur("Mbappe", "Kylian", "12/20/1998", $p1);
$j2 = new Joueur("Pogba", "Paul", "03/15/1993", $p1);
$j3 = new Joueur("Morata", "Alvaro", "10/23/1992", $p3);

$t2 = new Transfere(30000, "01/01/2017", $j1, $e1);
$t3 = new Transfere(50000, "01/01/2025", $j2, $e4);
$t1 = new Transfere(500, "01/01/2022", $j2, $e2);

$e2->listeJoueurs();





