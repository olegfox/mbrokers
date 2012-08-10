<?php
 include('mssql_connect.php');
 $id=@$_GET['id'];
 $result=mysql_query("delete from page where id_page=$id",$db);
 if ($result)
 echo "Предложение удалено!";
?>