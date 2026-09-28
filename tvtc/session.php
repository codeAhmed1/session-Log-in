<?php










  if ( (isset($session_e))   &&  (isset($session_p)) )  { # التحقق من الجلسة و المتغيرات 

        session_start(); # بدا الجلسة 
 



    $_SESSION['email'] = $session_e;

    $_SESSION['Password'] = $session_p;


    header("Location: home.php");
exit();


    
  }else{
    header("Location: ../Log_in.php");
        exit();
  }
















?>