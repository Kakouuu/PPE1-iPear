<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="gerer.css">

    <title>Gérer les utilisateurs</title>
</head>
<body>
    <?php
include "nav.php";
?>

<?php
$sql = "SELECT * FROM `utilisateurs` WHERE 1";
$result = mysqli_query($mysqli, $sql);



while ($row = mysqli_fetch_array($result)){
    ?> <br> 

<form action="supprofil.php" method="post" class="salut">
    <div class="all">
    <div class="infor1">
         
            <input type="hidden" id="nomdefamille" name="iduser" value="<?= $row["ID_user"]; ?>"> 
        </div>
        <div class="infor1">
            Nom :
            <input type="text" id="nomdefamille" name="nom" value="<?= $row["Nom"]; ?>"> 
        </div>

        <div class="infor1">
            Prenom :
            <input type="text" id="prenom" name="prenom" value="<?= $row["Prenom"]; ?>"> 
        </div>

        <div class="infor1">
            Mail :
            <input type="text" id="email" name="mail" value="<?= $row["Mail"]; ?>">
        </div>

        <div class="infor1">
            Téléphone :
            <input type="text" id="number" name="phone" value="<?= $row["NumTel"]; ?>">
        </div>

        <div class="infor1">
            Adresse :
            <input type="text" id="adresse" name="adresse" value="<?= $row["Adresse"]; ?>">
        </div>

    
        <!-- <input type="submit" name="suppr" onclick="valid()" value="Supprimer"> -->
        <a href="gerer.php" type="submit" name="suppr" onclick="valid()" value="Supprimer">Supprimer</a>
    </div>
</form> 




<br><?php
echo $row[0];

}   




?>






<?php
include "footer.php";
?>
</body>
</html>