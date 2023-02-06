<?php 
include("./includes/header.php");
require ('conexao.php');
 ?>




<div class="container">
    <div class="col-7">
        <div class="card-border">
            <form class="card">
                <div class="mb-3">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Insira seu Nome">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input type="text" name="email" class="form-control" placeholder="Insira seu Email">
                </div>
                <div class="form-group">
                    <textarea name="descricao" class="from-control" cols="30" rows="10"
                        placeholder="Descrição"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("./includes/footer.php") ?>