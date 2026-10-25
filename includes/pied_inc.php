<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Pied de page HTML avec traitement de dates (Exercice 6.3)
 * Date      : 24/10/2026
 */

// 6.3.1 - Affichage de la date du jour au format d/m/Y
$dateDuJour = date("d/m/Y");

// 6.3.2 - Nombre de jours restants avant la fin du semestre (ex: 31 décembre 2026)
$aujourdhui = new DateTime();
$finSemestre = new DateTime('2026-12-31');
$intervalle = $aujourdhui->diff($finSemestre);
$joursRestants = $intervalle->format('%r%a');

// 6.3.3 - Validation d'une date saisie (ex: 31/12/2026) avec checkdate()
$jour = 31; $mois = 12; $annee = 2026;
$estValide = checkdate($mois, $jour, $annee) ? "valide" : "invalide";
?>
<hr>
<footer>
    <p>&copy; <?php echo date("Y"); ?> - <?php echo ETABLISSEMENT; ?> | Date du jour : <strong><?php echo $dateDuJour; ?></strong></p>
    <p>Jours restants avant la fin du semestre (31/12/2026) : <strong><?php echo $joursRestants; ?> jour(s)</strong></p>
    <p><small>Vérification checkdate(12, 31, 2026) : La date de test est <?php echo $estValide; ?>.</small></p>
</footer>
</body>
</html>