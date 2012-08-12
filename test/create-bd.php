<?php
@header("Content-type: text/html; charset=utf8");
$Link=mysql_connect("localhost", "rosautonovator", "ufg87LLt");
mysql_select_db ("rosautonovator");
/*$fname="./bd.sql";
if (!file_exists($fname)) die ("Файл $fname не существует!");
$fp = fopen ($fname, "r");
$buffer = fread($fp, filesize($fname));
fclose ($fp);

$prev = 0;

while ($next = strpos($buffer,";",$prev+1))
{
$i++;
$a = substr($buffer,$prev+1,$next-$prev);
mysql_query($a);
$prev = $next;
}

echo "Выполнено $i команд";
/*$result = mysql_query('SHOW DATABASES');
while ($row = mysql_fetch_array($result)) print $row[0] . "";*/
?>
