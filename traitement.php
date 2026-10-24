<?php
// Auteur: Hajar Sabar - Objectif: POST + CSV
require "config.php";
require "includes/entete_inc.php";
require "includes/menu_inc.php";

if(!isset($_POST['nom']) || empty(trim($_POST['nom'])) || !isset($_POST['note_info']) || !isset($_POST['note_math'])){
    die("Erreur: champs manquants. isset() vérifie existence, empty() vérifie vide");
}
$nom = htmlspecialchars(trim($_POST['nom']));
$info = floatval($_POST['note_info']);
$math = floatval($_POST['note_math']);

if($info < NOTE_MIN || $info > NOTE_MAX || $math < NOTE_MIN || $math > NOTE_MAX){
    die("Notes doivent être entre ".NOTE_MIN." et ".NOTE_MAX);
}

echo "<p>Récap: Nom=$nom, Info=$info, Math=$math - OK</p>";
// Pourquoi POST pour mdp ? GET visible dans URL/historique, POST non
// $_REQUEST contient $_GET + $_POST + $_COOKIE

if(!is_dir("data")) mkdir("data", 0777, true);
$f = fopen("data/notes.csv", "a"); // "a" ajoute, "w" efface tout
fputcsv($f, [$nom, $info, $math], ";");
fclose($f);
echo "Ajouté à data/notes.csv - <a href='liste.php'>Voir liste</a><br>";

require "includes/pied_inc.php";
?>