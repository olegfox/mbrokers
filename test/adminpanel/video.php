<?php
 include("mssql_connect.php");
 $video=@$_GET["link"];
 if(isset($video)){
  $result=mysql_query("update sidebar set video='$video';");
 }
?>