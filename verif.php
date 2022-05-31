<?php
require_once "db.php";
session_start();

if (isset($_GET['id']) and !empty($_GET['id']) and isset($_GET['cle']) and !empty($_GET['cle'])){

    $getid = $_GET['id'];
    $getcle = $_GET['cle'];

    $sql = "SELECT * FROM `utilisateurs` WHERE ID_user = '" . $getid . "' AND Token = '" . $getcle . "'";
    $recupUser = mysqli_query($mysqli, $sql);
    $res = mysqli_num_rows($recupUser);
    $row = mysqli_fetch_array($recupUser);


    if ($res > 0){
        $userInfo = $row['TokenStatus'];
        if ($userInfo != 1 ) {
            $updateToken = "UPDATE `utilisateurs` SET TokenStatus = 1 WHERE ID_user = '".$getid."'";
            mysqli_query($mysqli, $updateToken);
            $_SESSION['cle'] = $getcle;
            header("Location: login.php");
        }else{
            $_SESSION['cle'] = $getcle;
            header("Location: login.php");
        }
    }else{
        echo "Votre clé ou identifiant est incorrect";
    }

}else{
    echo "Auncun utilisateurs trouvé";

}
?>