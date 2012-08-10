<?php @session_start(); 
$noti=@$_GET['noti'];
echo $noti;
  $_SESSION['notit']=$noti;
?>

