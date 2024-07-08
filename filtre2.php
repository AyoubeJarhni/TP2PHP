<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtre Livres par Auteur</title>
</head>
<body>
    <h1>Filtrer les Livres par Auteur</h1>
    <form action="filtre2.php" method="post">
        <label for="auteur">Partie du Nom de l'Auteur :</label>
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

        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $auteur = $_POST['auteur'];

            $sql = "SELECT * FROM livre WHERE auteur LIKE ?";
            $stmt = $pdo->prepare($sql);

            $param = "%" . $auteur . "%";
            $stmt->execute([$param]);

            echo "<h2>Résultats de la recherche pour l'auteur contenant '$auteur'</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Titre</th><th>Auteur</th></tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['titre'] . "</td><td>" . $row['auteur'] . "</td></tr>";
            }
            echo "</table>";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } 
    ?>
</body>
</html>
