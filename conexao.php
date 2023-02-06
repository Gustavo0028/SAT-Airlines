<?php 

if (!isset($_SESSION)) {
    session_start();
}

//variveis para a conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "airlines";

//fazendo a conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

//testando se houve algum erro com a conexão
if (!$conexao) {
    echo "Erro ao conectar com o banco de dados <br>" . mysqli_error($conexao);
}

?>