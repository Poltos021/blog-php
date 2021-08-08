<?php 
	setcookie('login','admin');
	/*if(!$_COOKIE['token']){
		setcookie('token',rand(0,99999999999999));
	}*/
	session_start();
 ?>