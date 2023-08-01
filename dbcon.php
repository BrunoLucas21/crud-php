<?php
    $con = mysqli_connect("localhost", "root", "", "crud-php-bootstrap");

    if (!$con) {
        die('Conexão falhou!' . mysqli_connect_error());
    }
?>