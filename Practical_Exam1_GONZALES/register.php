<?php include 'frontend.php'; 

if (isset($_POST['submit'])) {
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		$_SESSION['address'] = htmlentities($_POST['address']);
		$_SESSION['username'] = htmlentities($_POST['username']);
		$_SESSION['password'] = htmlentities($_POST['password']);
	header('Location: congrats.php');	
	}

?>
<nav class="navbar navbar-expand navbar-light bg-success">
    <div class="navbar text-light">
    	<h1>REGISTER</h1>
    	
    </div>
</nav>

<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label class="">Name</label>
					<input type="text" name="name" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" value="">
				</div>
				<div class="form-group">
					<br>
					<button type="Submit" name="submit" class="btn btn-outline-success"><strong>Submit</strong></button>
				</div>
				
			</form>
		</div>
	</div>