<?php
require_once "db.php";


$sql = "CALL `getUsers`();";
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo $row["Nom"];


}
?>