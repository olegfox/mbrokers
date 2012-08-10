 <input type="button" value="Добавить новый объект" OnClick="$.get('newobject.php',{}, function(data){window.location.reload();});"><br/>
 <table align=center style="text-align:center;" cellpadding=10>
 <form enctype="multipart/form-data" method="post" action="uploadobject.php">
 <?php
 $idcountry=@$_SESSION['pageosn'];
 $idtheme=@$_SESSION['theme'];
 $return=mysql_query("select * from object where country_id_country='$idcountry' and theme_id_theme='$idtheme';", $db);
 $calls=0;
 echo "<tr>";
 if($return){
 $i=0;
 $endi=1;
 while($row=mysql_fetch_array($return)){
  $calls++;
  $i++;
  $endi=0;
  if($calls==4) {$end=1; $calls=0; echo "</tr><br/>"; echo "<tr><br/>"; }
  $img=$row['image'];
  $hint=$row['hint'];
  $hintger=$row['hint_ger'];
  $hinteng=$row['hint_eng'];  
  $idobject=$row['id_object'];
  echo "<td class='object'><br/>";
  ?>
  <input type=button id="<?php echo $idobject;?>" width="10" height="10" value="x" title="Удалить объект" OnClick="$.get('deleteobject.php',{'idobject':id}, function(data){window.location.reload();});" />
  <img alt="" width="200" height="150" src='<?php echo "../".$img;?>' alt=""><br/>
  <?php
  echo "ru<input type='text' id='t1$idobject' value='";
  echo $hint."' OnKeyUp='edithint(id, 1);' /><br/>";
  echo "ger<input type='text' id='t2$idobject' value='";
  echo $hintger."' OnKeyUp='edithint(id, 2);' /><br/>";
  echo "eng<input type='text' id='t3$idobject' value='";
  echo $hinteng."' OnKeyUp='edithint(id, 3);' /><br/>";  
  echo "Загрузите картинку<br/>";
  echo "<input type='file' id='f$idobject' name='f$idobject' OnChange='uploadobject(id);' /><br/>";
  echo "<input type='submit' value='Загрузить' /><br/>";
  echo "</td><br/>";
 }
 if($endi==0) echo "</tr>";
 ?>
 </table>
 </form>
 <?php
 }