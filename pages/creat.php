<div class="col-12">
	<form method="post">
		<p>
		<input type="text" class="col-12" name="title" placeholder="Заголовок"></p>
		<br>
		<textarea class="col-12" rows="10" name="text"></textarea>
		<br>
		<button type="submit" class="button blue small">Добавить запись</button>
	</form>
</div>
<?php 
	
	if($_POST){
		//trim - убирает непечатные символы из начала и конца строки
		$title = trim($_POST['title']);
		$text = trim($_POST['text']);

		if($title && $text){
			$text=escape($text);
			$title=escape($title);

			$sql="INSERT INTO `articles` (`title`,`text`) VALUES ('$title','$text')";
			query($sql);
		}
	}

 ?>