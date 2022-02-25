<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Remover Cadastro</title>
</head>
<body>
<div class="box_2">
    <form action ="cadastroEliminar.php" method ="POST" >
    <fieldset>
                <legend><b>Deletar Professor</b></legend>
                <br>

                Código do Professor:&nbsp;<input placeholder="Código" name="codprofessor" type="text" id="cod" class="inputUser" /> <br/><br/>

                <a onclick="acao()" class="abrirModal">Gravar</a> <br/>

                <br><br><br><a href="index.php" class="pi">Página Inicial</a><br><br>

</fieldset>
</div>

                <div class="modal">

                    <h3 id="delete">Deseja deletar o professor?</h3>
                    <input type="submit" value="Aceitar" class="aceitar"/>
                    <div onclick="fechar()" class="fechar"><a>Cancelar<a></div>

                </div>

    </form>

    <br/><br/><br/><br/>
	<script src="js/script.js"></script>
    </body>
    </html>