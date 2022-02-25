<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Cadastro de Horários</title>
</head>
<?php
include 'conexao.php';
?>
<body>
    <div class = "box">
    <form action ="cadastroHorarios.php" method ="POST" >
            <fieldset>
                <legend><b>Fórmulário de Horários</b></legend>
                <br>

            Código do Professor:&nbsp;<input placeholder="Código" name="codprofessor" type="text" id="cod" class="inputUser" /> <br/><br/><br><br>

            <div class ="inputBox">
            <label>Segunda-Feira:</label>
            <input placeholder="Matutino" name="segm" type="text" class="inputUser"/>
            <input placeholder="Noturno" name="segn" type="text" class="inputUser"/> <br/><br/>
            </div>
            
            <div class ="inputBox">
            <label>Terça-Feira:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input placeholder="Matutino" name="term" type="text" class="inputUser"/>
            <input placeholder="Noturno" name="tern" type="text" class="inputUser" /> <br/><br/>
            </div>

            <div class ="inputBox">
            <label>Quarta-Feira:</label>&nbsp;&nbsp;&nbsp;
            <input placeholder="Matutino" name="quam" type="text" class="inputUser" />
            <input placeholder="Noturno" name="quan" type="text" class="inputUser" /> <br/><br/>
            </div>

            <div class ="inputBox">
            <label>Quinta-Feira:</label>&nbsp;&nbsp;&nbsp;
            <input placeholder="Matutino" name="quim" type="text" class="inputUser" />
            <input placeholder="Noturno" name="quin" type="text" class="inputUser" /> <br/><br/>
            </div>

            <div class ="inputBox">
            <label>Sexta-Feira:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input placeholder="Matutino" name="sexm" type="text" class="inputUser" />
            <input placeholder="Noturno" name="sexn" type="text" class="inputUser" /> <br/><br/>
            </div>

            <input type="submit" value="Gravar" class="gravar"/>
        </fieldset>
    </form>
    <br><br><a href="index.php" class="pi">Página Inicial</a><br><br>
    </div>
    </body>
    </html>