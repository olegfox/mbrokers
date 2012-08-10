<?php
 @session_start();
 include('mssql_connect.php');
 $delete="";
 $delete=@$_GET['delete'];

 $size="";
 $size=@$_SESSION['size2'];
  $delete1=$size.$delete;
  echo $size.$delete;
 if(isset($delete)&&isset($size)&&isset($delete1)){
 	if($size=='../images/baner/sidebar/'){
	 $result=mysql_query("delete from banerReclama where baner='$delete1';");
	}
	else
 $result=mysql_query("delete from baner_network where image='$delete1';");
 
 unlink($delete1);
 }
 ?>
 <script type="text/javascript">
 window.location.href="closed.php?baner=2";
</script>
