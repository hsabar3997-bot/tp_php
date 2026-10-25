<?php
/**
 * Auteur    : hajar sabar
 * Objectif  : Authentification, gestion de session et cookies (Exercices 6.1 et 6.2)
 * Date      : 24/10/2026
 */

// EXERCICE 6.1 : session_start() TOUTE PREMIÈRE instruction
session_start();

require_once 'config.php';

/*
 * Questions Exercice 6.2 :
 * - Où est stockée une session ? Où est stocké un cookie ?
 *   - La session est stockée sur le SERVEUR (seul l’identifiant de session `PHPSESSID` est conservé côté client).
 *   - Le cookie est stocké sur le NAVIGATEUR (côté client).
 *
 * - Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ?
 *   - Parce qu'ils modifient les entêtes HTTP. Tout affichage (texte, HTML, espace) déclenche l'envoi des entêtes au client; toute modification ultérieure échoue avec l'erreur "Headers already sent".
 */

// Traitement de la connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = isset($_POST['login']) ? trim($_POST['login']) : '';

    if (!empty($login)) {
        // Enregistrement dans la session
        $_SESSION['login'] = $login;

        // Exercice 6.2.1 : Cookie d'une durée de 24h
        setcookie("dernier_login", $login, time() + 86400, "/");

        // Exercice 6.2.3 (Variante) : Stockage dans un cookie d'un tableau JSON (login + date)
        $infoCookie = [
            'login' => $login,
            'date_connexion' => date('Y-m-d H:i:s')
        ];
        setcookie("user_info_json", json_encode($infoCookie), time() + 86400, "/");

        // Redirection vers profil.php
        header("Location: profil.php");
        exit();
    }
}

// Pré-remplissage avec le cookie simple ou tableau
$loginPrerempli = "";
if (isset($_COOKIE['dernier_login'])) {
    $loginPrerempli = htmlspecialchars($_COOKIE['dernier_login']);
}

include_once 'includes/entete_inc.php';
include_once 'includes/menu_inc.php';
?>

<h2>Connexion à l'espace membre</h2>

<form action="login.php" method="POST">
    <div>
        <label for="login">Identifiant / Login :</label>
        <input type="text" id="login" name="login" value="<?php echo $loginPrerempli; ?>" required>
    </div>
    <button type="submit">Se connecter</button>
</form>

<?php
if (isset($_COOKIE['user_info_json'])) {
    $cookieData = json_decode($_COOKIE['user_info_json'], true);
    if ($cookieData) {
        echo "<p><small>Dernière connexion enregistrée via cookie JSON : " . htmlspecialchars($cookieData['login']) . " le " . $cookieData['date_connexion'] . "</small></p>";
    }
}

include_once 'includes/pied_inc.php';
?>