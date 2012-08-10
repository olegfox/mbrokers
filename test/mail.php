<?php 
 $a=@$_POST['a'];
 $address=$_SERVER['REMOTE_ADDR']; 
 include("mssql_connect.php");
   $result=mysql_query("SELECT email FROM user where status='administrator';", $db);
   while($result=@mysql_fetch_array($result)){
   $email=$result["email"];
 mail($email, "Cообщение об ошибке на портале", $a."\n ip пользователя ".$address); }
 ?>