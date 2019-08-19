<?php include 'frontend.php';
	



		if(isset($_POST['login'])) {
		session_start();
		
		
		header('Location: home.php');

	}

		if (isset($_POST['register'])) {
		session_start();
		header('Location: register.php');
	}

	
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	

</style>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-success">
    <div class="navbar">
    	<div class="container text-light">
    		<ul class="nav navbar-nav navbar-toggler-left">
    			<li class="nav navbar-item"><a class="active text-light" href="./"><h4>Welcome!</h4></a></li>
    			
    		<span class="sr-only">(current)</span><span class="sr-only">(current)</span>
    		
    	</div>
    	
    </div>
</nav>


<div class="jumbotron">
		<div class="container">
			<br><br><br><br>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="container">
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
					<button type="login" name="login" class="btn btn-outline-success"><strong>Login</strong></button>
					<button type="register" name="register" class="btn btn-success"><strong>Register</strong></button>
				</div>
				</div>
			</form>
			<br><br><br><br>
		</div>
	</div>
</body>
</html>

