<?php
//header and config
//script to take inputs from register form

//connect to DB
include_once '../includes/config.php';
//function register() {
	//basic validation
/*	
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
*/

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$STH = $db->prepare("INSERT INTO users ( first_name,
												last_name, 
												address, 
												city, 
												state, 
												zipcode, 
												email, 
												password ) values (
												:first_name,
												:last_name,
												:address,
												:city,
												:state,
												:zipcode,
												:email,
												:password)" 
	);
	// $STH->e();
	if (!$STH) {
		echo "PDO::errorInfo()";
		print_r($db->errorInfo());
	}

	$STH->bindParam(':first_name', $first_name, PDO::PARAM_STR);
	$STH->bindParam(':last_name', $last_name, PDO::PARAM_STR);
	$STH->bindParam(':address', $address, PDO::PARAM_STR);
	$STH->bindParam(':city', $city, PDO::PARAM_STR);
	$STH->bindParam(':state', $state, PDO::PARAM_STR);
	$STH->bindParam(':zipcode', $zipcode, PDO::PARAM_INT);
	$STH->bindParam(':email', $email, PDO::PARAM_INT);
	$STH->bindParam(':password', $password, PDO::PARAM_STR);

	if (!$STH->execute()) {
		echo PDO::errorInfo();
		print_r($db->errorInfo());
	}
	// close db connection
	$db = NULL;
	header('Location: http://localhost/test/political.io/app/index.php');
//}	