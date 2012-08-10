<?php
 @session_start();
 $_SESSION['pageosn']="";
 if(isset($_GET['pageosn']))
 $_SESSION['pageosn']=@$_GET['pageosn'];
?>
