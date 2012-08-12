<?php
include("mssql_connect.php");
$type="";
if (isset($_GET['type']))
{
 $type=@$_GET['type'];
 $result=mysql_query("update baner_network set `type`= $type", $db);
 }
?> 