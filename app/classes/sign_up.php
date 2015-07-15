<?php
function register() {
//connect to DB
include_once '../includes/config.php';

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

	header('Location: http://localhost/test/political.io/political.io/app/index.php');
}	

register();

