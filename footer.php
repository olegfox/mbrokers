<div class="label"></div>
<div class="copy">&copy; M-brokers 2010-2012</div>

<div id="up2" onclick="scrollinger(); return false;">Наверх</div>
<div class="statistic">
<!-- Yandex.Metrika informer -->
<a href="http://metrika.yandex.ru/stat/?id=7289497&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/7289497/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
var ya_params = {/*Здесь параметры визита*/};
</script>

<div style="display:none;"><script type="text/javascript">
(function(w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter7289497 = new Ya.Metrika({id:7289497, enableAll: true,params:window.ya_params||{ }});
        }
        catch(e) { }
    });
})(window, "yandex_metrika_callbacks");
</script></div>
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
<noscript><div><img src="//mc.yandex.ru/watch/7289497" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --></div> 
<!--<div class="statistic">
<a href="http://yandex.ru/cy?base=0&amp;host=m-brokers.ru"><img src="http://www.yandex.ru/cycounter?m-brokers.ru" width="88" height="31" alt="Яндекс цитирования" border="0" /></a></div>-->
<div class="statistic">
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t53.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров и"+
" посетителей за 24 часа' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->
</div>
<div class="statistic">
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">//<![CDATA[
var a='';js=10;d=document;
try{a+=';r='+escape(d.referrer);}catch(e){}try{a+=';j='+navigator.javaEnabled();js=11;}catch(e){}
try{s=screen;a+=';s='+s.width+'*'+s.height;a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth);js=12;}catch(e){}
try{if(typeof((new Array).push('t'))==="number")js=13;}catch(e){}
try{d.write('<a href="http://top.mail.ru/jump?from=2054176" target=_blank><img src="http://d8.c5.bf.a1.top.mail.ru/counter?id=2054176;t=214;js='+js+
a+';rand='+Math.random()+'" alt="Рейтинг@Mail.ru" style="border:0;" height="31" width="88" \/><\/a>');}catch(e){}//]]></script>
<noscript><p><a href="http://top.mail.ru/jump?from=2054176"><img src="http://d8.c5.bf.a1.top.mail.ru/counter?js=na;id=2054176;t=214" 
style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a></p></noscript>
<!-- //Rating@Mail.ru counter --></div>
<div class="statistic">
<!-- begin of Top100 code -->
<script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2491471"></script>
<noscript>
<a href="http://top100.rambler.ru/navi/2491471/">
<img src="http://counter.rambler.ru/top100.cnt?2491471" alt="Rambler's Top100" border="0" />
</a>

</noscript>
<!-- end of Top100 code -->
</div>
<div class="commer">
<?php 
/*
include("mssql_connect.php");
$r = mysql_query("SELECT MIN('id'), MAX('id') from baner");
$row = mysql_fetch_row($r);
$min_uid = $row[0];
$max_uid = $row[1];
$banners_to_show = array();
$num = 0; // Количество полученных банеров
$tries = 5; // Количество оставшихся попыток
$addrange = round($max_uid/10); // Масштаб расширения диапазона значений
while (($num<6)&&($tries-->0))
 {
  for ($i=0; $i<30; $i++)
   {
	$banners_to_show[] = mt_rand($min_uid, $max_uid);
   }
  $r = mysql_query("SELECT * from banerreclama WHERE id=1 AND id>5  AND 'id' IN (".implode(', ',$banners_to_show).") limit 5");
  $num = mysql_num_rows($r);
  if ($num<6)
   {
     $part = '';
    foreach ($banners_to_show as $v)
     {
      $part .="('id'>=".($v-$addrange).' AND "id"<='.($v+$addrange).") OR ";
     }
    $part = substr($part, 0, strlen($part)-4);
    $r = mysql_query("SELECT * from baner WHERE id=1 AND id>5 AND ".$part." order by rand() limit 5");
    $num = mysql_num_rows($r);
    $addrange *=2;
   }
 }
while ($row = mysql_fetch_assoc($r))
 {
?>  
<a href="<?php echo $row['link'];?>" target=_blank style="text-decoration: none;">
			<img src="<?php echo $row['image'];?>" style="height:31px; border:0;" alt="** PLEASE DESCRIBE THIS IMAGE **" />
			</a>
<?php  
}*/
?>
  
</div>
