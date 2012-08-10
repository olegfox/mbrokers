<?php
 @header("Content-type: text/html; charset=utf-8");
@session_start();
$_SESSION['size']='../images/baner/200x50/';
//include ('mssql_connect.php');
if (isset($_GET['logout']))
{
	if (isset($_SESSION['user_id']))
		unset($_SESSION['user_id']);
	setcookie('login', '', 0, "/");
	setcookie('password', '', 0, "/");
	// и переносим его на главную
	//header('Location: index.php');
	?>
			<script type="text/javascript">window.location.href="index.php";</script>
			<?php
	exit;
}
print('<div class="all_form">');
print('<form name="vhod" action="log.php" method="post">');
print('<div class="panel_left">');
print('</div>');

print('<div class="panel_t">');
print('<div class="panel_top_left">');
print('</div>');
print('<div class="panel_top">');
print('</div>');
print('<div class="panel_top_right">');
print('</div>');
print('</div>');

print('<div class="vhod">');
print('<img src="./images/panel_head.png" width="451px" height="127px" ><br/>');
print('<table border=0 width="600px" align="center">');
print('<tr>');
print('<td align="center" height="43px" style="background:url(./images/login.png) 50% no-repeat;" colspan=3>');
print('</td>');
print('</tr>');
print('<tr>');
print('<td align="center" height="72px" colspan=3 style="background:url(./images/input_text.png) 50% no-repeat;">');
print('<input type="text" name="login" id="login" />');
print('</td>');
print('</tr>');
print('<tr>');
print('<td align="center" height="43px" style="background:url(./images/pass.png) 50% no-repeat;" colspan=3>');
print('</td>');
print('</tr>');
print('<tr>');
print('<td align="center" height="72px" colspan=3 style="background:url(./images/input_text.png) 50% no-repeat;">');
print('<input type="password" name="password" id="pass" />');
print('</td>');
print('</tr>');
print('<tr>');
print('<td align="center" height="43px" style="padding-top:50px;">');
print('<input type="checkbox" name="remember">');
print('</td>');
print('<td align="center" width="189px" height="43px" style="background:url(./images/zapomn.png) 0px 70px no-repeat; padding-top:50px;">');
print('</td>');
print('<td align="center" height="43px" style="padding-top:50px;">');
if (@$_SESSION['log']>=2){?>
<div id="pole" style="width:100%; height:100%; background:url(./images/pole.png) repeat; position:fixed;top:0px;left:0px; z-index:999;">
<div style="position:fixed; top:25%; left:40%; width:200px; height:200px; border:solid 0px; background:white;z-index:1000;">
Код безопасности<br/>
<div class="capcha"></div>
<br/>
	 Введите код:<br/>
	 <input type="text" name="capch" /><br/>
<input type="button" class="ok_button" Onclick="javascript:document.getElementById('pole').style.display='none';"/><br/>
</div>
</div>
<?php
}
print('<input type="submit" class="vhodbutton" id="vhodbutton" value=""><br/>');
print('</td>');
print('</tr>');
print('</table>');
print('</div>');

print('<div class="panel_b">');
print('<div class="panel_bottom_left">');
print('</div>');
print('<div class="panel_bottom">');
print('</div>');
print('<div class="panel_bottom_right">');
print('</div>');
print('</div>');

print('<div class="panel_right">');
print('</div>');
print('</form>');
print('</div>');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./style-adminpanel.css" type="text/css" />
<link rel="shortcut icon" href="/images/logo.ico" />
</head>
<body>
</body>
</html>
