<!DOCTYPE html>
<html>
<head>
    <title>Supprimer le  Cookie</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["user_browser"])) {
        setcookie("user_browser", "", time() - 3600, "/");
        echo "The cookie has been deleted.";
        unset($_COOKIE["user_browser"]);
        echo "User's browser: " . $_COOKIE["user_browser"];
    } 
    ?>
</body>
</html>