<?php
// Auteur: Hajar Sabar
require "config.php";
require "includes/entete_inc.php";
require "includes/menu_inc.php";

function mention($n){ if($n>=16)return"Très bien"; elseif($n>=14)return"Bien"; elseif($n>=12)return"Assez bien"; elseif($n>=SEUIL)return"Passable"; else return"Ajourné"; }

if(!file_exists("data/notes.csv")) die("Fichier n'existe pas, saisissez 4 apprenants d'abord");

$f = fopen("data/notes.csv", "r");
if(!$f){ exit("Erreur ouverture"); }

$total=0; $nb=0;
echo "<h2>Lecture avec fgetcsv()</h2>";
echo "<table><tr><th>Nom</th><th>Info</th><th>Math</th><th>Moyenne</th><th>Mention</th></tr>";
while(($l=fgetcsv($f, 1000, ";"))!==false){
    if(count($l)<3) continue;
    $moy = ($l[1]+$l[2])/2; $total+=$moy; $nb++;
    echo "<tr><td>{$l[0]}</td><td>{$l[1]}</td><td>{$l[2]}</td><td>".round($moy,2)."</td><td>".mention($moy)."</td></tr>";
}
echo "</table>";
if($nb>0) echo "Moyenne classe: ".round($total/$nb,2)."<br>";
fclose($f);

// Exo 5.3 bas niveau
echo "<h2>Lecture bas niveau fgets()</h2>";
$f = fopen("data/notes.csv", "r");
while(!feof($f)){
    $ligne = fgets($f);
    if(empty(trim($ligne))) continue;
    $parts = explode(";", trim($ligne));
    echo "Nom: $parts[0] - Info: $parts[1] - Math: $parts[2]<br>";
}
fclose($f);
echo "<p>fgetcsv gère guillemets et ; dans champ, explode non. fgetcsv plus sûr.</p>";

require "includes/pied_inc.php";
?>