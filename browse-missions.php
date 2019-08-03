<?php
if(!isset($_SESSION["login"])) {    
	// echo "Please login first";    
	header('Location:login.php');
	// session_flash()
	exit; 
} 

/*
else { 
	echo "Browse Missions";
	// require ''
}
$name = $_POST['name'] ?? 'nobody';
// is equivalent to 

if (isset($_POST['name'])) {   
	$name = $_POST['name']; 
} else {  
	$name = 'nobody';
}
// and 
$name = isset($_POST['name']) ? $_POST['name'] : 'nobody';


*/

?>
