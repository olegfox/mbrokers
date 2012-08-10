<div class="calculator_all">
	<div class="face" id="calc1"  style="overflow:auto; height:340px; width:630px;">
	<div class="head_calc">Выберите собственника ТС:</div>
	<?php include("mssql_connect.php");
		$res = mysql_query("SELECT * from Type");
		while ($row = mysql_fetch_array($res))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled0" id="typ" name="typ" value="<?php echo $row['id'];?>"><?php echo $row["type"];?></div>
		<?php }
	?>
	</div>
	<div class="b_stavka" id="calc2"  style="overflow:auto; height:340px; width:630px;">
		Базовая ставка
		<?php //include("mssql_connect.php");
		
		$res = mysql_query("SELECT DISTINCT type, tb from Base_rate");
		while ($row = mysql_fetch_array($res))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled1" name="tb" id="tb" value="<?php echo $row['tb'];?>"><?php echo $row["type"];?></div>
	<?php }
	?>
	</div>
	<div class="territor" id="calc3" style="overflow:auto; height:340px; width:630px;">
		Территория преимущественного использования ТС<br>
		<?php //include("mssql_connect.php");
		$res = mysql_query("SELECT * from Place_kt");
		while ($row = mysql_fetch_array($res))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled2" name="kt" id="kt" value="<?php echo $row['kt'];?>"><?php echo $row["place"];?></div>
	<?php }
	?>	
	</div>
	<div class="nal" id="calc4"  style="overflow:auto; height:340px; width:630px;">
		Наличие или отсутствие страховых выплат при наступлении страховых случаев, произошедших по вине страхователя в период действия предыдущих договоров обязательного страхования<br>
<center>
		<table style="padding:0 0 0 0;text-align:center;">
<tr>
<?php //include("mssql_connect.php");
		$res = mysql_query("SELECT * from Kbm");
		while ($row = mysql_fetch_array($res))
 {?>
<td>
<div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled3" name="kbm" id="kbm" value="<?php echo $row['kbm'];?>"></div>
</td>
<?php }
?>
</tr>
<tr>
<?php 		$res = mysql_query("SELECT * from Kbm");
		while ($row = mysql_fetch_array($res))
 {?>
<td>
<?php echo $row["number"]?>
</td>
<?php }
?>
</tr>
</table>
</center>
	</div>
		<div class="count_face" id="calc5"  style="overflow:auto; height:340px; width:630px;">
		Количество лиц допущенных к управлению ТС<br>
		<?php //include("mssql_connect.php");
		$res = mysql_query("SELECT * from Count_insurance_Ko limit 2");
		while ($row = mysql_fetch_array($res))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled4" name="ko" id="ko" value="<?php echo $row['ko'];?>"><?php echo $row["Type"];?></div>
<?php
}
$result = mysql_query("SELECT * from Count_insurance_Ko limit 2,1");
$r = mysql_fetch_array($result);
?>

	</div>
	<div class="age" id="calc6" style="overflow:auto; height:340px; width:630px;">
Возраст и стаж водителя<br>
<table>
<tr>
<td>
возраст
</td>
<td>
стаж вождения
</td>
</tr>

<?php //include("mssql_connect.php");
		$res = mysql_query("SELECT DISTINCT age from Age_experience_Kvs limit 2");
		$id=0;
		while ($row = mysql_fetch_array($res))
 {?>
<tr>
<td>
<?php echo $row['age'];?>
</td>
<td>
	<?php
	
	$r = mysql_query("SELECT * from Age_experience_Kvs limit ".$id.",2");
	while ($ro = mysql_fetch_array($r))
 {?>
<div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled5" id="kvs" name="kvs" value="<?php echo $ro['kvs'];?>"> <?php echo $ro['stage'];?><font size='1pt' color='white'><?php echo $row['age'];?></font></div><?php }?>
</td>
</tr>
<?php 
$id=$id+2;
}?>
</table>
	</div>
	<div class="period_ts" id="calc7" style="overflow:auto; height:340px; width:630px;">
		Период использования ТС<br>
		<?php //include("mssql_connect.php");
		$res = mysql_query("SELECT * from Period_insurance_ks");
		while ($row = mysql_fetch_array($res))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled6" name="ks" id="ks" value="<?php echo $row['ks'];?>"><?php echo $row["Period"];?></div>
<?php
}
?>	
	</div>
	<div class="moshnost" id="calc8" style="overflow:auto; height:340px; width:630px;">
		Мощность двигателя автомобиля (л.с.)<br>
		<?php //include("mssql_connect.php");
		$res = mysql_query("SELECT * from Power_Km");
		while ($row = mysql_fetch_array($res))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled7" name="km" id="km" value="<?php echo $row['km'];?>"><?php echo $row["Power"];?></div>
<?php
}
?>	
	</div>
	<div class="srok_strah" id="calc9" style="overflow:auto; height:340px; width:630px;">
		Срок страхования<br>
		<?php //include("mssql_connect.php");
		$res = mysql_query("SELECT * from Period_insurance_Kp");
		while ($row = mysql_fetch_array($res))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled8"  name="kp" id="kp" value="<?php echo $row['kp'];?>"><?php echo $row["Period"];?></div>
<?php
}
?>	
		
	</div>
	<div class="narush" id="calc10" style="overflow:auto; height:340px; width:630px;">
		Наличие нарушений, предусмотренных п. 3 ст. 9 Федерального закона ОСАГО<br>
		<?php //include("mssql_connect.php");
		$res1 = mysql_query("SELECT * from Narushenia");
		while ($row2 = mysql_fetch_array($res1))
 {?><div id="substrate" onmouseup="substrate_izmen(this);"><input type="radio" class="styled9" name="kn" id="kn" value="<?php echo $row2['kn'];?>"><?php echo $row2["text"];?></div>
<?php
}
?>	
		<!--<div id="substrate"><input type="radio" class="styled9" id="kn" name="kn" checked="checked">нет нарушений</div>
		<div id="substrate"><input type="radio" class="styled9" id="kn" name="kn" >есть нарушения</div>-->
	</div>
	<div class="itogo" id="calc11" style="overflow:auto; height:340px; width:630px;">
Стоимость ОСАГО
	</div>
<div id="next" onclick="nexxt();"></div>
<div id="nazad" onclick="previos();"></div>
</div>
