<?php
  @session_start();
    include("mssql_connect.php");
    $idcountry=@$_GET['idcountry'];
    $resul=mysql_query("select id_country from country where name='$idcountry'", $db);
    $ro=mysql_fetch_array($resul);   
    $id=$ro['id_country'];
	echo $idcountry; 
	echo "%";
	echo $id;
?>