<?php 
 $login=@$_GET['login'];
  $pass=@$_GET['pass'];
   $stat=@$_GET['stat'];
  $email=@$_GET['email'];
include("mssql_connect.php");
$result=mysql_query("select login,email from user;");
while($row=mysql_fetch_array($result)){
	$log=$row['login'];
	$em=$row['email'];
	}
	if($login==""||$pass==""||$email==""||$stat==""){
	echo "Заполнены не все поля!";}
	else{
	if ($login==$log){
	echo "Такой пользователь существует!";
	}
	else if($email==$em){
	echo "E-mail уже используется";
	}
	else{
 $result=mysql_query("INSERT INTO user VALUES (NULL, '$login', '$pass', '$email', '$stat')", $db);
 echo "Пользователь добавлен!";
}
}
?>