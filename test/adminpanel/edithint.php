<?php
 include("mssql_connect.php");
 $idobject=substr($_GET['id'],2, strlen($_GET['id'])-1);
 $text=@$_GET['text'];
 $lang=@$_GET['lang'];
 if($idobject!=""){
  if($lang==1)
   $return=mysql_query("update object set hint='$text' where id_object='$idobject';", $db);
  if($lang==2)
   $return=mysql_query("update object set hint_ger='$text' where id_object='$idobject';", $db);
  if($lang==3)
   $return=mysql_query("update object set hint_eng='$text' where id_object='$idobject';", $db);   
 }
?>