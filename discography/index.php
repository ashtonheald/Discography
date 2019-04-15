<?php 
$pageTitle = "The Killers Discography";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include './includes/header.php' ?>
</head>

<body id="home">
<a href="#"><img class="logo" src="images/killers_logo.png" alt="Kilers Logo" width="400"></a>

<header>
        <nav class="navbar bg-primary navbar-expand-lg navbar-inverse navbar-toggleable-sm">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarButton">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarButton">
            
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li><a class="nav-item nav-link ml-sm-auto active" href="index.php">Home</a></li>
                <li><a class="nav-item nav-link" href="albums.php">Albums</a></li>
                <li><a class="nav-item nav-link" href="about.php">The Band</a></li>
                </ul>
            </div>        
    </nav>
</header>
	<div id="recent">
		<h1>WONDERFUL WONDERFUL - OUT NOW</h1>
		<img class="wonderful" src="images/wonderful.png" alt="Wonderful Wonderful"><br>
		<a href="https://lnk.to/WonderfulWonderful" target="_blank">Listen / Purchase</a>
	</div>
	<section>
	<h2>Sign up for the Newsletter!</h2>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
    	 <div class="well">
             <form action="#">
              <div class="input-group">
                 <input class="btn btn-lg" name="email" id="email" type="email" placeholder="Your Email" required>
                 <button class="btn btn-info btn-lg" type="submit">Submit</button>
              </div>
             </form>
    	 </div>
		</div>
	</div>
</div>
</section>

	<footer>
		<small>&copy; 2017 Tyler Gilbert</small>
	</footer>
</body>
</html>
