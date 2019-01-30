<?php

include 'db_connection.php';

if (isset($_POST['id'])) {

    $id = ($_POST['id']);
    $result = ($_POST['result']);

    mysqli_query($conn, "UPDATE uporabniki SET vnosi='$result' WHERE id='$id'");

}
?>



