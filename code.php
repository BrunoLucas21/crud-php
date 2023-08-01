<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_cliente']))
{
    $cliente_id = mysqli_real_escape_string($con, $_POST['delete_cliente']);

    $query = "DELETE FROM clientes WHERE id='$cliente_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Cliente excluido com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o cliente";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['atualiza_cliente']))
{
    $cliente_id = mysqli_real_escape_string($con, $_POST['cliente_id']);

    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contato = mysqli_real_escape_string($con, $_POST['contato']);
    $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
    $cidade = mysqli_real_escape_string($con, $_POST['cidade']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    $CEP = mysqli_real_escape_string($con, $_POST['CEP']);
    $descricao = mysqli_real_escape_string($con, $_POST['descricao']);

    $query = "UPDATE clientes SET nome='$nome', 
                                  sobrenome='$sobrenome', 
                                  email='$email', 
                                  contato='$contato',
                                  endereco='$endereco',
                                  cidade='$cidade',
                                  estado='$estado',
                                  CEP='$CEP',
                                  descricao='$descricao' WHERE id='$cliente_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Cliente atualizado com sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Cliente não atualizado";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_cliente']))
{
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contato = mysqli_real_escape_string($con, $_POST['contato']);
    $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
    $cidade = mysqli_real_escape_string($con, $_POST['cidade']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    $CEP = mysqli_real_escape_string($con, $_POST['CEP']);
    $descricao = mysqli_real_escape_string($con, $_POST['descricao']);

    $query = "INSERT INTO clientes (nome,sobrenome,email,contato,endereco,cidade,estado,CEP,descricao) VALUES 
                                   ('$nome','$sobrenome','$email','$contato','$endereco','$cidade','$estado','$CEP','$descricao')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Aluno cadastrado com sucesso!";
        header("Location: usuarioCreate.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Aluno não cadastrado";
        header("Location: usuarioCreate.php");
        exit(0);
    }
}

?>