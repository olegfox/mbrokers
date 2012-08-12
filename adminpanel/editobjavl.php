<?php
  include('mssql_connect.php');
 $idobject=@$_GET['idobject'];
 $kontakt=@$_GET['kontakt'];
 $result=mysql_query("update page set kontakt='$kontakt' where id_page=$idobject",$db);
?>