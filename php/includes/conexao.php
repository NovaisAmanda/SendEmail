<?php

$user='root';
$password='';
$database='schunk';
$host='localhost';

$mysqli= new mysqli($host, $user, $password, $database);

if($mysqli->error){
    die("Falha ao conectar ao Banco de Dados");
}
