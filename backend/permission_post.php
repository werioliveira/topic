<?php
include 'database.php';
    $inserir = $_POST['create'];
    $atualizar = $_POST['update'];
    $selecionar = $_POST['select'];
    $deletar = $_POST['delete'];


    $sql = "INSERT INTO aula_php.permissao(
        inserir,
        atualizar,
        selecionar,
        deletar
        )
        VALUES ('$inserir','$atualizar','$selecionar','$deletar')";

        if (mysqli_query($conn, $sql)) {
            header('Location: permission_module.php?success=true');
        } else {

            header('Location: permission_module.php?success=false');
        } 

?>