<?php
session_start();
include __DIR__ . '/../Models/user.php';

if (!empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $autheticated = array_filter($user, function(User $user){
        return $user['email'] == $email && $user['password'] == $password;
    });
    if(count($autheticated) > 0){
        $user = array_shift($autheticated);
        $_SESSION['userId'] = true;
        $_SESSION['name'] = true;
        header('Location: index.php');
    }else{

    }
}
