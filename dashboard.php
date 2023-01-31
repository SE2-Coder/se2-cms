<?php
session_start();
if(!isset($_SESSION['Admin'])){
    header('location:http://localhost/se2cms/login.html');
}

echo '<h1>Welcome to your Dashboard</h1>';
?>
<p><a href="http://localhost/se2cms/closeSession.php">cerrar sessión</a></p>