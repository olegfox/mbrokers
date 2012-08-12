<div class="content_1" id="content_1"></div>
<div class="content_0" id="content_0"></div>
<div class="content_2" id="content_2">
<div class="content_" id="content_">
<?php
//include("mssql_connect.php");  
   $result=mysql_query("SELECT * FROM menu WHERE id=6;", $db);
   $result=@mysql_fetch_array($result);
   echo "<h2>".$welcome."</h2>";
   $text=$result["content"];
   echo $text;  
?>
</div>
</div>
