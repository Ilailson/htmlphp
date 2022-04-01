<?php

header('Acess-Control-Allow-Origin: *');

require_once('config.php');
session_start();


$name=$_POST['name'];
$cpf=$_POST['cpf'];
$address=$_POST['address'];
$tel=$_POST['phone'];
$email=$_POST['email'];

$sql="INSERT INTO clientes (name, cpf, address, phone, email) VALUES ('".$name."', '".$cpf."', '".$address."', '".$tel."', '".$email."')";

//connection esta vindo do arquivo config
$result = $connection->query($sql);



 if(!$result) {
     http_response_code(500);
     echo json_encode(["erro"=>"Erro ao inserir no banco de dados"]);
 }else {
    http_response_code(200);
    echo  json_encode(["success"=>"Salvo no banco de dados"]);
 }

?>