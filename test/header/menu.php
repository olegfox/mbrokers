<?php 
@session_start();
function head($id){
  include('./mssql_connect.php');
  $result=mysql_query("SELECT * FROM menu WHERE id=$id;", $db);
  $result=@mysql_fetch_array($result);
  echo $result["head"];
}
?>
<table class="menu" id="menu"> 
 <tr>
  <td id="dd1" ><a href="/" id="aa1" onclick="headermenu(id);"><?php head(6); ?></a></td>
  <td id="dd2" ><a href="/about" id="aa2" onclick="headermenu(id);">  <?php
  head(1); 
  ?></a></td>
  <td id="dd3" ><a href="/partners" id="aa3" onclick="headermenu(id);">  <?php
  head(2); 
  ?></a></td>
  <td id="dd4" ><a href="/commercial" id="aa4"  onclick="headermenu(id);">  <?php
  head(3); 
  ?></a></td>
  <td id="dd5" ><a href="/action" id="aa5" onclick="headermenu(id);">  <?php
  head(4); 
  ?></a></td>
  <td id="dd6" ><a href="/contact" id="aa6" onclick="headermenu(id);">  <?php
  head(5); 
  ?></a></td>
</tr>
</table>
