<?php
// Auteur: Hajar Sabar - session + cookie - DOIT être première ligne
session_start();
if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['login'])){
    $login = htmlspecialchars($_POST['login']);
    $_SESSION['login']=$login;
    setcookie("dernier_login", $login, time()+86400, "/");
    // variante tableau: setcookie("user", json_encode(["login"=>$login,"date"=>date("Y-m-d H:i")]), time()+86400, "/");
    header("Location: profil.php"); exit;
}
$last = $_COOKIE['dernier_login'] ?? "";
// si cookie json: $u = json_decode($_COOKIE['user']??'',true); $last=$u['login']??'';
?>
<!DOCTYPE html><html><body>
<h2>Login</h2>
<form method="POST">
Login: <input name="login" value="<?php echo htmlspecialchars($last); ?>" required>
<button>Connexion</button>
</form>
</body></html>