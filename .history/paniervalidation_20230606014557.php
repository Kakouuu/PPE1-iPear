<?php

$mail = $_POST["Mail"];
$mdp = $_POST["Mdp"];

$mail = addslashes($mail);
$mdp = addslashes($mdp);

$sql = "SELECT * FROM utilisateurs WHERE Mail = '" . $mail . "'";
$result = $mysqli->query($sql);
$res = mysqli_num_rows($result);


?>