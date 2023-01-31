<?php

if (isset($_POST['send'])){

    $name=$_POST['userName'];
    $user=$_POST['usr'];
    $mail=$_POST['userMail'];
    $pwd=$_POST['password_usr'];

    $pw=password_hash($pwd, PASSWORD_DEFAULT, [15]);

   try{
        require ('conn.php');
        echo 'conexion exitosa';
        $bbdd->exec("SET CHARACTER SET utf8");
        $usr="INSERT INTO users (name, user, mail, pwd) VALUES (:userName, :usr, :userMail, :password_usr)";
        $result=$bbdd->prepare($usr);
        $result->execute(array(':userName'=>$name, ':usr'=>$user, ':userMail'=>$mail, ':password_usr'=>$pw));
        $result->closeCursor();

        header('location:http://localhost/htmlTemplates/InstallTemplate/login.html');

    }catch (Exception $e){

        die('Error: ' . $e->getMessage());

    }
}
$bbdd=null;