?php
 @session_start();
 $idobject=@$_GET['idobject'];
 include("mssql_connect.php");
 $result=mysql_query("delete from object where id_object='$idobject';", $db);
?>