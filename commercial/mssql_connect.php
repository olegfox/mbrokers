��<?php
$host="localhost";
$user="mbrokersru";
$pwd="ufg87LLt";
$db=@mysql_connect($host,$user,$pwd) or die("К сожалению, не доступен сервер mySQL");
@mysql_query("SET NAMES utf8", $db);
@mysql_query("SET CHARACTER SET utf8", $db);
@mysql_select_db("mbrokersru",$db) or die ('Ошибка БД');
?>
