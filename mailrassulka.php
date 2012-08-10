<?php @session_start();
include("mssql_connect.php");
if(@$_SESSION['lang']==""){
	$_SESSION['lang']=1;
}
if(@$_SESSION['lang']==1){
	include("lang/rus.php");
}
if(@$_SESSION['lang']==2){
	include("lang/ger.php");
}
if(@$_SESSION['lang']==3){
	include("lang/eng.php");
}
$fio = mysql_real_escape_string(strip_tags(@$_POST['fio']));
$email =  mysql_real_escape_string(@$_POST['email']);
$idtheme  =  intval(@$_POST['theme']);
$theme = mysql_real_escape_string(strip_tags(@$_POST['subject']));
$res=mysql_query("select * from user where status='administrator' limit 1");
$row=mysql_fetch_array($res);
if(@$_POST['fio']!="" && @$_POST['email']!="" && @$_POST['theme']!="") {
	if(@$_SESSION['capcha']==$_POST['code']){
		$result=mysql_query("insert into mailer values(NULL, '$idtheme','$fio', '$email')", $db);
		if(isset($result)){
			$to = $email;
			$from=iconv("utf-8","windows-1251",'От:'.$row['email']);
			$zajav=iconv("utf-8","windows-1251",'Заявка на рассылку '.$fio);
			$mess="Клиент: ".$fio."\n e-mail: ".$email."\n Тематика: ".$theme."\n";
			$mess=iconv("utf-8","windows-1251",$mess);
			// функция, которая отправляет наше письмо.
			mail($to, $zajav, $mess, $from);
			echo $thank;
		}
	}
	else 
	echo "<font color='red'>".$error."</font>";
}
else{
	echo "<font color='red'>".$error2."<br/>";
	if(@$_POST['fio']==""){
		echo " ".$fio_l."<br/>";
	}
	if(@$_POST['email']==""){
		echo " ".$email_l."<br/>";
	} 
	if(@$_POST['subject']==""){
		echo " ".$themetika_l."<br/>";
	}
	echo "</font>";
}
?>