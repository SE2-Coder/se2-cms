<?php
session_start();
if(!isset($_SESSION['Admin'])){
    header('location:http://localhost/htmlTemplates/InstallTemplate/login.html');
}

echo '<h1>Welcome to your Dashboard</h1>';
?>
<p><a href="http://localhost/htmlTemplates/InstallTemplate/closeSession.php">cerrar sessión</a></p>