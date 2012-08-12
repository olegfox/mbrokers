<?php
  $size='../../BUYWORLD/images/banervideo/';
    $file=$size.$_FILES["filename"]["name"];
	echo $file;
   if(move_uploaded_file($_FILES["filename"]["tmp_name"],
     $size.$_FILES["filename"]["name"]))
  {
    include("mssql_connect.php");
    $image=$size.$_FILES["filename"]["name"];
	$link=$_POST['link'];
	$pop=$link;
	if(substr($pop, 0, 7)!="http://") $link="http://".$link;
	$i=@strripos($size)-1;
	$size1=substr($size,28 , $i);
	$result=@mysql_query("select banervideo from sidebar;", $db);
	$row=mysql_fetch_array($result);
	$delete=$row['banervideo'];
	unlink($delete);
	$result=@mysql_query("update sidebar set banervideo='$image', linkbanervideo='$link';", $db);
  }
   
?>
<script type="text/javascript">
 window.location.href="closed.php?sidebar=1";
</script>