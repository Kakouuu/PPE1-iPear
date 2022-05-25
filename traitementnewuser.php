<?php
require_once "db.php";
include_once ('phpmailer.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Traitement login</title>
    <meta charset="utf8"/>
    <link rel="stylesheet" href="longin.css">
</head>
<body>

<?php
$Prenom = addslashes($_POST["prenom"]);
$Nom = addslashes($_POST["nom"]);
$Mail = addslashes($_POST["mail"]);
$NumTel = addslashes($_POST["tel"]);
$Adresse = addslashes($_POST["poste"]);
$Mdp = addslashes($_POST["mdp"]);
$hashed_password = password_hash($Mdp, PASSWORD_DEFAULT);

?>

<?php

// Google reCAPTCHA API keys settings
$secretKey = '6LfE_xAgAAAAANiDHnSrytLnaOKv3DH9naRILjF8';

// If the form is submitted
$postData = $statusMsg = '';
if (isset($_POST['submit'])) {
    $postData = $_POST;

    // Validate form input fields
    if (!empty($Prenom) && !empty($Nom) && !empty($Mail) && !empty($NumTel) && !empty($Adresse) && !empty($Mdp) && !empty($hashed_password)) {

        // Validate reCAPTCHA checkbox
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

            // Verify the reCAPTCHA API response
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

            // Decode JSON data of API response
            $responseData = json_decode($verifyResponse);

            // If the reCAPTCHA API response is valid
            if ($responseData->success) {
                $_SESSION['errore'] = 4;

                $sql = "insert into utilisateurs (Nom, Prenom, Mail, NumTel, Mdp, Adresse) " .
                    " values('" . $Nom . "', '" .  $Prenom . "','" .  $Mail  . "','" .  $NumTel . "','" . $hashed_password . "','" . $Adresse . "')";
                mysqli_query($mysqli, $sql);

                $sujet = "Activation de votre compte";
                $message = "Bonjour ".$Prenom."<br>";
                $message.="Voici le lien pour activer votre compte: <a href='https://www.youtube.com/'>Cliquer ici</a>";

                sendmail($sujet,$message,'youpoire75005@gmail.com');
                header("location: login.php");


            } else {
                $_SESSION['errore'] = 1;
                header("location: newuser.php");
            }
        } else {
            $_SESSION['errore'] = 2;
            header("location: newuser.php");
        }
    } else {
        $_SESSION['errore'] = 3;
        header("location: newuser.php");
    }
}


?>


</body>
</html>
