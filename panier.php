<?php
session_start();
include "nav.php";
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
    <link rel="stylesheet" href="panier.css">
</head>
<body>
<div class="title">
    <h1>Votre panier</h1>
</div>
<div class="tab">
    <form action="traitementpanier.php" method="post">
        <table>
            <thead>
            <tr>
                <th>Article</th>
                <th>Description</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tr>
                <td><?php $row['Nom']; ?></td>
                <td><?php echo $Description; ?></td>
                <td><?php echo $Quantite; ?></td>
                <td><?php echo $Prix; ?></td>
            </tr>
        </table>
</div>
<br><br>
<input type="submit" value="Passer la commande"></form>

<footer class="pdp">
    <a href="/">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="/">
        <i class="fa-brands fa-twitter"></i>
    </a>
    <a href="/">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a href="/">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <hr>
    <section class="pdp_info">
        <ul>
            <li class="item2">
                <a href="/" class="item2">A propos</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Nous contacter</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Mentions légales</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Conditions générales de ventes</a>
            </li>
            <li class="item2">
                <a href="/" class="item2">Politique de confidentialité</a>
            </li>
        </ul>
    </section>
    <div class="mention">
        ©2022 YouPoire Tout droits réservés
    </div>
</footer>
</body>
</html>