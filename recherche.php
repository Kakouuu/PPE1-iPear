<?php
session_start();
require_once("db.php");
$recher = $_POST['mot'];

$sql = "select * from ordinateur where  Nom like'" . $recher . "%'";
$result = mysqli_query($mysqli, $sql);

$count = 0;

while (($row = mysqli_fetch_array($result)) && $count < 4){

    $id = $row["ID_PC"];
    $img = $row["Image"];
    $nom = $row["Nom"];
    $price = $row['Prix'];
    $count += 1;
    ?>
<div style="border-bottom: 1px lightgray solid;  display: flex; position: relative; padding: 8px; height: 120px;">
        <div style ="padding: 10px;">
            <a href="productdetail.php?id=<?php echo $id?>"><?php echo "<img style='height: 50px; width: 50px ' src='$img'/>"; ?>
        </div>

            <div style="padding: 15px; letter-spacing: 3px;">
                <div>
                    <?php echo $nom ?>
                </div>
                <div>
                    <?php echo $price ?> €
                </div>
            </div>
    </a>

</div>
    <br>

    <?php

}

?>

<div onclick="sendad()" class="plus">Voir plus</div>



