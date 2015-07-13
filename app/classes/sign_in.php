<?php include_once '../includes/header.php'; ?>

	<div class="container">
		<h2>Please Login here!</h2>

		<form role="form" action="login.php" method="post">
		<div class="form-group">
	    	<label for="exampleInputEmail1">Email address</label>
	    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		</div>
		<div class="form-group">
	    	<label for="exampleInputPassword1">Password</label>
	    	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>

<?php include_once '../includes/footer.php'; ?>