function getBodyScrollTop()
{
  return (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
}
var valuePam=1; 
var numberAction=0;
function button_menuActive(){
    var bM=document.getElementById('up2');
    if(valuePam>1 && numberAction==1){
      bM.style.opacity = valuePam/10;
      bM.style.filter = 'alpha(opacity=' + valuePam*10 + ')';
      if(valuePam==1.5){
	document.getElementById('up2').style.display='none';
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
    if(valuePam<11 && numberAction==0){
      bM.style.opacity = valuePam/10;
      bM.style.filter = 'alpha(opacity=' + valuePam*10 + ')';
      if(valuePam==1){
	document.getElementById('up2').style.display='block';  
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
var opred=0;
var scroller=0;
var scrollSpeed=0;
function scrollinger(){
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");

/* scroll(0,scroller);
 if(scroller>0){
  scroller=scroller-scrollSpeed;
  setTimeout(scrollinger,1);
 }
 else{
  scroller=0;
  scroll(0,0);
 }*/
}
function scrolling(){
scrollT=getBodyScrollTop();
 if(scrollT>"200" && opred==0){
  button_menuActive();
  opred=1;
  scroller=scrollT;
 } 
 if(scrollT>scroller){ 
  scroller=scrollT;
  scrollSpeed=scroller/10;
 } 
 if(scrollT<"200" && opred==1){
  button_menuActive();
  opred=0;
 } 
}

var pos, obj, s_int;
var s_int = 0;
var cur_obj = 0;
var cur_dir = 0;
var old_pos = 0;
function topmenu_resize(){
var width=window.screen.width;
width=width-918;
width="0px "+ width +"px 0px 0px";
document.getElementById("content").style.margin=width;
}
 function atoprint(aId) {
    var atext = document.getElementById(aId).innerHTML;
    var captext = window.document.title;
    var alink = window.document.location;
    var prwin = open('');
    prwin.document.open();
    prwin.document.writeln('<html><head><title>М-брокерс | Версия для печати<\/title><\/head><body text="#000000" bgcolor="#FFFFFF"><div onselectstart="return false;" oncopy="return false;">');
   // prwin.document.writeln('<style><\/style>');
	prwin.document.writeln('<div style="margin-bottom:5px;"><a href="javascript://" onclick="window.print();">Печать<\/a> • <a href="javascript://" onclick="window.close();">Закрыть окно<\/a><\/div><hr>');
    prwin.document.writeln('<h1>'+captext+'<\/h1>');
    prwin.document.writeln(atext);
    prwin.document.writeln('<hr><div style="font-size:8pt;margin-top:20px;">© Страховой брокер "М-брокерс"<\/div>');
    prwin.document.writeln('<div style="font-size:8pt;">Страница материала: '+alink+'<\/div>');
    prwin.document.writeln('<div style="margin-top:5px;"><a href="javascript://" onclick="window.print();">Печать<\/a> • <a href="javascript://" onclick="window.close();">Закрыть окно<\/a><\/div>');
    prwin.document.writeln('<\/div><\/body><\/html>');
  }
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
var http2 = createObject();
function searchNameqReply() {
if(http2.readyState == 4){
var response = http2.responseText;
document.getElementById('content_2').innerHTML = response;
}
}
function searchNameqReply2() {
if(http.readyState == 4){
var response = http.responseText;
document.getElementById('content_0').innerHTML = response;
document.getElementById('content_3').innerHTML = response;
}
}

var calcu_pos;
var calcu_max;
var calcu_interval;
var calcu_backgroundPos;
var calcu_backgroundTop;
var check;
var calcu_pos1;
var calcu_max1;
var calcu_interval1;
var calcu_backgroundPos1;
var calcu_backgroundTop1;
var check1;
function calc_default(i){
 switch(i){
  case 0:{
   calcu_pos=25;
   calcu_max=700;
   calcu_interval=1;
   calcu_backgroundPos=0;
   calcu_backgroundTop=0;
   check=0;
   plus=1;
  }
  case 1:{
   calcu_pos1=700;
   calcu_max1=25;
   calcu_interval1=1;
   calcu_backgroundPos1=680;
   calcu_backgroundTop1=150;
   check1=0;
  }
 }
}
function AutoPlay() {
	document.getElementById('calcu3').style.background = 'white';
	document.getElementById('calcu2').style.zIndex="10200";
	$('#calcu2').animate({width:"675px", height:"408px", top:"100px", left:"25%"}, 1000);
	$('#calcu3').animate({width:"675px", height:"248px", padding:"150px 0 0 0"}, 1000, function(){
		document.getElementById('calcu').style.display="block";
		document.getElementById("calcu3").innerHTML="";
		document.getElementById('calcu').style.width="34px";
		document.getElementById('calcu').style.height="34px";
		document.getElementById('calcu').style.background="url(/images/Close.png) no-repeat";
		$.get("/calculator/class_calculator.php", function(data) {
			document.getElementById("calcu3").innerHTML="";
			document.getElementById('calcu3').style.textAlign="";
        	document.getElementById("calcu3").innerHTML = data;
			document.getElementById("style_styled").innerHTML="";
			for (var i=0; i < 10; i++){
				input_default("styled"+i);
				radio_init("styled"+i);
			}
		});
	$("body").append("<div id='TB_overlay'></div>");
		document.getElementById('calcu').style.left="645px";
		document.getElementById('calcu').style.top="5px";
		document.getElementById('calcu').onclick="";
		document.getElementById('calcu').style.padding="0 0 0 0";
		document.getElementById('calcu').onclick=function(){calc_active(1);};
		document.getElementById('TB_overlay').onclick=function(){calc_active(1);};
	});
}
function AutoPlay2() {
	document.getElementById('calcu').style.display="none";
	$('#calcu2').animate({width:"0px", top:"0px", height:"0px", top:"0", left:"0"}, 1000);
	$('#calcu3').animate({width:"0px", height:"0px", padding:"0 0 0 0"}, 1000, function(){
		$('#TB_overlay').remove();
		document.getElementById('calcu3').style.background = 'none';
		document.getElementById('calcu2').style.zIndex="10020";
		document.getElementById('calcu').style.width="39px";
		document.getElementById('calcu').style.height="156px";
		document.getElementById('calcu').style.background="url(/images/calc.png) left no-repeat";
		document.getElementById('calcu').style.left="0px";
		document.getElementById('calcu').style.top="0px";
		document.getElementById('calcu').onclick="";
		document.getElementById('calcu').style.padding="0 0 0 0";
		document.getElementById('calcu').onclick="";
		document.getElementById('calcu').onclick=function(){calc_active(0);};
		document.getElementById("calcu2").innerHTML="<div style='width:0px; height:0px;' id='calcu3'></div><div id='calcu' onclick='calc_active(0);'></div>";
	});
}


var calcu_pos_;
var calcu_max_;
var calcu_interval_;
var calcu_backgroundPos_;
var calcu_backgroundTop_;
var check_;
var calcu_pos1_;
var calcu_max1_;
var calcu_interval1_;
var calcu_backgroundPos1_;
var calcu_backgroundTop1_;
var check1_;
function calc_default_(i){
 switch(i){
  case 0:{
   calcu_pos_=25;
   calcu_max_=700;
   calcu_interval_=0;
   calcu_backgroundPos_=0;
   calcu_backgroundTop_=0;
   check_=0;
  }
  case 1:{
   calcu_pos1_=700;
   calcu_max1_=25;
   calcu_interval1_=0;
   calcu_backgroundPos1_=680;
   calcu_backgroundTop1_=400;
   check1_=0;
  }
 }
}
function AutoPlay_() {
	document.getElementById('calcu_3').style.background = 'white';
	document.getElementById('calcu_2').style.zIndex="10200";
	$('#calcu_2').animate({width:"485px", height:"458px", top:"100px", left:"35%"}, 1000);
	$('#calcu_3').animate({width:"485px", height:"298px", padding:"150px 0 0 0"}, 1000, function(){
		document.getElementById('calcu_').style.display="block";
		document.getElementById('calcu_').style.width="34px";
		document.getElementById('calcu_').style.height="34px";
		document.getElementById('calcu_').style.background="url(/images/Close.png) no-repeat";
		$.get("/kasko_zayava/kasko_zayava.php", function(data) {
			document.getElementById("calcu_3").innerHTML="";
			document.getElementById('calcu_3').style.textAlign="";
          	document.getElementById("calcu_3").innerHTML = data;
		});
		$("body").append("<div id='TB_overlay'></div>");
		document.getElementById('TB_overlay').onclick=function(){calc_active_(1);};
		document.getElementById('calcu_').style.left="455px";
		document.getElementById('calcu_').style.top="5px";
		document.getElementById('calcu_').onclick="";
		document.getElementById('calcu_').style.padding="0 0 0 0";
		document.getElementById('calcu_').onclick=function(){calc_active_(1);};
	});
}
function AutoPlay2_() {
	document.getElementById('calcu_').style.display="none";
	$('#calcu_2').animate({width:"0px", height:"0px", top:"160px", left:"0%"}, 1000);
	$('#calcu_3').animate({width:"0px", height:"0px", padding:"0 0 0 0"}, 1000, function(){
		$('#TB_overlay').remove();
		document.getElementById('calcu_3').style.background = 'none';
		document.getElementById('calcu_2').style.zIndex="10020";
		document.getElementById('calcu_').style.width="39px";
		document.getElementById('calcu_').style.height="156px";
		document.getElementById('calcu_').style.background="url(/images/calc2.png) left no-repeat";
		document.getElementById('calcu_').style.left="0px";
		document.getElementById('calcu_').style.top="160px";
		document.getElementById('calcu_').style.padding="0 0 0 0";
		document.getElementById('calcu_').onclick="";
		document.getElementById('calcu_').onclick=function(){calc_active(0);};
		document.getElementById("calcu_2").innerHTML="<div style='width:0px; height:0px;' id='calcu_3'></div><div id='calcu_' onclick='calc_active_(0);'></div>";
	});
}
function calc_active_(i){
if(i==0){
//document.getElementById('calcu3').style.top="50%";
document.getElementById('calcu_2').innerHTML="<div id='calcu_3'></div><div id='calcu_' onclick='calc_active_(0);'></div>";
document.getElementById('calcu_').style.display="none";
document.getElementById('calcu_3').innerHTML="<img src='/images/load.gif' alt='load'/>";
calc_default_(0);
document.getElementById('calcu_3').style.textAlign="center";
document.getElementById('calcu_3').style.height="156px";
document.getElementById('calcu_3').style.padding="0 0 0 0";
AutoPlay_();
}
else{
calc_default_(1);
document.getElementById("calcu_3").innerHTML="";
AutoPlay2_();
}
}


var checkboxHeight = "25";
var radioHeight = "25";
var selectWidth = "190";
function input_default(classname){
  document.getElementById("style_styled").innerHTML=document.getElementById("style_styled").innerHTML+'<style type="text/css">input.'+classname+' { display: none; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>';
  //document.write('<style type="text/css">input.'+classname+' { display: none; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>');
}

function radio_init(classname){
		var inputs = document.getElementsByTagName("input"), span = Array(), textnode, option, active;
	        for(a = 0; a < inputs.length; a++) {
			if((inputs[a].type == "radio") && inputs[a].className == classname) {
				span[a] = document.createElement("span");
				span[a].className = inputs[a].type;
				if(inputs[a].checked == true) {
					position = "0px -" + (radioHeight*2) + "px";
					span[a].style.backgroundPosition = position;
				}
				inputs[a].parentNode.insertBefore(span[a], inputs[a]);
				inputs[a].onchange = "radio_clear(classname)";
				if(!inputs[a].getAttribute("disabled")) {
					span[a].onmousedown = radio_pushed;
					span[a].onmouseup = radio_check;
					if(a==0){
					 span[a].onclick=izmen_baz_stavka1;					
					}
					if(a==1){
					 span[a].onclick=izmen_baz_stavka2;					
					}
					if(a==2){
					 span[a].onclick=izmen_moshnost;					
					}
					if(a==3){
					 span[a].onclick=izmen_moshnost;					
					}
					if(a==4){
					 span[a].onclick=izmen_ter_ts;
					}
					if(a==5){
					 span[a].onclick=izmen_moshnost;					
					}
					if(a==8){
					 span[a].onclick=izmen_ter_ts;					
					}
					if(a==13){
					 span[a].onclick=izmen_traktor;
					}
					if(a==14){
					 span[a].onclick=izmen_ter_ts;
					}
					if(a==17){
					 span[a].onclick=transit_us;
					}
					if(a==16){
					 span[a].onclick=opred_place;
					}
					if(a==285){
					 span[a].onclick=izmen_stazh2;
					}
					if(a==286){
					 span[a].onclick=izmen_stazh;
					}
				} else {
					span[a].className = span[a].className += " disabled";
				}
			}
		}
		document.onmouseup = "radio_clear(classname)";
}
function radio_pushed(){
element = this.nextSibling;
		if(element.checked == true && element.type == "checkbox") {
			this.style.backgroundPosition = "0px -" + checkboxHeight*3 + "px";
		} else if(element.checked == true && element.type == "radio") {
			this.style.backgroundPosition = "0px -" + radioHeight*3 + "px";
		} else if(element.checked != true && element.type == "checkbox") {
			this.style.backgroundPosition = "0px -" + checkboxHeight + "px";
		} else {
			this.style.backgroundPosition = "0px -" + radioHeight + "px";
		}
}
function radio_check(){	
document.getElementById("next").style.display="block";
//checkRadios();
		element = this.nextSibling;
		if(element.id=="tb"&&this.onclick!="null"){ nikak_div_size=0;nikak_div_size2=0;}
		if(element.id=="tb"&&this.onclick!="function izmen_moshnost(){calc8=8;}") calc8=0;	
		if(element.id=="tb"){
			/*if((this.onclick!="function izmen_traktor() {podmen_znach_ter(1);}" && element.value!="1215.00")||(element.value!="305.00")){*/
				//alert("yes2");
				podmen_znach_ter(1);
			//}		 	
		}
		if(element.id=="kt"){
			transit=0;
			innostr=0;
			kp=1;	 	
		}	
		if(element.checked == true && element.type == "checkbox") {
			this.style.backgroundPosition = "0px 0px";
			element.checked = false;
		} else {
			if(element.type == "checkbox") {
				this.style.backgroundPosition = "0px -" + checkboxHeight*2 + "px";
			} else {
				this.style.backgroundPosition = "0px -" + radioHeight*2 + "px";
				group = this.nextSibling.name;
				inputs = document.getElementsByTagName("input");
				for(a = 0; a < inputs.length; a++) {
					if(inputs[a].name == group && inputs[a] != this.nextSibling) {
						inputs[a].previousSibling.style.backgroundPosition = "0px 0px";
					}
				}
			}
			element.checked = true;
		}
}
function radio_clear(classname){
		inputs = document.getElementsByTagName("input");
		for(var b = 0; b < inputs.length; b++) {
			if(inputs[b].type == "checkbox" && inputs[b].checked == true && inputs[b].className == classname) {
				inputs[b].previousSibling.style.backgroundPosition = "0px -" + checkboxHeight*2 + "px";
			} else if(inputs[b].type == "checkbox" && inputs[b].className == classname) {
				inputs[b].previousSibling.style.backgroundPosition = "0px 0px";
			} else if(inputs[b].type == "radio" && inputs[b].checked == true && inputs[b].className == classname) {
				inputs[b].previousSibling.style.backgroundPosition = "0px -" + radioHeight*2 + "px";
			} else if(inputs[b].type == "radio" && inputs[b].className == classname) {
				inputs[b].previousSibling.style.backgroundPosition = "0px 0px";
			}
		}
}

function hideDialogKasko(){
  document.getElementById('fonDialogKasko').style.display="none";
  document.getElementById('dialogKasko').style.display="none";
}
function dialogKasko(){
 if(!document.getElementById('fonDialogKasko')){
  if(!document.getElementById('fonDialogKasko')){  
    document.getElementById('all').innerHTML+="<div id='fonDialogKasko' style='position:fixed; z-index:3000; background:url(../../images/pole.png) repeat; width:100%; height:110%; top:-10%; left:-0%;' Onclick='hideDialogKasko();'></div>";
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
	
	if(!document.getElementById('dialogKasko')){
	  document.getElementById('all').innerHTML+="<div id='dialogKasko' style='border:solid 0px; background:white; z-index:4000; position:fixed; top:30%; left:35%; width:400px; height:200px;'>"+oRequest.responseText+"</div>";
	}
	else{
	  document.getElementById('dialogKasko').innerHTML=oRequest.responseText;
	}
      }
    }
	var paramString = "?kasko=1";
 oRequest.open("GET","/car_insurance/kasko/zayvka/class_kasko.php"+paramString,true);
  oRequest.send(null);  
 }
 else{
  document.getElementById('fonDialogKasko').style.display="block";
  document.getElementById('dialogKasko').style.display="block";
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
	
	if(!document.getElementById('dialogKasko')){
	  document.getElementById('all').innerHTML+="<div id='dialogKasko' style='border:solid 0px; z-index:4000; background:white; position:fixed; top:30%; left:35%; width:400px; height:200px;'>"+oRequest.responseText+"</div>";
	}
	else{
	  document.getElementById('dialogKasko').innerHTML=oRequest.responseText;
	}
      }
    }
	
	var paramString = "?kasko=1";
  oRequest.open("GET","/car_insurance/kasko/zayvka/class_kasko.php"+paramString,true);
  oRequest.send(null);  
 }
}

function calc_active(i){
if(i==0){
//document.getElementById('calcu3').style.top="50%";
document.getElementById('calcu2').innerHTML="<div id='calcu3'></div><div id='calcu' onclick='calc_active_(0);'></div>";
document.getElementById('calcu').style.display="none";
document.getElementById('calcu3').innerHTML="<img src='/images/load.gif' alt='load'/>";
calc_default(0);
document.getElementById('calcu3').style.textAlign="center";
document.getElementById('calcu3').style.height="156px";
document.getElementById('calcu3').style.padding="0 0 0 0";
AutoPlay();
}
else{
calc_default(1);
typ=1;
tb=1;
kt=1;
kbm=1;
ko=1.7;
ks=1;
km=1;
kvs=1;
kn=1;
kp=1;
nikak_div_size=0;
nikak_div_size2=0;
stazh=0;
calc8=0;
transit=0;
innostr=0;
document.getElementById("calcu3").innerHTML="";
AutoPlay2();
}
}
function press_poisk(){
	var word = encodeURI(document.getElementById('poiskvvod').value);
	var nocache = Math.random();
	document.getElementById('content_2').innerHTML="";
	document.getElementById('content_1').innerHTML="Результаты поиска:<br><br>";
	http.open('get', '/search_page.php?word='+word+'&nocache = '+nocache);
	http.onreadystatechange =  searchNameqReply2;
	http.send(null);
}
function press_poisk_page(lim, count){
	if(lim>=0){
		for(i=0; i < count; i++){
			document.getElementById('DivSearch'+i).style.display="none";			
		}
		document.getElementById('DivSearch'+lim).style.display="block";
	}
}
function doStartScroll(what, dir) {
	if(cur_obj==0) cur_obj = document.getElementById("scroll"+what);
	if(cur_dir==0) cur_dir = dir;
	if(old_pos==0) old_pos = cur_obj.scrollLeft;
	var step = 4;
	
	cur_obj.scrollLeft+=cur_dir*step;
	//alert("doScroll("+cur_obj.id+", "+cur_dir+"; sl="+cur_obj.scrollLeft+"; s_int="+s_int+"; op="+old_pos+")");
	if(cur_obj.scrollLeft<step||cur_obj.scrollLeft>cur_obj.scrollWidth-step) {
		//cur_obj.scrollLeft = 0;
		doStopScroll();
		//alert("finished!");
	}
	else {
		if(s_int==0) s_int=setInterval("doStartScroll()", 10);
		//alert("going on; s_int="+s_int);
	}
}
var http5 = createObject();
function headermenu(id){
var nocache = Math.random();
http5.open('get', '/session.php?headermenu='+id+'&nocache = '+nocache);
http5.send(null);
}
var http6 = createObject();
function searchNameqRepl() {
if(http6.readyState == 4){
var response = http6.responseText;
if(window.location.href=="http://www.m-brokers.ru/" && response!="aa1") response="aa1";
document.getElementById(response).style.color = "#85d653";
document.getElementById("dd"+response.substr(2, 2)).style.background = "url(/images/menu2.gif) left no-repeat";
}
}
function headermenuonlo(){
var id="";
var nocache = Math.random();
http6.open('get', '/session.php?headermenu='+id+'&nocache = '+nocache);
http6.onreadystatechange =  searchNameqRepl;
http6.send(null);
}
function doStopScroll() {
	clearInterval(s_int);
	s_int = 0;
	cur_obj = 0;
	cur_dir = 0;
	old_pos = 0;
}
var left_opred=0;
function topmenu_select(number){
//alert("sdsd");
 if(number==0){
  document.getElementById("men").style.background="url(/images/topmenuselect2.jpg) left repeat-x";
  document.getElementById("mrr1").style.background="url(/images/topmenuselect_right.png) left no-repeat";
  document.getElementById("mll1").style.background="url(/images/topmenuselect_left.png) left no-repeat";
 }
 if(number==1){
  //left_opred=0;
  document.getElementById("men").style.background="url(/images/topmenu.png) left repeat-x";
  document.getElementById("mrr1").style.background="url(/images/topmenu.png) left repeat-x";
  document.getElementById("mll1").style.background="url(/images/topmenu.png) left repeat-x";
 }
 if(number==2){
  if(left_opred==0) {left_ul1=document.getElementById('ul1').offsetLeft-10+"px";/*right_ul1=document.getElementById('ul1').offsetLeft+1005+"px";*/left_opred=1;}
  if(document.getElementById("men").offsetLeft!=document.getElementById('ul1').offsetLeft+10){
   left_ul1=document.getElementById('men').offsetLeft-10+"px";
   //right_ul1=document.getElementById('ul1').offsetLeft+1005+"px";   
  }
  document.getElementById('ul1').style.left=left_ul1;
  //document.getElementById('ul1').style.right=right_ul1;
  document.getElementById("men").style.background="url(/images/topmenuselect2.jpg) left repeat-x";
  document.getElementById("mrr1").style.background="url(/images/topmenuselect_right.png) left no-repeat";
  document.getElementById("mll1").style.background="url(/images/topmenuselect_left.png) left no-repeat";
 }
 if(number==3){
  document.getElementById("m_rr2").style.background="url(/images/mr2.png) left no-repeat";
  document.getElementById("m_ll2").style.background="url(/images/ml2.png) left no-repeat";
 }
 if(number==4){
  document.getElementById("m_rr2").style.background="url(/images/topmenu.png) left repeat-x";
  document.getElementById("m_ll2").style.background="url(/images/topmenu.png) left repeat-x";
 }
 if(number==5){
  document.getElementById("m_rr3").style.background="url(/images/mr2.png) left repeat-x";
  document.getElementById("m_ll3").style.background="url(/images/ml2.png) left repeat-x";
 }
 if(number==6){
  document.getElementById("m_rr3").style.background="url(/images/topmenu.png) left repeat-x";
  document.getElementById("m_ll3").style.background="url(/images/topmenu.png) left repeat-x";
 }
 if(number==7){
  document.getElementById("m_rr4").style.background="url(/images/mr2.png) left repeat-x";
  document.getElementById("m_ll4").style.background="url(/images/ml2.png) left repeat-x";
 }
 if(number==8){
  document.getElementById("m_rr4").style.background="url(/images/topmenu.png) left repeat-x";
  document.getElementById("m_ll4").style.background="url(/images/topmenu.png) left repeat-x";
 }
 if(number==9){
  document.getElementById("m_rr5").style.background="url(/images/mr2.png) left repeat-x";
  document.getElementById("m_ll5").style.background="url(/images/ml2.png) left repeat-x";
 }
 if(number==10){
  document.getElementById("m_rr5").style.background="url(/images/topmenu.png) left repeat-x";
  document.getElementById("m_ll5").style.background="url(/images/topmenu.png) left repeat-x";
 }
}
/*function vubor_predl(id, name){
jQuery.get('main/content_script.php', {'id_page':id, 'id_object':name}, function (data) {
 document.getElementById('content_2').innerHTML=data;
});
}*/
function mouseover(id){
 document.getElementById(id).style.background="rgb(255, 254, 213)";
document.getElementById(id).style.cursor="pointer"; 
}
function mouseout(id){
 document.getElementById(id).style.background="rgb(228, 226, 227)"; 
}
/*function id_object(id){
  press_poisk_null();
jQuery.get('main/content_script.php', {'id_page':-1, 'id_object':id}, function (data) {
 document.getElementById('content_2').innerHTML=data;
}); 
}*/
function mailrassulka(){
fio=document.getElementById('fio').value;
email=document.getElementById('email').value;

theme=document.getElementById('themka').value;
code=document.getElementById('code').value;
var elSubject = document.getElementById('themka');
  var i;
  for (i = elSubject.length - 1; i>=0; i--) {
    if (elSubject.options[i].selected) {
      subject=elSubject.options[i].text;
    }
  }
 if (isValidEmail (email)==true){
jQuery.post('mailrassulka.php', {'fio':fio,'email':email,'theme':theme,'subject':subject,'code':code}, function(data){
 document.getElementById('otvet').innerHTML=data;
 document.getElementById('code').value="";
 document.getElementById('captcha').style.background="url('captcha.php')";
});
}
else alert("email aaaaai iaaa?ii");
}

function podatobjavl(){
	image_1=document.getElementById('image_1').value;
		image_2=document.getElementById('image_2').value;
		image_3=document.getElementById('image_3').value;
jQuery.post('podatobjavl.php', {'image_1':image_1,'image_2':image_2,'image_3':image_3}, function(data){
			alert("Iauyaeaiea aiaaaeaii");window.location.reload();
		});
}
/*
function id_country(id){
 press_poisk_null();
 jQuery.get('main/content_script.php', {'id_country':id}, function (data) {
  document.getElementById('content_2').innerHTML=data;
 });
}*/

function isValidEmail (email)
{
 return (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(email);
}

function next_notice(element_id){
	id=document.getElementById(element_id).value;
	if (id==3){
	
	var elSubject = document.getElementById('subject')
}
}
