<?php
// Auteur: Hajar Sabar
session_start();
session_unset();
session_destroy();
setcookie("dernier_login","",time()-3600,"/");
setcookie("user","",time()-3600,"/");
header("Location: login.php"); exit;
// Session stockée serveur (/tmp), Cookie stocké navigateur. setcookie/header avant tout echo sinon headers already sent
?>