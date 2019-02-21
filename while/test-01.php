<?php

$_GET['numero'];

while ($_GET) {

    if($_GET === 10){

        echo "DEZ!!!";
        $_GET= false;

    }

    echo $_GET . " ";
}


?>