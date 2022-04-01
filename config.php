<?php
// header('Acess-Control-Allow-Origin: *');

$host="localhost" ;
$user="root";
$password="";
$dbName="youtube";

// $connection = new mysqli($host, $user, $password, $dbName);

$connection = mysqli_connect($host, $user, $password, $dbName);


?>