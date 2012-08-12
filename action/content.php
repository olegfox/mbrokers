<div class="content_1" id="content_1"></div>
<div class="content_0" id="content_0"></div>
<div class="content_2" id="content_2">
<div class="topic">
<?php
include("mssql_connect.php"); 
   $result=mysql_query("SELECT * FROM menu WHERE id=4;", $db);
   $result=@mysql_fetch_array($result);
   echo $result["head"];
?>
</div><br/>
<div class="content_" id="content_">
<?php 
include("mssql_connect.php");
$r = mysql_query("SELECT DATE_FORMAT(date, '%d.%m.%Y'),text from action order by date desc");
while ($row = mysql_fetch_array($r))
 {
?>
<table width="100%" cellpadding="7" cellspacing="1">
	<tr>
		<td colspan="2" align="left">
		<span class="list_date">
		<span><?php echo $row["DATE_FORMAT(date, '%d.%m.%Y')"]; ?></span>
		</span>
		</td>	
	</tr>
	<tr>
	<td> </td>
	<td valign="top" width="99%">
	<?php echo $row["text"]; ?>
	</td>
	</tr>
</table>
<?php  
}
?>
  </div>
  </div>
