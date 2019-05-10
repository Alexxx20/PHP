<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Cadastro de Aluno</title>   
</head>
<body>
    <?php include_once('index.html');  ?>
    <form action="salvar.php" method="POST">
        Seu número:<input type="text" name="n" size="2"><br>
        Seu nome:<input type="text" name="nome" id="nome" size="60" ><br>
        Seu sexo: <input type="radio" name="sexo" value="M">M <input type="radio" name="sexo" value="F">F<br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>