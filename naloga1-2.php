<?php
include('db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta Nalogi 1 in 2
    </title>
  <!--  <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
        .container {
            background-color: grey;
        }

        h1#address1, h1#address2 {
            text-align: center;
            padding: 2%;
        }

        input#save {
            margin-top: 5px;
        }


    </style>
</head>
<body>
<div class="container">


    <h1 id="address1">Forma X</h1>
    <div class="col-lg-2 offset-lg-5">
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/javascript.js"></script>
<script src="js/my-javascript.js"></script>
<script type="text/javascript">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

// opravi se GET metoda, ki naredi klic v bazo, s tem pridobimo podatek(id) in ga  shranimo v padajoči seznam


</script>