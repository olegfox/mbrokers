<?php
@session_start();
$size=$_POST['size'];
  if(isset($size))
   $size='../images/baner/'.$size.'/';
if(!isset($size)) $size='../images/baner/200x50/';
$_SESSION['size2']=$size;
?>
 <script type="text/javascript">
 window.location.href="closed.php?baner=2";
</script>
