<?php
session_start();
session_destroy();
header('location:http://localhost/htmlTemplates/InstallTemplate/login.html');