<?php 
	global $db;
	$db=mysqli_connect(
		'localhost',
		'root',
		'root',
		'notes'
	);

	function query($sql){
		global $db;
		return mysqli_query($db,$sql);
	}
	function fetch($sql){
		$result = query($sql);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

	function escape($input){
		global $db;
		return mysqli_real_escape_string($db,$input);
	}

?>