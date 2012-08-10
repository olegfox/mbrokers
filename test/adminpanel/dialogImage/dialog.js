function showBigPicture(object){
  img=object.parentNode;
  img=img.nextSibling;
  img=img.childNodes[0];
  document.getElementById('contentDialog').innerHTML="<input id='nazadImagePartners' type='button' value='Назад' onclick=dialogImagePartners('"+dirus+"');><br/><br/><img src='"+img.src+"'>";
}
function checkParentsImage(object){
  img=object.childNodes[0];
  document.getElementById('checkImg').innerHTML="<img src='"+img.src+"' width='"+img.width+"' height='"+img.height+"'>";
  document.getElementById('partnersImage').value=img.src;
  document.getElementById('partnersImage').style.backgroundColor="white";
  hideDialogImagePartners();  
}

