<?php
$numero = $_GET['numero'];
require_once('conexao.php');
$sql = "delete from ALUNO where numero = $numero";
mysqli_query($con, $sql);

?>