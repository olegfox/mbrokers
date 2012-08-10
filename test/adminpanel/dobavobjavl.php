<?php
  include('mssql_connect.php');
 $idobject=@$_GET['id_object'];
 $idpage=@$_GET['id_page'];
 $id_theme=@$_GET['id_theme'];
 $result=mysql_query("update page set dob=1, id_object=$idobject where id_page=$idpage",$db);
 if ($result){
 $resu=mysql_query("select * from user where status='administrator' limit 1");
$rowu=mysql_fetch_array($resu);
 $res=mysql_query("select * from mailer where theme_id_theme=$id_theme");
 $r=mysql_query("select * from theme where id_theme=$id_theme");
 $rq=mysql_fetch_array($r);
 while ($row=mysql_fetch_array($res)){
	$to = $row['email'];
			$from=iconv("utf-8","windows-1251",'От:'.$rowu['email']);
			$zajav=iconv("utf-8","windows-1251",'Рассылка '.$fio);
			$mess="Уважаемый, ".$fio.", сообщаем Вам: новое объявление в разделе ".$rq['name']."\n";
			$mess=iconv("utf-8","windows-1251",$mess);
			// функция, которая отправляет наше письмо.
			mail($to, $zajav, $mess, $from);
			echo $thank;
 }
 }
?>