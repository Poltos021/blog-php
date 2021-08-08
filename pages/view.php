<?php
	$id = $_GET['id'];

	if(!$id){
		echo 'Не введён id записи';
	}
	$id=intval($id);
	$articles = fetch('SELECT * FROM `articles` WHERE `id`=' . $id);

	if(!$articles){
		echo "Такая запись не найдена";
	}
	else {
		if($_POST && $_SESSION['auth'])
		$text = escape($_POST['text']);
		$user_id = $_SESSION['user']['id'];
		$sql = "INSERT INTO `comments` (`users_id`, `article_id`, `text`)
		VALUES ('$user_id', '$id', '$text')";
		query($sql);
	}

	$article=$articles[0];
	$comments = fetch("SELECT * FROM comments
	where `article_id` = $id")

 ?>


 <h3><?=$article['title'] //= - сокращённая запись echo?></h3>
 <p><?=$article['text']?></p>
 <p>
 	<span class="badge">
 		Создано: <?=$article['created_at']?>
 	</span>
 </p>
<p>
	<span class="badge">
 		Обновлено: <?=$article['updated_at']?>
 	</span>
</p>
<?php
	$user != $id['id'];
	if($user != $id)
?>

 <p>
 	<a class="button red small" href="?page=delete&id=<?=$article['id']?>">Удалить</a>

 	<a class="button green small" href="?page=edit&id=<?=$article['id']?>">Редактировать</a>
 </p>

 <?php foreach ($comments as $comment){ ?>
	 <?php  $user = fetch("SELECT * FROM `users`
	 WHERE `id` =" . $comment['users_id']);
	 ?>
	 <div class="row">
		    <div class="col-4">
				<p><?php $user[0]['login'] ?> </p>
				</div>
		    <div class="col-8">
			<p><?=$comment['text'] ?></p>
			   </div>
			</div>
			  <?php } ?>
 <form method="post">
	 <textarea cols="60" rows="4" name="text" placeholder="Ваш комент"> </textarea>
	 <button class="button blue" type="submit">отправить</button>
 </form>
