<?php
if ($_GET['exit']=== "on"){
    

session_start();
//الاتصال بقاعدة البيانات
include ("tvtc/db_rayan.php");

session_unset();
session_destroy();
header("Location: Log_in.php");
exit();
}else{
header("Location: Log_in.php");
exit();
}
?>