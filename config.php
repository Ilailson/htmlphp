<?php
header('Acess-Control-Allow-Origin: *');

$host="localhost" ;
$user="root";
$password="";
$dbName="youtube";

$connection = new mysqli($host, $user, $password, $dbName);

if($connection->connect_error) {
die("Connection Failed".$connection->connect_error);
}

?>