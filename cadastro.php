<?php
require_once('config.php');
session_start();


$name=$_POST('name');
$cpf=$_POST('cpf');
$address=$_POST('address');
$tel=$_POST('phone');
$email=$_POST('email');

$sql="INSERT INTO clientes (name, cpf, address, phone, email) VALUES ('".$name'', '".$cpf."', '".$address."', '".$phone."', '".$email.'")";

 

 if (!$result) {
     http_response_code(500);
     echo_json_encode(["erro" => "Erro ao inserir no banco de dados"]);
 } else {
    http_response_code(200);
    echo_json_encode(["success" => "Salvo no banco de dados"]);
 }

?>