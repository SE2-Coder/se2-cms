<?php
//ddbb conexion
$bbdd=new PDO('mysql:host=localhost; dbname=se2', 'root',);
$bbdd->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
