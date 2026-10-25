<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Exercices 2.1 à 2.3 sur les structures de contrôle et boucles
 * Date      : 24/10/2026
 */

require_once 'config.php';

// Définition de la fonction mention (chargeable sans afficher le reste)
if (!function_exists('mention')) {
    function mention($note) {
        if ($note >= 16) {
            return "Très bien";
        } elseif ($note >= 14) {
            return "Bien";
        } elseif ($note >= 12) {
            return "Assez bien";
        } elseif ($note >= SEUIL) {
            return "Passable";
        } else {
            return "Ajourné";
        }
    }
}

// L-affichage kay-exécuta FQAṬ mni kat-ouffrir exo2_flux.php directement
if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {

    echo "<h1>Exercice 2 : Structures de contrôle et boucles</h1>";

    // -----------------------------------------------------------------------------
    // Exercice 2.1 : if / elseif / else
    // -----------------------------------------------------------------------------
    echo "<h3>Test de la fonction mention()</h3>";
    $notesTest = [18, 15, 13, 10, 8];
    foreach ($notesTest as $n) {
        echo "Note : $n => Mention : " . mention($n) . "<br>";
    }

    // -----------------------------------------------------------------------------
    // Exercice 2.2 : switch
    // -----------------------------------------------------------------------------
    echo "<h3>Mois courant (switch)</h3>";
    $mois = date("m");
    switch ($mois) {
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
        default  : echo "Mois inconnu"; break;
    }
    echo "<br>";

    // -----------------------------------------------------------------------------
    // Exercice 2.3 : Boucles
    // -----------------------------------------------------------------------------
    echo "<h3>Triangle avec boucles for imbriquées</h3>";
    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<h3>Boucle while (0 à 20 par pas de 2)</h3>";
    $k = 0;
    while ($k <= 20) {
        if ($k == 10) {
            echo "<strong>10</strong> ";
        } else {
            echo "$k ";
        }
        $k += 2;
    }
    echo "<br>";

    echo "<h3>Boucle for et continue (nombres pairs de 0 à 10)</h3>";
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 !== 0) {
            continue;
        }
        echo "$i ";
    }
    echo "<br>";

    echo "<h3>Boucle while, switch et break 2</h3>";
    $i = 1;
    while (true) {
        switch ($i) {
            case 5:
                echo "At 5<br>";
                break;
            case 10:
                echo "At 10; quitting<br>";
                break 2;
        }
        $i++;
    }

    echo "<h3>Boucle do-while (0 à 20 par pas de 2)</h3>";
    $m = 0;
    do {
        if ($m == 10) {
            echo "<strong>10</strong> ";
        } else {
            echo "$m ";
        }
        $m += 2;
    } while ($m <= 20);
    echo "<br>";
}