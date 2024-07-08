<!DOCTYPE html>
<html>
<head>
    <title>Afficher Session</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["var1"]) && isset($_SESSION["var2"])) {
        echo "var1: " . $_SESSION["var1"] . "<br>";
        echo "var2: " . $_SESSION["var2"] . "<br>";
    } 
    $session_file = session_save_path() . "/sess_" . session_id();
    if(file_exists($session_file)) {
        echo "<h1>Contenue de la session:</h1><br>";
        echo file_get_contents($session_file);

    } else {
        echo "session inexistant.";
    }
    ?>
</body>
</html>