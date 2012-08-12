<?php
$directory = '../images/banervideo/';    //название папки с изображениями
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

 
  if($ext=='swf'){
  echo '<object width="275" height="55"><param name="movie" value="'.$directory.$file.'"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="'.$directory.$file.'" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="275" height="55"></embed></object>';
  }
  else{
  echo '<img alt="" src="'.$directory.$file.'" width="275px" height="55px" title="Расположение файла: '.$directory.'"></img>';
  }
 $i++;    
  }
  }
closedir($dir_handle);    //закрыть папку
?>
