<div class="banerimage">
 <div class="baner1">
 <?php 
  $rand=rand(1, 2);
  $result=mysql_query("SELECT * FROM baner WHERE id=$rand;", $db);
  $result=@mysql_fetch_array($result);
  $var = strrpos($result['image'], ".");
  $string = substr($result['image'], $var+1, 3);
  if($string=='swf'){  
 ?>
 <a target="_blank" href=' <?php echo $result['link'];?>' ><object width="200" height="60"><param name="movie" value='<?php echo $result['image'];?>'></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src='<?php echo $result['image'];?>' type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="200" height="60"></embed></object></a>
 <?php
 }
 else{
 ?>
 <a target="_blank" href='<?php echo $result['link'];?>'><img src='<?php echo $result['image']; ?>' alt="Реклама"/></a>
 <?php
 }
 ?>
 </div>
 <div class="baner3">
 <?php 
  $result=mysql_query("SELECT * FROM baner WHERE id=3;", $db);
  $result=@mysql_fetch_array($result);
  $var = strrpos($result['image'], ".");
  $string = substr($result['image'], $var+1, 3);
  if($string=='swf'){
 ?>
 <a href='<?php echo $result['link'];?>' target="_blank"><object width="468" height="60"><param name="movie" value='<?php echo $result['image'];?>'></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src='<?php echo $result['image'];?>' type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="468" height="60"></embed></object></a>
 <?php
 }
 else{  
 ?>
 <a href='<?php echo $result['link'];?>' target="_blank"><img alt="" src='<?php echo $result['image']; ?>'/></a>
 <?php
 }
 ?>
 </div>
 <div class="baner2">
 <?php 
  $rand1=rand(1, 2);
  if($rand==$rand1 && $rand1==2) $rand1=$rand1-1;
  if($rand==$rand1 && $rand1==1) $rand1=$rand1+1;
  $result=mysql_query("SELECT * FROM baner WHERE id=$rand1;", $db);
  $result=@mysql_fetch_array($result);
  $var = strrpos($result['image'], ".");
  $string = substr($result['image'], $var+1, 3);
  if($string=='swf'){
 ?>
 <a href='<?php echo $result['link'];?>' target="_blank"><object width="200" height="60"><param name="movie" value='<?php echo $result['image'];?>'></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src='<?php echo $result['image'];?>' type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="200" height="60"></embed></object></a>
 <?php
 }
 else{
 ?>
 <a href='<?php echo $result['link'];?>' target="_blank"><img alt="" src='<?php echo $result['image']; ?>'/></a>
 <?php
 }
 ?>
 </div>
</div>