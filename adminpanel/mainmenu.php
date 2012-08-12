<table class="mainmenu" cellpadding="20">
<tr>
<td><a href="closed.php?redpod=1"><img alt="" border="0" hspace="5" align="left" src="images/kvn_redaktor.gif" />Редактирование страниц<br/><br/><font color="#646665" size="1">В этом модуле Вы имеете возможность <br/>редактировать содержимое портала</font></a></td>
<td><a href="closed.php?object=1"><img alt=""  border="0" hspace="5" align="left" src="images/object.gif" />Акции<br/><br/><font color="#646665" size="1">В этом модуле Вы имеете возможность <br/>настроить объекты</font></a></td>
</tr>
<tr>
<td><a href="closed.php?sidebar=1"><img alt=""  border="0" hspace="5" align="left" src="images/bar.png" />Партнеры<br/><br/><font color="#646665" size="1">В этом модуле Вы имеете возможность <br/></font></a></td>
<td><a href="closed.php?baners=1"><img alt=""  border="0" hspace="5" align="left" src="images/baner.gif" />Реклама<br/><br/><font color="#646665" size="1">В этом модуле Вы имеете возможность <br/>настроить рекламу на портале</font></a></td>
</tr> 
<tr>
<?php
 if (@$_SESSION['user_status']=='administrator'){
 ?>
<td><a href="closed.php?ban=1"><img alt=""  border="0" hspace="5" align="left" src="images/ban.gif" />Бан по IP<br/><br/><font color="#646665" size="1">В этом модуле Вы имеете возможность <br/>настроить ограничение посещения</font></a></td>
<td><a href="closed.php?users=1"><img alt=""  border="0" hspace="5" align="left" src="images/admin.png" />Пользователи<br/><br/><font color="#646665" size="1">В этом модуле Вы имеете возможность <br/>настроить доступ к админпанели</font></a></td>
  <?php
}
 ?>

<?php
?></tr> 
</table>