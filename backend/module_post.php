<?php
include 'database.php';
    $name = $_POST['name'];
    $description = $_POST['description'];
    $created_at = date('Y-m-d H:i:s');


    $sql = "INSERT INTO aula_php.modulo(
        titulo,
        descricao,
        data_criacao
        )
        VALUES ('$name','$description','$created_at')";

        if (mysqli_query($conn, $sql)) {
            header('Location: register_module.php?success=true');
        } else {
            header('Location: register_module.php?success=false');
        } 

?>