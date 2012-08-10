<?php
 @session_start();
  include('mssql_connect.php');
 $idobject=@$_SESSION['idobject'];
 $name=@$_SESSION['nameobject'];
 if($idobject!="" && $name!=""){

  if(move_uploaded_file($_FILES[$name]["tmp_name"],
   "../../BUYWORLD/images/object/".$_FILES[$name]["name"]))
  { 
  $name2="../../BUYWORLD/images/object/".$_FILES[$name]["name"];
  $result=mysql_query("select image from object where id_object='$idobject'", $db); 
  if($result){
   $im=mysql_fetch_array($result);
   $im=$im['image'];
   unlink($im);
  }
  if($idobject!=""){
  $result=mysql_query("update object set image='$name2' where id_object='$idobject'", $db);
 }
 }
 }
 if($_GET['id']!=""){
  $idobject=substr($_GET['id'], 1, strlen($_GET['id'])-1);
  $_SESSION['idobject']=$idobject;
 }
 if($_GET['id']!=""){
  $name=@$_GET['id'];
  $_SESSION['nameobject']=$name; 
 }
?>
<script type="text/javascript">
 window.location.href="closed.php?object=1";
</script>