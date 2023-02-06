<!--  if ((isset($_SESSION['email']) == false) and (isset($_SESSION['senha']) == false)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    
    header("location: login.php");

  }
  $logado = $_SESSION['email']; 
-->
<?php  require ("conexao.php");?>
<?php  include("./includes/header.php") ?>

<main class="container p-4">

    <?php 
    if (isset($_SESSION['msg'])) { ?>


    <!-- Mensagem Mostrar -->
    <div class="alert alert-<?php echo $_SESSION['tipo_msg'] ?>  alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['msg']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php unset ($_SESSION['tipo_msg'], $_SESSION['msg']); } ?>
    <!-- /Mensagem Mostrar -->

    <div class="row">
        <div class="col-md-4 ">
            <div id="carroselmenu" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carroselmenu" data-slide-to="0" class="active"></li>
                    <li data-target="#carroselmenu" data-slide-to="1"></li>
                    <li data-target="#carroselmenu" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/images.jfif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/Paris 2024.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <a href="libertadores.php">
                            <img src="imagens/libertadores 2023.png" class="d-block w-100" alt="..."></a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carroselmenu" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carroselmenu" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Proximo</span>
                </button>
            </div>
            <table>
                <td>
                    <div class="Libertadores">
                        <a href="libertadores.php">
                            <div class="col-md-8">
                                <div class="card" style="width: 18rem;">
                                    <img src="imagens/libertadores 2023.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                        </a>
                        <h5 class="card-title">Final da Libertadores 2023</h5>
                        <p class="card-text">Vá acompanhar a final da Libertadores e faça a magia do futebol acontecer</p>
                        <a href="#" class="btn btn-primary"></i>Veja os Preços</a>
                        <a href="#" class="btn btn-primary"></i>Favoritar</a>
                    </div>
        </div>

    </div>
    </td>
    <td>
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <img src="imagens/Paris 2024.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paris</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk
                        of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Veja os Preços</a>
                </div>
            </div>
    </td>
    <td>
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <img src="imagens/images.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Copa América</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                        bulk
                        of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Veja os Preços</a>
                    <a href="#" class="btn btn-primary"><i class="bi bi-person-gear"></i></a>
                </div>
            </div>
    </td>
    </table>
    </div>
    </div>
</main>




<?php   include("./includes/footer.php") ?>
<!--</body>
</html> -->


<!-- 

        <body>
            <div class="principal">
                <div class="menu">
                    <a href="index.html">Home</a>
                    <a href="masculino.html">Masculino</a>
                    <a href="feminino.html">Feminino</a>
                    <a href="kids.html">Kids</a>
                    <a href="contato.html">Fale conosco</a>
                </div>
            </div>
            <div class="banner">
                <img src="imagens/exemplo banner -SAT.png">
            </div>
            <div class="col-md-4 ">
                <div class="card card-body">
                    <form action="salvar.php" method="post">
                        <div class="form-group">
                            <input type="text" class="from-control" name="titulo" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <textarea name="descricao" class="from-control" cols="30" rows="10"
                                placeholder="Descrição"></textarea>
                        </div>
                        <input type="submit" value="Salvar" class="btn btn-block btn-success">
                    </form>
                </div>
        </body>

        </html> -->