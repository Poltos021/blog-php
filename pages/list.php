<?php 
	$articles=fetch('SELECT * FROM `articles` ORDER BY `created_at` DESC');
?>

 <?php foreach ($articles as $article) { ?>
 	<h4><?=$article['title']?></h4>
 	<?php 
 		$text=explode(' ', $article['text']);
 		$text=array_slice($text, 0, 10);
 		$text=implode(' ', $text);
 	 ?>
 	 <p><?=$text . '...'?></p>
 	 <p>
 	 	<a href="?page=view&id=<?=$article['id']?>">Читать полностью</a>
 	 </p>
 <?php } ?>
 