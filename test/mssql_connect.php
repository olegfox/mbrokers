<?php
$host="localhost";
$user="rosautonovator";
$pwd="ufg87LLt";
$db=@mysql_connect($host,$user,$pwd) or die("К сожалению, не доступен сервер mySQL");
@mysql_query("SET NAMES utf8", $db);
@mysql_query("SET CHARACTER SET utf8", $db);
@mysql_select_db("rosautonovator",$db) or die ('Ошибка БД');
?>
