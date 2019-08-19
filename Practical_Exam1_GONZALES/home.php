

<?php include 'frontend.php'; 

		session_start();
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $address = $_SESSION['address'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
	
    

?>

<nav class="navbar navbar-expand navbar-light bg-success">
    <div class="navbar">
    	<div class="container text-light">
    	<li class="nav navbar-item"><a class="active text-light" href="#"><h1>
            <?php echo $username; ?></h1></a>
    	</div>
    	<div>
    	<a class="active text-light" href="index.php"><h6 style="text-align: center;">Logout</h6></a>
        <a class="active text-light" href="images.php"><h6 style="text-align: center;">Images</h6></a>
    	</div>
    </div>
</nav>


<div class="jumbotron">
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
     <br><br>    <br><br>    <br><br>    <br><br>   
</div>