<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = 'localhost';
$db   = 'livres,';
$user = 'root';
$pass = '';
$port = '3306'; 

try {
    // Connexion à la base de données
    $dsn = "mysql:host=$host;port=$port;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];

        $sql = "INSERT INTO livre (titre, auteur) VALUES (:titre, :auteur)";
        $stmt = $pdo->prepare($sql);

        
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':auteur', $auteur);

        if ($stmt->execute()) {
            echo "Le livre a été ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout du livre.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

</body>
</html>