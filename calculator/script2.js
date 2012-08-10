/*eval(Include("script2.js"));

function Include(file)
{
  var fso, f;
  fso = new ActiveXObject("Scripting.FileSystemObject");
  f = fso.OpenTextFile(file, 1);
  str = f.ReadAll();
  f.Close();
  return str;
}*/
var last = "NameUnlikelyToBeUsedAsAnElementName"; 
var q=0;
function checkRadios(number_form) { 
//alert("last"+last);
//alert("q "+q);
allInputs = document.getElementsByTagName("input"); 
///alert("length "+allInputs.length);
// walk through the array 
switch(number_form){
	case 1:{
		q=0;
	}break;
	case 2:{
		q=3;
	}break;
	case 3:{
		q=16;
	}break;
	case 4:{
		//q=24;
		q=271;
	}break;
	case 5:{
		//q=39;
		q=286;
	}break;
	case 6:{
		//q=41;
		q=288;
	}break;
	case 7:{
		//q=45;
		q=292;
	}break;
	case 8:{
		//q=53;
		q=300;
	}break;
	case 9:{
		//q=63;
		q=310;
	}break;
	case 10:{
		//q=74;
		q=321;
	}break;
}
//alert(q);
for (i = q; i< allInputs.length; i++) 
{ 
var input = allInputs[i]; 
//alert("input.name"+input.name);
if (input.name == last) continue; // if this object name is the same as the last checked radio, go to next iteration 
 
// checks to see if any  one of  similarly named radiobuttons is checked  
else if (input.type == "radio" ) 
{     

    //last = input.name; 
	//alert("last"+last);
    var radios = document.getElementsByName(input.name); 
	//alert(radios.length);
    var radioSelected=false; 
         //iterate over question options 
        for (j=0; j < radios.length; j++) 
    { 
    if(radios[j].checked) 
    { 
	//alert("2");
       radioSelected=true; 
     //  break; 
	 //q=radios.length;
	   return true;// Found it, proceed to next question 
    } 
    } 
    if (!radioSelected) // no option selected 
    {       // warn user, focus question 
    //alert("You did not answer question " + input.id.substring(0,input.id.length-1)); 
    //input.focus(); 
    return false; 
    } 
} 
} 
return true;
} 
var typ=1;
var tb=1;
var kt=1;
var kbm=1;
var ko=1.8;
var ks=1;
var km=1;
var kvs=1;
var kn=1;
var kp=1;
var massInfo=Array(11);
function strip(htm) {
    return htm.replace(/<.*?>/g, '');
}
function calculation(){
typ=1;
tb=1;
kt=1;
kbm=1;
ko=1.8;
ks=1;
km=1;
kvs=1;
kn=1;
kp=1;
var opred=0;
for(var i=0; i <11; i++)
	massInfo[i]="";
var inputsu=document.getElementsByTagName("input");
var spany = document.getElementsByTagName("span");
for(b = 0; b < inputsu.length; b++) {
 if(inputsu[b].id=="typ"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
  object2=spany[b].parentNode;
  massInfo[0]=strip(object2.innerHTML);
   typ=inputsu[b].value;
  }
 }
}
if (typ==1){
for(b = 0; b < inputsu.length; b++) {
 if(inputsu[b].id=="tb"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
      object2=spany[b].parentNode;
  massInfo[1]=strip(object2.innerHTML);
   tb=inputsu[b].value;
  }
 }
 if(inputsu[b].id=="kt"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[2]=strip(object2.innerHTML);
   kt=inputsu[b].value;
   kp=1;
  }
 }
 if(inputsu[b].id=="kbm"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[3]=strip(object2.innerHTML); 
   kbm=inputsu[b].value;    
  }
 }
 if(inputsu[b].id=="ko"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[4]=strip(object2.innerHTML);    
   ko=1.8;
  }
 }
 if(inputsu[b].id=="km"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[5]=strip(object2.innerHTML);    
   km=inputsu[b].value;
  }
 }
 if(inputsu[b].id=="kvs"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[6]=strip(object2.innerHTML);    
   kvs=1;
  }
 }
  if(inputsu[b].id=="ks"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[7]=strip(object2.innerHTML);  
   ks=inputsu[b].value;
   }
  }
   if(inputsu[b].id=="kn"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[8]=strip(object2.innerHTML);    
   kn=inputsu[b].value;
  }
 }
    if(inputsu[b].id=="kp"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[9]=strip(object2.innerHTML);     
   kp=inputsu[b].value;
   }
  }
}
}
else if (typ==2){
for(b = 0; b < inputsu.length; b++) {
 if(inputsu[b].id=="tb"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[1]=strip(object2.innerHTML);    
   tb=inputsu[b].value;
  }
 }
 if(inputsu[b].id=="kt"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[2]=strip(object2.innerHTML);        
   kt=inputsu[b].value;
   kp=1;
  }
 }
 if(inputsu[b].id=="kbm"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[3]=strip(object2.innerHTML); 
   kbm=inputsu[b].value;   
  }
 }
 if(inputsu[b].id=="ko"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[4]=strip(object2.innerHTML);        
   ko=inputsu[b].value;
   kvs=1;
  }
 }
 if(inputsu[b].id=="km"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[5]=strip(object2.innerHTML);        
   km=inputsu[b].value;
  }
 }
 if(inputsu[b].id=="kvs"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[6]=strip(object2.innerHTML);        
   if(ko==1) kvs=inputsu[b].value;
   else kvs=1;
  }
 }
 if(inputsu[b].id=="ks"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[7]=strip(object2.innerHTML);   
   ks=inputsu[b].value;
  }
 }
  if(inputsu[b].id=="kn"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[8]=strip(object2.innerHTML);        
   kn=inputsu[b].value;
  }
 }
     if(inputsu[b].id=="kp"){
  if(spany[b].style.backgroundPosition=="0px -50px"){
   object2=spany[b].parentNode;
   massInfo[9]=strip(object2.innerHTML);   
   kp=inputsu[b].value;
  }
 }
}
}
//alert(tb);

