<?php
include_once('index.html');
include_once('conexao.php');
$numero = $_POST['n'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];

$sql = "INSERT INTO aluno (sexo, nome, numero) VALUES ('$sexo', '$nome', $numero)";
mysqli_query($con, $sql);

?>