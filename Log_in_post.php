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