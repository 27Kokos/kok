<?php
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mysqli = new mysqli("localhost", "root", "", "lms");
    $result = $mysqli->query("SELECT * FROM `users` WHERE email = '$email' AND pass ='$pass'");
    if($result->num_rows){
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pass'] = $row['pass'];
    }else{
        exit("неправильный логин или пароль");
    }
    