<?php
 @session_start();
 $idtheme=@$_SESSION['theme'];
 $idcountry=@$_SESSION['idcountry2'];
 include("mssql_connect.php");
 $date=date("Y-m-d");
 if($idcountry=="") $idcountry=1;
 $result=mysql_query("insert into object values(NULL, $idtheme, $idcountry, '', 'Новый объект', 'New object', 'Neues Objekt')", $db);
 $r1=mysql_query("select max(id_object) from object where theme_id_theme='$idtheme' and country_id_country='$idcountry';", $db);
 $r1=mysql_fetch_array($r1);
 $idobject=$r1['max(id_object)'];
 $result=mysql_query("insert into page values(NULL, 'новая страница', $idobject,  $idcountry, $idtheme, 'new page', 'neue Seite', 1)", $db);
?>