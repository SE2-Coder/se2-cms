<?php

if(isset($_POST['send'])){

    require 'conn.php';
    $log="SELECT * FROM users WHERE user= :user";
    $result=$bbdd->prepare($log);

    $user=htmlentities(addslashes($_POST['user']));
    $pwd=htmlentities(addslashes($_POST['passwordDDBB']));

    $result->execute(array(':user'=>$user));

    if($record=$result->fetch(PDO::FETCH_ASSOC) and password_verify($pwd, $record['pwd'])){

        session_start();
        $_SESSION['Admin']=$_POST['user'];
        header('location:http://localhost/se2cms/dashboard.php');

    }else{

        header('location:http://localhost/se2cms/login.html');

    }



}
$result->closeCursor();
$bbdd=null;