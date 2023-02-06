<?php 
require('conexao.php');
include('./includes/header.php');


if (isset($_POST['salvar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $aniversario = $_POST['aniversario'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO `admin`(`nome`, `email`, `aniversario`, `senha`) VALUES ('$nome','$email','$aniversario','$senha')";

    $result = mysqli_query($conexao, $query);

    header("location: index.php");
}
?>
<link href="CSS/login.css" rel="stylesheet">

<div class="container">
    <div class="card-header">Cadastro</div>
<form class="cadastro" action="cadastro.php" method="post" >
    <div class="form-group">
        <input type="text" class="form-control" name="nome" placeholder="Nome">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="date" class="form-control" name="aniversario" placeholder="Aniversário">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="senha" placeholder="Senha">
    </div>
    <input type="submit" value="Salvar" name="salvar" class="btn btn-info">
</form>
</div>

<?php include("./includes/footer.php") ?>
 