if(transit==1){ kbm=1; kn=1; kp=1; ks=1;}
if(innostr==0){kp=1;}
if(innostr==1){ks=1; kbm=1;}
if(calc8==0){km=1;}
result=Math.round(tb*kt*kbm*ko*km*ks*kvs*kn*kp*100)/100;
massInfo[10]=result;
/*document.getElementById('calc11').innerHTML="Стоимость ОСАГО<br>"+result+" рублей<br>"+"typ="+typ+"<br>"+"tb="+tb+"<br>"+"kt="+kt+"<br>"+"kbm="+kbm+"<br>"+"ko="+ko+"<br>"+"ks="+ks+"<br>"+"km="+km+"<br>"+"kvs="+kvs+"<br>"+"kn="+kn+"<br>"+"kp="+kp+"<br>";*/
//alert(result);
document.getElementById('calc11').innerHTML="<div style='text-align:center; margin-top:150px;'>Стоимость ОСАГО<br>"+result+" рублей<br><input id='zayavka_button' type='button'onclick='zayavka();'></div>";
}
function proverka(input) { 
    var value = input.value; 
    var rep = /[-\.;":'a-zA-Zа-яА-Я]/; 
    if (rep.test(value)) { 
        value = value.replace(rep, ''); 
        input.value = value; 
    } 
} 
function isValidEmail (email)
{
 return (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(email);
}

function zayavka(){
 document.getElementById('nazad').style.display="none";
 document.getElementById('calc11').innerHTML="<div style='margin-top:150px;'><table border=0 align='center'><tr><td>ФИО</td><td><input id='fio_zayavka' type='text' onkeypress='background_coloro(this);'>*</td></tr><tr><td>Телефон</td><td><input id='telefon_zayavka' onkeypress='background_coloro(this);' type='text' onkeydown='proverka(this);' onkeyup='proverka(this);'>*</td></tr><tr><td>E-mail</td><td><input id='e_mail' onkeypress='background_coloro(this);' type='text'></td></tr><tr ><td colspan=2 style='text-align:center;'><input type='button' value='Отправить' onclick='zayavka_submit();'></td></tr><tr><td colspan=2 style='text-align:center;font-size:8pt;'>Поля отмеченные звёздочкой(*) обязательны для заполнения</td></tr></table></div>"; 
}
function background_coloro(object){
  object.style.backgroundColor='white';
}
function zayavka_submit(){
  if(document.getElementById('fio_zayavka').value!="" && document.getElementById('telefon_zayavka').value!=""){
	if (isValidEmail (document.getElementById('e_mail').value)==true  || document.getElementById('e_mail').value==""){
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
  var paramString = "?fio="+document.getElementById('fio_zayavka').value+"&youremail="+document.getElementById('e_mail').value+"&telefon="+document.getElementById('telefon_zayavka').value+"&par1="+massInfo[0]+"&par2="+massInfo[1]+"&par3="+massInfo[2]+"&par4="+massInfo[3]+"&par5="+massInfo[4]+"&par6="+massInfo[5]+"&par7="+massInfo[6]+"&par8="+massInfo[7]+"&par9="+massInfo[8]+"&par10="+massInfo[9]+"&par11="+massInfo[10];
  oRequest.open("GET","/zayavka_submit.php"+paramString,true);
  oRequest.send(null);
  document.getElementById('calc11').innerHTML="<div style='margin-top:150px;margin-left:50px;'>Заявка успешно подана! В течении рабочего дня она будет обработана и наши специалисты свяжутся с вами, для обсужения вопросов оформления страхового полиса.</div>";
  }
  else {
    if(isValidEmail (document.getElementById('e_mail').value)==false) document.getElementById('e_mail').style.backgroundColor="red";
	}
  }
  else{
    if(document.getElementById('fio_zayavka').value=="") document.getElementById('fio_zayavka').style.backgroundColor="red";
    if(document.getElementById('telefon_zayavka').value=="") document.getElementById('telefon_zayavka').style.backgroundColor="red";
  }
}
var calc8=0;
function izmen_moshnost(){
 calc8=8;
}
function izmen_baz_stavka1(){
 var divus=document.getElementsByTagName("div");
 k=0;
 for(i=0; i < divus.length; i++){
  if(divus[i].id=="substrate"){
   if(k==2) divus[i].style.display="none";
   if(k==3) divus[i].style.display="block";
   //if(k==4) divus[i].style.display="block";
   if(k==42) divus[i].style.display="none";  
   if(k==44) divus[i].style.display="none";
   k++;
  }
 }  
}
function izmen_baz_stavka2(){
 var divus=document.getElementsByTagName("div");
 k=0;
 for(i=0; i < divus.length; i++){
  if(divus[i].id=="substrate"){
   if(k==2) divus[i].style.display="block";
   if(k==3) divus[i].style.display="none";
   //if(k==4) divus[i].style.display="none";
   if(k==42) divus[i].style.display="block";
   if(k==44) divus[i].style.display="block";
   k++;
  }
 } 
}
var nikak_div=Array(),nikak_div2=Array(), nikak_div_size=0, nikak_div_size2=0;
function podmen_znach_ter(number){
 var inputsu=document.getElementsByTagName("input");
 var ter=Array(),ter2=Array(), razmer, ch;
 ch=0;
 razmer=7;
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
var str = oRequest.responseText; // К примеру строка которая приходит от сервера
var user = eval(str); // Превращаем так сказать строку в объект
for(i=1; i < 255; i++){
	ter[i]=user["a"+i];
}
for(i=255; i < 509; i++){
	ter2[i]=user["a"+i];
}
 switch(number){
  case 1:{
   //alert("первый кейс");
   for(i=0; i < inputsu.length; i++){
    if(inputsu[i].id=="kt"){
     inputsu[i].value=ter[ch];
	//alert("В цикле в условии массив ter["+ch+"]="+ter[ch]);
     ch++;
    }
   }
  }break;
  case 2:{
   for(i=0; i < inputsu.length; i++){
    if(inputsu[i].id=="kt"){
     inputsu[i].value=ter2[ch];
     ch++;
    }
   }  
  }break;
 }

 // Обращаемся к свойствам объекта
      }
    }
  oRequest.open("GET","kt.php",true);
  oRequest.send(null);
}
function izmen_ter_ts(){
 //podmen_znach_ter(1);
 for(i=0; i < 6; i++){
  nikak_div[i]=i+4;
 }
 nikak_div_size=i;
 for(i=0; i < 6; i++){
  if(i!=3){
  nikak_div2[nikak_div_size2]=i+4;
  nikak_div_size2++;
  }
 }
}
function izmen_traktor(){
 podmen_znach_ter(2);
}
var stazh=0;
function izmen_stazh(){
 stazh=1;
}
function izmen_stazh2(){
 stazh=0;
}
function unchecked(number, styled){
var inputsu=document.getElementsByTagName("input");
number=number-1;
for(b = 0; b < inputsu.length; b++) {
alert("styled"+number);	
 	if(inputsu[b].className==styled){
alert("styled"+number);
	inputsu[b].checked=false;	
	}
}
}
function substrate_izmen(object){
 var divka=document.getElementsByTagName("div");
 object2=object.childNodes ;
element2 = object2[0].nextSibling;
object2[0].onmousedown();
object2[0].onmouseup();
if(object2[0].onclick)
 object2[0].onclick();
}
function opred_face(){
	var inputsu=document.getElementsByTagName("input");
	var spany = document.getElementsByTagName("span");
	for(b = 0; b < inputsu.length; b++) {
 		if(inputsu[b].id=="typ"){
  			if(spany[b].style.backgroundPosition=="0px -50px"){
				if(b==0){
					var inpu=document.getElementsByTagName("input");
					var spa = document.getElementsByTagName("span");
					for(q = 0; q < inpu.length; q++) {
 						if(inputsu[q].id=="tb"){
  							if(spa[q].style.backgroundPosition=="0px -50px" && q==2){
								spa[q].style.backgroundPosition="0px 0px";
								spa[q+1].style.backgroundPosition="0px -50px";
								break;
							}
						}
					}
					for(q = 0; q < inpu.length; q++) {
 						if(inputsu[q].id=="ks"){
  							if(spa[q].style.backgroundPosition=="0px -50px" && (q==45 || q==46 || q==47)){
								spa[q].style.backgroundPosition="0px 0px";
								spa[48].style.backgroundPosition="0px -50px";
								break;
							}
						}
					}
 					return 0;
				}
				if(b==1){
					var inpu=document.getElementsByTagName("input");
					var spa = document.getElementsByTagName("span");
					for(q = 0; q < inpu.length; q++) {
 						if(inputsu[q].id=="tb"){
  							if(spa[q].style.backgroundPosition=="0px -50px" && q==3){
								spa[q].style.backgroundPosition="0px 0px";
								spa[q-1].style.backgroundPosition="0px -50px";
								break;
							}
						}
					}
 					return 1;
				}
			}
		}
	}
}
var innostr=0;
function opred_place(){
 innostr=1;
	/*var inputsu=document.getElementsByTagName("input");
	var spany = document.getElementsByTagName("span");
	alert("dsfds");
	for(b = 0; b < inputsu.length; b++) {
 		if(inputsu[b].id=="kt"){
  			if(spany[b].style.backgroundPosition=="0px -50px"){
				if(b==6 || b==7){
 					return 1;
				}
			}
		}
	}*/
}
function period_ts(){
	var inputsu=document.getElementsByTagName("div");
	i=0;
	if(opred_face()==0){
		for(b = 0; b < inputsu.length; b++) {
 			if(inputsu[b].id=="substrate" && inputsu[b].parentNode.id=="calc7"){
				i++;
				if(i<4)
					inputsu[b].style.display="none";
			}
		}
	}
	if(opred_face()==1){
		for(b = 0; b < inputsu.length; b++) {
 			if(inputsu[b].id=="substrate" && inputsu[b].parentNode.id=="calc7"){
					inputsu[b].style.display="block";
			}
		}
	} 
}
var transit=0;
function transit_us(){
	transit=1;
}
function nexxt(){
        opred=0;
	opred2=0;
period_ts();
	//if(checkRadios())
	for (var i=1; i < 12; i++){
	//перебираем все формы калькулятора
		if(document.getElementById("calc"+i).style.display!="none"){//если форма видна, 
			if(i==10){//если видна предпоследняя форма то блочим кнопку дальше и производим расчёт ОСАГО
			 document.getElementById("next").style.display="none";
			 calculation();
			}
			document.getElementById("next").style.display="none";
			document.getElementById("nazad").style.display="block";//блочим кнопку назад
			if(opred_face()==0){
				for(j=0; j < nikak_div_size; j++){
                          		if((nikak_div[j]==i+1)||(i==9)){
			   			opred=1;
			  		}
                        	}
			}
			if(opred_face()==1){	
				for(j=0; j < nikak_div_size2; j++){
                          		if((nikak_div2[j]==i+1)||(i==9)){
			   			opred2=1;
			  		}
                        	}
			}
		if(opred==0 && opred2==0){//Если у нас не выбран в базовой ставке прицеп, то
			if(calc8==8){//смотрим если выбрано такси или легковушка, то
			/*if(opred_place()==1){
						document.getElementById("calc"+i).style.display="none";	
						document.getElementById("calc5").style.display="none";
						/*unchecked(5, "styled4");
						unchecked(6, "styled5");
						unchecked(7, "styled6");
		 				//i=i+2;		
	         				document.getElementById("calc6").style.display="none";
						document.getElementById("calc7").style.display="block";
						//document.getElementById("calc8").style.display="block";
						break;
			}*/
			/*if(opred_place()==1){
						document.getElementById("calc"+i).style.display="none";	
						document.getElementById("calc5").style.display="none";
						/*unchecked(5, "styled4");
						unchecked(6, "styled5");
						unchecked(7, "styled6");
		 				//i=i+2;		
	         				document.getElementById("calc6").style.display="none";
						document.getElementById("calc7").style.display="block";
						//document.getElementById("calc8").style.display="block";
						break;
			}*/
			if(opred_face()==0){//определяем лицо 0 - юр. лицо
					if(i==4 && transit==0){//дальше смотри если мы стоим на форме "Наличие или отсутствие страховых выплят...", то переходим
						 //сразу к форме "Период ТС"
                 				document.getElementById("calc"+i).style.display="none";
						i=i+3;	
						document.getElementById("calc5").style.display="none";
						/*unchecked(5, "styled4");
						unchecked(6, "styled5");
						unchecked(7, "styled6");*/
		 				//i=i+2;		
	         				document.getElementById("calc6").style.display="none";
						document.getElementById("calc7").style.display="block";
						//document.getElementById("calc8").style.display="block";
						break;
                			}
					if(i==3 && transit==1){
						//alert("fgh");
						//сразу к форме "Мощность двигателя"
                 				document.getElementById("calc"+i).style.display="none";
						i=i+5;	
						document.getElementById("calc4").style.display="none";
						document.getElementById("calc5").style.display="none";
						/*unchecked(5, "styled4");
						unchecked(6, "styled5");
						unchecked(7, "styled6");*/
		 				//i=i+2;		
	         				document.getElementById("calc6").style.display="none";
						document.getElementById("calc7").style.display="none";
						document.getElementById("calc8").style.display="block";
						break;
					}
				/*
					if(i==7){
                 				document.getElementById("calc"+i).style.display="none";		
						document.getElementById("calc7").style.display="none";		
	         				document.getElementById("calc8").style.display="block";
                			}*/
					if(i!=4/* && i!=6*/){//если мы стоим на какой-либо другой форме, то просто переходим на следующую форму
						if(i==8){  
							if(transit==0){ 
								if(innostr==0){   
									//alert(i);           				
									document.getElementById("calc"+i).style.display="none";	
		 							i=i+2;	
									document.getElementById("calc9").style.display="none";		
	         							document.getElementById("calc"+i).style.display="block";
								}
								else{
									document.getElementById("calc"+i).style.display="none";	
		 							i=i+1;			
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
							else{
								document.getElementById("calc"+i).style.display="none";	
		 						i=i+3;	
								document.getElementById("calc9").style.display="none";	
								document.getElementById("calc10").style.display="none";	
	         						document.getElementById("calc"+i).style.display="block";
								calculation();
								break;
							}
						}
						else{
							if(innostr==0){
								document.getElementById("calc"+i).style.display="none";	
		 						i=i+1;			
	         						document.getElementById("calc"+i).style.display="block";
							}
							else{
								if(i==3){
									document.getElementById("calc"+i).style.display="none";	
		 							i=i+5;	
									document.getElementById("calc4").style.display="none";
									document.getElementById("calc5").style.display="none";
									document.getElementById("calc6").style.display="none";
									document.getElementById("calc7").style.display="none";		
	         							document.getElementById("calc"+i).style.display="block";
								}
								else{
									document.getElementById("calc"+i).style.display="none";	
		 							i=i+1;			
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
						}
					}
				}
				else{//если выбрано физ. лицо то мы ничего не блочим, и просто переходим на следующую форму
					document.getElementById("calc"+i).style.display="none";	
					if(stazh==1){//Если выбрана не предусмотрены огр
						if(i==5){//то смотрим
							//unchecked(6, "styled5");
							if(transit==0){
								i=i+2;
								document.getElementById("calc5").style.display="none";
								document.getElementById("calc6").style.display="none";
								document.getElementById("calc7").style.display="block";	
							}
							else{
								i=i+3;
								document.getElementById("calc5").style.display="none";
								document.getElementById("calc6").style.display="none";
								document.getElementById("calc7").style.display="none";	
								document.getElementById("calc8").style.display="block";	
							}					
						}
						else{
							if(transit==0){
								if(i==8){
		 							i=i+2;
	         							document.getElementById("calc8").style.display="none";	
	         							document.getElementById("calc9").style.display="none";	
	         							document.getElementById("calc"+i).style.display="block";
								}
								else{
		 							i=i+1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
							else{
								if(i==3){
									i=i+2;
									document.getElementById("calc3").style.display="none";
									document.getElementById("calc4").style.display="none";
									document.getElementById("calc5").style.display="block";	
								}
								else{
									if(i==8){
										document.getElementById("calc"+i).style.display="none";	
		 								i=i+3;	
										document.getElementById("calc9").style.display="none";	
										document.getElementById("calc10").style.display="none";	
	         								document.getElementById("calc"+i).style.display="block";
										calculation();
										break;
									}
									else{
		 								i=i+1;		
	         								document.getElementById("calc"+i).style.display="block";
									}
								}
							}							
						}
					}
					else{
						if(transit==0){
							if(i==8){
								if(innostr==0){
		 							i=i+2;
	         							document.getElementById("calc8").style.display="none";	
	         							document.getElementById("calc9").style.display="none";	
	         							document.getElementById("calc"+i).style.display="block";
								}
								else{
		 							i=i+1;
	         							document.getElementById("calc8").style.display="none";		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
							else{
								if(innostr==0){
		 							i=i+1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
								else{
									if(i==3){
		 								i=i+5;	
	         								document.getElementById("calc3").style.display="none";
	         								document.getElementById("calc4").style.display="none";
	         								document.getElementById("calc5").style.display="none";
	         								document.getElementById("calc6").style.display="none";
	         								document.getElementById("calc7").style.display="none";	
	         								document.getElementById("calc"+i).style.display="block";
									}
									else{
		 								i=i+1;		
	         								document.getElementById("calc"+i).style.display="block";
									}
								}
							}
						}
						else{
							if(i==3){
		 						i=i+2;	
	         						document.getElementById("calc3").style.display="none";	
	         						document.getElementById("calc4").style.display="none";
	         						document.getElementById("calc5").style.display="block";
							}
							else{
								if(i==8){
									document.getElementById("calc"+i).style.display="none";	
		 							i=i+3;	
									document.getElementById("calc9").style.display="none";	
									document.getElementById("calc10").style.display="none";	
	         							document.getElementById("calc"+i).style.display="block";
									calculation();
									break;
								}
								if(i==6){
									document.getElementById("calc"+i).style.display="none";	
		 							i=i+2;	
									document.getElementById("calc7").style.display="none";	
	         							document.getElementById("calc"+i).style.display="block";
								}
								else{
		 							i=i+1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
						}
					}					
				}	
			}
			if((calc8==0)&&(i==7)){
				document.getElementById("calc"+i).style.display="none";	
		 		i=i+3;	
				document.getElementById("calc8").style.display="none";
				document.getElementById("calc9").style.display="none";		
	         		document.getElementById("calc"+i).style.display="block";
				break;
			}
			if((calc8==0)&&(i!=7)){
				if(opred_face()==0){
					if(i==4 && transit==0){
                 				document.getElementById("calc"+i).style.display="none";	
						document.getElementById("calc5").style.display="none";
						document.getElementById("calc6").style.display="none";
						document.getElementById("calc7").style.display="block";
						i=i+3;
						//document.getElementById("calc8").style.display="none";
		 				//i=i+2;		
	         				//document.getElementById("calc9").style.display="block";
						break;
                			}
					if(i==3 && transit==1){
						//alert("fgh");
						//сразу к форме "Мощность двигателя"
                 				document.getElementById("calc"+i).style.display="none";
						i=i+5;	
						document.getElementById("calc4").style.display="none";
						document.getElementById("calc5").style.display="none";
						/*unchecked(5, "styled4");
						unchecked(6, "styled5");
						unchecked(7, "styled6");*/
		 				//i=i+2;		
	         				document.getElementById("calc6").style.display="none";
						document.getElementById("calc7").style.display="none";
						document.getElementById("calc8").style.display="none";
						document.getElementById("calc9").style.display="none";
						document.getElementById("calc10").style.display="none";
						document.getElementById("calc11").style.display="block";
						calculation();
						break;
					}
					if(i!=4/* && i!=6*/){
						if(innostr==0){
							//alert(i);
							document.getElementById("calc"+i).style.display="none";	
		 					i=i+1;			
	         					document.getElementById("calc"+i).style.display="block";
							break;
						}
						else{
							if(i==3){
								document.getElementById("calc"+i).style.display="none";	
		 						i=i+6;
	         						document.getElementById("calc4").style.display="none";
	         						document.getElementById("calc5").style.display="none";
	         						document.getElementById("calc6").style.display="none";
	         						document.getElementById("calc7").style.display="none";
	         						document.getElementById("calc8").style.display="none";			
	         						document.getElementById("calc"+i).style.display="block";
								break;
							}
							else{
								document.getElementById("calc"+i).style.display="none";	
		 						i=i+1;			
	         						document.getElementById("calc"+i).style.display="block";
								break;
							}
						}
					} 		
				}
				else{
                			document.getElementById("calc"+i).style.display="none";	
					if(stazh==1){
						if(i==5){
							//unchecked(6, "styled5");
							if(transit==0){
								i=i+2;
								document.getElementById("calc5").style.display="none";
								document.getElementById("calc6").style.display="none";
								document.getElementById("calc7").style.display="block";	
							}
							else{
                 						document.getElementById("calc"+i).style.display="none";
								i=i+6;			
	         						document.getElementById("calc6").style.display="none";
								document.getElementById("calc7").style.display="none";
								document.getElementById("calc8").style.display="none";
								document.getElementById("calc9").style.display="none";
								document.getElementById("calc10").style.display="none";
								document.getElementById("calc11").style.display="block";
								calculation();
								break;
							}					
						}
						else{
							if(transit==0){
		 						i=i+1;		
	         						document.getElementById("calc"+i).style.display="block";
							}
							else{
								if(i==3){
									i=i+2;
									document.getElementById("calc3").style.display="none";
									document.getElementById("calc4").style.display="none";
									document.getElementById("calc5").style.display="block";	
								}
								else{
		 							i=i+1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}								
						}
					}
					else{
						if(transit==0){
							if(innostr==0){
		 						i=i+1;		
	         						document.getElementById("calc"+i).style.display="block";
							}
							else{
								if(i==3){
		 							i=i+6;	
	         							document.getElementById("calc3").style.display="none";
	         							document.getElementById("calc4").style.display="none";
	         							document.getElementById("calc5").style.display="none";
	         							document.getElementById("calc6").style.display="none";
	         							document.getElementById("calc7").style.display="none";
	         							document.getElementById("calc8").style.display="none";	
	         							document.getElementById("calc"+i).style.display="block";
									break;
								}
								else{
		 							i=i+1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
						}
						else{
							if(i==3){
		 						i=i+2;	
	         						document.getElementById("calc3").style.display="none";	
	         						document.getElementById("calc4").style.display="none";
	         						document.getElementById("calc5").style.display="block";
							}
							else{
								if(i==6){
                 							document.getElementById("calc"+i).style.display="none";
									i=i+5;			
									document.getElementById("calc7").style.display="none";
									document.getElementById("calc8").style.display="none";
									document.getElementById("calc9").style.display="none";
									document.getElementById("calc10").style.display="none";
									document.getElementById("calc11").style.display="block";
									calculation();
								}
								else{
		 							i=i+1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
						}
					}
				}
			}
                }
		else{ 
		if(opred==1 || opred2==1){
//alert(i);
			if(transit==0){

				if(i==7){
					i=i+4;
					document.getElementById("calc7").style.display="none";
					document.getElementById("calc8").style.display="none";
					document.getElementById("calc9").style.display="none";	
	        			document.getElementById("calc10").style.display="none";
	        			document.getElementById("calc11").style.display="block";
					document.getElementById("next").style.display="none";
					calculation();
					break;			
				}
				else{
					if(i==3){
						if(innostr==0){
							i=i+1;
							document.getElementById("calc3").style.display="none";	
							document.getElementById("calc4").style.display="block";
							break;
						}
						else{
		 					i=i+6;	
	         					document.getElementById("calc3").style.display="none";
	         					document.getElementById("calc4").style.display="none";
	         					document.getElementById("calc5").style.display="none";
	         					document.getElementById("calc6").style.display="none";
	         					document.getElementById("calc7").style.display="none";
	         					document.getElementById("calc8").style.display="none";	
	         					document.getElementById("calc"+i).style.display="block";
							break;
						}
					}
					else{
						if(innostr==0){
							i=i+3;
							document.getElementById("calc3").style.display="none";	
							document.getElementById("calc4").style.display="none";
							document.getElementById("calc5").style.display="none";
							document.getElementById("calc6").style.display="none";
							document.getElementById("calc7").style.display="block";
						}
						else{
							if(i==9){
								i=i+2;
								document.getElementById("calc9").style.display="none";
								document.getElementById("calc10").style.display="none";
	        						document.getElementById("calc11").style.display="block";
								document.getElementById("next").style.display="none";
								calculation();
								break;
							}
							else{
								document.getElementById("calc"+i).style.display="none";
								i=i+1;
								document.getElementById("calc"+i).style.display="block";	
								break;
							}
						}
					}
				}
			}
			else{
				i=i+8;
				document.getElementById("calc2").style.display="none";
				document.getElementById("calc3").style.display="none";	
				document.getElementById("calc4").style.display="none";
				document.getElementById("calc5").style.display="none";
				document.getElementById("calc6").style.display="none";
				document.getElementById("calc7").style.display="none";
				document.getElementById("calc8").style.display="none";
				document.getElementById("calc9").style.display="none";
				document.getElementById("calc10").style.display="none";
				document.getElementById("calc11").style.display="block";
				calculation();
				break;
			}		
		}
		}
		break;
		}
	}
if(i!=11){
	if(checkRadios(i)) document.getElementById("next").style.display="block";
}
}

function previos(){
	opred=0;
	opred2=0;
	for (var i=1; i < 12; i++){
		if(document.getElementById("calc"+i).style.display!="none"){
			document.getElementById("next").style.display="block";
			if(i==2) document.getElementById("nazad").style.display="none";
			if(opred_face()==0){
				for(j=0; j < nikak_div_size; j++){
                          		if((nikak_div[j]==i)||i==11||i==7){
			   			opred=1;
			  		}
                       		 }
			}
			if(opred_face()==1){	
				for(j=0; j < nikak_div_size2; j++){
                          		if((nikak_div2[j]==i)||i==11||i==7){
			   			opred2=1;
						break;
			  		}
                        	}
			}
//alert(opred+" "+opred2);
			if(opred==0 && opred2==0){
			if(calc8==8){
				if(opred_face()==0){
					if(i==7){
                 				document.getElementById("calc"+i).style.display="none";	
						document.getElementById("calc5").style.display="none";
						document.getElementById("calc6").style.display="none";	
	         				document.getElementById("calc4").style.display="block";
						break;
                			}
					if(i==8){
						if(transit==0){
							if(innostr==0){
                 						document.getElementById("calc"+i).style.display="none";		
								document.getElementById("calc7").style.display="block";
							}
							else{
                 						document.getElementById("calc"+i).style.display="none";		
								document.getElementById("calc7").style.display="none";
								document.getElementById("calc6").style.display="none";
								document.getElementById("calc5").style.display="none";
								document.getElementById("calc4").style.display="none";
								document.getElementById("calc3").style.display="block";
							}
							/*document.getElementById("calc6").style.display="none";
							document.getElementById("calc5").style.display="none";		
	         					document.getElementById("calc4").style.display="block";*/
						}
						else{
                 					document.getElementById("calc"+i).style.display="none";		
							document.getElementById("calc7").style.display="none";
							document.getElementById("calc6").style.display="none";
							document.getElementById("calc5").style.display="none";
							document.getElementById("calc4").style.display="none";
							document.getElementById("calc3").style.display="block";
						}
						break;
                			}
					if(/*i!=6 && */i!=8){
						if(transit==0){
							if(i==10 && innostr==0){
                 						document.getElementById("calc"+i).style.display="none";	
								document.getElementById("calc9").style.display="none";	
		 						i=i-2;		
	         						document.getElementById("calc"+i).style.display="block";
							}
							else{
                 						document.getElementById("calc"+i).style.display="none";	
		 						i=i-1;		
	         						document.getElementById("calc"+i).style.display="block";
							}
						}
						else{
							if(i==11){
                 						document.getElementById("calc"+i).style.display="none";		
								i=i-3;
								document.getElementById("calc10").style.display="none";
								document.getElementById("calc9").style.display="none";
								document.getElementById("calc8").style.display="block";
								break;							
							}
							else{
                 						document.getElementById("calc"+i).style.display="none";	
		 						i=i-1;		
	         					document.getElementById("calc"+i).style.display="block";
								break;							
							}
						}
					}
				}
				else{
					document.getElementById("calc"+i).style.display="none";
					if(stazh==1){
						if(i==7){
							document.getElementById("calc5").style.display="block";
							document.getElementById("calc6").style.display="none";
							document.getElementById("calc7").style.display="none";						
						}
						else{
							if(transit==0){
								if(i==10){
									i=i-2;
									document.getElementById("calc9").style.display="none";
									document.getElementById("calc"+i).style.display="block";
								}
								else{
		 							i=i-1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
							else{
								if(i==11){
									i=i-3;
									document.getElementById("calc9").style.display="none";
									document.getElementById("calc"+i).style.display="block";
									break;
								}
								if(i==8){
		 							i=i-3;		
	         							document.getElementById("calc"+i).style.display="block";
	         							document.getElementById("calc7").style.display="none";
	         							document.getElementById("calc6").style.display="none";
	         							document.getElementById("calc8").style.display="none";
									break;
								}
								if(i==5){
		 							i=i-2;		
	         							document.getElementById("calc"+i).style.display="block";
	         							document.getElementById("calc5").style.display="none";
	         							document.getElementById("calc4").style.display="none";
									break;
								}
								else{
		 							i=i-1;		
	         							document.getElementById("calc"+i).style.display="block";
								}							
							}							
						}
					}
					else{
						if(transit==0){
							if(i==10){
								if(innostr==0){
									i=i-2;
									document.getElementById("calc9").style.display="none";
									document.getElementById("calc"+i).style.display="block";
								}
								else{
									i=i-1;
									document.getElementById("calc"+i).style.display="block";
								}
							}
							else{
								if(innostr==0){
		 							i=i-1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
								else{
									if(i==8){
		 								i=i-5;		
	         								document.getElementById("calc"+i).style.display="block";
	         								document.getElementById("calc5").style.display="none";
	         								document.getElementById("calc4").style.display="none";
	         								document.getElementById("calc7").style.display="none";
	         								document.getElementById("calc6").style.display="none";
	         								document.getElementById("calc8").style.display="none";
										break;
									}
									else{
		 								i=i-1;		
	         								document.getElementById("calc"+i).style.display="block";
									}
								}
							}
						}
						else{
							if(i==11){
								i=i-3;
								document.getElementById("calc9").style.display="none";
								document.getElementById("calc"+i).style.display="block";
								break;
							}
							if(i==8){
		 						i=i-2;		
	         						document.getElementById("calc"+i).style.display="block";
	         						document.getElementById("calc7").style.display="none";
	         						document.getElementById("calc8").style.display="none";
								break;
							}
							if(i==5){
		 						i=i-2;		
	         						document.getElementById("calc"+i).style.display="block";
	         						document.getElementById("calc5").style.display="none";
	         						document.getElementById("calc4").style.display="none";
								break;
							}
							else{
		 						i=i-1;		
	         						document.getElementById("calc"+i).style.display="block";
							}
						}
					}				
				}	
			}
			else{
				if(transit==0){
					if(i==10){
						if(innostr==0){
							i=i-3;
                					document.getElementById("calc"+i).style.display="block";	
							document.getElementById("calc10").style.display="none";
	        					document.getElementById("calc9").style.display="none";
	        					document.getElementById("calc8").style.display="none";
							break;
						}
						else{
							i=i-1;
                					document.getElementById("calc"+i).style.display="block";	
							document.getElementById("calc10").style.display="none";
							break;
						}
					}
					if(opred_face()==0){
						if(i==7){
							i=i-3;
                					document.getElementById("calc"+i).style.display="block";	
							document.getElementById("calc7").style.display="none";
	        					document.getElementById("calc6").style.display="none";
	        					document.getElementById("calc5").style.display="none";
						}
						else{
							if(innostr==0){
								document.getElementById("calc"+i).style.display="none";
		 						i=i-1;		
	         						document.getElementById("calc"+i).style.display="block";
							}
							else{
								if(i==9){
									i=i-6;
                							document.getElementById("calc"+i).style.display="block";
									document.getElementById("calc9").style.display="none";
									document.getElementById("calc8").style.display="none";	
									document.getElementById("calc7").style.display="none";
	        							document.getElementById("calc6").style.display="none";
	        							document.getElementById("calc5").style.display="none";
	        							document.getElementById("calc4").style.display="none";
								}
								else{
									document.getElementById("calc"+i).style.display="none";
		 							i=i-1;		
	         							document.getElementById("calc"+i).style.display="block";
								}
							}
						}
					}
					else{
						document.getElementById("calc"+i).style.display="none";
						if(stazh==1){
							if(i==7){
								i=i-2;
								document.getElementById("calc5").style.display="block";
								document.getElementById("calc6").style.display="none";
								document.getElementById("calc7").style.display="none";	
								break;					
							}
							if(i==10){
								i=i-3;
								document.getElementById("calc"+i).style.display="block";
								document.getElementById("calc10").style.display="none";
								document.getElementById("calc9").style.display="none";
								document.getElementById("calc8").style.display="none";		
								break;
							}
							else{
		 						i=i-1;		
	         					document.getElementById("calc"+i).style.display="block";							
							}
						}
						else{
							if(i==7){
								i=i-1;
								document.getElementById("calc6").style.display="block";
								document.getElementById("calc7").style.display="none";	
								break;					
							}
							if(i==10){
								if(innostr==0){
									i=i-3;
                							document.getElementById("calc"+i).style.display="block";	
									document.getElementById("calc10").style.display="none";
	        							document.getElementById("calc9").style.display="none";
	        							document.getElementById("calc8").style.display="none";
								}
								else{
									i=i-1;
                							document.getElementById("calc"+i).style.display="block";	
									document.getElementById("calc10").style.display="none";
								}
							}
							else{
								if(innostr==0){
		 							i=i-1;		
	         					document.getElementById("calc"+i).style.display="block";
								}
								else{	
									if(i==9){
										i=i-6;
                								document.getElementById("calc"+i).style.display="block";	
										document.getElementById("calc9").style.display="none";
	        								document.getElementById("calc8").style.display="none";
	        								document.getElementById("calc7").style.display="none";
	        								document.getElementById("calc6").style.display="none";
	        								document.getElementById("calc5").style.display="none";
	        								document.getElementById("calc4").style.display="none";
									}
									else{
	         								document.getElementById("calc"+i).style.display="none";
		 								i=i-1;		
	         								document.getElementById("calc"+i).style.display="block";
									}
								}							
							}
						}	
					}
				}
				else{
					if(opred_face()==0){
						if(i==11){
							i=i-8;
                					document.getElementById("calc"+i).style.display="block";	
							document.getElementById("calc11").style.display="none";
	        					document.getElementById("calc10").style.display="none";
	        					document.getElementById("calc9").style.display="none";
	        					document.getElementById("calc8").style.display="none";
	        					document.getElementById("calc7").style.display="none";
	        					document.getElementById("calc6").style.display="none";
	        					document.getElementById("calc5").style.display="none";
	        					document.getElementById("calc4").style.display="none";
						}
						else{
							document.getElementById("calc"+i).style.display="none";
		 					i=i-1;		
	         					document.getElementById("calc"+i).style.display="block";
						}
					}
					else{
						document.getElementById("calc"+i).style.display="none";
						if(stazh==1){
							if(i==11){
								i=i-6;
								document.getElementById("calc5").style.display="block";
								document.getElementById("calc11").style.display="none";
								document.getElementById("calc10").style.display="none";
								document.getElementById("calc9").style.display="none";	
								document.getElementById("calc8").style.display="none";	
								document.getElementById("calc7").style.display="none";	
								document.getElementById("calc6").style.display="none";		
								break;					
							}
							if(i==5){
								i=i-2;
								document.getElementById("calc"+i).style.display="block";
								document.getElementById("calc5").style.display="none";
								document.getElementById("calc4").style.display="none";	
								break;
							}
							else{
		 						i=i-1;		
	         					document.getElementById("calc"+i).style.display="block";							
							}
						}
						else{
							if(i==11){
								i=i-5;
								document.getElementById("calc6").style.display="block";
								document.getElementById("calc11").style.display="none";
								document.getElementById("calc10").style.display="none";
								document.getElementById("calc9").style.display="none";	
								document.getElementById("calc8").style.display="none";	
								document.getElementById("calc7").style.display="none";	
								break;					
							}
							if(i==5){
								i=i-2;
								document.getElementById("calc"+i).style.display="block";
								document.getElementById("calc5").style.display="none";
								document.getElementById("calc4").style.display="none";	
								break;
							}
							else{
		 						i=i-1;		
	         					document.getElementById("calc"+i).style.display="block";							
							}
						}	
					}
				}
			}
                }
		else{ 
		if(opred==1 || opred2==1){
			if(transit==0){
				if(i==11){
					if(innostr==0){
						i=i-4;
						document.getElementById("calc7").style.display="block";
						document.getElementById("calc8").style.display="none";
						document.getElementById("calc9").style.display="none";	
	        				document.getElementById("calc10").style.display="none";
	        				document.getElementById("calc11").style.display="none";
						break;
					}
					else{
						document.getElementById("calc11").style.display="none";
						document.getElementById("calc10").style.display="none";
		 				i=i-2;		
	         				document.getElementById("calc"+i).style.display="block";
					}			
				}
				else{
					if(i==7){
						i=i-3;
						document.getElementById("calc7").style.display="none";
						document.getElementById("calc6").style.display="none";
						document.getElementById("calc5").style.display="none";	
						document.getElementById("calc4").style.display="block";
						break;
					}
					else{
						if(innostr==0){
							document.getElementById("calc"+i).style.display="none";
							i=i-1;
							document.getElementById("calc"+i).style.display="block";
						}
						else{
							if(i==9){
								i=i-6;
								document.getElementById("calc9").style.display="none";
								document.getElementById("calc8").style.display="none";
								document.getElementById("calc7").style.display="none";
								document.getElementById("calc6").style.display="none";
								document.getElementById("calc5").style.display="none";	
								document.getElementById("calc4").style.display="none";
								document.getElementById("calc3").style.display="block";
								break;
							}
							else{
								alert(i);
								document.getElementById("calc"+i).style.display="none";
								i=i-1;
								document.getElementById("calc"+i).style.display="block";
							}
						}	
					}
				}
			}
			else{
				if(i==11){
					i=i-8;
					document.getElementById("calc3").style.display="block";	
					document.getElementById("calc4").style.display="none";
					document.getElementById("calc5").style.display="none";
					document.getElementById("calc6").style.display="none";
					document.getElementById("calc7").style.display="none";
					document.getElementById("calc8").style.display="none";
					document.getElementById("calc9").style.display="none";
					document.getElementById("calc10").style.display="none";
					document.getElementById("calc11").style.display="none";
					break;
				}
				else{
					document.getElementById("calc"+i).style.display="none";
					i=i-1;
					document.getElementById("calc"+i).style.display="block";	
				}
			}		
		}
		}
		break;
		}
	}
	
}
