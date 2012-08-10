?php
@session_start();
$kasko=@$_GET['kasko'];
//if($kasko==1){
	?>
	<div id="kasko_all" class="kasko_all">
	<div style='margin-top:0%;'>
	<div id="kasko_sub">
	<table border=0>
	<tr>
	<td>ФИО</td>
	<td><input id='fio_kasko' type='text' onkeypress='background_coloro(this);'>*</td>
	</tr>
	<tr>
	<td>Телефон</td>
	<td><input id='telefon_kasko' onkeypress='background_coloro(this);' type='text'>*</td>
	</tr>
	<tr align="center">
	<td colspan=2>Автомобиль</td>
	<td></td>
	</tr>
	<tr>
	<td>Марка</td>
	<td><input id='marka' onkeypress='background_coloro(this);' type='text'>*</td>
	</tr>
	<tr>
	<td>Модель</td>
	<td><input id='model' onkeypress='background_coloro(this);' type='text'>*</td>
	</tr>
	<tr>
	<td>Год выпуска</td>
	<td>
	<select id="god">
		<?php
		for ($i = date("Y"); $i >= 1900; $i--)
		echo "<option value='".$i."'>".$i;
		?>		
	</select>
	*</td>
	</tr>
	<tr>
	<td>Стоимость ТС</td>
	<td><input id='stoimost' onkeypress='background_coloro(this);' type='text'>*</td>
	</tr>
	<tr>
	<td>Возраст</td>
	<td>	
	<select id="age">
		<?php
		for ($i = 18; $i <= 100; $i++)
		echo "<option value='".$i."'>".$i;
		?>		
	</select>
	*</td>
	</tr>
<tr>
<td colspan=2 style='text-align:center;font-size:8pt;'>Укажите возраст самого молодого водителя</td>
</tr>
	<tr>
	<td>Стаж</td>
	<td>
	<select id="stazh">
		<?php
		for ($i = 0; $i <= 100; $i++)
		echo "<option value='".$i."'>".$i;
		?>		
	</select>
	*</td>
	</tr>
<tr>
<td colspan=2 style='text-align:center;font-size:8pt;'>Укажите наименьший стаж</td>
</tr>
	<tr>
	<td>Пол</td>
	<td>
	<select id="pol">
		<option value="1"> М
		<option value="2"> Ж		
	</select>	
	*</td>
	</tr>
	<tr>
	<td>E-mail</td>
	<td>
<input id='email' onkeypress='background_coloro(this);' type='text'>*</td>
	</tr>
	<tr>
	<td colspan=2 style='text-align:center;'><input type='button' value='Отправить' onclick='kasko_submit();'></td>
	</tr>
	<tr><td id="text" colspan=2 style='text-align:center;font-size:8pt;'>Поля отмеченные звёздочкой(*) обязательны для заполнения</td>
	</tr>
	</table>
	</div>
	</div>
	</div>	
<?php
//}
?>
