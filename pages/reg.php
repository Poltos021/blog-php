<form method="POST" >
	<p>
		Input your login please:<br>
		<input placeholder="LOGIN" type="text" name="login">
	</p>
	<p>
		Input your password:<br>
		<input placeholder="PASSWORD" type="password" name="password">
	</p>
	<p>
		Input your password again:<br>
		<input placeholder="PASSWORD" type="password" name="password1">
	</p>
		<button class="button green" type="subnet">Зарегестрироваться</button>
</form>

<?php

$logins=fetch("SELECT `login` FROM `users`");

if(!$_POST || !$_POST['password'] || !$_POST['login'] || !$_POST['password1']){
	echo 'Вы заполнили не все поля! ';
}else{
	if($_POST['password']!=$_POST['password1']){
		echo 'Пароли не совпадают! ';
	}
	foreach ($logins as $login){
	    if($_POST['login']==$login['login'])
	    {
	        echo 'Такой логин уже существует, введите другой! ';
	    }
	}
}

if($_POST && $_POST['password'] && $_POST['login'] && $_POST['password1'] && $_POST['password']==$_POST['password1'] ){
	$login = escape( $_POST['login']    );
    $pass  =
        escape( $_POST['password'] );
if (!$rows){
	$pass = Gethash($pass);
}
    $sql = "INSERT INTO users (login, password) VALUES('$login', '$pass')";
    query($sql);
}
?>
