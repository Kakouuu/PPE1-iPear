<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admininistrateur</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<?php

session_start();

include "nav.php";

if ($_SESSION['ID'] != 6) {?>
    <script>window.location.replace("index.php");</script> <?php
}


?>


<h1>Page administrateur</h1>
<hr>



<div class="all">
    <a href="/" class="prout"><div>Ajouter un produit</div></a>
    <a href="/" class="prout"><div>Modifier un produit</div></a>
    <a href="gerer.php" class="prout"><div>Gérer les utilisateurs</div></a>

    
</div>


<?php
include "footer.php";
?>

</body>
</html>