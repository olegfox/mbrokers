<?php
$idpage=$_GET['idpage'];
$img=$_GET['img'];
include('mssql_connect.php');
$result=mysql_query("select img from page where id_page=$idpage;", $db);
$row=mysql_fetch_array($result);
unlink("../".$row['img']);
$result=mysql_query("update page set img='$img' where id_page=$idpage", $db);
?>