<?php 
$pageVal = ($_GET['page']);
if($pageVal === 'error') {
	include_once('error.html');
}
else if($pageVal === 'maintenance') {
	include_once('maintenance.html');	
}
else if($pageVal == NULL){
	print("Welcome to my page");
}
?>