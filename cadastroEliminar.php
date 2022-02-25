<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Eliminar</title>
</head>
<?php
    include 'conexao.php';

    session_start();

    $resultado = "";
    if(mysqli_connect_errno())
    $resultado = "Erro de conexão com o Banco de Dados: " . mysqli_connect_errno() . ". ";

    $cod = $_POST['codprofessor'];

    $sql = "select count(*) as total from professores where codprofessor = '{$cod}'";

    $result = mysqli_query($conexao, $sql);

    $row = mysqli_fetch_assoc($result);

if(!empty($cod) && $row['total'] == 1){
    $result_usuario = "DELETE FROM professores WHERE codprofessor='$cod'";
    $result_usuario2 = "DELETE FROM horarios WHERE codprofessor='$cod'";
    $res = mysqli_query($conexao, $result_usuario);
    $res2 = mysqli_query($conexao, $result_usuario2);
    echo 'Cadastro Deletado com Sucesso!';
}
else{
    echo 'Cadastro não Deletado, Verifique os Dados!';
}
?>
<br><br><br><a href="eliminarProfessor.php" class="pi">Voltar</a>