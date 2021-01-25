<?php 
$dBHost = "localhost";
$dBUser = "root";
$dBPassword = "";
$dBDatabase = "schobz_data_demo";
$port = "3306";

$conn = mysqli_connect($dBHost, $dBUser, $dBPassword, $dBDatabase, $port);

if (!$conn) {
    die("Échec de la connexion:" . mysqli_connect_error());
}