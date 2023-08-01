<?php
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

    <title>Detalhes do cliente</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados do cliente 
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
                                
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <p class="form-control">
                                            <?=$cliente['nome'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Sobrenome</label>
                                        <p class="form-control">
                                            <?=$cliente['sobrenome'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>E-mail</label>
                                        <p class="form-control">
                                            <?=$cliente['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Contato</label>
                                        <p class="form-control">
                                            <?=$cliente['contato'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Endereço</label>
                                        <p class="form-control">
                                            <?=$cliente['endereco'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cidade</label>
                                        <p class="form-control">
                                            <?=$cliente['cidade'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado</label>
                                        <p class="form-control">
                                            <?=$cliente['estado'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>CEP</label>
                                        <p class="form-control">
                                            <?=$cliente['CEP'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Descrição</label>
                                        <p class="form-control">
                                            <?=$cliente['descricao'];?>
                                        </p>
                                    </div>

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