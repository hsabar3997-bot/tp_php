<?php
// Auteur: Hajar Sabar - Objectif: flux
require "config.php";
require "includes/entete_inc.php";
require "includes/menu_inc.php";

function mention($note){
  if($note >= 16) return "Très bien";
  elseif($note >= 14) return "Bien";
  elseif($note >= 12) return "Assez bien";
  elseif($note >= SEUIL) return "Passable";
  else return "Ajourné";
}
echo "Test mention 15: ".mention(15)."<br>";

// Exo 2.2
$mois = date("m");
switch($mois){
  case "01": echo "Janvier"; break;
  case "02": echo "Février"; break;
  case "03": echo "Mars"; break;
  case "04": echo "Avril"; break;
  case "05": echo "Mai"; break;
  case "06": echo "Juin"; break;
  case "07": echo "Juillet"; break;
  case "08": echo "Août"; break;
  case "09": echo "Septembre"; break;
  case "10": echo "Octobre"; break;
  case "11": echo "Novembre"; break;
  case "12": echo "Décembre"; break;
  default: echo "Mois inconnu"; break;
}
echo "<br>Si on oublie break, il continue et exécute les case suivants (fall-through)<br>";

// Exo 2.3
for($i=1; $i<=6; $i++){
  for($j=1; $j<=$i; $j++) echo "*";
  echo "<br>";
}
$i=0;
while($i<=20){
  if($i==10) echo "<b>$i</b> ";
  else echo "$i ";
  $i+=2;
}
echo "<br>";
for($i=0; $i<=10; $i++){
  if($i%2!=0) continue;
  echo "$i ";
}
echo "<br>";
$i=1;
while(true){
  switch($i){
    case 5: echo "At 5<br>"; break;
    case 10: echo "At 10; quitting<br>"; break 2;
  }
  if($i>10) break;
  $i++;
}
// do-while exécute au moins une fois même si condition fausse au début
$i=0;
do{
  if($i==10) echo "<b>$i</b> ";
  else echo "$i ";
  $i+=2;
}while($i<=20);

require "includes/pied_inc.php";
?>