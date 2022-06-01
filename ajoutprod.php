<?php
session_start();

$sql = "insert into utilisateurs (Nom, Prenom, Mail, NumTel, Mdp, Adresse) " .
        " values('" . $Nom . "', '" .  $Prenom . "','" .  $Mail  . "','" .  $NumTel . "','" . $hashed_password . "','" . $Adresse . "')";
        mysqli_query($mysqli, $sql);
        header("location: ajouterprod.php");