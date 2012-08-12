<?php @header("Content-type: text/html; charset=utf-8");
@session_start();   
if (!empty($_POST)){
$host="localhost";
$user="rosautonovator";
$pwd="ufg87LLt";
$db=@mysql_connect($host,$user,$pwd) or die("К сожалению, не доступен сервер mySQL");
@mysql_query("SET NAMES utf8", $db);
@mysql_query("SET CHARACTER SET utf8", $db);
@mysql_select_db("rosautonovator",$db) or die ('Ошибка БД');
	$login = (isset($_POST['login'])) ? mysql_real_escape_string($_POST['login']) : '';	
	$password = @$_POST['password'];
	$cap=@$_POST['capch'];
	$query = "SELECT `id`,`status`
				FROM `user`
				WHERE `login`='{$login}' AND `password`='{$password}'
				LIMIT 1";
	$sql = mysql_query($query) or die(mysql_error());
		// если такой пользователь нашелся
		if(@$_SESSION['log']>=2&&$cap!=@$_SESSION['capcha']){
		?>
			<script type="text/javascript"> alert("Неверный код безопасности");
			window.location.href = "login.php"</script>
			<?php
		}
		else if (mysql_num_rows($sql) == 1)
		{
			// то мы ставим об этом метку в сессии (допустим мы будем ставить ID пользователя
			$row = mysql_fetch_assoc($sql);
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_status'] = $row['status'];
			// если пользователь решил "запомнить себя"
			// то ставим ему в куку логин с хешем пароля
			$time = 86400; // ставим куку на 24 часа
			if (isset($_POST['remember']))
			{
				setcookie('login', $login, time()+$time, "/");
				setcookie('password', $password, time()+$time, "/");
			}
			// и перекидываем его на закрытую страницу
			//header('Location: closed.php');
			?>
			<script type="text/javascript"> window.location.href="closed.php";</script>
			<?php
			exit;
			// не забываем, что для работы с сессионными данными, у нас в каждом скрипте должно присутствовать @session_start();
		}
		else {?>
		<script type="text/javascript">
		alert("Неверный логин или пароль");
		window.location.href = "login.php";
		</script>
		<?php
		$_SESSION['log']+=1;
		}
}?>
