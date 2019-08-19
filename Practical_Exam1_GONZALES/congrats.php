<?php include 'frontend.php'; 



	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$address = $_SESSION['address'];
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

	


?>
<nav class="navbar navbar-expand navbar-light bg-success">
    <div class="navbar text-light">
    	<h1>CONGRATS <?php echo $name; ?></h1>
    	
    </div>
</nav>
<br><br>
<div class="container">
	<div class="list-group">
		<ul class="list-group">
			<li class="list-group-item"> <strong>Name: <?php echo $name; ?></strong> </li>
			<li class="list-group-item"> <strong>Email: <?php echo $email; ?></strong> </li>
			<li class="list-group-item"> <strong>Address: <?php echo $address; ?></strong> </li>
			<li class="list-group-item"> <strong>Username: <?php echo $username; ?></strong> </li>
			<li class="list-group-item"> <strong>Password: <?php echo $password; ?></strong> </li>
		</ul>
	</div>

	<div class="form-group">
		<a href="index.php">Back</a>
</div>