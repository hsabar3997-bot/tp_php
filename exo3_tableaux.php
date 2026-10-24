<?php
// Auteur: Hajar Sabar
// Objectif: Tableaux, stats, tri
// Date: 24/10/2026

require "config.php";
require "includes/entete_inc.php";
require "includes/menu_inc.php";

// Exercice 3.1
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

$modules = ["Info", "Math", "Reseau"];
echo "<h3>Modules avec foreach:</h3>";
foreach($modules as $m){ echo "$m<br>"; }
echo "Accès indice: ".$modules[0].", ".$modules[1].", ".$modules[2]."<br>";

// fonction mention (Exo 2.1)
function mention($note){
    if($note >= 16) return "Très bien";
    elseif($note >= 14) return "Bien";
    elseif($note >= 12) return "Assez bien";
    elseif($note >= SEUIL) return "Passable";
    else return "Ajourné";
}

function afficher($tab){
    echo "<table><tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
    foreach($tab as $nom => $note){
        $class = ($note < SEUIL) ? "class='rouge'" : "";
        echo "<tr $class><td>$nom</td><td>$note</td><td>".mention($note)."</td></tr>";
    }
    echo "</table>";
}

// Exercice 3.2
echo "<h2>Exo 3.2 - Tableau HTML</h2>";
afficher($notes);

// Exercice 3.3 : Stats SANS array_sum
$somme = 0; $max = 0; $min = 20;
foreach($notes as $n){
    $somme += $n;
    if($n > $max) $max = $n;
    if($n < $min) $min = $n;
}
$moyenne = $somme / count($notes);
echo "<p>Somme boucle: $somme - Moyenne: $moyenne - Max: $max - Min: $min</p>";

// Vérif avec fonctions natives
echo "<p>Vérif: sum=".array_sum($notes)." count=".count($notes)." max=".max($notes)." min=".min($notes)."</p>";

// Effectifs par mention
$effectifs = [];
foreach($notes as $n){
    $m = mention($n);
    if(!isset($effectifs[$m])) $effectifs[$m]=0;
    $effectifs[$m]++;
}
echo "<h4>Effectifs par mention:</h4>";
print_r($effectifs);

// Exercice 3.4 : Tri
echo "<h2>Exo 3.4 - Tri</h2>";

echo "<h4>1. ksort (noms croissants)</h4>";
$tmp = $notes; ksort($tmp); afficher($tmp);

echo "<h4>2. arsort (notes décroissantes)</h4>";
$tmp = $notes; arsort($tmp); afficher($tmp);

echo "<h4>3. krsort (noms décroissants)</h4>";
$tmp = $notes; krsort($tmp); afficher($tmp);

echo "<h4>4. asort (notes croissantes)</h4>";
$tmp = $notes; asort($tmp); afficher($tmp);

// Question: tableau indexé $modules ?
// Réponse: on utilise sort() pour tri croissant, rsort() pour décroissant
echo "<p>Pour \$modules (indexé): sort() et rsort(), pas ksort/asort qui gardent les clés associatives</p>";

// Exercice 3.5
echo "<h2>Exo 3.5 - Opérateurs tableaux</h2>";
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "Prédiction:<br>";
echo "\$a + \$b = union, garde \$a si clé existe déjà => [x=>1, y=>2]<br>";
echo "\$a == \$b = true car même paires clé/valeur même si ordre différent<br>";
echo "\$a === \$b = false car ordre différent et === vérifie ordre + type<br><br>";

echo "Vérification:<br>";
var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);

require "includes/pied_inc.php";
?>