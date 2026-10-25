<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Page de profil protégée par session (Exercice 6.1)
 * Date      : 24/10/2026
 */

session_start();

// Protection de l'accès : redirection si l'utilisateur n'est pas connecté
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

include_once 'includes/entete_inc.php';
include_once 'includes/menu_inc.php';
?>

<h2>Espace Profil Apprenant</h2>

<div class="succes">
    <p>Bienvenue, <strong><?php echo htmlspecialchars($_SESSION['login']); ?></strong> ! Vous êtes connecté.</p>
</div>

<p><a href="deconnexion.php">Se déconnecter</a></p>

<?php
include_once 'includes/pied_inc.php';
?>