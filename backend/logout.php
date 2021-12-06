<?php

    session_start();
    include 'database.php';
    $last_acess = date('Y-m-d H:i:s');
    $id = $_SESSION['id'];
    $sql = "UPDATE aula_php.usuario SET ultimo_acesso = '$last_acess' WHERE id = '$id'";  
    mysqli_query($conn, $sql);

    session_destroy();
    header("Location: login.php");


?>