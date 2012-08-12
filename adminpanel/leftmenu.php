<?php 
@session_start(); 
?>
<form action="page.php" method="get">
<ul>
<li><a class="lemenu"  target="_blank"  href="../index.php" >Просмотреть сайт</a></li>
<li><a class="lemenu"  target="_blank"  href="../phpmyadmin">phpMyAdmin</a></li>
<li><a class="lemenu"  href="closed.php?zayavka=1" onclick="blurcontentHide(this); return false;">Заявки</a></li>
<li><a class="lemenu" href="#" OnClick="return false;">Редактирование страниц <div style="float:right;"> >> </div></a>
 <ul>
<li class="menu-h-b"><a class="lemenu" href="closed.php?verh=1" onclick="blurcontentHide(this); return false;">Верхнее меню</a></li>
<li class="menu-h-b"><a class="lemenu" href="closed.php?osn=1" onclick="blurcontentHide(this); return false;">Основное меню</a></li> 
 </ul>
</li> 
<li ><a class="lemenu" href="closed.php?commercial=1" onclick="blurcontentHide(this); return false;">Реклама</a>
</li> 
<li ><a class="lemenu" href="closed.php?action=1" onclick="blurcontentHide(this); return false;">Акции</a>
</li> 
<li ><a class="lemenu" href="closed.php?partners=1" onclick="blurcontentHide(this); return false;">Партнеры</a>
</li> 
 <?php
 if (@$_SESSION['user_status']=='administrator'){
 ?>
 <li ><a class="lemenu" href="closed.php?ban=1" onclick="blurcontentHide(this); return false;">Бан по IP</a></li>
 <li ><a class="lemenu" href="closed.php?users=1" onclick="blurcontentHide(this); return false;">Пользователи</a></li>
  <?php
}
 ?>
</ul>
</form>
