<?php
//Class for adding users
include_once '../includes/config.php';
class Users
{
	public $first_name;// = $_POST['first_name'];
	public $last_name;// = $_POST['last_name'];
	public $address;// = $_POST['address'];
	public $city;// = $_POST['city'];
	public $state;// = $_POST['state'];
	public $zipcode;// = $_POST['zipcode'];
	public $email;// = $_POST['email'];
	public $password;// = $_POST['password'];

	function __construct($first_name, $last_name,
						 $address, $city, $state,
						 $zipcode, $email, $password)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->address = $address;
		$this->city = $city;
		$this->state = $state;
		$this->zipcode = $zipcode;
		$this->email = $email;
		$this->password = $password;
	}
}

$users = new Users('$_POST[\'first_name\']',
				  '$_POST[\'last_name\']',
				  '$_POST[\'address\']',
				  '$_POST[\'city\']',
				  '$_POST[\'state\']',
				  '$_POST[\'zipcode\']',
				  '$_POST[\'email\']',
				  '$_POST[\'password\']'
				  );

$STH = $db->prepare("INSERT INTO users ( 
	first_name,
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

if (!$STH) 
{
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

if (!$STH->execute()) 
{
	echo PDO::errorInfo();
	print_r($db->errorInfo());
}
// close db connection
$db = NULL;