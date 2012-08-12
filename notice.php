<?php @session_start();  
$_SESSION["id_country2"]="";
 if(@$_SESSION['lang']==""){
  $_SESSION['lang']=1;
 }
  if(@$_SESSION['lang']==1){
  include("lang/rus.php");
 }
 if(@$_SESSION['lang']==2){
  include("lang/ger.php");
 }
 if(@$_SESSION['lang']==3){
  include("lang/eng.php");
 }
?>
<style>
.steps {
	margin:20px 0 0px 10px;
	overflow:hidden;
	
}
	.steps * {
		margin:0;
		padding:0;
		list-style:none;
		font-size:10px;
	}

	.steps ul {
		width:100%;
		overflow:hidden;
		margin-left:-20px;
	}
		.steps li {
			color:#5d5d5d;
			float:left;
			padding:0 5px 0 20px !important;
			margin-bottom:10px;
			line-height:15px;
			background:url(../images/i-steps-1.gif) left center no-repeat;
		}
		.steps .selected {
			color:#000;
			font-size:12px;
			font-weight:bold;
		}
table.saleForm td {font-size:12px}
table.saleForm input {border: 1px solid #A5ACB2}

</style>
<?php if ($_SESSION['notit']==1){ $_SESSION["uploadimg"]=0;?>
<div class="steps"><ul><li class='selected'><?php echo $regulations;?></li><li><?php echo $choicesection; ?></li><li><?php echo $TI;?></li><li><?php echo $Contact;?></li><li><?php echo $Uploadphotos;?></li></ul></div>
<div align="justify" style="width: 100%; height: 300px; overflow: auto">
<p><div><strong><em>&laquo;Правила публикации объявлений на сервере Buy World.RU</a>&raquo;<em> <br />
<br />
</em></font></em></strong></div>
<div>&nbsp;</div>
<div><em>&laquo;Buy World.RU&raquo;</em><em> предоставляет услугу размещения объявлений. При пользовании этой услугой, Вы &nbsp;соглашаетесь выполнять все условия и ограничения, как указано в данных &laquo;Условиях пользования услугами сервера </em><em><font face="Arial">Buy World.RU</font></em><em>&raquo; где бы то ни было в наших службах, а при регистрации - </em><em>принимаете на себя указанные в них права и обязанности, связанные с использованием данного сайта</em><em>.<br />

</em></div>
<div>&nbsp;</div>
<div>
<div><strong>1. Общие правила публикации объявлений</strong></div>
<div>&nbsp;</div>
<blockquote style="margin-right: 0px;" dir="ltr">
<div><span>1.1. </span>Все объявления принимаются к публикации только на русском, английском или немецком языках.<br />
<br />
<span>1.2. </span>Публикация одинаковых объявлений (в том числе с разных  e-mail адресов) или дублирование объявлений в разных разделах запрещено.<br />

<br />
<span>1.3. </span>Объявление появляется на сайте не мгновенно, а в  течение одного часа после размещения.<br />
<br />
<span>1.4. </span>Размещаемые объявления проходят модерацию &ndash; проверку  Администратором на корректность заполнения и соответствие объявлений  настоящим Условиям.<br />
<br />

<span>1.5. </span>При размещении объявления <span style="color: rgb(51, 153, 102);">необходимо соблюдать следующие правила</span>:</div>
<blockquote style="margin-right: 0px;" dir="ltr">
<div><span>1.5.1. </span>Внимательно и корректно заполнять все поля в  форме подачи объявления.</div>
<div><span>1.5.2. </span>Аккуратно заполнять контактную информацию,  особенно при указании контактных телефонов.</div>
<div><span>1.5.3. </span>Объявление должно содержать  максимально подробную информацию о предлагаемом объекте. Информация должна быть актуальной и  соответствовать действительности.</div>
<div><span>1.5.4. </span>Изображение, демонстрирующее объект, должно соответствовать содержимому объявления. На изображении  должен быть только предлагаемый объект.</div>
</blockquote>
<div><span>1.6. </span>При размещении объявления <span style="color: rgb(255, 0, 0);">запрещается</span>:</div>
<blockquote style="margin-right: 0px;" dir="ltr">
<div><span>1.6.1. </span>Указывать заниженную или неактуальную цену</div>

<div><span>1.6.2. </span>Использовать чужие изображения (например,  фотографии с официальных сайтов производителей), а также изображения,  использованные ранее на Сервере Buy World.RU.</div>
<div><span>1.6.3. </span>Размещать объявления <strong>в  других разделах</strong>, не соответствующих типу объекта.</div>

<div><span>1.6.4. </span>Размещение <strong>на изображениях </strong>логотипа,  бренда, названия компании или любой другой рекламной информации, а также  контактной информации: телефона, адреса e-mail и т.д., за исключением  случаев, когда подобное оговорено с Администрацией.</div>
<div><span>1.6.5. </span>Указывать неправильный или недействительный номер  контактного телефона.</div>
</blockquote>
<div><span>1.7. </span>При заполнении в объявлении поля &laquo;Дополнительная  информация&raquo; <span style="color: rgb(255, 0, 0);">запрещается</span>:</div>

<blockquote style="margin-right: 0px;" dir="ltr">
<div><span>1.7.1. </span>Давать ссылки на какие-либо сайты или адреса  электронной почты.</div>
<div><span>1.7.2. </span>Указывать телефоны (вся контактная информация  указывается на последнем шаге размещения объявления).</div>
<div><span>1.7.3. </span>Указывать цену.</div>
<div><span>1.7.4. </span>Предлагать какие-либо услуги, не связанные с объектом.</div>
</blockquote>
<div>1.8. Срок хранения объявлений на  Сервере Buy World.RU не ограничен.</div>
<div>&nbsp;</div>
<div><span>1.9. </span>Администрация оставляет за собой право на  удаление объявлений,&nbsp;которые по её мнению&nbsp;не соответствуют или нарушают  данные Условия, а также&nbsp;блокировку доступа Пользователей к ресурсам  Сервера Buy World.RU для предотвращения дальнейших нарушений.</div>
</blockquote></div><br/></p>
</div>

<br/><br/>
<table width="100%">
<tr>
<td align="center">
<input type="checkbox" name="accept" id="accept" OnClick="javascript:document.getElementById('buttons').disabled=!this.checked" style="border:0" />
<label for=accept><?php echo $accept;?></label><br/>
<input type="hidden" value="2" id="next_type"/><input id="buttons" type="button" value="<?php echo $button_next;?> >>" disabled OnClick="next_notice('next_type'); return false;" />
</td>
</tr>
</table >
<?php }?>
<?php if ($_SESSION['notit']==2){?>
<div class="steps"><ul><li><?php echo $regulations;?></li><li class='selected'><?php echo $choicesection; ?></li><li><?php echo $TI;?></li><li><?php echo $Contact;?></li><li><?php echo $Uploadphotos;?></li></ul></div>
<table border="0" class="saleForm" width="100%">

<tr valign="top">
<td width="40%">
<span style="color: #FF0000;">*</span>
<b><?php echo $themetika_l;?>: </b>
</td>
<td>

<div style="width:150px"><select style="width:200px" name="subject" id="subject">
<option value=""></option>
	<?php 
   include("mssql_connect.php");
   $result=mysql_query("select * from theme;", $db); 
   while($row=mysql_fetch_array($result)){ 
    $id=$row['id_theme'];
	echo "<option value='$id'>";
	if(@$_SESSION['lang']==""){
     $_SESSION['lang']=1;
    }
    if(@$_SESSION['lang']==1){
     echo $row['name'];
    }
    if(@$_SESSION['lang']==2){
     echo $row['name_ger'];
    }
    if(@$_SESSION['lang']==3){
     echo $row['name_eng'];
    }
	echo "</option>";
   }	
 ?>
</select></div>
</td>
</tr>
<tr valign="top">
<td width="40%">
<span style="color: #FF0000;">*</span>

<b><?php echo $continent;?>: </b>
</td>
<td>

<div style="width:150px"><select style="width:200px;" name="mainland" id="mainland" OnChange="main_land();">
<option value=""></option>
	<?php 
   include("mssql_connect.php");
   $result=mysql_query("select * from continent;", $db); 
   while($row=mysql_fetch_array($result)){
    $id=$row['id_continent'];
	echo "<option value='$id'>";
	if(@$_SESSION['lang']==""){
     $_SESSION['lang']=1;
    }
    if(@$_SESSION['lang']==1){
     echo $row['name'];
    }
    if(@$_SESSION['lang']==2){
     echo $row['name_ger'];
    }
    if(@$_SESSION['lang']==3){
     echo $row['name_eng'];
    }
	echo "</option>";
   }	
 ?>
</select></div>
</td>
</tr>

<tr valign="top">
<td width="40%">
<span style="color: #FF0000;">*</span>

<b><?php echo $country;?>: </b>
</td>
<td>

<div style="width:250px"><select style="width:200px;" name="land" id="land">
</select></div>
</td>
</tr>

<tr valign="top">
<td width="40%">

<b></b>
</td>
<td>

<div style="width:150px"><input type="hidden" value="3" id="next_type"><input name="buttons[next]" type="button" value="<?php echo $button_next;?> >>" OnClick="next_notice('next_type');return false;">
</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="left" valign="top"><span style="font-size:80%; color:#ff0000;">*</span><?php echo $fields; ?></td>
</tr>
</table>
<?php }
if ($_SESSION['notit']==3) {?>
<div class="steps"><ul><li><?php echo $regulations;?></li><li><?php echo $choicesection; ?></li><li class='selected'><?php echo $TI;?></li><li><?php echo $Contact;?></li><li><?php echo $Uploadphotos;?></li></ul></div>
<table border="0" class="saleForm" width="100%">
<tr>
<td colspan="2">
<table width="100%" border="0">
<tr><td width="50%" valign="top">
<table width="100%" border="0">
<!--  ends -->

<tr valign="top">
<td width="40%">
<b><?php echo $themetika_l;?>: </b>
</td>
<td>

<div style="width:150px" id="subject_1"><?php echo $_SESSION['subject']; ?></div>
</td>
</tr>

</table></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width="50%" valign="top">
<table width="100%" border="0">
<!--  ends -->

<tr valign="top">
<td width="40%">
<b><?php echo $continent;?>: </b>
</td>
<td>

<div style="width:150px" id="mainland_1" ><?php echo $_SESSION['mainland']; ?></div>
</td>
</tr>
</table></td>
</tr></table>
</td></tr>
<!--  ends -->

<tr>
<td colspan="2">
<table width="100%" border="0">
<tr><td width="50%" valign="top">
<table width="100%" border="0" >
<!--  ends -->

<tr valign="top">
<td width="40%">

<b><?php echo $country;?>: </b>
</td>
<td>

<div style="width:150px" id="land_1" ><?php echo $_SESSION['land']; ?></div>
</td>
</tr>

</table></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width="50%" valign="top">
<table width="100%" border="0" >
<!--  ends -->

<tr valign="top">
<td width="40%">
<span style="color: #FF0000;">*</span>
<b><?php echo $price_l;?>: </b>

</td>
<td>

<input style="width:90px;" maxlength="11" name="price" type="text" onKeyPress ="if ((event.keyCode < 48) || (event.keyCode > 57))
  event.returnValue = false;" id="price" />&nbsp;
  <select style="width:60px" name="currency_key" id="currency_key">
	<option value="РУБ">РУБ</option>
	<option value="USD">USD</option>
	<option value="EUR">EUR</option>
</select>
</td>
</tr>


</table></td>
</tr></table>
</td></tr>
<!--  ends -->


<tr>
<td colspan="2">
<table width="100%" border="0" >
<tr><td width="50%" valign="top">
<table width="100%" border="0" >
<!--  ends -->

<tr valign="top">
<td width="40%">
<span style="color: #FF0000;">*</span>
<b><?php echo $title; ?>: </b>
</td>
<td>

<div style="width:150px"><input style="width:180px" id="topic" name="topic" type="text" /></div>
</td>
</tr>



</table></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

</tr></table>
</td></tr>
<!--  ends -->

<tr>
<td colspan="2">
<table width="100%" border="0">
<tr><td width="50%" valign="top">
<table width="100%" border="0" >
<!--  ends -->

<tr valign="top">
<td width="40%">

<b><?php echo $square_kv; ?>: </b>
</td>
<td>

<div style="width:150px"><input style="width:80px" id="square" name="square" type="text" onKeyPress ="if ((event.keyCode < 48) || (event.keyCode > 57))
  event.returnValue = false;" /></div>
</td>
</tr>


</table></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

</tr></table>
</td></tr>

<!--  ends -->

<tr>
<td valign="top" colspan="2">
<b><?php echo $Additional; ?>: </b><br>
<span style="font-size:12px">    <span style="color:red"><?php echo $forb;?></span><br>
<?php echo $forbidden;?>
</span>

<textarea style="width:100%;height:130px;" name="relation" id="relation"></textarea>

</td>
</tr>

<tr valign="top">
<td width="40%">

<b></b>
</td>
<td>
<div style="width:150px"><input type="hidden" value="4" id="next_type"><input name="buttons[next]" type="button" value="<?php echo $button_next; ?> >>" OnClick="next_notice('next_type');return false;">
</div>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="left" valign="top"><span style="font-size:80%; color:#ff0000;">*</span> <?php echo $fields; ?></td>
</tr>
</table>
<?php }
if ($_SESSION['notit']==4) {?>
<div class="steps"><ul><li><?php echo $regulations;?></li><li><?php echo $choicesection; ?></li><li><?php echo $TI;?></li><li class='selected'><?php echo $Contact;?></li><li><?php echo $Uploadphotos;?></li></ul></div>
<table border="0" class="saleForm" width="100%">
<tr valign="top">
<td  width="30%"><img src="../images/obligatory field.gif" alt="*" width="12" height="12" />&nbsp;&nbsp;<?php echo $Contactname; ?>: </td>
<td colspan="3"><input style="width:100%" size="140" maxlength="255" name="contact_name" type="text" id="contact_name"/>
</td>
</tr>
<tr valign="top">
<td width="30%"><img src="../images/obligatory field.gif" alt="*" width="12" height="12" />&nbsp;&nbsp;<?php echo $tel; ?>: </td>
<td colspan="3"><input style="width:150px" size="40" maxlength="20" name="tel" type="text" id="tel" onKeyPress ="if ((event.keyCode < 48) || (event.keyCode > 57))
  event.returnValue = false;"/>
</td></tr>
<tr valign="top">
<td width="30%"><img src="../images/obligatory field.gif" alt="*" width="12" height="12" />&nbsp;&nbsp;<?php echo $email_l; ?>: </td>
<td colspan="3"><input style="width:150px" size="40" maxlength="50" name="email" type="text" id="email"/>
</td></tr>
<tr valign="top">
<td colspan="4" align="center">

<input type="hidden" value="5" id="next_type"><input name="buttons[next]" type="button" value="<?php echo $button_next; ?> >>" OnClick="next_notice('next_type');return false;">
<span style="font-size:10px"><img src="../images/obligatory field.gif" alt="*" width="12" height="12" />&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<?php echo $fields; ?></span>

</td>
</tr>
</table>
<?php }
if ($_SESSION['notit']==5) {?>
<div class="steps"><ul><li><?php echo $regulations;?></li><li><?php echo $choicesection; ?></li><li><?php echo $TI;?></li><li><?php echo $Contact;?></li><li class='selected'><?php echo $Uploadphotos;?></li></ul></div>
<form action="podatobjavl.php" method="post" enctype="multipart/form-data">
<table border="0" class="saleForm" width="100%">

<tr valign="top">
<td colspan="2">
<img src="../images/znak2.jpg" alt="!" width="12" height="12" /><b>&nbsp;&nbsp;<?php echo $attion1;?></b>
<br>
<img src="../images/znak1.jpg" alt="!?" width="12" height="12" /><b>&nbsp;&nbsp;<?php echo $attion2;?></b>
</td>
</tr>
<tr valign="top">
<td colspan="2" align="center">
<b><?php echo $image;?>1: </b> <input size="50" name="userfile[]" type="file" id="image_1"/>
</td>
</tr>

<tr valign="top">
<td colspan="2" align="center">
<b><?php echo $image;?>2: </b> <input size="50" name="userfile[]" type="file" id="image_2"/>
</td>
</tr>

<tr valign="top">
<td colspan="2" align="center">
<b><?php echo $image;?>3: </b> <input size="50" name="userfile[]" type="file" id="image_3"/>
</td>
</tr>


<tr valign="top">
<td width="40%">

<b></b>
</td>

<td>
<div style="width:150px"><input name="buttons[next]" type="submit" value="<?php echo $button_next; ?> >>" >
</div>
</td>
</tr>
</table>
</form>
<?php }?>
