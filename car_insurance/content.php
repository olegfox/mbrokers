<div class="content_1" id="content_1"></div>
<div class="content_0" id="content_0"></div>
<div class="content_2" id="content_2">
<div class="topic">
<?php
include("mssql_connect.php"); 
   $result=mysql_query("SELECT * FROM page WHERE id_page=1;", $db);
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
  <br/>
<div class="content_but" id="content_but">
<a style="text-decoration:none;" href="/car_insurance/kasko">
<input type="button" class="button" value="    <?php theme(3);?>   " />
</a>
<a style="text-decoration:none;" href="/car_insurance/osago">
<input type="button" class="button" value="    <?php theme(5);?>   " />
</a>
<a style="text-decoration:none;" href="/car_insurance/green_card">
<input type="button" class="button" value="<?php theme(2);?>" />
</a>
  </div>
  </div>
