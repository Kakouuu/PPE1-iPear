<?php
require_once "db.php";
session_start();
?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE  =edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pageleg.css">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <title> Ordinateur </title>

</head>
<body>


<?php
include "nav.php";
?>



<div class="frleg">
    <?php

    $sql = "SELECT * FROM `ordinateur` WHERE Type = '" . $_GET['id'] . "'";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) == 0) {
    ?>
        <div class="empty_leg"> 
            <div><h1>Pas d'articles disponibles</h1></div>    
            <!--<div><img src="" class="empty_basket" alt="empty"></div> --> 
            <div><a href="index.php"><button class="btn_empty_leg">Retourner à l'accueil</button></a></div>            
        </div>
        
    <?php
    }else{
        

    while ($row = mysqli_fetch_array($result)) {
        $id = $row["ID_PC"];
        ?>

        <div class="frlegs">

            <a href="productdetail.php?id=<?php echo $id ?>"><img class="frleg_img" src="<?= $row["Image"]; ?>"></a>
            <div class="frleg_name">
                <a href="productdetail.php?id=<?php echo $id ?>"><h1 class="pc_name"><?php echo $row['Nom']; ?></h1></a>
                <p class="frleg_provenance">
                    Provenance : <?= $row["Expediteur"]; ?></p><br/>
                <p class="frleg_achat">
                    Prix: <?= $row["Prix"]; ?> €
                    <br>
                    <br><br>
                </p>


            </div>

        </div>
        <?php
    }
}
    ?>
</div>

<?php
include "footer.php";
?>

</body>
</html>
