<?php
  include('mssql_connect.php');
 $idobject=@$_GET['id_object'];
 $result=mysql_query("delete from page where id_page=$idobject",$db);
 //$result=mysql_query("update page set dob=1 where id_object=$idobject",$db);
?>