<?php 
	$s = include_once($_GET['page'] .".html"); 
	if(is_empty($s) && $s== null){
		print("Welcome to my pages");
	}
?>