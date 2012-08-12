<?php
  include('mssql_connect.php');
 $partnersName=@$_GET['partnersName'];
 $partnersImage=@$_GET['partnersImage'];
 $partnersLink=@$_GET['partnersLink'];
//echo "1111".$partnersName.$partnersImage.$partnersLink;
 $result=mysql_query("insert into partners values(NULL, '$partnersName', '$partnersImage', '$partnersLink');",$db);
?>