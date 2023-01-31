<?php
session_start();
session_destroy();
header('location:http://localhost/se2cms/login.html');