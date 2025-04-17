<?php

    $db_host = "xxx";
    $db_port = 1234;
    $db_user = "xxx";
    $db_password = "xxx";
    $db_name = "Easyeat";

    try {
        $db = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect" . $e->getMessage();
    }
?>
