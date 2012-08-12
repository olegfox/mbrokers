<div class="content_1" id="content_1"></div>
<div class="content_0" id="content_0"></div>
<div class="content_2" id="content_2">
<div class="topic">
<?php
include("mssql_connect.php"); 
  $result=mysql_query("SELECT * FROM page WHERE id_page=2;", $db);
   $result=@mysql_fetch_array($result);
   echo $result["title"];
?>
</div><br/>
<div class="content_" id="content_">
<?php
 
    $text=$result["content"];
   echo $text;  
  ?>
  </div>
  </div>
