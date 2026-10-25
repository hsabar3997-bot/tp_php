<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Sérialisation JSON et comparaison avec serialize() (Exercice 5.4)
 * Date      : 24/10/2026
 */

require_once 'config.php';
include_once 'includes/entete_inc.php';
include_once 'includes/menu_inc.php';

echo "<h2>Exportation et Sérialisation de données</h2>";

$fichierCsv = __DIR__ . '/data/notes.csv';
$resultats = [];

if (file_exists($fichierCsv) && ($handle = fopen($fichierCsv, "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ";")) !== false) {
        if (count($data) >= 3) {
            $nom = $data[0];
            $info = floatval($data[1]);
            $math = floatval($data[2]);
            $moyenne = ($info + $math) / 2;

            $resultats[] = [
                "nom" => $nom,
                "note_info" => $info,
                "note_math" => $math,
                "moyenne" => $moyenne
            ];
        }
    }
    fclose($handle);
} else {
    // Jeu de données par défaut si pas de CSV
    $resultats = [
        ["nom" => "Mohamed", "note_info" => 16, "note_math" => 14, "moyenne" => 15],
        ["nom" => "Hind", "note_info" => 13, "note_math" => 15, "moyenne" => 14]
    ];
}

// 1. Écriture JSON
$jsonContent = json_encode($resultats, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$fichierJson = __DIR__ . '/data/notes.json';
file_put_contents($fichierJson, $jsonContent);
echo "<p class='succes'>Données exportées dans <code>data/notes.json</code></p>";

// 2. Relecture JSON
$jsonLu = file_get_contents($fichierJson);
$donneesDecodees = json_decode($jsonLu, true);

echo "<h3>Données relues depuis JSON (json_decode) :</h3><pre>";
print_r($donneesDecodees);
echo "</pre>";

// 3. Comparaison avec serialize()
$chaineSerialisee = serialize($resultats);

echo "<h3>Comparaison des formats :</h3>";
echo "<strong>Format JSON :</strong><pre>" . htmlspecialchars($jsonContent) . "</pre>";
echo "<strong>Format serialize() native PHP :</strong><pre>" . htmlspecialchars($chaineSerialisee) . "</pre>";

/*
 * Question 5.4 : Lequel de ces formats est directement exploitable par une application JavaScript ?
 * Réponse : Le format JSON (JavaScript Object Notation). Il s'agit d'un standard universel
 * d'échange de données nativement pris en charge par JavaScript (JSON.parse()).
 */

include_once 'includes/pied_inc.php';