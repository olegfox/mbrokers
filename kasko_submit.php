<?php
include ("mssql_connect.php");
mb_internal_encoding("UTF-8");
$fio=$_GET['fio_kasko'];
$telefon=$_GET['telefon_kasko'];
$marka=$_GET['marka'];
$model=$_GET['model'];
$god=$_GET['god'];
$stoimost=$_GET['stoimost'];
$age=$_GET['age'];
$stazh=$_GET['stazh'];
$pol=$_GET['pol'];
$email=$_GET['email'];
if($pol==1) $pol="M";
else $pol="Ж";
$date=date("j.m.Y G:i:s");
$result=mysql_query("insert into zayavka_kasko values(NULL, '$fio','$telefon','$marka','$model','$god','$stoimost','$age','$stazh','$pol','$email','$date')", $db);
$header="From: M-BROKERS.RU\nReply-To: M-BROKERS.RU"; 
$header.="\nContent-type: text/html; charset=\"utf8\"";
$message="<HTML>\r\n";
$message.="<HEAD>\r\n";
$message.="<META http-equiv=Content-Type content='text/html; charset=utf8'>\r\n";
$message.="</HEAD>\r\n";
$message.="<BODY>\r\n";
$message.="<h1>Заявка КАСКО</h1>\r\n";
$message.="<table>\r\n";
$message.="<tr><td>ФИО</td><td>".$fio."</td></tr>\r\n";
$message.="<tr><td>Телефон</td><td>".$telefon."</td></tr>\r\n";
$message.="<tr><td>Марка автомобиля</td><td>".$marka."</td></tr>\r\n";
$message.="<tr><td>Модель автомобиля</td><td>".$model."</td></tr>\r\n";
$message.="<tr><td>Год</td><td>".$god."</td></tr>\r\n";
$message.="<tr><td>Стоимость</td><td>".$stoimost."</td></tr>\r\n";
$message.="<tr><td>Возраст</td><td>".$age."</td></tr>\r\n";
$message.="<tr><td>Стаж</td><td>".$stazh."</td></tr>\r\n";
$message.="<tr><td>Пол</td><td>".$pol."</td></tr>\r\n";
$message.="<tr><td>E-mail</td><td>".$email."</td></tr>\r\n";
$message.="<tr><td>Дата</td><td>".$date."</td></tr>\r\n";
$message.="</table>\r\n";
$message.="</BODY>\r\n";
$message.="</HTML>";
$res = mysql_query("SELECT * from Contacts", $db);
while($row=@mysql_fetch_array($res)){
$email=$row["e-mail"];
mail($email,"Заявка на КАСКО с M-BROKERS.RU ФИО:".$fio." Марка:".$marka." Модель:".$model,$message,$header);}
?>
