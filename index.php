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

    <div class="mySlides fade">
        <img src="img/fl.png" style="height:300px" class="centrer">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <img src="img/poire.jpg" style="height:300px" class="centrer">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <img src="img/poire.png" style="height:300px" class="centrer">
        <div class="text"></div>
    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>

    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }
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