<?php
include("./mssql_connect.php");  
  $id=@$_GET['id'];
  if($id!=""){
   $result=mysql_query("SELECT content FROM page WHERE id='$id';", $db);
   $result=@mysql_fetch_array($result);
   $text=$result["content"];
   //$text=iconv("windows-1251", "utf-8", $text);
   echo $text; 
  } 
  ?>
