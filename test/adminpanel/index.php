?php

@session_start();
$_SESSION['log']="";
include ('mssql_connect.php');
// если пользователь не авторизован
if (!isset($_SESSION['user_id']))
{
	// то проверяем его куки
	// вдруг там есть логин и пароль к нашему скрипту
	if (isset($_COOKIE['login']) && isset($_COOKIE['password']))
	{
		// если же такие имеются
		// то пробуем авторизовать пользователя по этим логину и паролю
		$login = mysql_escape_string($_COOKIE['login']);
		$password = mysql_escape_string($_COOKIE['password']);
		// и по аналогии с авторизацией через форму:
		// делаем запрос к БД
		// и ищем юзера с таким логином и паролем
		$query = "SELECT `id`,`status`
					FROM `user`
					WHERE `login`='{$login}' AND `password`='{$password}'
					LIMIT 1";
		$sql = mysql_query($query) or die(mysql_error());
		// если такой пользователь нашелся
		if (mysql_num_rows($sql) == 1)
		{
			// то мы ставим об этом метку в сессии (допустим мы будем ставить ID пользователя)
			$row = mysql_fetch_assoc($sql);
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_status']=$row['status'];
			//header('Location: closed.php');
			?>
			<script type="text/javascript">window.location.href="closed.php";</script>
			<?php
			// не забываем, что для работы с сессионными данными, у нас в каждом скрипте должно присутствовать @session_start();
		}
	}
	//header('Location: login.php');	
	?>
			<script type="text/javascript"> window.location.href="login.php";</script>
			<?php
}
if (isset($_SESSION['user_id']))
{
	$query = "SELECT `login`
				FROM `user`
				WHERE `id`='{$_SESSION['user_id']}'
				LIMIT 1";
	$sql = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_assoc($sql);
	//header('Location: closed.php');
	?>
			<script type="text/javascript"> window.location.href="closed.php";</script>
			<?php
}
?>