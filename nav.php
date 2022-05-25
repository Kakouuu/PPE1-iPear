<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE  =edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="footer.css">

    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="store.js" ></script>
</head>
<?php

session_start();
require_once "db.php";

if (isset($_SESSION['ID'])) {

    $sqla = 'SELECT * FROM `utilisateurs` where `ID_user`=' . $_SESSION['ID'];
    $resulta = mysqli_query($mysqli, $sqla);

    while (($row = mysqli_fetch_array($resulta))) {

        $prenom = $row["Prenom"];
    }


?>




<div class="welcome">Bonjour <?= $prenom; ?> !</div>



<?php
}


?>



<nav class="navbar" style="height: 50px !important;">


    <div>
        <a class="logo" href="index.php"><i class="fa-solid fa-seedling"></i> Pears</a>
    </div>


    <ul class="navbar_container">
        <li><a href="index.php" class="type">Accueil</a></li>
        <li class="services"><a href="#" title="" class="type">Ordinateur</a>
            <ul class="sous-menu">
                <li><a href="pagelegume.php?id=Portable" title="" class="type_sous">PC Portable</a></li>
                <li><a href="pagelegume.php?id=Portable" title="" class="type_sous">PC Fixe</a></li>
            </ul>
        <li class="services"><a href="#" title="" class="type">Telephone</a>
            <ul class="sous-menu">
                <li><a href="pagelegume.php?id=Légume Fleurs" title="" class="type_sous">Samsung</a></li>
                <li><a href="pagelegume.php?id=Légume Fleurs" title="" class="type_sous">Iphone</a></li>
                <li><a href="pagelegume.php?id=Légume Fleurs" title="" class="type_sous">Huawei</a></li>
            </ul>
        <li><a href="index.php" class="type">A propos</a></li>
    </ul>


    <span class="cotedroit">
      <span class="search">
            <input autocomplete="off" type="search" onkeyup="manakey(event)" oninput="salut()" name="Rechercher"
                   class="searchbar_container" placeholder="Rechercher">
            <span style="cursor: pointer;" onclick='sendad()'><i class="fa-solid fa-magnifying-glass"></i></span>
        </span>


<div class="search_prod"></div>







            <a href="test.php" class="item"><i class="fa-solid fa-basket-shopping"></i></a>

            <a href="login.php" class="log" id="co">Connexion <i class="fa-solid fa-arrow-right-to-bracket"></i> </a>
           

            <li class="user" id="profil"><a href="#" title="" class="type"><i class="fa-solid fa-user" name="deconnecte"></i></a>
            <ul class="user_sous">
                <li><a href="#" title="" class="user_container">Profil</a></li>

                <li><a class="user_container" href="suppression.php">Deconnexion</a></li>
    


    </span>

  



    <script>
        function sendad() {
            var mot = document.getElementsByName('Rechercher')[0].value;
            console.log(mot)
            window.location = 'traitement.php?Rechercher=' + mot;
        }

        function manakey(e) {
            if (e.keyCode == 13) {
                sendad();
            }
            var clientHeight = document.querySelector('.search_prod').clientHeight;
            console.log(clientHeight);

            if (clientHeight < 356) {
                document.querySelector(".plus").style.display = "none";
            }
        }

        function salut() {
            let display = document.querySelector('.search_prod').style.display = 'block';
            var mot = document.getElementsByName('Rechercher')[0].value;
            console.log(mot)

            if(mot != "" ){
                $.post("recherche.php", {mot : mot}, function(data){
                    $('.search_prod').html(data);
                });
            }else
                document.querySelector(".search_prod").style.display ="none";
        }


        function remouve(e) {
            if (e.keyCode == 8) {
                let display = document.querySelector('.search_prod').style.display = 'none';
            }
        }




    </script>



    <div class="navbar__toggle" onclick="openOrClose()" id="mobile-menu">
        <div class="tirait">
            <span class="tirait_sous"></span>
            <span class="tirait_sous"></span>
            <span class="tirait_sous"></span>
        </div>
    </div>
</nav>
<ul class="navbar_container2">
    <li class="services2"><a href="#" title="" class="type2">Ordinateur</a>
        <ul class="sous-menu2">
            <li><a href="pagelegume.php?id=Portable" title="" class="type_sous2">PC Portable</a></li>
            <li><a href="pagelegume.php?id=Portable" title="" class="type_sous2">PC Fixe</a></li>
        </ul>
    <li class="services2"><a href="#" title="" class="type2">Telephone</a>
        <ul class="sous-menu2">
            <li><a href="pagelegume.php?id=Légume Fleurs" title="" class="type_sous2">Samsung</a></li>
            <li><a href="pagelegume.php?id=Légume Fleurs" title="" class="type_sous2">Iphone</a></li>
            <li><a href="pagelegume.php?id=Légume Fleurs" title="" class="type_sous2">Huawei</a></li>
        </ul>
</ul>

<?php 
if(isset($_SESSION['ID'])){
    ?>
    <script>
    document.getElementById('co').style.display = 'none';
    document.getElementById('profil').style.display = 'block';
    </script>

<?php
}



  

?>


<form method="post" action="suppression.php" id="form">
       <input type="hidden" id="cache" name="cache"/>
    </form>
<script src="app.js"></script>

