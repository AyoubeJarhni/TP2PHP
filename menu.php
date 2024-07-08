<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="platsIngr.php" method="post">
     Liste des plats de ingredient :<input type="text" name="ingred" >
     <input type="submit" value="ok">
    </form>
    <br> <br>
    <form action="platsNom.php" method="post">
     Liste des plats de nom :<input type="text" name="nom">
     <input type="submit" value="ok">
    </form>
  <br> <br>

  <form action="plats.php" method="post">
  Liste des plats par fourchette de prix, par origine et par origine de plat
  Choisir prix mini:<input type="text" name="prixmin"><BR>
  Prix maxi <INPUT TYPE="text" NAME="zt_prix_maxi"><BR>
     <input type="submit" value="ok">
    </form>
  <br> <br>

  <FORM METHOD=POST ACTION="visu_panier.php">
<INPUT name = bt_valid TYPE="submit" value = "Visualiser le panier">
</FORM>

</body>
</html>