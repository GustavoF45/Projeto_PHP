<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Cadastro de Professores</title>
</head>
<body>
    <div class="box">
        <form action ="cadastroProfessor.php" method ="POST" id="form-cat">
        <fieldset>
                <legend><b>Fórmulário de Professor</b></legend>
                <br>
        <div class ="inputBox">
            <label class="texto">Código do Professor:&nbsp;</label><input placeholder="Código" name="codprofessor" type="text" class="inputUser"/> <br/><br>
</div>
            <div class ="inputBox">
            <label class="texto">Nome do Professor:&nbsp;&nbsp;&nbsp;<label><input placeholder="Nome" name="nomeprofessor" type="text" class="inputUser" /> <br/><br/>
</div>
            <input type="submit" value="Gravar" class="gravar"/>
            </fieldset>
    </form>
    <script>parent.document.getElementById("form-cat").reset()</script>
    <br><br><a href="index.php" class="pi">Página Inicial</a><br><br>
</div>
    </body>
    </html>