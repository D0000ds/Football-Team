<?php

require('Equipe.php');
require('Joueur.php');
require('Pays.php');
require('Transfere.php');

$p1 = new Pays("France");
$p2 = new Pays("Italie");

$e1 = new Equipe("PSG", "1970", $p1);
$e2 = new Equipe("Juve", "1897", $p2);

$j1 = new Joueur("Mbappe", "Kylian", "1998", $p1);

echo "$e1";

