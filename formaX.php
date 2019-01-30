<?php

function formX()
{


    for ($i = 1; $i <= 11; $i++) {
        for ($j = 1; $j <= 11; $j++) {
            if ($i == $j) {
                echo "*";
            } else if ($i + $j == 12) {

                echo "*";
            } else {
                echo " _ ";
            }

        }

        echo "<br/>";
    }


}



?>