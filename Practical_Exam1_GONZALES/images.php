<?php include 'frontend.php'; 
session_start();
 $username = $_SESSION['username'];

 ?>

<nav class="navbar navbar-expand navbar-light bg-success">
    <div class="navbar">
    	<div class="container text-light">
    	<li class="nav navbar-item"><a class="active text-light" href="#"><h1>
            <?php echo $username; ?></h1></a>
    	</div>
    	<div class="list-group list-inline">
    		<a class="active text-light" href="index.php"><h6 style="text-align: center;">Logout</h6></a>
        <a class="active text-light" href="images.php"><h6 style="text-align: center;">Images</h6></a>
    	
    	
    	</div>
    </div>
</nav>


<br><br>
<div class="jumbotron">
	

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>