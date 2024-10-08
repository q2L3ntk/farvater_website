<?php
    require 'server/Database/Harbour.php';
    require 'app/Models/Guest.php';

    use Server\Database\Harbour;
    use Models\Guest;

    $database = new Harbour;
    $databaseCheck = $database -> databaseConnect();

    if (isset($databaseCheck)) {
        header('Location: /resources/views/main.php'); 
    } else {
        echo "Невозможно подключится к базе данных сайта. Повторите попытку позже. ".mysqli_connect_error();
    } 