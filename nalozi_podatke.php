<?php
require 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "SELECT * FROM uporabniki where id='$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $vnosi = $row['vnosi'];

        echo $vnosi;


    }
}

?>