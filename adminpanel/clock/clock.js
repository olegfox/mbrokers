function clock(){
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
	document.getElementById("clock").innerHTML=oRequest.responseText;
      }
    }
  oRequest.open("GET","./clock/clock.php",true);
  oRequest.send(null);
  
}
setInterval(clock,1000);