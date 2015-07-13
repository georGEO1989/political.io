<?php
// Database stuff
include_once 'config.php'
// form variable
if (!empty($_POST['email']) ) {
	$email = $_POST['email'];
} else {
	$email = NULL;
	print "Please Enter a valid email, Thanks!"
}
if (!empty($_POST['password']) ) {
	$password = $_POST['password'];
} else {
	$password = NULL;
	print "Please enter a valid passowrd";
}

