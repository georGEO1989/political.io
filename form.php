<?php 
// echo error_reporting(E_ALL);
#Functions to grab data from input and send them to server
if (isset ($_POST['address'])) {
	$address = $_POST['address'];
} else {
	$address = NULL;
	echo "Please enter your address please";
}

//$address = '27 Sycamore Ave., Brockton, MA 02301';
$prepAddr = str_replace(' ','+',$address);
 
$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
 
$output= json_decode($geocode);
 
$lat = $output->results[0]->geometry->location->lat;
$long = $output->results[0]->geometry->location->lng;

// enter API Key and the get request for state and federal reps
// Federal Reps
function findFedReps($lat, $long) {
	$federal_reps = 'https://congress.api.sunlightfoundation.com/legislators/locate?latitude=' . $lat . '&longitude=' . $long . '&apikey=518ed79845224ed1b55a7d0e60e92382';
	$federal_result = file_get_contents($federal_reps);    
    global $federal_json; # make the variable accessible outside of this scope
    $federal_json = json_decode($federal_result, true);
    /*
    echo '<pre>';
    print_r($json);  # for referenc
    echo '</pre>';
    */
}
//State Reps
function findStateReps($lat, $long) {
    $state_reps = 'http://openstates.org/api/v1/legislators/geo/?lat=' . $lat . '&long=' . $long . '&apikey=518ed79845224ed1b55a7d0e60e92382';
    $state_results = file_get_contents($state_reps);
    global $state_json; #make the variable accessible outside of this scope
    $state_json = json_decode($state_results, true);
}

// Find the federal reps
findFedReps($lat, $long);
//Find the state reps
findStateReps($lat, $long);
// Format the Reps
$senior_senate_name = $federal_json['results'][1]['first_name'] . " " . $federal_json['results'][1]['last_name'];
$junior_senate_name = $federal_json['results'][0]['first_name'] . " " . $federal_json['results'][0]['last_name'];
$state_rep = $federal_json['results'][2]['first_name'] . " " . $federal_json['results'][2]['last_name'];
// Add  State Reps here


?>
    <?php
    echo '<pre>';
    print_r($state_json);  # for referenc
    echo '</pre>';
    ?>

<h2>Here are your results:</h2>

<h2>Federal</h2>

<h2>Senate:</h2>

<p><?php echo $senior_senate_name; ?></p>
<p><?php echo $junior_senate_name ?></p>


<h2>House of Representatives:</h2>

<p><?php echo $state_rep; ?></p>

<h2>States</h2>