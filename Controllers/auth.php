<?php
session_start();
include __DIR__ . '/../Models/user.php';

if (!empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authenticated = array_filter($user, function($user) use ($email, $password){
        return $user['email'] == $email && $user['password'] == $password;
    });
    if(count($authenticated) > 0){
        $user = array_shift($authenticated);
        $_SESSION['userId'] = true;
        $_SESSION['name'] = true;
        header('Location: index.php');
    }else{

    }
}
