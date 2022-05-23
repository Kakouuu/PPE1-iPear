<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Traitement login</title>
    <meta charset="utf8"/>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcQbxAgAAAAAFfNzP4EERKUigaw30Cbgi_FcPcI"></script>
    </script>
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
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfE_xAgAAAAANiDHnSrytLnaOKv3DH9naRILjF8',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
            $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $resulte = curl_exec($ch);
        curl_close($ch);

        return json_decode($resulte, true);
    }
    var_dump($_POST['g-recaptcha-response']);
    // Call the function post_captcha
    $rese = post_captcha($_POST['g-recaptcha-response']);


    if (!isset($rese)) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        echo "salut";
//        if ($res == 1)
//        {
//            $row = mysqli_fetch_array($result);
//            $lemdp = $row["Mdp"];
//            if (password_verify($mdp, $lemdp)) {
//                $id = $row["ID_user"];
//                $_SESSION['ID'] = $id;
//                $prenom = $row['Prenom'];
//                header("location: index.php");
//
//
//            } else {
//                echo "Le mot de passe est incorrect";
//
//            }
//
//        }
//        else
//            echo "L'email ou le mot de passe est incorrect";
    }
}  ?>




</body>
</html>
