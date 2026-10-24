<?php
// Auteur: Hajar Sabar - Objectif: GET
require "config.php";
require "includes/entete_inc.php";
require "includes/menu_inc.php";
$nom = htmlspecialchars($_GET['nom'] ?? '');
$prenom = htmlspecialchars($_GET['prenom'] ?? '');
$sexe = $_GET['sexe'] ?? 'M';
if($sexe=='M') echo "Bonjour Monsieur $prenom $nom";
else echo "Bonjour Madame $prenom $nom";
echo "<br>URL = ...?nom=$nom&prenom=$prenom&sexe=$sexe (visible)";
require "includes/pied_inc.php";
?>