<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Traitement POST, validation, sécurisation et écriture CSV (Exercice 4.3 & 5.1)
 * Date      : 24/10/2026
 */

require_once 'config.php';
include_once 'includes/entete_inc.php';
include_once 'includes/menu_inc.php';

/*
 * Questions Exercice 4.3 :
 * 1. Pourquoi préférer POST à GET pour un mot de passe ?
 *    - POST envoie les données dans le corps de la requête HTTP, les masquant de l'URL.
 *    - GET affiche les paramètres en clair dans l'URL, qui sont alors conservés dans l'historique du navigateur, les logs du serveur web et les signets.
 *
 * 2. Que contient $_REQUEST ?
 *    - $_REQUEST est un tableau superglobal qui rassemble le contenu de $_GET, $_POST et $_COOKIE.
 */

/*
 * Question Exercice 5.1 :
 * Que se passerait-il avec le mode "w" au lieu de "a" dans fopen() ?
 * Réponse : Le mode "w" écrase (efface) tout le contenu existant du fichier à chaque ouverture.
 * Le mode "a" (append) ajoute les données à la fin du fichier sans effacer les anciennes.
 */

echo "<h2>Traitement et enregistrement de la saisie</h2>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
    $note_info = isset($_POST['note_info']) ? $_POST['note_info'] : '';
    $note_math = isset($_POST['note_math']) ? $_POST['note_math'] : '';

    $erreurs = [];

    // Validation des données
    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    }

    if (!is_numeric($note_info) || $note_info < NOTE_MIN || $note_info > NOTE_MAX) {
        $erreurs[] = "La note d'informatique doit être un nombre entre " . NOTE_MIN . " et " . NOTE_MAX . ".";
    }

    if (!is_numeric($note_math) || $note_math < NOTE_MIN || $note_math > NOTE_MAX) {
        $erreurs[] = "La note de mathématiques doit être un nombre entre " . NOTE_MIN . " et " . NOTE_MAX . ".";
    }

    if (empty($erreurs)) {
        // Protection XSS avec htmlspecialchars
        $nom_securise = htmlspecialchars($nom);
        $note_info_f = floatval($note_info);
        $note_math_f = floatval($note_math);

        echo "<div class='succes'>";
        echo "<p><strong>Saisie valide :</strong></p>";
        echo "Nom : $nom_securise | Note Info : $note_info_f | Note Math : $note_math_f";
        echo "</div>";

        // --- Exercice 5.1 : Écriture CSV ---
        $dossierData = __DIR__ . '/data';
        if (!is_dir($dossierData)) {
            mkdir($dossierData, 0777, true);
        }

        $fichierCsv = $dossierData . '/notes.csv';
        $fp = fopen($fichierCsv, 'a');
        if ($fp) {
            fputcsv($fp, [$nom_securise, $note_info_f, $note_math_f], ';');
            fclose($fp);
            echo "<p class='succes'>Données ajoutées avec succès dans <code>data/notes.csv</code>.</p>";
        } else {
            echo "<p class='erreur'>Impossible d'ouvrir le fichier CSV en écriture.</p>";
        }

    } else {
        echo "<div class='erreur'><ul>";
        foreach ($erreurs as $err) {
            echo "<li>$err</li>";
        }
        echo "</ul></div>";
    }
} else {
    echo "<p class='erreur'>Aucune donnée soumise.</p>";
}

include_once 'includes/pied_inc.php';