<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Traitement du formulaire en méthode GET (Exercice 4.2)
 * Date      : 24/10/2026
 */

include_once 'includes/entete_inc.php';
include_once 'includes/menu_inc.php';

echo "<h2>Traitement du Formulaire GET</h2>";

$nom = isset($_GET['nom']) ? htmlspecialchars($_GET['nom']) : '';
$prenom = isset($_GET['prenom']) ? htmlspecialchars($_GET['prenom']) : '';
$sexe = isset($_GET['sexe']) ? $_GET['sexe'] : 'M';

$civilite = ($sexe === 'F') ? "Madame" : "Monsieur";

if (!empty($nom) && !empty($prenom)) {
    echo "<p class='succes'>Bonjour $civilite $prenom $nom</p>";
} else {
    echo "<p class='erreur'>Veuillez remplir correctement le formulaire.</p>";
}

include_once 'includes/pied_inc.php';