<?php
@session_start();
/* include('mssql_connect.php');
    $id=@$_SESSION['pageosn'];
 $idtheme=@$_SESSION['theme'];*/
 if($_GET['idobject']!="")
 $_SESSION["idobject2"]=@$_GET['idobject'];
 $idobject=@$_SESSION["idobject2"];
 /* $result=mysql_query("select content from page where country_id_country='$id' and theme_id_theme='$idtheme' and id_object='$idobject and dob=1'", $db);
  $ro=mysql_fetch_array($result);
  $string=$ro['content'];
  echo $string;*/
   ?>