<script type="text/javascript">
 var izmen=0;
 function download_img_url(idpage){
 img=document.getElementById('imgpredl').value;
  $.get("downloadimg.php", {'idpage':idpage, 'img':img}, function(data){window.location.reload();});
 }
 function izmen(izme){
  izmen=izme;
 }
 function deleteUser(login){
    var oRequest;
    try {
        oRequest=new XMLHttpRequest();
    } catch (e)   {
     try {
          oRequest=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
          try {
              oRequest=new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                   alert("Your browser does not support AJAX!");
                  return false;
               }
         }
      }
   oRequest.onreadystatechange=function() {
    if(oRequest.readyState==4)
      {
	window.location.reload();
      }
    }
  var paramString = "?login="+login;
  oRequest.open("GET","deleteuser.php"+paramString,true);
  oRequest.send(null);
 }
 function mouseover(id){
  document.getElementById(id).style.background='rgb(224, 239, 254)';
  document.getElementById('blockobjavl').style.display='block';
 }
  function mouseclick(id){
  document.getElementById(id).style.background='rgb(224, 239, 254)';
  document.getElementById('blockobjavl').style.display='block';
  $.get('prosmotrobjavl.php', {'id_object':id}, function(data){document.getElementById('blockobjavl').innerHTML=data;});  
 }
 function mouseout(id){
  document.getElementById(id).style.background='silver';
  ///document.getElementById('blockobjavl').style.display='none'; 
  //document.getElementById('blockobjavl').innerHTML='';   
 }
 function mouseover2(id){
  document.getElementById(id).style.background="rgb(255, 254, 213)";
  document.getElementById(id).style.cursor="pointer"; 
 }
  function delete_predl(id){
  $.get('delete_predl.php', {'id':id}, function(data){alert(data);window.location.reload();}); 
 }
 function mouseout2(id){
  document.getElementById(id).style.background="rgb(228, 226, 227)"; 
}
 function izmenimg(id){
  document.getElementById('spampredl').style.display='block';
  $.get('spampredl.php', {'id_page':id}, function(data){document.getElementById('spampredl').innerHTML=data;}); 
 }
 function dobavobjavl_show(id){
  $.get('dobavobjavl_show.php', {'id_object':id}, function(data){
   var object=document.getElementById('spamobjavl');
   object.style.display="block";
   object.innerHTML=data;
  });
 }  
 function dobavobjavl(id_theme, id2){
  id=document.getElementById('sel').value;
  $.get('dobavobjavl.php', {'id_theme':id_theme, 'id_page':id2, 'id_object':id}, function(data){window.location.reload();});
 }
 function closedobavobjavl(){
   var object=document.getElementById('spamobjavl');
   object.style.display="none"; 
 }
 function closedobavobjavl2(){
   var object=document.getElementById('spampredl');
   object.style.display="none"; 
 } 
 function deleteobjavl(id){
  $.get('deleteobjavl.php', {'id_object':id}, function(data){window.location.reload();});
 } 
 function deletezayavka(id){
    var oRequest;
    try {
        oRequest=new XMLHttpRequest();
    } catch (e)   {
     try {
          oRequest=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
          try {
              oRequest=new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                   alert("Your browser does not support AJAX!");
                  return false;
               }
         }
      }
   oRequest.onreadystatechange=function() {
    if(oRequest.readyState==4)
      {
	window.location.reload();
      }
    }
  var paramString = "?id="+id;
  oRequest.open("GET","deletezayavka.php"+paramString,true);
  oRequest.send(null);
 }
 function deletepartners(id){
    var oRequest;
    try {
        oRequest=new XMLHttpRequest();
    } catch (e)   {
     try {
          oRequest=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
          try {
              oRequest=new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                   alert("Your browser does not support AJAX!");
                  return false;
               }
         }
      }
   oRequest.onreadystatechange=function() {
    if(oRequest.readyState==4)
      {
	window.location.reload();
      }
    }
  var paramString = "?id="+id;
  oRequest.open("GET","deletepartners.php"+paramString,true);
  oRequest.send(null);
 }  
