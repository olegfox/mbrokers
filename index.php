<?php
include("mssql_connect.php");
include_once("configuration.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
<title>М-брокерс | Главная</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="страхование, страховой брокер, КАСКО, ОСАГО, Санкт-Петербург, СПБ, М-брокерс.ру" />
<meta name="author" content="" />
<meta name="description" content="Главная страница" />
<meta name='yandex-verification' content='4191b74a2d22671c' />
<meta name="google-site-verification" content="PoEQgbLPSoHJs9tXN6k3ICq5GlkiRKG5SQ-M67O-A94" />
<?php include("conf.php");?>
</head>
<body onload="headermenuonlo(); return false;">
<div id="style_styled"></div>
<?php include("proverkaip.php"); ?>
<div class="all" id="all">
<div class="top"></div>
<div class="fon"> 
	<div class="header"><?php  include("header/header.php"); ?></div>
	<div class="topmenu"><?php  include("main/topmenu.php");?></div>
	<div class="wind">
		<div class="sidebar"><?php include("sidebar.php");?></div>
		<div class="pageandmenu">
		<div class="container_">
			<div class="container" id="container">
			<?php  include("slide.php");?>
			</div>
			</div>
			<div class="content" id="content"><?php  include("main/content.php");?></div>
		</div>	
	</div>
	<div class="footer"><div class="foot"><?php  include("footer.php");?></div></div>
</div>
<div class="bottom"></div>
</div>
</body>
</html>
