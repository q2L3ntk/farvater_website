<?php
    require 'database/harbour.php';

    $database = new Harbour;
    $databaseCheck = $database -> databaseConnect("localhost", "root", "", "harbour");

    if (isset($databaseCheck)) {
        header('Location: /resources/views/main.php'); 
    } 
    else {
        echo "Невозможно подключится к базе сайта. Повторите попытку позже. ".mysqli_connect_error();
    }