function dobavpartners(){
 var partnersName=document.getElementById('partnersName').value;
 var partnersImage=document.getElementById('partnersImage').value;
 var partnersLink=document.getElementById('partnersLink').value;
 if(partnersName && partnersImage && partnersLink){
    var oRequest;
    try {
        oRequest=new XMLHttpRequest();
    } catch (e)   {
     try {
          oRequest=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
          try {
              oRequest=new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                   alert("Your browser does not support AJAX!");
                  return false;
               }
         }
      }
   oRequest.onreadystatechange=function() {
    if(oRequest.readyState==4)
      {
	//alert(oRequest.responseText);
	window.location.reload();
      }
    }

  var paramString = "?partnersName="+partnersName+"&partnersImage="+partnersImage+"&partnersLink="+partnersLink;
  oRequest.open("GET","dobavparntners.php"+paramString,true);
  oRequest.send(null);  
 }
 else{
  if(!partnersName) document.getElementById('partnersName').style.backgroundColor="red";
  if(!partnersImage) document.getElementById('partnersImage').style.backgroundColor="red";
  if(!partnersLink) document.getElementById('partnersLink').style.backgroundColor="red";
 }
}
function hideDialogImagePartners(){
  document.getElementById('fonDialogImagePartners').style.display="none";
  document.getElementById('dialogPartners').style.display="none";
}
dirus="";
function dialogImagePartners(dir){
 if(!document.getElementById('fonDialogImagePartners') || document.getElementById('nazadImagePartners')){
  if(!document.getElementById('fonDialogImagePartners')){
    document.getElementById('all').innerHTML+="<div id='fonDialogImagePartners' style='position:fixed; z-index:3000; background:url(./images/pole.png) repeat; width:100%; height:110%; top:-10%; left:-0%;' Onclick='hideDialogImagePartners();'></div>";
  }
  var oRequest;
    try {
        oRequest=new XMLHttpRequest();
    } catch (e)   {
     try {
          oRequest=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
          try {
              oRequest=new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                   alert("Your browser does not support AJAX!");
                  return false;
               }
         }
      }
   oRequest.onreadystatechange=function() {
    if(oRequest.readyState==4)
      {
	
	if(!document.getElementById('dialogPartners')){
	  document.getElementById('all').innerHTML+="<div id='dialogPartners' style='border:solid 1px; position:fixed; width:90%; margin:0 5% 0 5%;'>"+oRequest.responseText+"</div>";
	}
	else{
	  document.getElementById('dialogPartners').innerHTML=oRequest.responseText;
	}
      }
    }
  dirus=dir;
  var paramString = "?partners=1&dir="+dir;
  oRequest.open("GET","./dialogImage/dialog.php"+paramString,true);
  oRequest.send(null);  
 }
 else{
  document.getElementById('fonDialogImagePartners').style.display="block";
  document.getElementById('dialogPartners').style.display="block";
  var oRequest;
    try {
        oRequest=new XMLHttpRequest();
    } catch (e)   {
     try {
          oRequest=new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
          try {
              oRequest=new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                   alert("Your browser does not support AJAX!");
                  return false;
               }
         }
      }
   oRequest.onreadystatechange=function() {
    if(oRequest.readyState==4)
      {
	
	if(!document.getElementById('dialogPartners')){
	  document.getElementById('all').innerHTML+="<div id='dialogPartners' style='border:solid 1px; position:fixed; width:90%; margin:0 5% 0 5%;'>"+oRequest.responseText+"</div>";
	}
	else{
	  document.getElementById('dialogPartners').innerHTML=oRequest.responseText;
	}
      }
    }
  dirus=dir;
  var paramString = "?partners=1&dir="+dir;
  oRequest.open("GET","./dialogImage/dialog.php"+paramString,true);
  oRequest.send(null);  
 }
}
 function editobjavl(id){
  kontakt="kon"+id;
  kontakt=document.getElementById(kontakt).value;
  $.get('editobjavl.php', {'idobject':id,'kontakt':kontakt }, function(data){});
 }
 function vubor_predl(id){
  if(izmen==0)
  $.get('vubor_predl.php', {'idpage':id}, function(data){window.location.reload();});
 }
  var name;
 function vubo(){
 $.get("oprcountry.php", {});
 }
 function vubor(){
      <?php 
	include("mssql_connect.php");
 $id="";
 $idtheme="";
 if(@$_SESSION['predlpage']==""){
  $id=@$_SESSION['pageosn'];
  $idtheme=@$_SESSION['theme'];
  $idobject=@$_SESSION['idobject2'];
  $result=mysql_query("select * from page where id_object='$idobject' and dob=1", $db);
 }
 else{
  $predlpage=@$_SESSION['predlpage'];
  //$_SESSION['predlpage']="";
  $result=mysql_query("select * from page where id_page='$predlpage' and dob=1", $db);
 }
 if(@$_SESSION["opredlpage"]==1 && @$_SESSION["langmenu"]!=1) {$_SESSION['predlpage']="";$_SESSION["opredlpage"]="";} 
 //if(@$_SESSION["langmenu"]==1) {$_SESSION["langmenu"]="";}
 //$ro=mysql_fetch_array($result);
?>
name=document.getElementById('country').value;
  $.get("idcountry2.php", {"idcountry2":name}); 
     id=document.getElementById("theme").value;
   idobject=document.getElementById("object").value;
   $.get("page_osn_menu.php", {'pageosn':name, 'theme':id, 'idobject':idobject}, function(data){window.location.reload();});
 } 
