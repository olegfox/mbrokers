<?php
  include('mssql_connect.php');
 $idobject=@$_GET['id_object'];
 $result=mysql_query("select * from page where id_page=$idobject",$db);
 if($result){
  $row=mysql_fetch_array($result);
  $idobject2=$row['id_object'];
   $result1=mysql_query("select * from object where id_object=$idobject2",$db);
   $row=mysql_fetch_array($result1);
   $country=$row['country_id_country'];
    $theme=$row['theme_id_theme'];
   $result2=mysql_query("select * from object where country_id_country=$country and theme_id_theme=$theme",$db);
   //$row=mysql_fetch_array($result1);
	echo "Выберите объект в который вы хотите добавить объявление<br/><br/>";
	echo "<select id='sel'>";   
    while($row=mysql_fetch_array($result2)){
	 echo "<option value='".$row['id_object']."'>".$row['hint']."</option>";
    }
	echo "</select><br/><br/>";
    echo "<input name='".$idobject."' id='$theme' type='button' value='Добавить объявление' OnClick='dobavobjavl(id, name);' /><br/><br/>";
    echo "<input type='button' value='Отмена' OnClick='closedobavobjavl();' /><br/><br/>";	
   }
?>