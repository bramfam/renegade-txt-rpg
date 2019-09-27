<?php 
/*
You can add now your own helper methods here.. like the view method from laravel or render method in Ruby..
*/

//  you can say now return view("page");
function view($view, $data=[])
{
	extract($data);	
	return require "app/views/{$name}.view.php";
}


function redirect($path){
	session_write_close();
	header("Location:".$path);
	exit ; 
}

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function($x) { 
            dump($x); 
        }, func_get_args());
        die;
    }
 }


?>