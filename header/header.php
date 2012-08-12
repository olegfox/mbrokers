<?php 
/*@session_start();
function head($id){
  include('./mssql_connect.php');
  $result=mysql_query("SELECT * FROM menu WHERE id=$id;", $db);
  $result=@mysql_fetch_array($result);
  echo $result["head"];
}*/
?>
<?php include("mssql_connect.php");
$r = mysql_query("SELECT * from Contacts where id=1");
$row = @mysql_fetch_array($r);?>
<script type="text/javascript">
 window.onscroll=scrolling;
	$(document).ready(function() {
		$('#container').coinslider({
		effect: 'straight', // random, swirl, rain, 
		spw: 2,
		sph: 2
});
	});
</script>
<noscript><div id='TB_overlay' style="padding-top:25%; opacity: 1;"><center>
<div class="noscript">
У Вас отключён JavaScript. 
Включите его в настройках браузера и обновите страницу</div></center></div></noscript>
<div id="calcu2"><div id="calcu3"></div><div id="calcu" onclick="calc_active(0);"></div></div>
<div id="calcu_2"><div id="calcu_3"></div><div id="calcu_" onclick="calc_active_(0);"></div></div>
<div class="_topmenu"><?php  include('menu.php'); ?></div>
<div class="logo_menu">
<a href="/"><img src="/images/logotip.png" width="190px" height="110px" style="margin-bottom:20px;" alt="Главная" /></a>
<br/>
  </div>
 <div class="telefon"><img src="/images/GreenPhone.png" height="35" width="35" alt="Телефон" /> (812) <big><b><?php echo $row["telefon"];?></b></big></div>
 

