<?php
// Auteur: Hajar Sabar - Objectif: bases PHP - Date: 24/10/2026
// commentaire ligne avec //
# commentaire avec #
/* commentaire 
sur plusieurs lignes */
require "config.php";

echo 'Hello PHP<br>';
echo "Etablissement: ".ETABLISSEMENT."<br>";
echo "SEUIL: ".SEUIL." defined? ".var_export(defined('SEUIL'), true)."<br>";
echo "INCONNUE defined? ".var_export(defined('INCONNUE'), true)."<br>";
// Si constante non définie -> Warning + considère comme string
// const = compile-time dans class, define() = runtime partout

// Exo 1.1
// $x valide, $_x valide, $2x invalide (commence par chiffre), $x-y invalide (-), $Prix_HT valide, $prix ht invalide (espace), $état valide mais déconseillé (accent)
$x = 1; $_x = 2; $Prix_HT = 100; $état = "ok";
$a = 1; $A = 2; // distinctes
echo "\$a=$a, \$A=$A<br>";

// Exo 1.3
$prix_ht = 60; $tva = 20;
$prix_ttc = $prix_ht * (1 + $tva/100);
echo "Le prix TTC du produit est de $prix_ttc €.<br>";

// Exo 1.4
$test = 42;
$test = (string)$test;
var_dump($test);
var_dump((bool)0, (bool)0.0, (bool)"0", (bool)"", (bool)"abc", (bool)[], (bool)null);
var_dump((int)3.9, (int)"12abc", (float)"1.5e3", (int)true);
echo "255 dec: ". 255 ." hex: ". dechex(255) ." oct: ". decoct(255) ." bin: ". decbin(255) ."<br>";

// Exo 1.5
$traitees = "égales à"; $ici = 2;
echo 'Ahmed a dit : "J\'ai réussi"<br>';
echo "Voulez-vous supprimer C:\\*.*? <br>";
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables seront $traitees $ici<br>";

$s = "*Bonjour les développeurs*";
echo trim($s, "*")."<br>";
$chaine = "Bonjour";
for($i=0; $i<strlen($chaine); $i++){
  echo $chaine[$i]."<br>";
}
?>