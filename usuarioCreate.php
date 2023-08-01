<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Criar usuário</title>
</head>
<body>
    <div class="container mt-5">
        <?php include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h4>Adicionar usuário
                        <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="mb-3">
                            <label for="nome">Nome </label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="sobrenome">Sobrenome </label>
                            <input type="text" name="sobrenome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">E-mail </label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="contato">Contato </label>
                            <input type="tel" name="contato" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="endereco">Endereço </label>
                            <input type="text" name="endereco" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="cidade">Cidade </label>
                            <input type="text" name="cidade" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="estado">Estado </label>
                            <input type="text" name="estado" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="CEP">CEP </label>
                            <input type="number" name="CEP" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="descricao">Descrição </label>
                            <input type="text" name="descricao" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_cliente" class="btn btn-primary">SALVAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>