<?php 
function loggedIn(){ 
    //Session logged is set if the user is logged in 
    //set it on 1 if the user has successfully logged in 
    //if it wasn't set create a login form 
    if(!$_SESSION['loggd']){ 
        echo'<form action="checkLogin.php" method="post"> 
        <p> 
            Username:<br> 
            <input type="text" name="username"> 
        </p> 
        <p> 
            Password:<br> 
            <input type="password" name="username"> 
        </p> 
        <p> 
            <input type="submit" name="submit" value="Log In"> 
        </p> 
        </form>'; 
        //if session is equal to 1, display  
        //Welcome, and whaterver their user name is 
    }else{ 
        echo 'Welcome, '.$_SESSION['username']; 
    } 
} 
?> 

<!-- index.php -->

<?php 
//Start the session 
session_start(); 

//This is a simplified HTML Document 
?> 
<html> 
<head> 
<title>My Page</title> 
</head> 
<body> 
    <?php 
    //Call the functions file 
    require_once("functions.php"); 
    //Display either the user's name, or the login form 
    //This can be placed on many pages without having 
    //to re-write the form everytime, just use this function 
    logedIn(); 
    ?> 
</body> 
</html>