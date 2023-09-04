<?php
require_once 'classes//Product.php';
require_once 'classes//Food.php';
require_once 'classes//Toy.php';
require_once 'classes//DogBed.php';


$food1 = new Food("[1]","Croccantini per cani", 15.99, "cani", 100);
$toy1 = new Toy("[2]", "Palla per cani", 4.99, "cani", "gomma");

$food1->printCard();
$toy1->printCard();