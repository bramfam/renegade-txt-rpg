Here is how to check if a user is logged in and then redirect them to the page they first visited.

First check to see if a user is logged in:

<?php

session_start();
if(!(isset($_SESSION['username'])))
{
	header("Location: index.php");
}

?>
Then include that file in all of your web pages you will be using. Also, create a session for the URL. This will go at the top of your page:

<?php include "includes/login-check.php"; ?>
<?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<?php ob_start(); ?>
Then right in the body of the HTML add this:

<input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />
Then within your login file check for the URL session:

//check to see what page user first visited
if(isset($_SESSION['url'])) {
$url = $_SESSION['url'];
} else {
$url = "../index.php";
}
//redirect user to page they initially visited
header("Location: $url");
That should fully answer your question.