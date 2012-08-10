<?php @session_start();  
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
<!--*ФИО
*Электронная почта
Компания
Поля для проставления галочек: 
*Все тематики (при выборе данного поля автоматически проставляются галочки напротив всех остальных полей); 
Поля с названиями всех закладок в два столбца.
*Поле для ввода знаков с изображения  (система защиты от роботов) – предложить наиболее оптимальную систему.
Внизу кнопка: Подписаться на рассылку.-->
<form method="post">
<div class="rassulka">
<table border="0" align="center" CELLSPACING="5" >
<tr style="text-align:left;  font:Arial; font-weight:bold;"><td>* <?php echo $fio_l; ?></td> <td><input type="text" name="fio" id="fio" /></td></tr>
<tr style="text-align:left;  font:Arial; font-weight:bold;"><td>* <?php echo $email_l; ?></td> <td> <input type="text" name="email" id="email" /></td></tr>
<tr style="text-align:left;  font:Arial; font-weight:bold;"><td>* <?php echo $vubortheme; ?></td> <td> <select style="width:150px;"  name="themka" id="themka" >
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
</select></td>
</tr>
<tr style="text-align:left;  font:Arial; font-weight:bold;"><td>* <?php echo $codeskartinki; ?></td> <td>
<input type="text" name="code" id="code" /></td></tr>
<tr ><td colspan='2'><br/><br/><div class="captcha"></div><br/><br/></td></tr>
<tr ><td colspan='2'><input type="button" OnClick="mailrassulka();" value="<?php echo $podpisrassulka; ?>" name="submit" /></td></tr>
<tr ><td id="otvet" colspan='2'></td></tr>
<tr ><td colspan='2'>* <?php echo $pole; ?></td></tr>
</table> 
</div>
</form>