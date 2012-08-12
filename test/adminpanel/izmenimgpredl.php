<?php
$size='../images/objavl/';
$fileElementName = 'fil';
	if($_FILES[$fileElementName]["size"] > 1024*3*1024)
	{
		echo ("Размер файла превышает три мегабайта");
		exit;
	}
		$file=$size.$_FILES["fil"]["name"];
		if(move_uploaded_file($_FILES[$fileElementName]["tmp_name"],$file))
		{
		 $idpage=$_POST['idpage'];
		  include('mssql_connect.php');
		 $result=mysql_query("select img from page where id_page=$idpage;", $db);
		 $row=mysql_fetch_array($result);
		 unlink("../".$row['img']);
		 $img='images/objavl/'.$_FILES["fil"]["name"];
		 $result=mysql_query("update page set img='$img' where id_page=$idpage", $db); 
		}
?>
<script>
window.location.href="closed.php?osn=1";
</script>
