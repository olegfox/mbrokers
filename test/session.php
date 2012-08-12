<?php
 @session_start();
 if(@$_GET['headermenu']!=""){
  $_SESSION["headermenu"]="";
  $_SESSION["headermenu"]=@$_GET['headermenu'];
 }
 if($_SESSION["headermenu"]=="") $_SESSION["headermenu"]=1;
echo $_SESSION["headermenu"];
?>
