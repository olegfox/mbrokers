<?php
include ("mssql_connect.php");
mb_internal_encoding("UTF-8");
$result=mysql_query("SELECT kt FROM Place_kt");
$i=0;
if (isset($result)){
	while ($row=mysql_fetch_array($result)){
		$i++;
		$arr = array($i => $row["kt"]);
		$str=$str."a".$i.":".$arr[$i].", ";
	}
}
$result=mysql_query("SELECT kt_tractor FROM Place_kt");
if (isset($result)){
	while ($row=mysql_fetch_array($result)){
		$i++;
		$arr = array($i => $row["kt"]);
		if($i!=508){
			$str=$str."a".$i.":".$arr[$i].", ";
		}
		else{
			$str=$str."a".$i.":".$arr[$i];
		}
	}
}
echo "({".$str."})";
?>
