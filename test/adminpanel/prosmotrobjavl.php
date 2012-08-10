<?php
 include('mssql_connect.php');
 $idobject=@$_GET['id_object']; 
 echo "<table>";
 echo "<tr style='background:silver;'>";
 echo "<td width='229px' class='zagol'>";
 echo "Континент";
 echo "</td>";
 echo "<td width='229px' class='zagol'>";
 echo "Страна";
 echo "</td>";
 echo "<td width='229px' class='zagol'>";
 echo "Направление";
 echo "</td>"; 
 echo "</tr>"; 
 echo "</table>";
 echo "<table>";
 $result=mysql_query("select * from page where id_page=$idobject;", $db);
 if($result){
  while($row=mysql_fetch_array($result)){
   echo "<tr style='background:rgb(224, 239, 254);'>";
   echo "<td width='229px'>";
   $page=$row['id_object'];
   $resu=mysql_query("select country_id_country, theme_id_theme from object where id_object=$page;", $db);
   $rowy=mysql_fetch_array($resu);
   $idcountry=$rowy['country_id_country'];
   $idtheme=$rowy['theme_id_theme'];
   $country=mysql_query("select * from country where id_country=$idcountry;", $db);   
   if($country){
    $rowcountry=mysql_fetch_array($country);
    $idcontinent=$rowcountry['continent_id_continent'];
    $continent=mysql_query("select * from continent where id_continent=$idcontinent;", $db);   
    if($continent){
     $rowcontinent=mysql_fetch_array($continent);
     echo $rowcontinent['name'];
    }	
   }	
   echo "</td>";
   echo "<td width='229px'>";
   $country=mysql_query("select * from country where id_country=$idcountry;", $db);   
   if($country){
    $rowcountry=mysql_fetch_array($country);
    echo $rowcountry['name'];
   }
   echo "</td>";
   echo "<td width='229px'>";
   $theme=mysql_query("select * from theme where id_theme=$idtheme;", $db);   
   if($theme){
    $rowtheme=mysql_fetch_array($theme);
    echo $rowtheme['name'];
   }
   echo "</td>"; 
   echo "</tr>"; 
  }
 }
 $result=mysql_query("select * from page where id_page=$idobject;", $db);
 if($result){
  while($row=mysql_fetch_array($result)){
   echo "<table width='700px' style='word-wrap:break-word;'>";
   echo "<tr style='background:silver;'>";
   echo "<td class='zagol'>";
   echo "Описание на русском";
   echo "</td>";
   echo "<td class='zagol'>";
   echo "Содержание на русском";
   echo "</td>";   
   echo "</tr>";
   echo "</table>";  
   echo "<table width='700px'>";
   echo "<tr style='background:rgb(224, 239, 254);'>";
   echo "<td width='700px'>";
   echo $row['opisanie'];
   echo "</td>";
   echo "<td width='700px'>";
   echo $row['content'];
   echo "</td>";
   echo "</tr>";   
   echo "</table>";
   echo "</table>";
   echo "<table width='700px'>";
   echo "<tr style='background:silver;'>";
   echo "<td class='zagol'>";
   echo "Описание на немецком";
   echo "</td>";
   echo "<td class='zagol'>";
   echo "Содержание на немецком";
   echo "</td>";   
   echo "</tr>";
   echo "</table>";   
   echo "<table width='700px'>";
   echo "<tr style='background:rgb(224, 239, 254);'>";
   echo "<td width='700px'>";
   echo $row['opisanie_ger'];
   echo "</td>";
   echo "<td width='700px'>";
   echo $row['content_ger'];
   echo "</td>";
   echo "</tr>";   
   echo "</table>";
   echo "<table width='700px'>";
   echo "<tr style='background:silver;'>";
   echo "<td class='zagol'>";
   echo "Описание на английском";
   echo "</td>";
   echo "<td class='zagol'>";
   echo "Содержание на английском";
   echo "</td>";   
   echo "</tr>";
   echo "</table>";   
   echo "<table width='700px' >";
   echo "<tr style='background:rgb(224, 239, 254);'>";
   echo "<td width='700px'>";
   echo $row['opisanie_eng'];
   echo "</td>";  
   echo "<td width='700px'>";
   echo $row['content_eng'];
   echo "</td>";   
   echo "</tr>";   
   echo "</table>";
  }
 }
?>