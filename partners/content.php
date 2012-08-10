<div class="content_1" id="content_1"></div>
<div class="content_0" id="content_0"></div>
<div class="content_2" id="content_2">
<div class="topic">
<?php
include("mssql_connect.php"); 
   $result=mysql_query("SELECT * FROM menu WHERE id=2;", $db);
   $result=@mysql_fetch_array($result);
   echo $result["head"];
?>
</div><br/>
<div class="content_" id="content_">
<?php
include("mssql_connect.php");  
   $result=mysql_query("SELECT * FROM partners;", $db);
while($row=@mysql_fetch_array($result)){   
  ?>
<table width="100%" class="company_table">
	<tr class="partn">
		<td width="40%">
			<img vspace="5" src="<?php echo $row['Title'];?>" alt="<?php echo $row['name'];?>" /> 
		</td> 
		<td>
			<div style="StrahCompany"> <?php echo $row['name'];?></div>
		</td>
	</tr>
</table>

  <hr></hr>
  <?php } ?>
  </div>
  </div>
