<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Destruction de la session utilisateur et redirection (Exercice 6.1)
 * Date      : 24/10/2026
 */

session_start();

// Vider toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Redirection vers login.php
header("Location: login.php");
exit();