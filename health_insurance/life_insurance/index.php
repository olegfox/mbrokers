<?php include("mssql_connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">
<head>
<title>М-брокерс | ДМС</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="страхование, страховой брокер, КАСКО, ОСАГО, " />
<meta name="author" content="" />
<meta name="description" content="ДМС" />
<?php include("../../conf.php"); ?>
</head>
<body onload="headermenuonlo(); return false;"> <!--topmenu_resize();-->
<div id="style_styled"></div>
<?php include("../../proverkaip.php"); ?>
<div class="all" id="all">
<div class="top"></div>
<div class="fon"> 
	<div class="header"><?php  include("../../header/header.php"); ?></div>
	<div class="topmenu"><?php  include("../../main/topmenu.php");?></div>
	<div class="wind">
		<div class="sidebar"><?php include("../../sidebar.php");?></div>
		<div class="pageandmenu">
		<div class="container_">
			<div class="container" id="container">
			<?php  include("../../slide.php");?>
			</div>
			</div>
			<div class="content" id="content"><?php  include("content.php");?></div>
		</div>	
	</div>
	<div class="footer"><div class="foot"><?php  include("../../footer.php");?></div></div>
</div>
<div class="bottom"></div>
</div>
<script type="text/javascript">
if (window.addEventListener) {
window.addEventListener('load', hideLoading, false);
} //else if (window.attachEvent) {
//window.attachEvent("onload", hideLoading);
//}
else {
hideLoading();
}
</script>
</body>
</html>
