<?php
require_once './classes/T800.php';
require_once './classes/T1000.php';
require_once './classes/T3000.php';
require_once './classes/TX.php';
require_once './classes/Parc.php';

$parc = new Parc();

$parc->add(new TerminatorX);
$parc->add(new T800);
$parc->add(new T1000);
$parc->add(new T3000);

$parc->fuir();

$parc->afficheTerminators();