<?php

if (isset($_POST['send'])){

    try{

        $bbdd=new PDO('mysql:host='.$_POST['server'].'; dbname='.$_POST['ddbb'], $_POST['user'],$_POST['passwordDDBB']);
        $bbdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $table="CREATE TABLE users (id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(150), pwd VARCHAR(100));";
        $resultado=$bbdd->prepare($table);
        $resultado->execute();
        $bbdd=null;

        header('location:usr_record.php');

        if (empty($_POST['passwordDDBB'])){
            $_POST['password']='""';
        }

        $t=fopen('conn.php','w');
        $text = "<?php\n\n";
        $text .= "\$bbdd=new PDO('mysql:host=".$_POST['server']."; dbname=".$_POST['ddbb']."'".", "."'".$_POST['user']."'".",".$_POST['passwordDDBB'].");\n";
        $text .= "\$bbdd->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n";

        fwrite($t,$text);
        fclose($t);

    }catch (Exception $e){

        die('Error: ' . $e->getMessage());

    }

}
