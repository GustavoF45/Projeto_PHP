<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Cadastro de Horários</title>
</head>
<?php
    include 'conexao.php';

    session_start();

    $resultado = "";
    if(mysqli_connect_errno())
    $resultado = "Erro de conexão com o Banco de Dados: " . mysqli_connect_errno() . ". ";

    $cod = $_POST['codprofessor'];
    $segm = $_POST['segm'];
    $segn = $_POST['segn'];
    $term = $_POST['term'];
    $tern = $_POST['tern'];
    $quam = $_POST['quam'];
    $quan = $_POST['quan'];
    $quim = $_POST['quim'];
    $quin = $_POST['quin'];
    $sexm = $_POST['sexm'];
    $sexn = $_POST['sexn'];

    $sql = "select count(*) as total from professores where codprofessor = '{$cod}'";

    $sql2 = "select count(*) as total from horarios where codprofessor = '{$cod}'";

    $result = mysqli_query($conexao, $sql);

    $result2 = mysqli_query($conexao, $sql2);

    $row = mysqli_fetch_assoc($result);

    $row2 = mysqli_fetch_assoc($result2);

    if($row['total'] == 1 && $row2['total'] == 0 && (!empty($segm) || !empty($segn) || !empty($term) || !empty($tern) || !empty($quam) || !empty($quan) || !empty($quim) || !empty($quin) || !empty($sexm) || !empty($sexn))){
        $sql = "INSERT INTO horarios VALUES ('$cod', '$segm', '$segn', '$term', '$tern', '$quam', '$quan', '$quim', '$quin', '$sexm', '$sexn')";
        $res = mysqli_query($conexao, $sql);
        echo 'Cadastro Realizado com Sucesso!';
        }
        else if($row['total'] == 1 && $row2['total'] == 1 && (!empty($segm) || !empty($segn) || !empty($term) || !empty($tern) || !empty($quam) || !empty($quan) || !empty($quim) || !empty($quin) || !empty($sexm) || !empty($sexn))){
            $sql2 = "UPDATE horarios SET segm='$segm', segn='$segn', term='$term', tern='$tern', quam='$quam', quan='$quan', quim='$quim', quin='$quin', sexm='$sexm', sexn='$sexn' WHERE codprofessor = $cod";
            $res2 = mysqli_query($conexao, $sql2);
            echo 'Cadastro Atualizado com Sucesso!';
        }
        else{
            echo 'Cadastro não Realizado, Verifique os Dados!';
        }
    ?>
    <body>
        <p></p>
        <script>parent.document.getElementById("form-cat").reset()</script>
    <br><a href="formCadastroHorarios.php" class="pi">Voltar</a>
    </body>
    </html>
