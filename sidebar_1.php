<?php include("mssql_connect.php");
$r = mysql_query("SELECT * from Contacts where id=1");
$row = @mysql_fetch_array($r);?>

  <div id="side" class="mini_sidebar"> 
<div class="mini">
<div class="mini_top">Полезное</div>
<div class="mini_content">
<?php
$res = mysql_query("SELECT * from Contacts where id=1");
while ($rows = mysql_fetch_array($res))
 {
?>  
<!--<a href="<?php /*echo $rows['link'];*/?>" target=_blank> </a>-->
<?php  
}
?>
<style type="text/css">
   but { 
   float:right;
background-color:rgb(133, 214, 83); 
color:#ffffff; 
border-width:0px 1px 1px 0px; 
border-color:#999999; 
border-style:solid;
margin-right:10px;
padding:0px 4px 0px 4px;
   }
  </style>
</br></br>
</div>
<div class="mini_bottom"></div>
</div>
<!--
<div class="mini">
<div class="mini_top">Партнеры</div>
<div class="mini_content">

<?php 
/*include("mssql_connect.php");
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
 {*/
?>
</br>
<img align= "center" src="<?php// echo $row['Title'];?>" alt="<?php// echo $row['name'];?>" /></br>
<?php  
//}
?>
</br>
<a href="/partners"><but>Партнёры</but></a>
</br>
</div>
<div class="mini_bottom"></div>
</div>-->
<div class="mini">
<div class="mini_top">Реклама</div>
<div class="mini_content">
<?php 
include("mssql_connect.php");
$r = mysql_query("SELECT MIN(id), MAX(id) from banerreclama");
$row = mysql_fetch_row($r);
$min_uid = $row[0];
$max_uid = $row[1];

// Инициализируем массив, в котором будем хранить
// идентификаторы банеров, отобранных для показа
$banners_to_show = array();

// Мы не уверены, что с первого раза сгенерируем
// достаточное количество реально существующих
// идентификаторов банеров, а потому будем
// повторять попытки, пока не получим
// желаемое число банеров или не исчерпаем
// все попытки (учёт количества попыток гарантирует,
// что мы не получим вечный цикл, если в БД нет
// достаточного количества банеров, а также не
// будем искать их слишком долго, если
// подходящих для показа банеров очень мало)

$num = 0; // Количество полученных банеров
$tries = 3; // Количество оставшихся попыток
$addrange = round($max_uid/10); // Масштаб расширения диапазона значений
while (($num<4)&&($tries-->0))
 {
  for ($i=0; $i<30; $i++)
   {
    // Собираем в массив много (в нашем случае 30, т.е.
	// в пять раз больше, чем надо, идентификаторов
	// банеров в надежде, что среди них есть 6
	// реально существующих
	$banners_to_show[] = mt_rand($min_uid, $max_uid);
   }
  
  // Извлекаем из БД банеры, идентификаторы которых
  // попадают в множество только что сгенерированных
  // значений
  $r = mysql_query("SELECT * from banerreclama WHERE id=1 AND id>3  AND 'id' IN (".implode(', ',$banners_to_show).") limit 3");
  
  // В переменную, управляющую циклом, помещаем количество
  // банеров, которые ужалось выбрать
  $num = mysql_num_rows($r);

  // Если мы не получили 7 банеров, попробуем с диапазонами
  if ($num<7)
   {
    // Подготовим запрос, WHERE часть которого имеет вид (`b_uid`>=1868 AND `b_uid`<=1888) OR (`b_uid`>=5257 AND `b_uid`<=5277) и т.д. 20 диапазонов.
    $part = '';
    foreach ($banners_to_show as $v)
     {
      $part .="('id'>=".($v-$addrange).' AND "id"<='.($v+$addrange).") OR ";
     }
    $part = substr($part, 0, strlen($part)-4);

    // Выполним запрос с диапазонами
    $r = mysql_query("SELECT * from banerreclama WHERE id=1 AND id>3 AND ".$part." order by rand() limit 3");
    $num = mysql_num_rows($r);
    
    // Увеличим масштаб диапазонов в два раза
    $addrange *=2;
   }
 }
while ($row = mysql_fetch_assoc($r))
 {
?>  
<a href="<?php echo $row['link'];?>" target=_blank> <img vspace="5" src="<?php echo $row['baner'];?>" alt="** PLEASE DESCRIBE THIS IMAGE **" /> </a>
<?php  
}
?>
</div>
<div class="mini_bottom"></div>
</div>
</center>
