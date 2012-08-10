<?php
function checkemail($e_mail) {
list($username, $domain) = split("@",$e_mail);
if (@getmxrr($domain, $mxhost))
return 0;
else
return 1;
}
include ("mssql_connect.php");
mb_internal_encoding("UTF-8");
$fio=$_GET['fio'];
$telefon=$_GET['telefon'];
$e_mail=$_GET['youremail'];
$par1=$_GET['par1'];
$par2=$_GET['par2'];
$par3=$_GET['par3'];
$par4=$_GET['par4'];
$par5=$_GET['par5'];
$par6=$_GET['par6'];
$par7=$_GET['par7'];
$par8=$_GET['par8'];
$par9=$_GET['par9'];
$par10=$_GET['par10'];
$par11=$_GET['par11']; 
$date=date("j.m.Y G:i:s");
$result=mysql_query("insert into zayavka values(NULL, '$fio','$telefon','$par1','$par2','$par3','$par4','$par5','$par6','$par7','$par8','$par9','$par10','$par11', '$date')", $db);

$ip=checkemail($e_mail);
$header="From: M-BROKERS.RU\nReply-To: M-BROKERS.RU"; 
$header.="\nContent-type: text/html; charset=\"utf8\"";
$message="<HTML>\r\n";
$message.="<HEAD>\r\n";
$message.="<META http-equiv=Content-Type content='text/html; charset=utf8'>\r\n";
$message.="</HEAD>\r\n";
$message.="<BODY>\r\n";
$message.="<h1>Заявка</h1>\r\n";
$message.="<table>\r\n";
$message.="<tr><td>ФИО</td><td>".$fio."</td></tr>\r\n";
$message.="<tr><td>Телефон</td><td>".$telefon."</td></tr>\r\n";
$message.="<tr><td>Собственник ТС</td><td>".$par1."</td></tr>\r\n";
$message.="<tr><td>Тип ТС</td><td>".$par2."</td></tr>\r\n";
$message.="<tr><td>Территория использования</td><td>".$par3."</td></tr>\r\n";
$message.="<tr><td>Бонус-малус</td><td>".$par4."</td></tr>\r\n";
$message.="<tr><td>Количество допущенных лиц</td><td>".$par5."</td></tr>\r\n";
$message.="<tr><td>Мощность</td><td>".$par6."</td></tr>\r\n";
$message.="<tr><td>Возраст и стаж</td><td>".$par7."</td></tr>\r\n";
$message.="<tr><td>Период использования</td><td>".$par8."</td></tr>\r\n";
$message.="<tr><td>Нарушения страхования</td><td>".$par9."</td></tr>\r\n";
$message.="<tr><td>Срок страхования (для иностранцев)</td><td>".$par10."</td></tr>\r\n";
$message.="<tr><td>Стоимость</td><td>".$par11."</td></tr>\r\n";
$message.="<tr><td>Дата</td><td>".$date."</td></tr>\r\n";
$message.="<tr><td>email</td><td>".$ip."</td></tr>\r\n";
$message.="</table>\r\n";
$message.="</BODY>\r\n";
$message.="</HTML>";
$res = mysql_query("SELECT * from Contacts", $db);
while($row=@mysql_fetch_array($res)){
$email=$row["e-mail"];
mail($email,"Заявка на ОСАГО с M-BROKERS.RU",$message,$header);}
?>