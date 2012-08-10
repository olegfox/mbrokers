div class="content_1" id="content_1"></div>
<div class="content_0" id="content_0"></div>
<div class="content_2" id="content_2">
<div class="topic">
<?php
include("mssql_connect.php"); 
   $result=mysql_query("SELECT * FROM menu WHERE id=5;", $db);
   $result=@mysql_fetch_array($result);
   echo $result["head"];
?>
</div><br/>
<div class="content_" id="content_">
<?php 
   $result=mysql_query("SELECT * FROM Contacts WHERE id=1;", $db);
   $result=@mysql_fetch_array($result); 
  ?>
  <p>
	Адрес: <?php echo $result["adress"];?></p>
<p>
	Телефон: (812) <?php echo $result["telefon"];?></p>
<p>
	E-mail: <?php echo $result["e-mail"];?></p>
<p>
	skype: <?php echo $result["skype"];?></p>
<p>
	По всем вопросам обращайтесь по вышеуказанным телефонам или эл. почте.</p>
 <p><b>Схема проезда</b></p>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту  (начало) -->
<script src="http://api-maps.yandex.ru/1.1/?key=ADr2Jk4BAAAAQWdtIQIAhn_kcknWUVoMcF-UZinlfNidgOgAAAAAAAAAAACYK-c5TGHGiUJ7YRb62HeV_lP1ew==&modules=pmap&wizard=constructor" type="text/javascript"></script>
<script type="text/javascript">
    YMaps.jQuery(window).load(function () {
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID-427")[0]);
        map.setCenter(new YMaps.GeoPoint(30.274972,59.913902), 13, YMaps.MapType.MAP);
        map.addControl(new YMaps.Zoom());
        map.addControl(new YMaps.ToolBar());
        YMaps.MapType.PMAP.getName = function () { return "Народная"; };
        map.addControl(new YMaps.TypeControl([
            YMaps.MapType.MAP,
            YMaps.MapType.SATELLITE,
            YMaps.MapType.HYBRID,
            YMaps.MapType.PMAP
        ], [0, 1, 2, 3]));

        YMaps.Styles.add("constructor#pmgnmPlacemark", {
            iconStyle : {
                href : "http://api-maps.yandex.ru/i/0.3/placemarks/pmgnm.png",
                size : new YMaps.Point(28,29),
                offset: new YMaps.Point(-8,-27)
            }
        });

       map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(30.274114,59.914074), "constructor#pmgnmPlacemark", "г. Санкт-Петербург, Рижский пр., 41, лит. Г, оф. 203"));
        
        function createObject (type, point, style, description) {
            var allowObjects = ["Placemark", "Polyline", "Polygon"],
                index = YMaps.jQuery.inArray( type, allowObjects),
                constructor = allowObjects[(index == -1) ? 0 : index];
                description = description || "";
            
            var object = new YMaps[constructor](point, {style: style, hasBalloon : !!description});
            object.description = description;
            
            return object;
        }
    });
</script>

<div id="YMapsID-427" style="width:441px;height:371px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;"></div>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->  </div>  </div>
