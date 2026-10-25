<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Exercices 1.1 à 1.5 sur les variables, types, constantes et chaînes
 * Date      : 24/10/2026
 */

// Partie 0 : Commentaire sur une ligne (double slash)
# Partie 0 : Commentaire sur une ligne (dèse)
/*
   Partie 0 : Commentaire sur
   plusieurs lignes
*/

echo "<h1>Exercice 1 : Bases de PHP</h1>";
echo "Hello PHP<br><br>";

// -----------------------------------------------------------------------------
// Exercice 1.1 : Noms de variables
// -----------------------------------------------------------------------------
/*
 * Justifications :
 * - $x      : Valide (commence par une lettre).
 * - $_x     : Valide (commence par un souligné / underscore).
 * - $2x     : Invalide (ne peut pas commencer par un chiffre).
 * - $x-y    : Invalide (le tiret '-' est interprété comme un opérateur de soustraction).
 * - $Prix_HT: Valide (contient des lettres majuscules/minuscules et underscore).
 * - $prix ht: Invalide (contient un espace).
 * - $état   : Valide en PHP (caractères UTF-8 autorisés), mais déconseillé en pratique.
 */

$x = 10;
$_x = 20;
$Prix_HT = 100;
$état = "Actif";

// Sensibilité à la casse :
$a = "Minuscule";
$A = "Majuscule";
echo "Sensibilité à la casse : \$a = $a \vert{} \$A =$A <br><br>";

// -----------------------------------------------------------------------------
// Exercice 1.2 : Constantes
// -----------------------------------------------------------------------------
require 'config.php';

echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "Note Min : " . NOTE_MIN . " | Note Max : " . NOTE_MAX . " | Seuil : " . SEUIL . "<br>";

echo "Test defined('SEUIL') : " . (defined('SEUIL') ? 'Existe' : 'N\'existe pas') . "<br>";
echo "Test defined('INCONNUE') : " . (defined('INCONNUE') ? 'Existe' : 'N\'existe pas') . "<br><br>";

/*
 * Réponses aux questions 1.2 :
 * - Si on affiche une constante non définie (ex: echo INCONNUE;), PHP 8+ lève une erreur fatale Error ("Undefined constant"). En PHP 7, cela émettait un Warning et la traitait comme une chaîne "INCONNUE".
 * - Différence entre `const` et `define()` :
 *   1) `const` est évalué à la compilation (ne peut pas être placé dans des structures conditionnelles `if` ou des fonctions).
 *   2) `define()` est évalué à l'exécution et accepte des expressions dynamiques en paramètre.
 */

// -----------------------------------------------------------------------------
// Exercice 1.3 : Calcul du prix TTC
// -----------------------------------------------------------------------------
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 +$tva / 100);

echo "Le prix TTC du produit est de $prix_ttc €.<br><br>";

// -----------------------------------------------------------------------------
// Exercice 1.4 : Types et conversions (cast)
// -----------------------------------------------------------------------------
echo "<h3>Conversions de types</h3>";

// 1. Cast en string
$test = 42;
$test = (string)$test;
echo "\$test (cast string) : ";
var_dump($test);
echo "<br>";

// 2. Casts booléens (Prédictions : tous sont false SAUF "abc" qui est true)
echo "Casts booléens :<br>";
echo "0 => "; var_dump((bool) 0); echo "<br>";
echo "0.0 => "; var_dump((bool) 0.0); echo "<br>";
echo '"0" => '; var_dump((bool) "0"); echo "<br>";
echo '"" => '; var_dump((bool) ""); echo "<br>";
echo '"abc" => '; var_dump((bool) "abc"); echo "<br>";
echo "[] => "; var_dump((bool) []); echo "<br>";
echo "null => "; var_dump((bool) null); echo "<br><br>";

// 3. Casts divers (Prédictions : (int)3.9 -> 3, (int)"12abc" -> 12, (float)"1.5e3" -> 1500, (int)true -> 1)
echo "Casts spécifiques :<br>";
echo '(int) 3.9 => '; var_dump((int) 3.9); echo "<br>";
echo '(int) "12abc" => '; var_dump((int) "12abc"); echo "<br>";
echo '(float) "1.5e3" => '; var_dump((float) "1.5e3"); echo "<br>";
echo '(int) true => '; var_dump((int) true); echo "<br><br>";

// 4. Nombre 255 sous différentes bases
$dec = 255;
$hex = 0xFF;
$oct = 0o377;
$bin = 0b11111111;

echo "255 en décimal : $dec, hexadécimal : $hex, octal : $oct, binaire :$bin <br><br>";

// -----------------------------------------------------------------------------
// Exercice 1.5 : Chaînes de caractères
// -----------------------------------------------------------------------------
echo "<h3>Manipulation de chaînes</h3>";

$traitees = "égales à";
$ici = 2;

// 1. Double guillemets et échappement
echo "1. Ahmed a dit : \"J'ai réussi\"<br>";
// 2. Anti-slashs
echo '2. Voulez-vous supprimer C:\*.*?<br>';
// 3. Anti-slash n non interprété
echo '3. Ceci n\'affichera pas \n de nouvelle ligne<br>';
// 4. Variables non interprétées (guillemets simples)
echo '4. Les variables ne seront pas $traitees$ici<br>';
// 5. Variables interprétées (guillemets doubles)
echo "5. Les variables seront $traitees$ici<br><br>";

// Trim
$chaineEtoilee = "*Bonjour les développeurs*";
$chaineNettoyee = trim($chaineEtoilee, "*");
echo "Chaîne nettoyée avec trim() : <strong>$chaineNettoyee</strong><br><br>";

// Affichage lettre par lettre avec strlen() et for
echo "Affichage lettre par lettre de \"PHP\" :<br>";
$mot = "PHP";
for ($i = 0; $i < strlen($mot);$i++) {
    echo $mot[$i] . "<br>";
}