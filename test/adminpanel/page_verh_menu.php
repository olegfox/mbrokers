<?php
 @session_start();
 $_SESSION['pageverh']="";
 if(isset($_GET['pageverh']))
 $_SESSION['pageverh']=@$_GET['pageverh'];
?>
