<?php
    require 'database/Harbour.php';
    require 'app/Models/Guest.php';

    $database = new Harbour;
    $databaseCheck = $database -> databaseConnect("localhost", "root", "", "harbour");

    $guest = new Guest;
    $guest -> newComer = true;
    $guest -> sessionNumber = -1;
    $guestData = $guest -> sessionGuestData();

    if (isset($databaseCheck)) {
        header('Location: /resources/views/main.php'); 
    } 
    else {
        echo "Невозможно подключится к базе данных сайта. Повторите попытку позже. ".mysqli_connect_error();
    }