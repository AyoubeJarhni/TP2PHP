<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de Livres par Auteur</title>
</head>
<body>
    <h1>Recherche de Livres par Auteur</h1>
    <form action="filtre1.php" method="post">
        <label for="auteur">Nom de l'auteur :</label>
        <input type="text" id="auteur" name="auteur" required>
        <input type="submit" value="Rechercher">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = 'localhost';
        $db   = 'livres,';
        $user = 'root';
        $pass = '';
        $port = '3306'; 

        $mysqli = new mysqli($host, $user, $pass, $db, $port);

       
        if ($mysqli->connect_error) {
            die("Connexion échouée : " . $mysqli->connect_error);
        }

        $auteur = $_POST['auteur'];

        $sql = "SELECT * FROM livre WHERE auteur LIKE ?";
        $stmt = $mysqli->prepare($sql);
        $param = "%" . $auteur . "%";
        $stmt->bind_param("s", $param);
        $stmt->execute();
        $result = $stmt->get_result();

        echo "<h2>Résultats de la recherche pour l'auteur '$auteur'</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Titre</th><th>Auteur</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['titre'] . "</td><td>" . $row['auteur'] . "</td></tr>";
        }
        echo "</table>";

      
        $stmt->close();
        $mysqli->close();
    }
    ?>
</body>
</html>
