<?php

if(isset($_POST['send'])){

    require 'conn.php';
    $log="SELECT * FROM users WHERE user= :user";
    $result=$bbdd->prepare($log);

    $user=htmlentities(addslashes($_POST['user']));
    $pwd=htmlentities(addslashes($_POST['passwordDDBB']));

    $result->execute(array(':user'=>$user));

    if($record=$result->fetch(PDO::FETCH_ASSOC) and password_verify($pwd, $record['pwd'])){

        echo 'registro exitoso';
        /*session_start();
        $_SESSION['Admin']=$_POST['UserLog'];*/

        //header('location:dashboard.php');

    }else{

        header('location:http://localhost/htmlTemplates/InstallTemplate/login.html');

    }



}
$result->closeCursor();
$bbdd=null;