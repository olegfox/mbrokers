<?php
include("mssql_connect.php");
$time=date("U");
$result=mysql_query("SELECT * FROM ip;", $db);
$browser = $_SERVER['HTTP_USER_AGENT'];
if(!empty($result)){
 while($row=mysql_fetch_array($result)){
  $razn=$time-$row['time'];
  if($razn>=86400){
   $ip=$row['ip'];
   $result1=mysql_query("delete FROM ip where ip='$ip';", $db);
  }
 }
}
$ip = $_SERVER['REMOTE_ADDR']; 
$result=mysql_query("SELECT ip FROM ban;", $db);
while($row = mysql_fetch_array($result))
{
if($ip == $row["ip"]) { 
$ad=mysql_query("SELECT email FROM user limit 1;", $db);
$admin=mysql_fetch_array($ad);
$email=$admin['email'];
print('<div class="ban"> I\'m sorry, you have been banned! <br/> Извините, вы были забанены!<br/>
Обратитесь к администратору: '.$email.'</div>');
exit(1);
}
}
$result=mysql_query("SELECT ip FROM ip;", $db);
$time=date("U");
$i=0;
if(!empty($result)){
while($row = mysql_fetch_array($result))
{
 if ($ip==$row['ip']) {$i=1; mysql_query("update ip set time=$time, browser='$browser' where ip like '$ip'", $db);break;}
}
if($i==0){

mysql_query("Insert into ip values (NULL, '$ip', $time, '$browser');", $db);
}
}
?>
