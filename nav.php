<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE  =edge">
    <link rel="stylesheet" href="styles.css">

    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>

</head>

<nav class="navbar" style="height: 50px !important;">


    <div>
        <a class="logo" href="index.php"><i class="fa-solid fa-seedling"></i> YouPoire</a>
    </div>


    <ul class="navbar_container">
        <li><a href="index.php" class="type">Accueil</a></li>
        <li class="services"><a href="#" title="" class="type">Fruits</a>
            <ul class="sous-menu">
                <li><a href="pagelegume.php?id=Fruits Noyaux" title="" class="type_sous">Fruits à noyaux</a></li>
                <li><a href="pagelegume.php?id=Fruits Pépin" title="" class="type_sous">Fruits à pépins</a></li>
                <li><a href="pagelegume.php?id=Fruits Rouge" title="" class="type_sous">Baies et fruits rouges</a></li>
                <li><a href="pagelegume.php?id=Agrume" title="" class="type_sous">Agrumes</a></li>
                <li><a href="pagelegume.php?id=Fruit à Coque" title="" class="type_sous">Fruits à coque</a></li>
                <li><a href="pagelegume.php?id=Fruit Exotique" title="" class="type_sous">Fruits exotiques</a></li>
            </ul>
        <li class="services"><a href="#" title="" class="type">Légumes</a>
            <ul class="sous-menu">
                <li><a href="pagelegume.php?id=Légume Fleurs" title="" class="type_sous">Légumes fleurs</a></li>
                <li><a href="pagelegume.php?id=Légume Graines" title="" class="type_sous">Graines</a></li>
                <li><a href="pagelegume.php?id=Légume Feuilles" title="" class="type_sous">Légumes feuilles</a></li>
                <li><a href="pagelegume.php?id=Légume Fruit" title="" class="type_sous">Légumes fruits</a></li>
                <li><a href="pagelegume.php?id=Légume Racine" title="" class="type_sous">Racine</a></li>
                <li><a href="pagelegume.php?id=Légume à Bulbe" title="" class="type_sous">Légumes à bulbe</a></li>
                <li><a href="pagelegume.php?id=Légume Tubercules" title="" class="type_sous">Légumes tubercules</a></li>
                <li><a href="pagelegume.php?id=Légume Tige" title="" class="type_sous">Légumes tiges</a></li>
            </ul>
        <li><a href="/" class="type">A propos</a></li>
    </ul>



    <span class="cotedroit">
      <span class="search">
            <input autocomplete="off" type="search" onkeyup="manakey(event)" name="Rechercher"
                   class="searchbar_container" placeholder="Rechercher">
            <span style="cursor: pointer;" onclick='sendad()'><i class="fa-solid fa-magnifying-glass"></i></span>
        </span>

            <a href="/" class="item"><i class="fa-solid fa-basket-shopping"></i></a>

            <a href="login.php" class="log">Connexion <i class="fa-solid fa-arrow-right-to-bracket"></i> </a>

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
    <li class="services2"><a href="#" title="" class="type2">Fruits</a>
        <ul class="sous-menu2">
            <li><a href="#" title="" class="type_sous2">Fruits à noyaux</a></li>
            <li><a href="#" title="" class="type_sous2">Fruits à pépins</a></li>
            <li><a href="#" title="" class="type_sous2">Baies et fruits rouges</a></li>
            <li><a href="#" title="" class="type_sous2">Agrumes</a></li>
            <li><a href="#" title="" class="type_sous2">Fruits à coque</a></li>
            <li><a href="#" title="" class="type_sous2">Fruits exotiques</a></li>
        </ul>
    <li class="services2"><a href="#" title="" class="type2">Légumes</a>
        <ul class="sous-menu2">
            <li><a href="#" title="" class="type_sous2">Légumes fleurs</a></li>
            <li><a href="#" title="" class="type_sous2">Graines</a></li>
            <li><a href="#" title="" class="type_sous2">Légumes feuilles</a></li>
            <li><a href="#" title="" class="type_sous2">Légumes fruits</a></li>
            <li><a href="#" title="" class="type_sous2">Racine</a></li>
            <li><a href="#" title="" class="type_sous2">Légumes à bulbe</a></li>
            <li><a href="#" title="" class="type_sous2">Légumes tubercules</a></li>
            <li><a href="#" title="" class="type_sous2">Légumes tiges</a></li>
        </ul>

</ul>

<script src="app.js"></script>

