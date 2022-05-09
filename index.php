<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE  =edge">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>

    <title>YouPoire</title>
</head>
<body>

<?php
include "nav.php";
?>



<div class="slideshow-container">


    <div class="box" >
        <button onclick="backward()" class="click"><</button>
        <img src="img/legover.jpg" style="height:500px; width: 100%;" class="centrer">
        
        
        <div class="slog">Découvrez notre selection de légumes frais!</div>
        <button class="test">Voir les produits</button>
        <button onclick="forward()" class="click2">></button>
    </div>

    <div class="box2">
        <button onclick="backward()" class="click"><</button>
        <img src="img/bannière.jpg" style="height:500px; width: 100%;" class="centrer">

        <div class="slog2"> A consommer sans moodération :)</div>
        <button onclick="forward()" class="click2">></button>
    </div>


    <div class="box3">
        <button onclick="backward()" class="click"><</button>
        <img src="img/fruitover1.jpg" style="height:500px; width: 100%;" class="centrer">

        <div class="slog">Découvrez notre selection de fruits frais !</div>
        <button class="test">Voir les produits</button>
        <button onclick="forward()" class="click2">></button>
    </div>


</div>
<br>


<script>
    function forward() {
        let display = document.querySelector('.box').style.display
        let display2 = document.querySelector('.box2').style.display
        let display3 = document.querySelector('.box3').style.display

        if (display2 == 'none' || display2 == '') {
            document.querySelector(".box2").style.display = "flex";
            document.querySelector(".box").style.display = "none";
        } else {
            document.querySelector(".box3").style.display = "flex";
            document.querySelector(".box").style.display = "none";
            document.querySelector(".box2").style.display = "none";

        }

        if (display3 == 'flex') {
            document.querySelector('.box3').style.display = 'none';
            document.querySelector('.box').style.display = 'flex';
            document.querySelector(".box2").style.display = "none";
        }
    }

    function backward() {

        let display = document.querySelector('.box').style.display
        let display2 = document.querySelector('.box2').style.display
        let display3 = document.querySelector('.box3').style.display

        if (display == 'flex') {
            document.querySelector('.box3').style.display = 'flex';
            document.querySelector('.box').style.display = 'none';
            document.querySelector(".box2").style.display = "none";
        }
        if (display3 == 'flex') {
            document.querySelector('.box3').style.display = 'none';
            document.querySelector('.box').style.display = 'none';
            document.querySelector(".box2").style.display = "flex";
        }
        if (display2 == 'flex') {
            document.querySelector(".box3").style.display = "none";
            document.querySelector(".box").style.display = "flex";
            document.querySelector(".box2").style.display = "none";
        }
    }

    setInterval(function () {
        forward();
    }, 5000);
</script>


<hr>


<!--MAIN CONTAIN-->


<br><br><br><br>

<section class="fruitleg">


    <!--Section fruits-->

    <article>

        <div class="parent">
            <div class="gauche"></div>
            <div class="droite"> Les fruits de saisons
                <hr>
                <span class="droite_sous"> Découvrez notre selection de fruits frais de la saison !</span>
            </div>
        </div>


    </article>
    <br><br><br><br>
    <article>

        <div class="parent2">
            <div class="gauche2"> Les légumes de saisons
                <hr>
                <span class="gauche2_sous"> Découvrez notre selection de fruits frais de la saison !</span></div>
            <div class="droite2"></div>
        </div>


    </article>


    <br><br><br><br>


    </div>


</section>


<?php
include "footer.php";
?>


</body>
</html>