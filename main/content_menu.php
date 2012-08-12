<?php @session_start();
include("../mssql_connect.php");  
  $id=@$_GET['id'];
  if($id!=""){
   $result=mysql_query("SELECT * FROM menu WHERE id='$id';", $db);
   $result=@mysql_fetch_array($result);
   if(@$_SESSION['lang']==""){
    $_SESSION['lang']=1;
   }
   if(@$_SESSION['lang']==1){
    $text=$result["content"];
   }
   if(@$_SESSION['lang']==2){
    $text=$result["content_ger"]; 
   }
   if(@$_SESSION['lang']==3){
    $text=$result["content_eng"]; 
   }
   //$text=iconv("windows-1251", "utf-8", $text);
   echo $text; 
  } 
  ?>
