<?php 
	$s = include_once($_GET['page'] .".html"); 
	var_dump($s);
	exit;
	if(is_empty($s) || $s== null){
		print("Welcome to my pages");
	}
?>