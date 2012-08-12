<?php 
@session_start(); ?>
<script type="text/javascript" src="./script/script.js">
</script>
<?php include("mssql_connect.php");
   $result=mysql_query("select * from page where dob=1 order by id_page DESC limit 5 ;", $db);?>
   <table style='border:solid 0px;' width="100%" cellspacing="9" cellpadding="0">
   <?php
   while($row=mysql_fetch_array($result)){ 
   $object=$row['id_object'];
     $res=mysql_query("select * from object where id_object='$object';", $db); $roq=mysql_fetch_array($res);
   $country=$roq['country_id_country'];
  $res=mysql_query("select * from country where id_country='$country';", $db); $ro=mysql_fetch_array($res);
   ?>
   <tr>
   <td style='text-align:left; border: solid 0px;'>
   <a class="last_country" name="a<?php echo $roq["theme_id_theme"];?>" href="#" OnClick="
  jQuery.get('main/content_script.php', {'id_country':<?php echo $roq["country_id_country"];?>,'idd':<?php echo $roq["theme_id_theme"];?>,'posled':1}, function (data){
  topmenu(name);
  document.getElementById('content_2').innerHTML=data;
});
 return false;">
	<?php 
	if(@$_SESSION['lang']==""){
     $_SESSION['lang']=1;
    }
    if(@$_SESSION['lang']==1){
      
		echo $ro['name'].": ";?><br />
	
    <?php
	}
    if(@$_SESSION['lang']==2){
      echo $ro['name_ger'].": ";?> <br />
	 
    <?php
    }
    if(@$_SESSION['lang']==3){
      echo $ro['name_eng'].": ";?> <br />
	 
    <?php
    } echo '</a>';
?>
</td>
   
   <td style='text-align:left; border:white solid 0px;'>
   <a class="last" href="#" name="a<?php echo $roq["theme_id_theme"];?>" OnClick="
  jQuery.get('main/content_script.php', {'id_country':<?php echo $roq["country_id_country"];?>,'idd':<?php echo $roq["theme_id_theme"];?>, 'id_object':<?php echo $row["id_object"];?>, 'id_page':<?php echo $row["id_page"];?>, 'posled':1 }, function (data){
  topmenu(name);
  document.getElementById('content_2').innerHTML=data;
});
 return false;">
	<?php
	if(@$_SESSION['lang']==""){
     $_SESSION['lang']=1;
    }
    if(@$_SESSION['lang']==1){
      echo $row['opisanie'];
	  ?><br />
    <?php
	}
    if(@$_SESSION['lang']==2){
		echo $row['opisanie_ger'];
	?>
	  <br />
    <?php
    }
    if(@$_SESSION['lang']==3){
      echo $row['opisanie_eng'];
	  ?> <br />
    <?php
    } echo '</a>';?>
	</td></tr>
	<?php
	} ?>
	</table>
