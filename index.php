<?php
    use Database\Harbour;
    use Models\Guest;

    session_start();
    $_SESSION['name'] = "guest";
    $sn = $_SESSION['name'];

    $database = new Harbour;
    $databaseCheck = $database -> databaseConnect();

    $guest = new Guest;
    $guestData = $guest -> sessionGuestData($sn);

    if (isset($databaseCheck)) {
        header('Location: /resources/views/main.php'); 
    } 
    else {
        echo "Невозможно подключится к базе данных сайта. Повторите попытку позже. ".mysqli_connect_error();
    }