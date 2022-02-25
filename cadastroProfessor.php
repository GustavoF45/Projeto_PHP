<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Cadastro de Professores</title>
</head>
<?php
    include 'conexao.php';

    session_start();

    $resultado = "";
    if(mysqli_connect_errno())
    $resultado = "Erro de conexão com o Banco de Dados: " . mysqli_connect_errno() . ". ";


    $cod = $_POST['codprofessor'];
    $nome = $_POST['nomeprofessor'];

    if(!empty($cod) && !empty($nome) && is_numeric($cod)){
        $sqlres = mysqli_query($conexao, "INSERT INTO professores(codprofessor, nomeprofessor) VALUES ('$cod', '$nome')");
        if($sqlres == false){
            $resultado = "Erro ao inserir o professor, Código já cadastrado!";
        } else $resultado = "Cadastro do professor realizado!";
    }else{
        $resultado = $resultado . "Não foi possível cadastrar o professor, campos vazios ou errados!";
    }
    $conexao->close();
    ?>
    <body>
    <p>
    <?php
        echo $resultado;
    ?>
    </p>
    <script>parent.document.getElementById("form-cat").reset()</script>
    <br><a href="formCadastroProfessor.php" class="pi">Voltar</a>
</body>
</html>

