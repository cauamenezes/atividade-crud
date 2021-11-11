<?php

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = 'bcd127';
const DATABASE = 'atvidade_cadastro_crud';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if($conexao === false){

    die(mysqli_connect_error());

}

?>