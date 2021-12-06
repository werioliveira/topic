<?php
    session_start();
    include 'database.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $url = $_SESSION['main_url'];

    $sql = "SELECT * FROM aula_php.usuario where login = '$login'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if (password_verify($password,$row['senha'])){
                $_SESSION["logged"] = true;
                $_SESSION["login"] = $login;
                $_SESSION["id"] = $row['id'];
                header("Location: $url/index.php");
            }else{
                echo 'user or password incorrect';
            }

        }
    }else{
        echo 'user or password incorrect';
    }

        


?>