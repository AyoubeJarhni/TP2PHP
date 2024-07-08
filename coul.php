<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez vos couleurs préférées</title>
    <?php
    if (isset($_COOKIE['colors'])) {
        list($bgColor, $textColor) = explode('|', $_COOKIE['colors']);
        echo "<style>
                body {
                    background-color: $bgColor;
                    color: $textColor;
                }
              </style>";
    }
    ?>
</head>
<body>
    <h1>Personnalisez les couleurs de la page</h1>
    <form method="post">
        <label for="bgColor">Couleur de fond:</label>
        <input type="color" id="bgColor" name="bgColor" required>
        <br>
        <label for="textColor">Couleur du texte:</label>
        <input type="color" id="textColor" name="textColor" required>
        <br><br>
        <button type="submit">Enregistrer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bgColor = $_POST['bgColor'];
        $textColor = $_POST['textColor'];
        $colors = $bgColor . '|' . $textColor;
        setcookie('colors', $colors, time() + 7200, "/");
        echo "<p>Couleurs enregistrées. Rechargez la page pour voir les modifications.</p>";
    }
    ?>
</body>
</html>
