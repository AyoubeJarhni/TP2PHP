<!DOCTYPE html>
<html>
<head>
    <title>Start Session</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION["var1"] = "Hello";
    $_SESSION["var2"] = "World";
    echo "Session ID: " . session_id() . "<br>";
    echo "Session save path: " . session_save_path() . "<br>";
    echo "<a href='afficher_session.php'>Allez vers la seconde page</a>";
    ?>
</body>
</html>