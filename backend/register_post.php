<?php

include 'database.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $last_acess = date('Y-m-d H:i:s');
    $created_at = date('Y-m-d H:i:s');
    $state =  true;
    $password_master = $_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);
    $password_master =  password_hash($password_master, PASSWORD_DEFAULT);

    $sql = "INSERT INTO aula_php.usuario(
        login,
        senha,
        ultimo_acesso,
        criacao,
        email,
        status,
        senha_assinatura
        )
        VALUES ('$name','$password','$last_acess','$created_at','$email','$state','$password_master')";

        if (mysqli_query($conn, $sql)) {
            header('Location: login.php?success=true');
        } else {
            header('Location: register.php?success=false');
        }
?>