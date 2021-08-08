<?php 
	$id = $_GET['id'];

	query('DELETE FROM `articles` WHERE `id`='.intval($_GET['id']));
 ?>
<span class="big badge">Статья удалена!</span>