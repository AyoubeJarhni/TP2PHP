<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Premier pas en PHP"; ?></title>
</head>
<body>
<?php
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    setcookie("user_browser", $_SERVER['HTTP_USER_AGENT'], time() + (86400 * 30), "/");
    echo "<a href='afficher_cookie.php'>Allez vers la seconde page</a>";
} else {
    echo "User agent information is not available.";
}
?>
</body>
</html>
