<?php

const HOST = 'localhost';
const USER = 'caua';
const PASSWORD = 'La%jedemetal0203,';
const DATABASE = 'cadastro';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if($conexao === false){

    die(mysqli_connect_error());

}

?>