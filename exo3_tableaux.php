<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Exercices 3.1 à 3.5 et 4.1 (tableaux, fonctions de tri, factorisation)
 * Date      : 24/10/2026
 */

require_once 'config.php';
require_once 'exo2_flux.php'; // Pour la fonction mention()

// Exercice 4.1 - Inclusion de l'entête et du menu
include_once 'includes/entete_inc.php';
include_once 'includes/menu_inc.php';

echo "<h2>Exercice 3 : Tableaux et Opérateurs</h2>";

// -----------------------------------------------------------------------------
// Exercice 3.1 : Déclaration et affichage
// -----------------------------------------------------------------------------
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

$modules = ["PHP & MySQL", "HTML/CSS", "JavaScript"];

echo "<h3>Modules (foreach)</h3><ul>";
foreach ($modules as $mod) {
    echo "<li>$mod</li>";
}
echo "</ul>";

echo "<h3>Modules (accès par indice)</h3><ul>";
for ($i = 0; $i < count($modules); $i++) {
    echo "<li>Module $i : $modules[$i]</li>";
}
echo "</ul>";

// -----------------------------------------------------------------------------
// Exercice 3.2 : Affichage HTML des notes
// -----------------------------------------------------------------------------
echo "<h3>Tableau des notes</h3>";
echo "<table>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
foreach ($notes as $nom => $note) {
    $classeRouge = ($note < SEUIL) ? "class='rouge'" : "";
    echo "<tr $classeRouge>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}
echo "</table>";

// -----------------------------------------------------------------------------
// Exercice 3.3 : Statistiques
// -----------------------------------------------------------------------------
$somme = 0;
$meilleure = -1;
$faible = 101;
$nbApprenants = 0;

foreach ($notes as $nom => $n) {
    $somme += $n;
    $nbApprenants++;
    if ($n > $meilleure) $meilleure = $n;
    if ($n < $faible) $faible = $n;
}
$moyenne = $somme / $nbApprenants;

echo "<h3>Statistiques calculées (boucle)</h3>";
echo "Somme : $somme | Moyenne : " . round($moyenne, 2) . " | Max : $meilleure | Min : $faible <br>";

// Vérification avec fonctions natives
echo "<h3>Vérification avec fonctions PHP</h3>";
echo "array_sum : " . array_sum($notes) . " | count : " . count($notes) . " | max : " . max($notes) . " | min : " . min($notes) . "<br>";

// Tableau des effectifs par mention
$effectifs = [];
foreach ($notes as $nom => $n) {
    $m = mention($n);
    if (!isset($effectifs[$m])) {
        $effectifs[$m] = 0;
    }
    $effectifs[$m]++;
}

echo "<h4>Effectifs par mention :</h4><ul>";
foreach ($effectifs as $men => $eff) {
    echo "<li>$men : $eff apprenant(s)</li>";
}
echo "</ul>";

// -----------------------------------------------------------------------------
// Exercice 3.4 : Tri de tableaux
// -----------------------------------------------------------------------------
function afficher($tab) {
    echo "<table><tr><th>Nom</th><th>Note</th></tr>";
    foreach ($tab as $nom => $n) {
        echo "<tr><td>$nom</td><td>$n</td></tr>";
    }
    echo "</table>";
}

echo "<h3>Tris du tableau \$notes</h3>";

$t1 = $notes; ksort($t1);
echo "<h4>1. Noms croissants (ksort)</h4>"; afficher($t1);

$t2 = $notes; arsort($t2);
echo "<h4>2. Notes décroissantes (arsort)</h4>"; afficher($t2);

$t3 = $notes; krsort($t3);
echo "<h4>3. Noms décroissants (krsort)</h4>"; afficher($t3);

$t4 = $notes; asort($t4);
echo "<h4>4. Notes croissantes (asort)</h4>"; afficher($t4);

/*
 * Question 3.4 : Quelle fonction de tri utiliser sur un tableau indexé comme $modules ?
 * Réponse : `sort()` pour trier par ordre croissant de valeur, ou `rsort()` pour l'ordre décroissant.
 */

// -----------------------------------------------------------------------------
// Exercice 3.5 : Opérateurs de tableaux
// -----------------------------------------------------------------------------
echo "<h3>Opérateurs de tableaux</h3>";
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "\$a + \$b : "; var_dump($a + $b); echo "<br>";
echo "\$a == \$b : "; var_dump($a == $b); echo "<br>";
echo "\$a === \$b : "; var_dump($a === $b); echo "<br>";

/*
 * Explications Ex 3.5 :
 * - $a + $b : Union des tableaux. Comme les clés 'x' et 'y' de $b existent déjà dans $a, les éléments de $b sont ignorés. Le résultat garde l'ordre de $a.
 * - $a == $b (Égalité) : Retourne true car les deux tableaux possèdent les mêmes paires clé/valeur, peu importe l'ordre.
 * - $a === $b (Identité) : Retourne false car l'ordre des paires clé/valeur diffère ('x' en premier dans $a, 'y' en premier dans $b).
 */

/*
 * -----------------------------------------------------------------------------
 * Réponses Exercice 4.1 (Expériences d'inclusion) :
 * -----------------------------------------------------------------------------
 * Expérience 1 (Fichier inexistant) :
 * - Avec `include 'inexistant.php'` : Affiche un avertissement (Warning) et la suite du script CONTINUE de s'exécuter.
 * - Avec `require 'inexistant.php'` : Lève une erreur fatale (Fatal Error) et l'exécution du script s'ARRÊTE immédiatement.
 *
 * Expérience 2 (Inclusions multiples) :
 * - Deux fois `include 'includes/menu_inc.php'` : Le menu est rendu 2 fois dans le code HTML.
 * - Deux fois `include_once 'includes/menu_inc.php'` : PHP vérifie que le fichier a déjà été inclus et n'inclut le menu qu'une seule fois.
 */

// Exercice 4.1 - Inclusion du pied de page
include_once 'includes/pied_inc.php';