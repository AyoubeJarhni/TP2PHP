<!DOCTYPE html>
<html>
<head>
    <title>Afficher le Cookie</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["user_browser"])) {
        echo "User's browser: " . $_COOKIE["user_browser"];
    } else {
        echo "The cookie is not set.";
    }
    ?>
    <br><a href='supprimer_cookie.php'>Allez vers la troisieme page</a>
</body>
</html>