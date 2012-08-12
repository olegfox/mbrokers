?php
@session_start();
function theme($id){
	include('./mssql_connect.php');
	$result=mysql_query("SELECT * FROM theme WHERE id_theme=$id;", $db);
	$result=@mysql_fetch_array($result);
	echo $result["name"];
}
?>
<div id="main_menu">
<ul>
		<li style="width:165px;"><a href="/car_insurance/" class="dir"><?php theme(1); ?></a>
		<ul style="width:190px;">
			<li><a href="/car_insurance/kasko"><?php theme(3); ?></a></li>
			<li class="brake_1"><a href="/car_insurance/osago"><?php theme(5); ?></a></li>
			<li class="brake_1"><a href="/car_insurance/green_card"><?php theme(2); ?></a></li>
		</ul>
		</li>
        <li class="brake" style="width:220px;"><a href="/health_insurance/" class="dir"><?php theme(10); ?></a>
		<ul style="width:190px;">
			<li><a href="/health_insurance/life_insurance/"><?php theme(9); ?></a></li>
			<li class="b"><a href="/health_insurance/accident_insurance/"><?php theme(4); ?></a></li>
		</ul>
		</li>
		<li class="brake" style="width:115px;"><a href="/property_insurance/"><?php theme(7); ?></a></li>
</ul>
</div>
<div class="poiskvuborcontent_1">
  <input type="text" class="poiskvvod" id="poiskvvod" 
  onfocus="if(this.value=='Поиск...') this.value='';" 
  onblur="if(this.value=='') {this.value='Поиск...'; document.getElementById('poisk_clear').style.display='none';}" 
  onkeypress="if(event.keyCode==13) {press_poisk();return false;} else document.getElementById('poisk_clear').style.display='block';" 
  value="Поиск..." alt="Поиск" maxlength="20"/>
  <div class="poisk_button" onclick="if(document.getElementById('poiskvvod').value !='Поиск...') { press_poisk();return false;}"></div>
  <div class="poisk_clear" id="poisk_clear" 
  onclick="document.getElementById('poiskvvod').value='Поиск...'; document.getElementById('poisk_clear').style.display='none';"></div>
  </div>
