<?php 
include("./includes/header.php");
require ('conexao.php');

if (isset($_POST['login'])) {

    $email=$_POST['email']; 
    $senha=$_POST['senha'];

    $query = "SELECT `email`, `senha` FROM `admin` WHERE `email`='$email' and `senha`='$senha'";

    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) >= 1) {
        
        $_SESSION['msg'] = 'Bem vindo!!!';
        $_SESSION['tipo_msg'] = 'success';

        header("location: index.php");
    }else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        $_SESSION['msg'] = 'Usuario ou senha invalido!!!';
        $_SESSION['tipo_msg'] = 'danger';

        header("location: login.php");

    }

}
?>
<link href="CSS/login.css" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">LOGIN</div>
                <div class="body">
                    <form action="login.php" method="post">
                        <div class="mb-5">
                            <label for="" class="form-label">Endereço de e-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="email@gmail.com">
                        </div>
                        <div class="mb-5">
                            <label for="" class="form-label">Senha</label>
                            <input type="text" name="senha" class="form-control" placeholder="*********">
                        </div>
                        <div class="col-2">
                            <input class="btn btn-block btn-success" type="submit" value="Login" name="login">
                        </div>
                        <div>
                            <a href="cadastro.php" data-toggle="modal" data-target="#modalCadastro">Cadastre-se</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include("./includes/footer.php") ?>