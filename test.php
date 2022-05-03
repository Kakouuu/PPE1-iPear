<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Panier</title>
</head>
<body>

<?php
include('nav.php')
?>
<br> <br><br>
<div style="margin-left : 100px; margin-right : 100px;">

<h1 style="border-bottom : 1px solid black; padding-bottom:8px;">Panier</h1>
<br>

    <div class="all">
        <div class="header">

            <div class="nom">Nom du produit</div>

            <div class="header_sous">   
                <div>Quantité</div>
                <div>Prix unitaire</div>
                <div>Total</div>
                <div>Supprimer le pannier</div>
            </div>
        </div>
<hr>

        <div class="produits">
            <div style="display : flex;align-items : center;">
            <div class="imgprod"></div> 
            Pomme de terre charlotte</div>

            <div class="header_sous">
                <div><input id="number" type="number" value="1" min="1"></div>
                <div class="PU">12€</div>
                <div class="toto">12€</div>
                <div class="trash">Poubelle</div>
                 
            </div>

        </div>

        
    </div>

        <div class="total">
            Prix total : 200,50 €
        </div>
<br>
        <div class="bas">
            <a href="index.php"><div class="retour">Retour à l'accueil</div></a>
                <div class="commande">Paiement</div>
        </div>

</div>


</body>
</html>