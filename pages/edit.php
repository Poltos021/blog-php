<?php
	$id = $_GET['id'];

	if(!$id){
		echo 'Не введён id записи';
	}
	$id=intval($id);

	if($_POST){
		//trim - убирает непечатные символы из начала и конца строки
		$title = trim($_POST['title']);
		$text = trim($_POST['text']);

		if($title && $text){
			$text=escape($text);
			$title=escape($title);

			$sql="UPDATE `articles` SET `title`='$title',`text`='$text' WHERE `id`='$id'";
			query($sql);
		}
	}

	$articles = fetch('SELECT * FROM `articles` WHERE `id`=' . $id);

	if(!$articles){
		echo "Такая запись не найдена";
	}

	$article=$articles[0];
 
	?>

<form method="post"><p>
	<input type="text" class="col-12" name="title" placeholder="Заголовок" value="<?=$article['title']?>"></p>
	<br>
	<textarea rows="10" class="col-12" name="text" ><?=$article['text']?></textarea>
	<br>
	<button type="submit" class="button blue">Сохранить изменения</button>
	<a class="button" href="?page=view&id=<?=$id?>">Назад</a>
</form>

<?php



 ?>
