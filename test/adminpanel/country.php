<?php
@session_start();
include("mssql_connect.php");  
  $id=@$_GET['id'];
if(isset($id)){
 $_SESSION['idcontinent']=$id;
 $result=mysql_query("select * from continent where id_continent='$id';", $db);
 $ro=mysql_fetch_array($result);
 $id=$ro['id_continent'];
 $result=mysql_query("select * from country where continent_id_continent='$id';", $db);
 $text="";
 while($row=mysql_fetch_array($result)){
  echo $row['name']."#";
 }
 echo "~";
}
  ?>