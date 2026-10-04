<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>التحقق من التسجيل</title>
</head>
<body>
  
</body>
</html>





<?php





#التحقق من ان المستخدم ضغط الزر او لا ؟ 

  if (isset($_POST['submit'])){
    # جلب البيانات و الحماية 


    
# الحمية من الاختراق وحقن الاكواد الضارة

require_once "function.php";



    $e = sanitize_input($_POST['email']);
    $p = sanitize_input($_POST['Password']);


    $session_e = $e ;
    $session_p = $p ;



    include("tvtc/session.php");
    exit();


  }else{
        header("Location: Log_in.php");
        exit();


  }








?>