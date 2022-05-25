<?php
session_start();
require_once "db.php";
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

$mail = $_POST["Mail"];
$mdp = $_POST["Mdp"];

$mail = addslashes($mail);
$mdp = addslashes($mdp);

$sql = "SELECT * FROM utilisateurs WHERE Mail = '" . $mail . "'";
$result = $mysqli->query($sql);
$res = mysqli_num_rows($result);


?>

<?php

// Google reCAPTCHA API keys settings
$secretKey = '6LfE_xAgAAAAANiDHnSrytLnaOKv3DH9naRILjF8';

// If the form is submitted
$postData = $statusMsg = '';
$status = 'error';
if (isset($_POST['submit'])) {
    $postData = $_POST;

    // Validate form input fields
    if (!empty($mail) && !empty($mdp)) {

        // Validate reCAPTCHA checkbox
        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

            // Verify the reCAPTCHA API response
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

            // Decode JSON data of API response
            $responseData = json_decode($verifyResponse);

            // If the reCAPTCHA API response is valid
            if ($responseData->success) {
                if ($res == 1) {
                    $row = mysqli_fetch_array($result);
                    $lemdp = $row["Mdp"];
                    if (password_verify($mdp, $lemdp)) {
                        $id = $row["ID_user"];
                        $_SESSION['ID'] = $id;
                        $prenom = $row['Prenom'];
                        header("location: index.php");

                    } else {
                        $_SESSION['error'] = 4;
                        header("location: login.php");

                    }

                } else {
                    $_SESSION['error'] = 5;
                    header("location: login.php");
                }

            } else {
                $_SESSION['error'] = 1;
                header("location: login.php");
            }
        } else {
            $_SESSION['error'] = 2;
            header("location: login.php");
        }
    } else {
        $_SESSION['error'] = 3;
        header("location: login.php");
    }
}

?>


</body>
</html>
