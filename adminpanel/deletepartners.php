<?php
 $id=@$_GET['id'];
 include("mssql_connect.php");
 $result=mysql_query("delete from partners where id='$id';", $db);
?>