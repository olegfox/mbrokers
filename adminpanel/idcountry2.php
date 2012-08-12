<?php
 @session_start();
 if(@$_GET['idcountry2']!="")
  $_SESSION['idcountry2']=@$_GET['idcountry2'];
  echo @$_SESSION['idcountry2'];
?>