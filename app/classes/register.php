<?php
// Header
// Register users
include_once '../includes/config.php';
include_once '../includes/header.php';

function statesList() {
	$states = array('AL'=>"Alabama",
					'AK'=>"Alaska",
					'AZ'=>"Arizona",
					'AR'=>"Arkansas",
					'CA'=>"California",
					'CO'=>"Colorado",
					'CT'=>"Connecticut",
					'DE'=>"Delaware",
					'DC'=>"District Of Columbia",
					'FL'=>"Florida",
					'GA'=>"Georgia",
					'HI'=>"Hawaii",
					'ID'=>"Idaho",
					'IL'=>"Illinois",
					'IN'=>"Indiana",
					'IA'=>"Iowa",
					'KS'=>"Kansas",
					'KY'=>"Kentucky",
					'LA'=>"Louisiana",
					'ME'=>"Maine",
					'MD'=>"Maryland",
					'MA'=>"Massachusetts",
					'MI'=>"Michigan",
					'MN'=>"Minnesota",
					'MS'=>"Mississippi",
					'MO'=>"Missouri",
					'MT'=>"Montana",
					'NE'=>"Nebraska",
					'NV'=>"Nevada",
					'NH'=>"New Hampshire",
					'NJ'=>"New Jersey",
					'NM'=>"New Mexico",
					'NY'=>"New York",
					'NC'=>"North Carolina",
					'ND'=>"North Dakota",
					'OH'=>"Ohio",
					'OK'=>"Oklahoma",
					'OR'=>"Oregon",
					'PA'=>"Pennsylvania",
					'RI'=>"Rhode Island",
					'SC'=>"South Carolina",
					'SD'=>"South Dakota",
					'TN'=>"Tennessee",
					'TX'=>"Texas",
					'UT'=>"Utah",
					'VT'=>"Vermont",
					'VA'=>"Virginia",
					'WA'=>"Washington",
					'WV'=>"West Virginia",
					'WI'=>"Wisconsin",
					'WY'=>"Wyoming");
	return $states;
}

$states = statesList();
?>

<div class="container">
	<h2>Please Sign Up here!</h2>

	<form role="form" action="sign_up.php" method="post">
	<div class="form-group">
    	<label for="firstName">First Name</label>
    	<input type="name" name="first_name" class="form-control" id="firstName" placeholder="Enter First Name">
	</div>
	<div class="form-group">
    	<label for="lastName">Last Name</label>
    	<input type="name" name="last_name" class="form-control" id="lastName" placeholder="Enter Last Name">
	</div>
	<div class="form-group">
    	<label for="address">Address</label>
    	<p>For looking up reps only. Address will not be stored Ex: 27 Sycamore Ave.</p>
    	<input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
	</div>
	<div class="form-group">
    	<label for="address">City</label>
    	<input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
	</div>
	<div class="form-group dropdown">
		<label for="state">State</label><br>
		<select name="state">
        	<option selected="selected">Select Your State...</option>
        	<?php foreach($states as $key=>$value) { ?>
            	<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
        	<?php } ?>
    	</select>
	</div>
	<div class="form-group">
    	<label for="zipcode">Zipcode</label>
    	<input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Enter zipcode">
	</div>
	<div class="form-group">
    	<label for="InputEmail1">Email Address</label>
    	<input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Enter email">
	</div>
	<div class="form-group">
    	<label for="InputEmail1">Verify Email Address</label>
    	<input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Enter email">
	</div>
	<div class="form-group">
    	<label for="InputPassword1">Password</label>
    	<input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
	</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>