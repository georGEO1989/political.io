<?php
//header and config
//script to take inputs from register form

//connect to DB
include_once '../includes/config.php';

//basic validation
if (!empty($_POST['first_name']) ) {
	$first_name = $_POST['first_name']
} else {
	$first_name = NULL;
	print "Please Include First Name";
}

if (!empty($_POST['last_name']) ) {
	$first_name = $_POST['last_name']
} else {
	$first_name = NULL;
	print "Please Include Last Name";
}

if (!empty($_POST['address']) ) {
	$first_name = $_POST['address']
} else {
	$first_name = NULL;
	print "Please Include Address";
}

if (!empty($_POST['city']) ) {
	$first_name = $_POST['city']
} else {
	$first_name = NULL;
	print "Please Include City";
}

if (!empty($_POST['state']) ) {
	$first_name = $_POST['state']
} else {
	$first_name = NULL;
	print "Please Include State";
}

if (!empty($_POST['zipcode']) ) {
	$first_name = $_POST['zipcode']
} else {
	$first_name = NULL;
	print "Please Include Zipcode";
}

if (!empty($_POST['email']) ) {
	$first_name = $_POST['email']
} else {
	$first_name = NULL;
	print "Please Include Email";
}

if (!empty($_POST['password']) ) {
	$first_name = $_POST['password']
} else {
	$first_name = NULL;
	print "Please Include Password";
}
/*
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$email = $_POST['email'];
$password = $_POST['password'];
*/

