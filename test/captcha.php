<?php
   @session_start();
   header("Content-type: image/png");
   $img = imagecreate(200, 50);
   $x1=0;
   $y1=0;
   $x2=145;
   $y2=59;
   $r=imagecolorallocate($img, 255, 255, 255);
   $black = imagecolorallocate($img, 0, 0, 0);
   $yellow = imagecolorallocate($img, 244, 251, 13);
   $white= imagecolorallocate($img, 255, 255, 255);
   $rand= imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
   $rand2= imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
   imagerectangle( $img, 0, 0, 199, 49,  $rand2);
 
   while($y1!=50){
    imageline( $img, 0, $y1, 200, $y1, $rand2 );
    $y1=$y1+5;
   }
    while($x1!=200){
    imageline( $img, $x1, 0, $x1, 50, $rand2 );
    $x1=$x1+5;
   }
   $rand3=rand(3, 5);
   $i=0;
   $h=50;
   $capcha="";
   while($i!=$rand3){
    $chislo=rand(0, 9);
	$capcha=$capcha.$chislo;
    imagettftext( $img, 20, rand(-25, 25), $h,rand(25, 30),$black,"arial.ttf" , $chislo);  
	$h=$h+20;
	$i=$i+1;
   }
   $_SESSION['capcha'] = $capcha;
   $i=0;
   while($i!=15){
    imageline( $img, rand(0, 200), rand(0, 50), rand(0, 200), rand(0, 50),  $rand );
    $i=$i+1;
   }
   $k=1.6;
   $im1=imagecreatetruecolor(200*$k,50*$k);
   imagecopyresized($im1, $img, 0, 0, 0, 0, 200*$k, 50*$k, 200, 50);
   $im2=imagecreatetruecolor(200,50); 
   imagecopyresampled($im2, $im1, 0, 0, 0, 0, 200, 50, 200*$k, 50*$k);
   imagepng($im2); 
   imagedestroy($im2);
?>
