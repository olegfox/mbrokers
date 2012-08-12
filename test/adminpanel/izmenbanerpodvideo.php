<?php
 include("mssql_connect.php");
 $link=@$_GET["link"];
 if($link!=""){
  $result=mysql_query("update sidebar set linkbanervideo='$link';", $db);
  $result=mysql_query("select * from sidebar;");
  $row=mysql_fetch_array($result); 
 }

?>
