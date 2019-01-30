<?php

include 'db_connection.php';

if (isset($_POST['id'])) {

    $id = ($_POST['id']);
    $result = ($_POST['result']);

    $sql = "UPDATE uporabniki SET vrednosti='$result' WHERE id = '$id'";
    mysqli_query($conn, "UPDATE uporabniki SET vrednosti='$result' WHERE id='$id'");

}
?>



