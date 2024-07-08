<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Créer le cookie avec des informations sur le navigateur
$browser_info = $_SERVER['HTTP_USER_AGENT'];
setcookie("user_browser", $browser_info, time() + (86400 * 30), "/");

// Redirection vers la page d'affichage des informations du cookie
header("Location: afficher_cookie.php");
exit();
?>

</body>
</html>
