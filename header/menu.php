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
  <td id="dd1" ><a href="/"  ><?php head(6); ?></a></td>
  <!--<td id="dd2" ><a href="/about"  >  <?php
  //head(1); 
  ?></a></td>-->
  <td id="dd3" ><a href="/partners">  <?php
  head(2); 
  ?></a></td>
  <td id="dd4" ><a href="/commercial">  <?php
  head(3); 
  ?></a></td>
  <td id="dd5" ><a href="/action">  <?php
  head(4); 
  ?></a></td>
  <td id="dd6" ><a href="/contact" >  <?php
  head(5); 
  ?></a></td>
</tr>
</table>
