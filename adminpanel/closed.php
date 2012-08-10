<?php
@session_start();
$_SESSION['log']="";
include('mssql_connect.php');
$time=date("U");
$result=mysql_query("SELECT * FROM ip;", $db);
if(!empty($result)){
 while($row=mysql_fetch_array($result)){
  $razn=$time-$row['time'];
  if($razn>=86400){
   $ip=$row['ip'];
   $result1=mysql_query("delete FROM ip where ip='$ip';", $db);
  }
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr" >
<head>
<title>Панель управления</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./style-adminpanel.css" type="text/css" />
<link rel="stylesheet" href="./dialogImage/dialog.css" type="text/css" />
<link rel="stylesheet" href="./clock/clock.css" type="text/css" />
<script type="text/javascript" src="./dialogImage/dialog.js"></script>
<link rel="shortcut icon" href="/images/logo.ico" />
<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
<script src="../script/script.js" type="text/javascript"></script>
<script src="./clock/clock.js" type="text/javascript"></script>
<script type="text/javascript">
function createObject() {
	var request_type;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){
		request_type = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		request_type = new XMLHttpRequest();
	}
	return request_type;
} 
var http3 = createObject(); 
function searchNameqReply() {
if(http3.readyState == 4){
window.location.reload();
}
}
function ban(ip){
	var ipp = encodeURI(ip);
	var nocache = Math.random();
	http3.open('get', 'ban.php?ban='+ipp+'&nocache = '+nocache);
	http3.onreadystatechange =  searchNameqReply;
	http3.send(null);
	//window.location.reload();
}
function rasban(ip){
	var ipp = encodeURI(ip);
	var nocache = Math.random();
	http3.open('get', 'rasban.php?rasban='+ipp+'&nocache = '+nocache);
	http3.onreadystatechange =  searchNameqReply;
	http3.send(null);
	//window.location.reload();
}
function pageverh(){
	document.getElementById('page_verh_menu').value=<?php if(@$_SESSION['pageverh']=="") $_SESSION['pageverh']=1; echo $_SESSION['pageverh'];?>;	  
}
function pageosn(){
	document.getElementById('page_osn_menu').value=<?php if(@$_SESSION['pageosn']=="") $_SESSION['pageosn']=1; echo $_SESSION['pageosn'];?>;	  
}
function size(){
<?php if(!isset($_SESSION['size2'])) $size='../images/baner/200x50/'; else $size=$_SESSION['size2'];?>
document.getElementById('<?php echo $size; ?>').selected=true;
}
var valuePam=1; 
var numberAction=0;
function button_menuActive(){
    var bM=document.getElementById('button_menu');
    if(valuePam>1 && numberAction==1){
      bM.style.background='#565a5c url(./images/button_topmenu.png) 10px 10px no-repeat';
      bM.style.opacity = valuePam/10;
      bM.style.filter = 'alpha(opacity=' + valuePam*10 + ')';
      if(valuePam==1.5){
	bM.style.height='50px';
	bM.style.width='125px';
	document.getElementById('lmenu').style.display='none';
	bM.style.opacity = 1;
	bM.style.filter = 'alpha(opacity=' + 1 + ')';   
      }
      valuePam=valuePam-0.5;
      if(valuePam!=1)setTimeout(button_menuActive,20);
    }
    if(valuePam==1 && numberAction==1){
      numberAction=0;
      return;
    }
  //if(bM.style.opacity < 1.05){
    if(valuePam<11 && numberAction==0){
      bM.style.background='white url(./images/button_topmenu2.png)  10px 10px no-repeat';
      bM.style.opacity = valuePam/10;
      bM.style.filter = 'alpha(opacity=' + valuePam*10 + ')';
      if(valuePam==1){
	bM.style.height='auto';
	bM.style.width='212px';
	document.getElementById('lmenu').style.display='block';  
      }
     valuePam=valuePam+0.5;
     if(valuePam!=11)
      setTimeout(button_menuActive,20);
    }
    if(valuePam==11 && numberAction==0){
      valuePam=valuePam-0.5;
      numberAction=1;
      return;
    }
}
var contentOpacity=10;
var contentOpacity2=0;
var src=0;
function blurcontentHide(object){
  var bM2=document.getElementById('content');
  if(src==0)
    src=object.href;
  bM2.style.opacity = contentOpacity/10;
  bM2.style.filter = 'alpha(opacity=' + contentOpacity*10 + ')';
  contentOpacity=contentOpacity-0.5;
  if(contentOpacity>=0){setTimeout(blurcontentHide,20);} 
  else {window.location.href=src;}
  //alert("gjghj");
}
function blurcontentShow(){
  var bM2=document.getElementById('content');
  bM2.style.opacity = contentOpacity2/10;
  bM2.style.filter = 'alpha(opacity=' + contentOpacity2*10 + ')';
  contentOpacity2=contentOpacity2+0.5;
  if(contentOpacity2<=11){setTimeout(blurcontentShow,20);} 
}
function contentDetectorHeight(){
 //alert(document.getElementById('header').height);
 document.getElementById('content').style.height=window.innerHeight-window.innerHeight*0.15+'px';
 document.getElementById('headerPage').style.padding='10px 10px 0px '+window.innerWidth/2.5+'px';
}
if(window.location.href=="http://<?php echo $_SERVER['SERVER_NAME'] ?>/adminpanel/closed.php?baner=2")       window.onload=size;
if(window.location.href=="http://<?php echo $_SERVER['SERVER_NAME'] ?>/adminpanel/closed.php?baner=1")       window.onload=baner;
if(window.location.href=="http://<?php echo $_SERVER['SERVER_NAME'] ?>/adminpanel/closed.php?verh=1")       window.onload=pageverh;
if(window.location.href=="http://<?php echo $_SERVER['SERVER_NAME'] ?>/adminpanel/closed.php?osn=1")       window.onload=pageosn;
 </script>
</head>
<body style="background:white;" onload="blurcontentShow();contentDetectorHeight();">
<div class="all" id="all" style="background:white;">
<?php
if (isset($_SESSION['user_id']))
{
?>

 <div class="header" id="header">
 	<div class="button_menu" id="button_menu" onclick="button_menuActive();">
 		<div id="lmenu" style="display:none;padding-top:50px;">
  			<?php include("leftmenu.php");?>
 		</div>
	</div>
	<div id='headerPage' style="float:left; height:32px; line-height:32px; font-weight:bold; color:white; font-size:20pt;">
	</div>
	<div style="float:right; padding:10px 10px 0px 0px;"><a class="prosmo" href="login.php?logout" title="Выход"><img id='power' src="./images/power_icon.png" alt="выход" onmouseover="this.src='./images/power_icon2.png'" onmouseout="this.src='./images/power_icon.png'"></a>
	</div>
	<div style="float:right;height:50px; line-height:50px; padding-right:10px; color:white;">
  		<?php
 		if (@$_SESSION['user_status']=='administrator'){
 		?>
		<b>Администратор</b><br/>
   		<?php
		}
 		?>
  		<?php
 		if (@$_SESSION['user_status']=='moderator'){
 		?>
 		<b>Модератор</b><br/>
   		<?php
		}
 		?>
 	</div>
	<div id="clock">
		<?php include("./clock/clock.php");?>
	</div>
</div>
<div class="content" id="content">
 	<div class="page">
		<?php include("page.php");?>
	</div>
</div>
<?php
// показываем защищенные от гостей данные.
}
else
{
//header('Location: login.php');
?>
<script type="text/javascript"> window.location.href="login.php";</script>
<?php
}
?>
</div>
 <script type="text/javascript">   

 </script>
</body>
</html>
