<?php
@session_start();
include ("mssql_connect.php");
@header("Content-type: text/html; charset=utf-8");
mb_internal_encoding("UTF-8");
$length=0;
$opred=0;
$count=0;
$brake=0;
$_SESSION["notit"]="";
$word=mysql_real_escape_string(@$_GET['word']);
$_SESSION['word']="";
if (mb_strlen($word)<=3)
{	
	$_SESSION['word']=$word;
	echo "";
}
else
{
	$word=ltrim($word);	
	$word=rtrim($word);
	$_SESSION['word']=$word;
	$length=mb_strlen($word);
	$res=mysql_query("SELECT count(id_page) FROM page WHERE UPPER(content) LIKE '%$word%';",$db);
	$ro=mysql_fetch_array($res);
	$res1=mysql_query("SELECT count(id) FROM menu WHERE UPPER(content) LIKE '%$word%';",$db);
	$ro1=mysql_fetch_array($res1);
	$res2=mysql_query("SELECT count(id) FROM action WHERE UPPER(text) LIKE '%$word%';",$db);
	$ro2=mysql_fetch_array($res2);
	$res4=mysql_query("SELECT count(id) FROM Contacts WHERE UPPER(adress) LIKE '%$word%';",$db);
	$ro4=mysql_fetch_array($res4);	
	$count=$ro["count(id_page)"];
	$count1=$ro1["count(id)"];
	$count2=$ro2["count(id)"];
	$count4=$ro4["count(id)"];
	$count_=$count+$count1+$count2+$count4;
	$count=($count+$count1+$count2+$count4)/10;
	$_SESSION["NumTable"]=0;
	$_SESSION["NumPoint"]=0;
	if($count!=""){
	echo 'По вашему запросу "<font color=rgb(86, 90, 92)>'.$word.'</font>" было найдено <font color=rgb(86, 90, 92)>'.$count_.'</font> результат(ов) <br/> <br/>';
		if(ceil($count)>1){
 		echo "Стр. ";
		for ($i=0;$i<ceil($count);$i++){
			$lim=$i*10;
			$l=$i;
?>
<a href="#" style="color: #000;" OnClick="press_poisk_page(<?php echo $i;?>,<?php echo ceil($count);?>); return false; ">
<?php echo $l=$i+1;?></a>
<?php
echo " | ";
}
}
}
else echo "Ничего не найдено";
}
$wor=mysql_real_escape_string(@$_SESSION['word']);
if (mb_strlen($wor)<=3)
{
	echo "Слишком короткий запрос. Повторите поиск";
}
else
{
//Page
	$result=mysql_query("SELECT * FROM page WHERE UPPER(content) LIKE '%$wor%';",$db);
	// Формирование результата поиска
	if (isset($result)){
		while ($row=mysql_fetch_array($result)){
			$opred=1;
			$text=$row["content"];
			$text=strip_tags($text);
			$text=ltrim ($text);
			$pos=@mb_stripos($text,$word);
			$len=mb_strlen($wor);
			if($pos=="") $pos=0;
			if($pos<40)
			$Text[]="...".mb_substr($text,0,$pos)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			else
			$Text[]="...".mb_substr($text,$pos-40,40)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			$Href[]=$row["search_href"];
		}
	}
//Menu
	$result=mysql_query("SELECT * FROM menu WHERE UPPER(content) LIKE '%$wor%';",$db);
	// Формирование результата поиска
	if (isset($result)){
		while ($row=mysql_fetch_array($result)){
			$opred=1;
			$text=$row["content"];
			$text=strip_tags($text);
			$text=ltrim ($text);
			$pos=@mb_stripos($text,$word);
			$len=mb_strlen($wor);
			if($pos=="") $pos=0;
			if($pos<40)
			$Text[]="...".mb_substr($text,0,$pos)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			else
			$Text[]="...".mb_substr($text,$pos-40,40)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			$Href[]=$row["search_href"];
		}
	}
//Action
	$result=mysql_query("SELECT * FROM action WHERE UPPER(text) LIKE '%$wor%';",$db);
	// Формирование результата поиска
	if (isset($result)){
		while ($row=mysql_fetch_array($result)){
			$opred=1;
			$text=$row["text"];
			$text=strip_tags($text);
			$text=ltrim ($text);
			$pos=@mb_stripos($text,$word);
			$len=mb_strlen($wor);
			if($pos=="") $pos=0;
			if($pos<40)
			$Text[]="...".mb_substr($text,0,$pos)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			else
			$Text[]="...".mb_substr($text,$pos-40,40)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			$Href[]="/action";
		}
	}
//Contacts
	$result=mysql_query("SELECT * FROM Contacts WHERE UPPER(adress) LIKE '%$wor%';",$db);
	// Формирование результата поиска
	if (isset($result)){
		while ($row=mysql_fetch_array($result)){
			$opred=1;
			$text=$row["adress"];
			$text=strip_tags($text);
			$text=ltrim ($text);
			$pos=@mb_stripos($text,$word);
			$len=mb_strlen($wor);
			if($pos=="") $pos=0;
			if($pos<40)
			$Text[]="...".mb_substr($text,0,$pos)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			else
			$Text[]="...".mb_substr($text,$pos-40,40)."<b>".mb_substr($text,$pos,$len)."</b>".mb_substr($text,$pos+$len,40)."...";
			$Href[]="/contact";
		}
	}
$begin=0;

for($i=0; $i <= ceil($count); $i++){
	echo "<div class='DivSearch' id='DivSearch".$i."'";
	if($i!=0) echo " style='display:none;'>";
	else echo ">";
echo "<ol start=".($begin+1).">";	
for($j=$begin; $j < $begin+10; $j++){
if(!@$Href[$j]) {echo "</div>";break;}
?>	

<li>
					<a class="resultpoisk" href="<?php echo $Href[$j];?>">		
					<?php
					echo $Text[$j];
					?>
					</a>
				</li>	

<?php
}
echo "</ol>";
$begin=$j;
if(@$Href[$j]=="") {echo "</div>";break;}
	echo "</div>";
}
}
?>
