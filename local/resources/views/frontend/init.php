<?php
	session_start();

	if(isset($_GET['lang'])){
		$lang = $_GET['lang'];
		$_SESSION['lang'] = $lang;
	}else{
		$lang = (isset($_SESSION['lang']))?$_SESSION['lang']:'en';
	}
?>
