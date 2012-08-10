<?php include("mssql_connect.php");
$r = mysql_query("SELECT * from Contacts where id=1");
$row = @mysql_fetch_array($r);?>
<!--<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
<div class="buttons"><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki"></div>
<a href="mailto: <?php echo $row["e-mail"];?>" title="Обратная связь"><div class="envelope"></div></a>
<a href="javascript://" onclick="atoprint('content_');" title="Распечатать"><div class="print"></div></a></div>-->
<center>
	<div id="side" class="mini_sidebar"> 
		<div class="mini">
			<div class="mini_top">Спецпредложения</div>
			<div class="mini_content">
<?php 
$r = mysql_query("SELECT DATE_FORMAT(date, '%d.%m.%Y'),text from action order by date desc limit 3");
while ($row = mysql_fetch_array($r))
 {
?>
<table  width="100%" cellpadding="7" cellspacing="1" style="text-align:left">
	<tr>
		<td colspan="5" align="left">
			<span class="list_date">
				<span><?php echo $row["DATE_FORMAT(date, '%d.%m.%Y')"]; ?></span>
			</span>
		</td>	
	</tr>
	<tr>
		<td> </td>
		<td colspan="3" valign="top" width="99%">
			<?php echo $row["text"]; ?>
		</td>
		<td> </td>
	</tr>
	<tr>	
		<td colspan="2"> </td>
		<td valign="top" class="tr" width="100%"></td>
		<td colspan="2"> </td>
	</tr>
</table>
<?php  
}
?>
<div class="but"><a href="/action">Все спецпредложения</a></div>
			</div>
			<div class="mini_bottom"></div>
		</div>
		<div class="mini">
			<div class="mini_top">Партнеры</div>
			<div class="mini_content">

<?php
include("mssql_connect.php");
$r = mysql_query("SELECT MIN(id), MAX(id) from partners");
$row = mysql_fetch_row($r);
$min_uid = $row[0];
$max_uid = $row[1];
$banners_to_show = array();
$num = 0; // Количество полученных банеров
$tries = 6; // Количество оставшихся попыток
$addrange = round($max_uid/10); // Масштаб расширения диапазона значений
while (($num<7)&&($tries-->0))
 {
  for ($i=0; $i<30; $i++)
   {
	$banners_to_show[] = mt_rand($min_uid, $max_uid);
   }
  $r = mysql_query("SELECT * from partners WHERE id=1 AND id>6  AND 'id' IN (".implode(', ',$banners_to_show).") limit 6");
  $num = mysql_num_rows($r);
  if ($num<7)
   {
    $part = '';
    foreach ($banners_to_show as $v)
     {
      $part .="('id'>=".($v-$addrange).' AND "id"<='.($v+$addrange).") OR ";
     }
    $part = substr($part, 0, strlen($part)-4);
    $r = mysql_query("SELECT * from partners WHERE id=1 AND id>6 AND ".$part." order by rand() limit 6");
    $num = mysql_num_rows($r);
    $addrange *=2;
   }
 }
while ($row = mysql_fetch_assoc($r))
 {
?>
<br/>
<img style="margin:0 auto;" src="<?php echo $row['Title'];?>" alt="<?php echo $row['name'];?>" /><br/>
<?php  
}
?>
<div class="but"><a href="/partners">Все компании партнеры</a></div>
			</div>
			<div class="mini_bottom"></div>
		</div>
	</div>
</center>
