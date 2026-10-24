<?php
// Auteur: Hajar Sabar
session_start();
if(!isset($_SESSION['login'])){ header("Location: login.php"); exit; }
echo "Bienvenue ".$_SESSION['login']."<br>";
echo "<a href='deconnexion.php'>Déconnexion</a><br>";
echo "Dernier login cookie: ".($_COOKIE['dernier_login']??'aucun');
?>