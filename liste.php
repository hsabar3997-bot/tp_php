<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Lecture CSV avec fgetcsv et comparaison fgets/explode (Exercices 5.2 et 5.3)
 * Date      : 24/10/2026
 */

require_once 'config.php';
require_once 'exo2_flux.php'; // Pour la fonction mention()

include_once 'includes/entete_inc.php';
include_once 'includes/menu_inc.php';

echo "<h2>Liste des apprenants et leurs notes (CSV)</h2>";

$fichierCsv = __DIR__ . '/data/notes.csv';

// Exercice 5.2 : Verification existence fichier
if (!file_exists($fichierCsv)) {
    echo "<p class='erreur'>Le fichier <code>data/notes.csv</code> n'existe pas encore. Veuillez saisir des données <a href='saisie.html'>ici</a>.</p>";
    include_once 'includes/pied_inc.php';
    exit();
}

// Exercice 5.2 : Lecture haut niveau avec fgetcsv()
$handle = fopen($fichierCsv, "r");
if ($handle === false) {
    echo "<p class='erreur'>Erreur d'ouverture du fichier CSV.</p>";
    include_once 'includes/pied_inc.php';
    exit();
}

echo "<table>";
echo "<tr><th>Nom</th><th>Note Info</th><th>Note Math</th><th>Moyenne</th><th>Mention</th></tr>";

$totalMoyennes = 0;
$nbLignes = 0;

while (($data = fgetcsv($handle, 1000, ";")) !== false) {
    if (count($data) >= 3) {
        $nom = htmlspecialchars($data[0]);
        $info = floatval($data[1]);
        $math = floatval($data[2]);
        $moyenne = ($info + $math) / 2;
        $m = mention($moyenne);

        $totalMoyennes += $moyenne;
        $nbLignes++;

        echo "<tr>";
        echo "<td>$nom</td><td>$info</td><td>$math</td><td>" . number_format($moyenne, 2) . "</td><td>$m</td>";
        echo "</tr>";
    }
}
fclose($handle);
echo "</table>";

if ($nbLignes > 0) {
    $moyenneGenerale = $totalMoyennes / $nbLignes;
    echo "<h3>Moyenne générale de la classe : <strong>" . number_format($moyenneGenerale, 2) . " / 20</strong></h3>";
}

// -----------------------------------------------------------------------------
// Exercice 5.3 : Lecture "bas niveau" avec fgets() et explode()
// -----------------------------------------------------------------------------
echo "<h3>Lecture bas niveau avec fgets() et explode()</h3>";

$handle2 = fopen($fichierCsv, "r");
if ($handle2) {
    echo "<ul>";
    while (!feof($handle2)) {
        $ligne = fgets($handle2);
        if (trim($ligne) !== '') {
            $champs = explode(';', trim($ligne));
            echo "<li>Ligne brute lue : Nom=" . htmlspecialchars($champs[0]) . " | Info=" . $champs[1] . " | Math=" . $champs[2] . "</li>";
        }
    }
    fclose($handle2);
    echo "</ul>";
}

/*
 * Comparaison (Exercice 5.3) :
 * - `fgetcsv()` :
 *   - Avantages   : Gère automatiquement le découpage par séparateur, l'échappement des guillemets et les caractères de fin de ligne au sein des données.
 *   - Inconvénients : Légèrement moins adaptable si le format de texte est non standard.
 * - `fgets()` + `explode()` :
 *   - Avantages   : Contrôle total sur la ligne brute (utile pour du parsing personnalisé).
 *   - Inconvénients : Ne gère pas les guillemets ou séparateurs imbriqués dans les valeurs sans traitement manuel complexe.
 */

include_once 'includes/pied_inc.php';