<?php 
var_dump($_GET['page']);
exit;
	$s = include_once($_GET['page'] .".html"); 
	var_dump($s);

	if(is_empty($_GET['page']) || $_GET['page']== null){
		print("Welcome to my pages");
	}
?>