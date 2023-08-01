<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD PHP</title>
</head>

<body>
    <div class="container mt-4">
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do usuário
                            <a href="usuarioCreate.php" class="btn btn-primary float-end">Adicionar usuário</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>E-mail</th>
                                    <th>Contato</th>
                                    <th>Endereço</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>CEP</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM clientes";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $cliente) {
                                ?>
                                        <tr>
                                            <td><?= $cliente['id']; ?></td>
                                            <td><?= $cliente['nome']; ?></td>
                                            <td><?= $cliente['sobrenome']; ?></td>
                                            <td><?= $cliente['email']; ?></td>
                                            <td><?= $cliente['contato']; ?></td>
                                            <td><?= $cliente['endereco']; ?></td>
                                            <td><?= $cliente['cidade']; ?></td>
                                            <td><?= $cliente['estado']; ?></td>
                                            <td><?= $cliente['CEP']; ?></td>
                                            <td><?= $cliente['descricao']; ?></td>
                                            <td>
                                                <a href="cliente-view.php?id=<?= $cliente['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                <a href="cliente_edit.php?id=<?= $cliente['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_cliente" value="<?= $cliente['id']; ?>" class="btn btn-danger btn-sm">Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> Nenhum cliente cadastrado </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>