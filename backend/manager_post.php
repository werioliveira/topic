<?php
    include 'database.php';

    $userId = $_POST['inputUser'];
    $moduleId = $_POST['inputModule'];
    $permissionId = $_POST['inputPermission'];



    $sql = "INSERT INTO aula_php.usuario_acesso_modulo(
        usuario_id,
        modulo_id,
        permissao_id
        )
        VALUES ('$userId','$moduleId','$permissionId')";

        if (mysqli_query($conn, $sql)) {
            header('Location: manager_permission.php?success=true');
        } else {
            header('Location: manager_permission.php?success=false');
        } 



?>