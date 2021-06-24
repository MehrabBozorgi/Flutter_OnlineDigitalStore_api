<?php

include 'ServerData.php';

try {
    $connection = new PDO("mysql:host=localhost;dbname=movieshopp;charset=utf8", "root", "");
} catch (PDOException $e) {

    exit('Not Connected Dude !!!');
}

sleep(1);

$server_data = new ServerData($connection);

if (isset($_GET['action'])) {

    $method_name = $_GET['action'];

    if (method_exists($server_data, $method_name)) {

        $server_data->$method_name($_GET);

    }

}

