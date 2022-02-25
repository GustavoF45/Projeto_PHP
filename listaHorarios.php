<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<br><a href="index.php" class="pi">Página Inicial</a><br><br><br>
<?php
session_start();
include_once("conexao.php");
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}

			$result_usuarios = "SELECT * FROM horarios INNER JOIN professores WHERE horarios.codprofessor=professores.codprofessor ORDER BY professores.nomeprofessor ASC";
			$resultado_usuarios = mysqli_query($conexao, $result_usuarios);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
				
				$table = "<hr id=linha><br><label class=campo>Nome do Professor: {$row_usuario['nomeprofessor']} </label><br><br>";
                $table .= "<label class=campo>Código do Professor: {$row_usuario['codprofessor']} </label><br>";

				$table .= '<table id="customers">';
				$table .= "<tr>";
				$table .= "<th></th>";
    			$table .= "<th>Matutino</th>";
    			$table .= "<th>Noturno</th>";
				$table .= "</tr>";
				$table .= "<tr>";
				$table .= "<td>Segunda-Feira</td>";
    			$table .= "<td>{$row_usuario['segm']}</td>";
    			$table .= "<td>{$row_usuario['segn']}</td>";
				$table .= "</tr>";
				$table .= "<tr>";
				$table .= "<td>Terça-Feira</td>";
    			$table .= "<td>{$row_usuario['term']}</td>";
    			$table .= "<td>{$row_usuario['tern']}</td>";
				$table .= "</tr>";
				$table .= "<tr>";
				$table .= "<td>Quarta-Feira</td>";
    			$table .= "<td>{$row_usuario['quam']}</td>";
    			$table .= "<td>{$row_usuario['quan']}</td>";
				$table .= "</tr>";
				$table .= "<tr>";
				$table .= "<td>Quinta-Feira</td>";
    			$table .= "<td>{$row_usuario['quim']}</td>";
    			$table .= "<td>{$row_usuario['quin']}</td>";
				$table .= "</tr>";
				$table .= "<tr>";
				$table .= "<td>Sexta-Feira</td>";
    			$table .= "<td>{$row_usuario['sexm']}</td>";
    			$table .= "<td>{$row_usuario['sexn']}</td>";
				$table .= "</tr><br>";

				echo $table;
				echo "</table>";
            }
            ?>
		</body>
		</html>