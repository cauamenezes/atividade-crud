<?php 

session_start();

require('../database/conexao.php');

function realizarLogin($usuario, $senha, $conexao){

    $sql = "SELECT * FROM tbl_administrador
            WHERE usuario = '$usuario' AND senha = '$senha'";

    $resultado = mysqli_query($conexao, $sql);

    $dadosUsuario = mysqli_fetch_array($resultado);

    if(isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"])){

        $_SESSION["usuarioNome"] = $dadosUsuario["usuario"];
        $_SESSION["usuarioSenha"] = $dadosUsuario["senha"];

        // echo $_SESSION["usuarioID"];
        // echo $_SESSION["nome"];

        header("location: listagem/index.php");

    }else{

        header("location: login/index.php");

    }

}

switch ($_POST["acao"]) {
    case 'login':
        
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        // var_dump($_POST);
        realizarLogin($usuario, $senha, $conexao);

        break;

    case 'logout':
        // echo 'FAZENDO LOGOUT!';
        session_unset();
        session_destroy();
        header("location: login/index.php");

        default:
        # code...
        break;
    }