</script>
<?php
@session_start();
 $verh=@$_GET['verh'];
 $osn=@$_GET['osn'];
  $partners=@$_GET['partners'];
  $ban=@$_GET['ban'];
  $action=@$_GET['action'];
  $commercial=@$_GET['commercial'];
  $users=@$_GET['users'];
  $redpod=@$_GET['redpod'];
  $baners=@$_GET['baners'];
  $zayavka=@$_GET['zayavka'];
  if($redpod==1){
   echo "<a style='color:rgb(98, 178, 254); text-decoration:none;'  href='closed.php'>Назад</a><br/>";
   echo "<a style='text-decoration:none; color:gray;' href='closed.php?verh=1'>Верхнее меню</a><br/>";
   echo "<a style='text-decoration:none; color:gray;' href='closed.php?osn=1'>Основное меню</a><br/>";
  }
  if($baners==1){
   echo "<a style='color:rgb(98, 178, 254); text-decoration:none;'  href='closed.php'>Назад</a><br/>";
   echo "<a style='text-decoration:none; color:gray;' href='closed.php?baner=1'>Расположение банеров</a><br/>";
   echo "<a style='text-decoration:none; color:gray;' href='closed.php?baner=2'>Загрузка банеров</a>";
  }  
  if($verh=="" && $osn=="" && $action=="" && $ban=="" && $partners=="" && $commercial=="" && $users=="" && $redpod=="" && $baners=="" && $zayavka==""){
 include("mainmenu.php");
}
 if(isset($partners)){
 ?>
<script>
 document.getElementById('headerPage').innerHTML="Партнеры";
</script>
<div style='height:60px; width:620px; margin:0 auto 0 auto;'>
<h3>Список текущих партнёров</h3>
  <table class="nedobobjavl" width='600px'>
  <tr>
  <td width="22px"></td>  
  <td width="180px" class="zagol">Название</td>
  <td width="200px" class="zagol">Картинка</td>
  <td width="180px" class="zagol">Ссылка</td> 
  </tr>
  </table>
</div>
  <div style='overflow:auto; height:400px; width:620px;  padding-top:-20px; margin:0 auto 0 auto;'>
  
  <table width='600px' border='0'>
  <?php
   // include('mssql_connect.php');
   $result=mysql_query("select * from partners",$db);
   if($result){
    $i=0;
    while($row=mysql_fetch_array($result)){
	 $i++;
	 echo "<tr id='".$row['id']."'  style='background:silver;'>";
	 echo "<td>";
	 echo "<input type='button' id='".$row['id']."' style='width:22px; height:22px;' class='deleteobjavl' title='Удалить партнёра' OnClick='deletepartners(id);' />";
	 echo "</td>";		 
	 echo "<td width='180px' style='text-align:center;'>";
	 echo "<textarea>".$row["name"]."</textarea>";
	 echo "</td>";
	 echo "<td width='200px' style='text-align:center;'>";
	 echo "<img  src='".$row["Title"]."'>";
	 echo "</td>";
	 echo "<td width='180px'>";
	 echo "<input type='text' id='".$row['id']."' value='".$row["link"]."' />";
	 echo "</td>";	 
	 echo "</tr>";
	}
   }
   ?>
   </table>  
   </div>
   <div style='overflow:auto; height:400px; width:620px; margin:0 auto 0 auto;'>
    <h3>Добавление нового партнёра</h3>
    <table class="nedobobjavl" width='600px'>
    <tr> 
    <td width="180px" class="zagol">Название</td>
    <td width="200px" class="zagol">Картинка</td>
    <td width="180px" class="zagol">Ссылка</td> 
    </tr>
    <tr  align="center">
    <td width="180px"  rowspan=2 ><textarea id="partnersName" onkeypress="this.style.backgroundColor='white';"></textarea></td>
    <td width="200px" ><input type="text" id="partnersImage"  Onclick="dialogImagePartners('/images/');"><br/><input type="button" title="Выбрать картинку" value="Выбрать картинку" Onclick="dialogImagePartners('/images/');">
   </td>
    <td width="180px" rowspan=2 ><input id="partnersLink" onkeypress="this.style.backgroundColor='white';" type="text"></td> 
    </tr>
<tr><td align="center" id="checkImg"></td></tr>
    <tr>
    <td colspan="3"  align="center"><input type="button" style="width:560px;" title="Добавить партнёра" value="Добавить партнёра" OnClick="dobavpartners();"></td>
    </tr>
    </table>
   </div>
   <?php
 }
 if(isset($zayavka)){
 ?> 
<script>
 document.getElementById('headerPage').innerHTML="Заявки";
</script>
<?php
   $resu=mysql_query("select * from zayavka",$db);
   echo "<h2>Заявки ОСАГО</h2>";
   if(mysql_fetch_array($resu)){
 ?>
  <table class="nedobobjavl">
  <tr >
  <td width="2%"></td>  
  <td width="7%" class="zagol">ФИО</td>
  <td width="7%" class="zagol">Телефон</td>
  <td width="7%" class="zagol">Тип лица</td>
  <td width="7%" class="zagol">Базовая ставка</td>
  <td width="7%" class="zagol">Территория</td>
  <td width="7%" class="zagol">Kbm</td>
  <td width="7%" class="zagol">Ограничения</td>
  <td width="7%" class="zagol">Мощность</td>
  <td width="7%" class="zagol">Возраст и стаж</td>
  <td width="7%" class="zagol">Период страхования</td>
  <td width="7%" class="zagol">Наличие нарушений</td>
  <td width="7%" class="zagol">Срок страхования</td>
  <td width="7%" class="zagol">Цена</td>
  <td width="7%" class="zagol">Дата</td>
  </tr>
  </table>
  <div style='overflow:auto; height:300px;  padding-top:-20px; background:;'>
  <table>
  <?php
  }
else echo "Заявок нет";
   // include('mssql_connect.php');
   $result=mysql_query("select * from zayavka",$db);
   if($result){
    $i=0;
    while($row=mysql_fetch_array($result)){
	 $i++;
	 echo "<tr id='".$row['id']."'  style='background:silver;font-size:8pt;'>";
	 echo "<td width='2%'>";
	 echo "<input type='button' id='".$row['id']."' style='width:22px; height:22px;' class='deleteobjavl' title='Удалить заявку' OnClick='deletezayavka(id);' />";
	 echo "</td>";		 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["fio"];
	 echo "</td>";
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["telefon"];
	 echo "</td>";	
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["face"];
	 echo "</td>";
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["stavka"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["ter"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["kbm"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["ogr"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["power"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["age"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["period"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["narush"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["period2"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["zena"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["data"];
	 echo "</td>"; 
	 echo "</tr>";
	}
   }
   ?>
   </table> 
   </div>

<?php
   $resu=mysql_query("select * from zayavka_kasko",$db);
   echo "<h2>Заявки КАСКО</h2>";
   if(mysql_fetch_array($resu)){
 ?>
  <table class="nedobobjavl">
  <tr >
  <td width="2%"></td>  
  <td width="7%" class="zagol">ФИО</td>
  <td width="7%" class="zagol">Телефон</td>
  <td width="7%" class="zagol">Марка</td>
  <td width="7%" class="zagol">Модель</td>
  <td width="7%" class="zagol">Год</td>
  <td width="7%" class="zagol">Стоимость</td>
  <td width="7%" class="zagol">Возраст</td>
  <td width="7%" class="zagol">Стаж</td>
  <td width="7%" class="zagol">Пол</td>
  <td width="7%" class="zagol">E-mail</td>
  <td width="7%" class="zagol">Дата</td>
  </tr>
  </table>
  <div style='overflow:auto; height:300px;  padding-top:-20px; background:;'>
  <table>
  <?php
  }
else echo "Заявок нет";
   // include('mssql_connect.php');
   $result=mysql_query("select * from zayavka_kasko",$db);
   if($result){
    $i=0;
    while($row=mysql_fetch_array($result)){
	 $i++;
	 echo "<tr id='".$row['id']."'  style='background:silver;font-size:8pt;'>";
	 echo "<td width='2%'>";
	 echo "<input type='button' id='".$row['id']."' style='width:22px; height:22px;' class='deleteobjavl' title='Удалить заявку' OnClick='deletezayavka(id);' />";
	 echo "</td>";		 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["fio"];
	 echo "</td>";
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["telefon"];
	 echo "</td>";	
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["marka"];
	 echo "</td>";
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["model"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["god"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["stoimost"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["age"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["stazh"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["pol"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["email"];
	 echo "</td>"; 
	 echo "<td width='7%' style='text-align:center;'>";
	 echo $row["date"];
	 echo "</td>"; 
	 echo "</tr>";
	}
   }
   ?>
   </table> 
   </div>



   <?php 
 }
 if(isset($action)){
 ?>
<script>
 document.getElementById('headerPage').innerHTML="Акции";
</script>
  <table class="nedobobjavl">
  <tr>
  <td width="150px" class="zagol">  </td>
  <td width="180px" class="zagol">Название</td>
  <td width="22px"></td> 
  </tr>
  </table>
  <div style='overflow:auto; height:300px;  padding-top:-20px; background:;'>
  <table>
  <?php
   // include('mssql_connect.php');
   $result=mysql_query("select * from action",$db);
   if($result){
    $i=0;
    while($row=mysql_fetch_array($result)){
	 $i++;
	 echo "<tr id='".$row['id']."'  style='background:silver;' OnClick='mouseclick(id);' OnMouseOver='mouseover(id);' OnMouseOut='mouseout(id);'>";
	// echo "<td>";
	 //echo "<input type='button' id='".$row['id_page']."' style='width:22px; height:22px;' class='deleteobjavl' title='Удалить объявление' OnClick='deleteobjavl(id);' />";
	// echo "</td>";		 
	 echo "<td width='150px' style='text-align:center;'>";
	 echo $row["date"];
	 echo "</td>";
	 echo "<td width='180px' style='text-align:center;'>";
	 echo "<textarea cols='17' id='kon".$row['text']."' name='".$row['id']."'  OnKeyUp='editobjavl(name);'>".$row["text"]."</textarea>";
	 echo "</td>";
	 echo "<td>";
	 echo "<input type='button' id='".$row['id']."' style='width:22px; height:22px;' class='dobobjavl' title='Добавить объявление на портал' OnClick='dobavobjavl_show(id);' />";
	 echo "</td>";	 
	 echo "</tr>";
	}
   }
   ?>
   </table>
   </div>
   <div id="blockobjavl" style="display:none;">
   </div>
   <div id="spamobjavl" style="display:none; position:fixed; width:200px; height:200px; left: 40%; top: 40%; text-align:center; background:silver;">
   </div>   
   <?php
 }
 //Основное меню 
if(isset($osn)){?>
<script>
 document.getElementById('headerPage').innerHTML="Основное меню";
</script>
<form method="post">
 	<table>
 	<tr class="headmenuverh">
 	<td>
 	Выберите страницу
 	<script type="text/javascript">
function createObject2() {
	var request_type;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){
		request_type = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		request_type = new XMLHttpRequest();
	}
	return request_type;
} 
	var http4 = createObject2();
	function searchNameqReply2() {
		if(http4.readyState == 4){
			window.location.reload();
		}
	}
function pageosnmenu(){
    <?php 
 $id="";
 $id=@$_SESSION['pageosn'];
 if($id!=""){
  $result=mysql_query("select * from page where id_page='$id'", $db);
  $row=mysql_fetch_array($result);
 } 
?>


   id=document.getElementById('page_osn_menu').value;
   var id2 = encodeURI(id);
var nocache = Math.random();
http4.open('get', 'page_osn_menu.php?pageosn='+id2+'&nocache = '+nocache);
http4.onreadystatechange =  searchNameqReply2;
http4.send(null);
  }
 </script>
 </td>
 </tr>
 <tr>
 <td>
 <select id="page_osn_menu" OnChange="pageosnmenu();" style="width:auto;">
  <?php
   $result=mysql_query("SELECT * FROM page;", $db);
   while($ro=@mysql_fetch_array($result)){ 
	$id=$ro['id_page'];
	echo "<option value='$id'>";
	if($ro['search_href']=='/car_insurance/') echo 'Автострахование';
	if($ro['search_href']=='/green_card/') echo 'Зелёная карта';
	if($ro['search_href']=='/health_insurance/') echo 'Мед. страхование';
	if($ro['search_href']=='/travel_abroad/') echo 'Выезд за рубеж';
	if($ro['search_href']=='/property_insurance/') echo 'Страхование имущества';
	if($ro['search_href']=='/car_insurance/kasko/') echo 'Каско';
	if($ro['search_href']=='/car_insurance/osago/') echo 'Осаго';
	if($ro['search_href']=='/life_insurance/') echo 'Страхование жизни';
        echo '</option>';
   }  
  ?>
 </table></br>
<div class=page_head >
 Cодержание</br>
 </br>
 <textarea class="ckeditor" cols="80" id="edi" name="content"  rows="10"><?php 
 echo $row['content'];
 ?></textarea><br/>
     <script type="text/javascript">
 CKEDITOR.replace( 'edi',
				{
					extraPlugins : 'uicolor',
					uiColor: '#565a5c',
					toolbar :
					[
					['Source','Save','NewPage','Preview'],
					['Cut','Copy','Paste'],
					['Undo','Redo','-','Print','Find','Replace','-','SelectAll','RemoveFormat'],
					['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
					'/',
					['Bold','Italic','Underline','Strike'],
					['NumberedList','BulletedList','-','Outdent','Indent'],
					['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
					['Image','Flash','Table','SpecialChar','PageBreak'],
					'/',
					['Styles','Format','Font','FontSize'],
					['TextColor','BGColor'],
					['Maximize', 'ShowBlocks']
					]
				} );
</script>

 <!--<input type=submit value="Изменить">-->
 <?php 
 $id=@$_SESSION['pageosn'];
 $content=@$_POST['content']; 
 if(isset($content)){
   $result=mysql_query("UPDATE page  SET content='$content' WHERE id_page='$id';", $db); 	
	?>
	  <script type="text/javascript">
location.href='closed.php?osn=1';
alert ("Изменено!");
</script>
 <?php
 }
?>
</div>
</form>
<?php
}
if($ban==1&&$_SESSION['user_status']=='administrator'){
?>
<script>
 document.getElementById('headerPage').innerHTML="Бан по IP";
</script>
<?php
   //$ip="";
   $result=mysql_query("select ip,time,browser from ip ORDER BY time;");
   if(!empty($result)){
    ?>
	<form action="closed.php" method=get>
	<div style="float:left; width:100%; border:solid 0px;"><div style="text-align:center;height:25px; border:solid 0px;">Текущие IP</div>
    <div style="overflow:auto; width:100%; height:300px; float:left;">
	<table  border=0 align='center'>

		<tr style='background:gray;'>
	<td style='text-align:center; border:white solid 1px; color:white;'>IP</td>
	<td   style="border:white solid 1px; color:white;">Последнее посещение</td>
	<td  colspan=2 style="border:white solid 1px; color:white;">Информация о пользователе</td>
	</tr>

	<?php
	while($row=mysql_fetch_array($result)){
	$ban=$row['ip'];
	$time=$row['time'];
	$browser=$row['browser'];
	$time=date("H:i:s d.m.Y",$time);
	$_GET['ban']=$ban;
	?>

	 <tr>
<td style="border:silver solid 1px;"><?php echo $ban;?></td>
<td style="border:silver solid 1px;"><?php echo $time;?></td>
<td style="border:silver solid 1px;"><?php echo $browser;?></td>
<td style='padding-left:0px;' > <input type='button' style="width:50px; height:40px;"  value='бан' OnClick="ban('<?php echo $ban;?>');"/> </td>
</tr>
	<?php
	}
   ?>
   </table>
   </div>
   </div>
   </form>
   <?php
   
   }
   ?>
   <br/>
   <?php
   $result=mysql_query("select IP from ban;");
   $resolt=mysql_query("select IP from ban;");
   if(!empty($result)){
if(mysql_fetch_array($resolt)){
    ?>
	<div style="float:right; width:100%;"><div style="text-align:center;height:25px; border:solid 0px;">Забаненные IP</div>
    <div style="overflow:auto; width:100%; height:300px; float:right; ">
	<table style='border:solid 1px;' align='center'>
	<?php
	while($row=mysql_fetch_array($result)){
	 $rasban=$row['IP'];
	 ?>
	 <tr><td><?php echo $rasban;?></td><td style='padding-left:10px;'> <input type='button' value='Разбанить' OnClick="rasban('<?php echo $rasban;?>');"/> </td></tr>
	<?php
	}
   ?>
   </table>
   </div>
   </div>
   <?php
   
   }
   }
   ?>
   
 

<?php  
}
 if(isset($verh)){
 ?>
<script>
 document.getElementById('headerPage').innerHTML="Верхнее меню";
</script>
 <form method="post">
 <table>
 <tr class="headmenuverh">
 <td>
 Выберите страницу
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
var http = createObject();
function searchNameqReply() {
if(http.readyState == 4){
window.location.reload();
}
}
function pageverhmenu(){
    <?php 
//	include("mssql_connect.php");
 $id="";
 $id=@$_SESSION['pageverh'];
 if($id!=""){
  $result=mysql_query("select * from menu where id='$id'", $db);
  $row=mysql_fetch_array($result);
 } 
?>

   id=document.getElementById('page_verh_menu').value;
   var id2 = encodeURI(id);
var nocache = Math.random();
http.open('get', 'page_verh_menu.php?pageverh='+id2+'&nocache = '+nocache);
http.onreadystatechange =  searchNameqReply;
http.send(null);
  }
 </script>
 </td>
 </tr>
 <tr>
 <td>
 <select id="page_verh_menu" OnChange="pageverhmenu();" style="width:115px;">
  <?php
   $result=mysql_query("SELECT * FROM menu;", $db);
   while($ro=@mysql_fetch_array($result)){ 
	$id=$ro['id'];
	echo "<option value='$id'>";
	echo $ro['head'];
    echo '</option>';
   }  
  ?>
 </select>
 </td>
 <td>
 </td>
 </tr>
 </table></br>
<div class=page_head >
 Cодержание</br>
 </br>
 <textarea class="ckeditor" cols="80" id="edi" name="content"  rows="10"><?php 
 echo $row['content'];
 ?></textarea><br/>
     <script type="text/javascript">
 CKEDITOR.replace( 'edi',
				{
					extraPlugins : 'uicolor',
					uiColor: '#565a5c',
					toolbar :
					[
					['Source','Save','NewPage','Preview'],
					['Cut','Copy','Paste'],
					['Undo','Redo','-','Print','Find','Replace','-','SelectAll','RemoveFormat'],
					['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
					'/',
					['Bold','Italic','Underline','Strike'],
					['NumberedList','BulletedList','-','Outdent','Indent'],
					['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
					['Image','Flash','Table','SpecialChar','PageBreak'],
					'/',
					['Styles','Format','Font','FontSize'],
					['TextColor','BGColor'],
					['Maximize', 'ShowBlocks']
					]
				} );
</script>

 <!--<input type=submit value="Изменить">-->
 <?php 
 $id=@$_SESSION['pageverh'];
 $content=@$_POST['content']; 
 if(isset($content)){
   $result=mysql_query("UPDATE menu  SET content='$content' WHERE id='$id';", $db); 	
	?>
	  <script type="text/javascript">
location.href='closed.php?verh=1';
alert ("Изменено!");
</script>
 <?php
 }
?>
</div>
</form> 
 <?php
 }
  if(isset($object)){
 ?>
 <h2>Редактирование объектов</h2><br/>
<script type="text/javascript">
function continent(){
 id=document.getElementById('cont').value;
 $.get("country.php", {'id':id},function (data) {
  j=0;
  h=1;
  f="";
  while (document.getElementById("country").options.length) {
   document.getElementById("country").options[0] = null;
  }
 for (var i=0; data[i]!="~"; i++) {
  g=data[i];
  if(g=="#"){
   $.get("idcountry.php", {"idcountry":f}, function(data){
    j=1;
    for(t=0; t<data.length; t++){
     if(data[t]=="%") break;
     j++;
    }
    string=data.substr(0, j-1);
    string2=data.substr(j, data.length);
    document.getElementById("country").options.add(new Option(string,string2,false,false));
   }); 
   j++; 
   f="";
  }
 else 
  f=f + data[i];
 }
 $.get("idcountry2.php", {}, function(data){
 if(data!=""){
 h=0; 
 var objSel=document.getElementById('country');
 while(h!=200){
  if(objSel.options[h].value==data){ 
   objSel.options[h].selected=true;
   break;
  }
  h++;
 }
 }
 });
 });
}
</script>
 Выберите континент
 <select id="cont" OnChange="continent();">
 <?php 
 //  include("mssql_connect.php");
   $result=mysql_query("select * from continent;", $db); 
   while($row=mysql_fetch_array($result)){
    $id=$row['id_continent'];
	echo "<option value='$id'>";
	echo $row['name'];
	echo "</option>";
   }	
 ?>
 </select><br/>
   <script type="text/javascript">
 // var name;
 function vubor(){
  name=document.getElementById('country').value;
  $.get("idcountry2.php", {"idcountry2":name}); 
   id=document.getElementById("theme").value;
   $.get("page_osn_menu.php", {'pageosn':name, 'theme':id}, function(data){window.location.reload();});
 }
  function vubor2(){
   name=document.getElementById('country').value;
   id=document.getElementById("theme").value;
   $.get("page_osn_menu.php", {'pageosn':name, 'theme':id}, function(data){window.location.reload();});
   
 }
 </script>
 Выберите страну
 <select id="country"  OnChange="vubor();">
 </select><br/>
 Выберите направление
 <select id="theme"  OnChange="vubor2();">
 <?php 
   //include("mssql_connect.php");
   $result=mysql_query("select * from theme;", $db); 
   while($row=mysql_fetch_array($result)){ 
    $id=$row['id_theme'];
	echo "<option value='$id'>";
	echo $row['name'];
	echo "</option>";
   }	
 ?>
 </select>
   <script type="text/javascript">
   function uploadobject(id){
    imglink=document.getElementById(id).value;
	$.get("uploadobject.php", {'id':id}, function(data){});	
   }
  function edithint(id, lang){
    text=document.getElementById(id).value;
	$.get("edithint.php", {'text':text, 'id':id, 'lang':lang});	
   }
  </script>
 <?php
 echo "<div id='editobject'>";
 include("selectobject.php");
 echo "</div>";
 }
 if ($users==1&&$_SESSION['user_status']=='administrator'){
 ?>
<script>
 document.getElementById('headerPage').innerHTML="Новый пользователь";
</script>
<?php
   $result=mysql_query("select login,email,status from user;");
	
	
   if(!empty($result)){
    ?>
	<div style="float:left;"><div style="text-align:center;height:50px; ">Текущие пользователи</div>
    <div style="overflow:auto; width:400px; height:300px; float:left;">
	<table>
		<tr style='background:gray'>
	<td style='text-align:center; border:white solid 1px; color:white;'>Логин</td>
	<td  style="border:white solid 1px; color:white;">email</td>
	<td  style="border:white solid 1px; color:white;">Статус</td>
	</tr>
	<?php while($row=mysql_fetch_array($result)){
	$login=$row['login'];
	$email=$row['email'];
	$status=$row['status'];
?>		 <tr><td style="border:silver solid 1px;"><?php echo $login;?></td><td style="border:silver solid 1px;"><?php echo $email;?></td><td style="border:silver solid 1px;"><?php echo $status;?></td>
<td><input type='button' value='Удалить' OnClick="deleteUser('<?php echo $login;?>');"/> </td></tr>
	<?php
	}
   ?>
   </table>
   </div>
   </div>
  <?php
   }
   ?>
   <br/>
   <div style="float:right; margin-top:-20px;">Добавить пользователя<br/><br/>
	<?php
 include("newuser.php");
 }
 ?>
 </div>
