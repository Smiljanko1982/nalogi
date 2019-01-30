<?php
include('db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Nalogi 1 in 2 </title>
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            background-color: grey;
        }

        h1#address1, h1#address2 {
            text-align: center;
            padding: 2%;
        }

        input#save {
            margin: 5px 0 50px 0;
        }


    </style>
</head>
<body>
<div class="container">


    <h1 id="address1">Forma X</h1>
    <div class="col-lg-3 offset-lg-5">
        <?php
        include('formaX.php');

        formX();

        ?>
    </div>
    <h1 id="address2">Padajoči seznam</h1>

    <div class="col-lg-4 offset-lg-4">

        <form class="form-group">
            <select id="seznam" onchange="onSelect(this.value)">
                <option>Izberi vnos</option>
                <?php
                include 'db_connection.php';

                $sql = "SELECT * FROM uporabniki";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];

                        echo "<option value='$id'>$id</option>";
                    }
                }
                ?>


            </select>

        </form>

        <input type="text" id="result"/><br>
        <input type="submit" id="save" value="Post" class="btn btn-success"/>
    </div>
</div>
</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="js/javascript.js"></script>
<script src="js/my-javascript.js"></script>
<script src="js/bootstrap.min.js"></script>
