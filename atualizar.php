<?php
$numero = $_POST['n'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];

include_once('conexao.php');

$sql = "update aluno set nome = '$nome', sexo = '$sexo' where numero = $numero ";

mysqli_query($con, $sql);


?>