<?php
session_start();
$login=trim($_POST['login']);
$pass=trim($_POST['pass']);
if(strlen($login)>3 && strlen($pass)>3) 
    {
    if ($login =="krasi" && $pass=="qwerty") {
        $_SESSION['is_logged'] = true;
        header('Location: index.php');
    } 
    else 
    {
        header('Location: index.php?error=1');
    }
}    
