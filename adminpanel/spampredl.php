<?php
  include('mssql_connect.php');
 $idpage=@$_GET['id_page'];
 $result=mysql_query("select * from page where id_page=$idpage",$db);
 if($result){
  $row=mysql_fetch_array($result);
  $img=$row["img"]; 
  if($img==""){
   $img="../images/predlozhenia/no_image.jpg";
  }
  echo "<form action='izmenimgpredl.php' method='post' enctype='multipart/form-data'>";
  if(substr($img, 0, 7)=="http://"){
   echo "<br/><img src='".$img."' width='100px' height='100px' alt=''><br/><br/>";
  }
  else
   echo "<br/><img src='../".$img."' width='100px' height='100px' alt=''><br/><br/>";
  echo "Введите ссылку на изображение<br/>";
  ?>
  <input type='text' id='imgpredl'/> <input type='button' value='ОК' OnClick='download_img_url(<?php echo $idpage; ?>);' /><br/>
  <?php
  echo "<input type='file' name='fil' /><input type='submit' value='Загрузить' /><br/><br/>";
  echo "<input type='text' name='idpage' value='".$idpage."' style='display:none;'/>";
  echo "<input type='button' OnClick='closedobavobjavl2();' value='отмена' /><br/><br/>";
  echo "</form>";
 }
?>
