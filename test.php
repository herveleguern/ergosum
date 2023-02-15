<?php
require_once 'TrancheAge.php';
require_once 'Jouet.php';
require_once 'JouetBois.php';
require_once 'Catalogue.php';

//les tranches d'age
$tranche1=new TrancheAge(1,0,1);    //0-1 an
$tranche3=new TrancheAge(3,5,7);    //5-7 ans
$tranche5=new TrancheAge(5,11,15);  //11-15 ans

//les jouets
$jouet1=new Jouet(1,'Monopoly',$tranche5,100);
$jouet2=new Jouet(2,'Sophie la girafe', $tranche1,100);
$jouet3=new Jouet(3,'Cluedo', $tranche5,100);
$jouet4=new Jouet(4,'Lego chantier', $tranche5,100);
$jouet5=new JouetBois(5,'puzzle Hippo', $tranche3,100,'France');
$jouet6=new JouetBois(5,'puzzle Croco', $tranche3,100,'France');

//le catalogue de jouets 2022
$cat2022=new Catalogue(2022);
$cat2022->ajouterJouet($jouet1);
$cat2022->ajouterJouet($jouet2);
$cat2022->ajouterJouet($jouet3);
$cat2022->ajouterJouet($jouet4);

var_dump($jouet1->convient(12)); //VRAI : jouet1 convient à un enfant de 12 ans
var_dump($jouet2->convient(5)); //FAUX : jouet2 ne convient pas à un enfant de 5 ans
var_dump($cat2022->quantiteEnStock(1));
var_dump($cat2022->quantiteEnStock(3));
var_dump($cat2022->quantiteEnStock(5));

var_dump(JouetBois::getNbInstances());  //2


?>