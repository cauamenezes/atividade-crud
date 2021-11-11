<?php
session_start();

require('./database/conexao.php');

switch ($_POST['acao']) {
    case 'inserir':
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];

        $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular)
        VALUES ('$nome', '$sobrenome', '$email', '$celular')";

        $resultado = mysqli_query($conexao, $sql);
        
        break;
    
    default:
        # code...
        break;
}