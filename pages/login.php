<?php

	if($_POST){
		$login=escape($_POST['login']);
		$pass=Gethash($_POST['password']);

		$rez=fetch("SELECT * FROM `users` WHERE `login`='$login'");

		if($rez){

			if($pass==$rez[0]['password']){
				$_SESSION['auth']=true;
				$_SESSION['user']=$rez[0];
			}else{echo '<p>Введён неверный пароль!</p>';}

		}else{
			echo '<p>Пользователь не найден!</p>';
		}
	}

 ?>
<?php if($_SESSION['auth']){ ?>
<h4>
	Вы уже авторизованы как <?=$_SESSION['user']['login']?>
</h4>
<?php } else { ?>
 <form method="post">
 	<div class="row">
 		<div class="col-4">Логин</div>
 		<div class="col-4"><input type="text" name="login"></div>
 	</div>
 	<div class="row">
 		<div class="col-4">Пароль</div>
 		<div class="col-4"><input type="password" name="password"></div>
 	</div><br>
 	<div class="row">
	 	<div class="col-4"></div>
	 	<div class="col-4">
	 		<button class="button" type="submit">Войти</button>
	 	</div>
 	</div>
 		<div class="col-4"></div>
 		<div class="col-4">
			<a class="button green" href="?page=reg">Регистрация</a>
	 	</div>

 <?php } ?>
 </form>
