<?php

    session_start();

    include('../componentes/header.php');

    require('../database/conexao.php');

    $cod_pessoa = $_GET["cod_pessoa"];

    $sqlPessoa = "SELECT * FROM tbl_pessoa WHERE cod_pessoa = $cod_pessoa";
    
    $resultado = mysqli_query($conexao, $sqlPessoa);
    
    $pessoa = mysqli_fetch_array($resultado);

    ?>


    <div class="container">
        <hr>
        <div class="card">
            <div class="card-header">
                <h2>Edição</h2>
            </div>
            <div class="card-body">
                <form method="post" action="../acoes.php">
                    <input type="hidden" name="acoes" value="editar">
                    <input type="hidden" name="cod_pessoa" value="<?php echo $cod_pessoa?>">
                    <input class="form-control" type="text" placeholder="Digite o nome" name="nome" id="nome" value="<?php echo $pessoa['nome']?>" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o sobrenome" name="sobrenome" id="sobrenome" value="<?php echo $pessoa['sobrenome']?>" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite o email" name="email" id="email" value="<?php echo $pessoa['email']?>" required>
                    <br />
                    <input class="form-control" type="text" placeholder="Digite celular" name="celular" id="celular" value="<?php echo $pessoa['celular']?>" required>
                    <br />
                    <button class="btn btn-success">EDITAR</button>
                </form>
            </div>
        </div>
    </div>


<?php
    include('../componentes/footer.php');
?>