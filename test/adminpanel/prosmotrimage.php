<?php
@session_start();
?>
<div style='background:silver; overflow: scroll; border:solid 0px; width:630px; height:450px; top:0px; margin-right:30px; float:right;'>
<?php
$size="";
$size=@$_SESSION['size2'];
if(!isset($size)) {$size='../images/baner/200x50/';
$_SESSION['size2']=$size;}
$directory = $size;    //название папки с изображениями
$allowed_types=array('jpg','jpeg','gif','png','tiff','swf');    //разрешеные типы изображений
$file_parts=array();
  $ext='';
  $title='';
  $i=0;
//пробуем открыть папку
  $dir_handle = @opendir($directory) or die("There is an error with your image directory!");
while ($file = readdir($dir_handle))    //поиск по файлам
  {
  if($file=='.' || $file == '..') continue;    //пропустить ссылки на другие папки
 $file_parts = explode('.',$file);    //разделить имя файла и поместить его в массив
  $ext = strtolower(array_pop($file_parts));    //последний элеменет - это расширение
 $title = implode('.',$file_parts);    
  $title = htmlspecialchars($title);    
 $nomargin='';
  if(in_array($ext,$allowed_types))    
  {

  if(($i+1)%4==0) $nomargin='nomargin';    //последнему изображению 
//в ряде присваевается CSS класс "nomargin"

 
  echo '<div class="pic '.$nomargin.'">';
  if($ext=='swf'){
  echo '<object width="280" height="100"><param name="movie" value="'.$directory.$file.'"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="'.$directory.$file.'" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="280" height="100"></embed></object>';
  }
  else{
  echo '<img alt="" src="'.$directory.$file.'" width=280px height=100px title="Расположение файла: '.$directory.'">';
  }
  echo '<a style="text-decoration:none; color:black; float:left;" href="'.$directory.$file.'" title="'.$title.'" target="_blank">'.$file.'</a>';
  echo '<a style="text-decoration:none; float:right; color:black;"  href="delete.php?delete='.$file.'">Удалить</a>';
  echo '</div>';
 $i++;    
  }
  }
closedir($dir_handle);    //закрыть папку
?>
</div>
