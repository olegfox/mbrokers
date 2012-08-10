<?php
  @session_start();
  $partners=@$_GET['partners'];
  $dir=@$_GET['dir'];
  echo $dir;
  if($partners==1){
?>
<div id="allDialog">
  <div id="leftbarDialog">
    <ul id="leftbarDialogList">
      <li>
	<a href="#" onclick="javascript:dialogImagePartners('/images/');return false;">Картинки Главный каталог</a>
      </li>
      <li>
	<a href="#" onclick="javascript:dialogImagePartners('/adminpanel/images/');return false;">Картинки Админпанели</a>
      </li>
      <li>
	<a href="#" onclick="javascript:dialogImagePartners('/images/label/');return false;">Картинки Партнёры</a>
      </li>
    </ul>
  </div>
  <div id="contentDialog">
<?php
$i=0;
$opred=0;
$dir2=$dir;
$dir=$_SERVER['DOCUMENT_ROOT'].$dir;
@$_SESSION['dir']=$dir;
if (is_dir($dir)) {
   if ($dh = opendir($dir)) {
       echo "<table style='font-size:10pt;'>";
       while (($file = readdir($dh)) !== false) {
	   if($i==0) echo "<tr>";
	   $img=$dir.$file;
	   $size = getimagesize ($img);
	   if($size[0]>$size[1]){
	    if($size[0]>100){
	      $opred=1;
	      $width=100;
	      $height=($size[1]/$size[0])*100;
	    }
	   }
	   if($size[0]<$size[1]){
	    if($size[1]>100){
	      $opred=1;
	      $height=100;
	      $width=($size[0]/$size[1])*100;
	    }
	   }
	   if($opred==0) {$width=$size[0];$height=$size[1];}
	   print "<td><input type='button'  onclick='showBigPicture(this);' value='+' title='Увеличить картинку'></td>";
           print "<td id='contentDialogPicture' onclick='checkParentsImage(this);' align='center' style='width:100px;height:100px;'><img width='".$width."' height='".$height."' src='".$dir2.$file."' /><br/>".$size[0]."*".$size[1]."<br/>".$file."</td>";
	   $opred=0;
	   $i++;
	   if($i==5) {$i=0; echo "</tr>";};
       }
       closedir($dh);
       echo "</table>";
   }
}
?>     
  </div>
  <div id="downloadDialog">
    <form action="./dialogImage/upload.php" name="uploadForm" method="post" target="hiddenframe" enctype="multipart/form-data"
onsubmit="document.getElementById('res').innerHTML=''; document.getElementById('loading').style.display='block'; 
return true;">
<input type="file" name="userfile" id="userfile" />
<input type="submit" value="Загрузить"  name="upload" id="upload" />
</form>
<div id="res" style="margin: 1em 0;"></div>
<div id="loading" style="display:none; position: absolute; z-index: 99; left: 45%; top: 45%;">
<img src="../../images/ajax-loader.gif" border="0" /> Идет загрузка...
</div>
<iframe id="hiddenframe" name="hiddenframe" style="width:800px; height:100px; border:1px;"></iframe>
  </div>
</div>
<?php
  }
?>
