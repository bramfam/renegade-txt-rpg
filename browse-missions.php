<?php
if(!isset($_SESSION["login"])) {    
	// notify("please login first");
	header('Location:login.php');
	exit; 
} 

else { 
	$name = $_POST['name'] ?? 'nobody';
	// is equivalent to 
	if (isset($_POST['name'])) {   
		$name = $_POST['name']; 
	} else {  
		$name = 'nobody';
	}
	// and 
	$name = isset($_POST['name']) ? $_POST['name'] : 'nobody';
}
?>
