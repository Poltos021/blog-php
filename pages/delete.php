<?php 
	$id = $_GET['id'];
 ?>

<h4>Вы уверены, что хотите удалить запись?</h4>

<a class="button green" href="?page=view&id=<?=$id?>">Назад</a>

 <a class="button red" href="?page=stopdelete&id=<?=$id?>">Удалить</a>