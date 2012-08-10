<script>
function addUser(){
var log=document.getElementById('login').value; 
var pas=document.getElementById('pass').value; var stati=document.getElementById('stat').value;
var em=document.getElementById('email').value;
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
	alert(oRequest.responseText);
	if(oRequest.responseText!="Заполнены не все поля!")
		window.location.reload();
      }
    }
  var paramString = "?login="+log+"&pass="+pas+"&stat="+stati+"&email="+em;
  oRequest.open("GET","createuser.php"+paramString,true);
  oRequest.send(null);

}
</script> 
<table align=center style="text-align:center;">
 <tr><td>Логин</td><td><input type='text' id='login' style='border:gray solid 1px; height:25px; font-size:12pt; width:400px;'/></td></tr>
<tr><td>Пароль</td><td><input type='password' id='pass' style='border:gray solid 1px; height:25px; font-size:12pt; width:400px;'/></td></tr>
<tr><td>E-mail</td><td><input type='text' id='email' style='border:gray solid 1px; height:25px; font-size:12pt; width:400px;'/></td></tr>
<tr style='background:gray'><td  style="color:white;">Права<br/>доступа</td>
<td><select id="stat">
 <option value='administrator'>Администратор</option>
 <option value='moderator'>Модератор</option>
 </select></td></tr>
<tr><td colspan="2">
<input type='submit' value='Добавить' OnClick="addUser();"/></td></tr>
 </table>
