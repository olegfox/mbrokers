function background_coloro(object){
  object.style.backgroundColor='white';
}
function kasko_submit(){
  if(document.getElementById('fio_kasko').value!="" && document.getElementById('telefon_kasko').value!="" && document.getElementById('marka').value!="" && document.getElementById('model').value!="" && document.getElementById('stoimost').value!="" && document.getElementById('email').value!=""){
if(document.getElementById('stazh').value<=(document.getElementById('age').value-18)){
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
  var paramString = "?fio_kasko="+document.getElementById('fio_kasko').value+"&telefon_kasko="+document.getElementById('telefon_kasko').value+"&marka="+document.getElementById('marka').value+"&model="+document.getElementById('model').value+"&god="+document.getElementById('god').value+"&stoimost="+document.getElementById('stoimost').value+"&age="+document.getElementById('age').value+"&stazh="+document.getElementById('stazh').value+"&pol="+document.getElementById('pol').value+"&email="+document.getElementById('email').value;
//alert(paramString);
  oRequest.open("GET","/kasko_submit.php"+paramString,true);
//alert(oRequest.responseText);
  oRequest.send(null);
  document.getElementById('kasko_sub').innerHTML="<div style='margin-top:15px;'>Заявка успешно подана! В течении рабочего дня она будет обработана и наши специалисты свяжутся с вами, для обсужения вопросов оформления страхового полиса.</div>";
}
else{
	document.getElementById('text').innerHTML="Поля отмеченные звёздочкой(*) обязательны для заполнения\n<font size='5pt' color='red'> Ошибка! Проверьте значения возраста и стажа.</font>";
}
  }
  else{
    if(document.getElementById('fio_kasko').value=="") document.getElementById('fio_kasko').style.backgroundColor="red";
    if(document.getElementById('telefon_kasko').value=="") document.getElementById('telefon_kasko').style.backgroundColor="red";
    if(document.getElementById('marka').value=="") document.getElementById('marka').style.backgroundColor="red";
    if(document.getElementById('model').value=="") document.getElementById('model').style.backgroundColor="red";
    if(document.getElementById('stoimost').value=="") document.getElementById('stoimost').style.backgroundColor="red";
    if(document.getElementById('email').value=="") document.getElementById('email').style.backgroundColor="red";
  }
}
