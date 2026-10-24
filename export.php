<?php
// Auteur: Hajar - Objectif: exporter CSV vers JSON - Date: 24/10/2026
$fichier_csv = "data/notes.csv";
$fichier_json = "data/notes.json";

$tab = [];
if (file_exists($fichier_csv)) {
    $fp = fopen($fichier_csv, "r");
    while (($ligne = fgetcsv($fp, 1000, ";")) !== FALSE) {
        if (count($ligne) >= 3) {
            $nom = $ligne[0];
            $info = floatval($ligne[1]);
            $math = floatval($ligne[2]);
            $moy = ($info + $math) / 2;
            $tab[] = ["nom" => $nom, "info" => $info, "math" => $math, "moyenne" => $moy];
        }
    }
    fclose($fp);
}

// 2. écriture JSON
file_put_contents($fichier_json, json_encode($tab, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// 3. relecture
$json = file_get_contents($fichier_json);
$data = json_decode($json, true);

echo "<h2>Export terminé : data/notes.json créé</h2>";
echo "<pre>";
print_r($data);
echo "</pre>";

// comparaison serialize vs json_encode
echo "<h3>Comparaison</h3>";
echo "json_encode: " . json_encode($tab) . "<br>";
echo "serialize: " . serialize($tab);
?>