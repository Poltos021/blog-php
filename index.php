<?php require_once 'includes/db.php' ?>
<?php require_once 'includes/auth.php' ?>
<?php require_once 'includes/functions.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>My first blog)</title>
	<link rel="stylesheet" type="text/css" href="css/element.css">
	<link rel="stylesheet" type="text/css" href="css/block.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 header">
				<h3>My blog	</h3>
			</div>
		</div>
		<div class="row body">
			<div class="col-3 sitebar">
				<div>
					<ul class="nav">
						<li><a class="active" href="index.php">Главная</a></li>
						<?php if($_SESSION['auth']){ ?>
							<li><a href="?page=creat">Добавить запись</a></li>
						<?php } ?>
						<li><a href="?page=login">Войти</a></li>
						<li><a href="?page=logout">Выйти</a></li>
					</ul>
				</div>
			</div>
			<div class="col-9 content">
				<?php 

					$page = $_GET['page'];

					if(!$page){
						$page = 'list';
					}

					if(!file_exists('pages/' . $page . '.php')){
						$page = 'error';
					}

					include 'pages/' . $page . '.php';

				 ?>
			</div>
		</div>
	</div>
</body>
</html>