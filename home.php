<?php

# الاتصل بي الجلسه 
session_start();

if ((isset($_SESSION['email'])) && (isset($_SESSION['Password'])) ) {


    $e = $_SESSION['email'] ;

    $p = $_SESSION['Password'] ;

}else{
    header("Location: Log_in.php");
        exit();
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>home : </h1><br><br><hr>
    <h2>Email : <?= $e ?></h2>
    <h2>Password : <?= $p ?></h2><br><br><hr>

    <a href="Log_out.php?exit=on">Log out</a>
</body>
</html>