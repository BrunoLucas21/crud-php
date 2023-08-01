<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Editando Clientes</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar cliente
                            <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $cliente_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM clientes WHERE id='$cliente_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $cliente = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="cliente_id" value="<?= $cliente['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <input type="text" name="name" value="<?=$cliente['nome'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Sobrenome</label>
                                        <input type="email" name="sobrenome" value="<?=$cliente['sobrenome'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>E-mail</label>
                                        <input type="text" name="email" value="<?=$cliente['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Contato</label>
                                        <input type="tel" name="contato" value="<?=$cliente['contato'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Endereço</label>
                                        <input type="text" name="endereco" value="<?=$cliente['endereco'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade" value="<?=$cliente['cidade'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado</label>
                                        <input type="text" name="estado" value="<?=$cliente['estado'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CEP</label>
                                        <input type="number" name="CEP" value="<?=$cliente['CEP'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Descrição</label>
                                        <input type="text" name="descricao" value="<?=$cliente['descricao'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="atualiza_cliente" class="btn btn-primary">
                                            Atualizar Cliente
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>