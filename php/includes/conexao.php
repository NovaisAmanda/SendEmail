<?php

$user='root';
$password='';
$database='teste';
$host='localhost';

$mysqli= new mysqli($host, $user, $password, $database);

if($mysqli->error){
    die("Falha ao conectar ao Banco de Dados");
}
