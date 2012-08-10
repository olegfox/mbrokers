<?php
 @header("Content-type: text/html; charset=utf-8");
  @session_start();
$uploaddir = @$_SESSION['dir'];
echo $uploaddir;
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

print "<pre>";
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    print "File is valid, and was successfully uploaded. ";
    print "Here's some more debugging info:\n";
    print_r($_FILES);
} else {
    print "Possible file upload attack!  Here's some debugging info:\n";
    print "Possible file upload attack!  Дополнительная отладочная информация:\n";
    print_r($_FILES);
}
  //$size="";
  //$size=@$_SESSION['size2'];
   /*if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], $dir.$_FILES["filename"]["name"]);
   } else {
      echo("Ошибка загрузки файла");
   }*/
   
// ...............................................
//sleep(5);
/*if(isset($_POST['upload'])){
    //Список разрешенных файлов
    $whitelist = array(".gif", ".jpeg", ".png");        
    $data = array();
    $error = true;
    //Проверяем разрешение файла
    foreach  ($whitelist as  $item) {
        if(preg_match("/$item\$/i",$_FILES['userfile']['name'])) $error = false;
    }
    //если нет ошибок, грузим файл
    if(!$error) {
    $folder =  "..".@$_SESSION['dir'];//директория в которую будет загружен файл
//$folder="images/";
        $uploadedFile =  $folder.basename($_FILES['userfile']['name']);
echo $uploadedFile;
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
            if(copy($_FILES['userfile']['tmp_name'],$uploadedFile)){
                $data = $_FILES['userfile'];
echo $data;
            }
            else {   
                $data['errors'] = "Во время загрузки файла произошла ошибка";
echo $_FILES['userfile']['error'];
            }
        }
        else {   
echo "Файл не  загружен";
            $data['errors'] = "Файл не  загружен";
        }
    }
    else{
 echo 'Вы загружаете запрещенный тип файла';        
        $data['errors'] = 'Вы загружаете запрещенный тип файла';
    }
   /* //Формируем js-файл   
    $res = '<script type="text/javascript">';
    $res .= "var data = new Object;";
    foreach($data as $key => $value){
        $res .= 'data.'.$key.' = "'.$value.'";';
    }
    $res .= 'window.parent.handleResponse(data);';
    $res .= "</script>";
    echo $res;
echo '<script type="text/javascript">';
echo 'window.parent.document.getElementById("loading").style.display="none";';
// Если загрузка прошла успешно
//if (empty($error)) {
   echo 'window.parent.document.getElementById("res").innerHTML='.$data['errors'].';';
//} else {
 // echo 'window.parent.document.getElementById("res").innerHTML="Ошибка при загрузке файла";';
//}
echo '</script>';
}
else{
    die("ERROR");
}*/
?>