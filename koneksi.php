<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = '1810530202_web.d';
$link = mysqli_connect($host, $user, $pass, $db);
    if (!$link) {
        die (mysqli_connect_error());
    }

?> 