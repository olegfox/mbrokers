<?php
include('mssql_connect.php');
 $ban=@$_GET['ban'];
 if($ban!=""){
  $baning=mysql_query("select ip from ban ;", $db);
  $i=0;
  while($row=mysql_fetch_array($baning)){
   if($ban==$row['ip'])
    $i=1;
  }
  if($i==0){
   $baning=mysql_query("Insert into ban values (NULL, '$ban');", $db);
  }
 }
 ?>
