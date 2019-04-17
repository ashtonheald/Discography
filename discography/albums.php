<?php 
$servername = "localhost";
$username = "root";
$password = "Agh1013132_";
$dbname = "the_killers_discography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/header.php' ?>
</head>

<body class="albums">
	<a href="index.html"><img class="logo" src="images/killers_logo.png" alt="Kilers Logo" width="400"></a>

	<header>
		<nav class="navbar bg-primary navbar-expand-lg navbar-inverse navbar-toggleable-sm">

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarButton">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarButton">

				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li><a class="nav-item nav-link" href="index.php">Home</a></li>
					<li><a class="nav-item nav-link ml-sm-auto active" href="albums.php">Albums</a></li>
					<li><a class="nav-item nav-link" href="about.php">The Band</a></li>
				</ul>
			</div>       
		</nav>
	</header>

	<div class="cards">
		<div class="card card-album" style="padding-bottom:60px;">
			<img src="images/hotfuss.jpg" alt="Hot Fuss">
			<div class="card-title">
				<?php  
				$sql = "SELECT * FROM albums WHERE album_id = '1'";
				$result = $conn->query($sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
					}
				} else {
					echo "0 results";
				}
				?>
				<ul class="card-text list-group list-group-flush">
					<?php  
					$sql = "SELECT * FROM tracks where album_id = '1' ";
					$result = $conn->query($sql);

					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo '<li class="list-group-item">' . $row['track_name'];
						}
					} else {
						echo "0 results";
					}
					?>
				</ul>
			</h2>
		</div>
	</div>

	<div class="card card-album" style="padding-bottom:112px;">
		<img src="images/samstown.jpg" alt="Sam's Town">
		<div class="card-title">
			<?php  
			$sql = "SELECT * FROM albums WHERE album_id = '2'";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
				}
			} else {
				echo "0 results";
			}
			?>
			<ul class="card-text list-group list-group-flush">
				<?php  
				$sql = "SELECT * FROM tracks where album_id = '2' ";
				$result = $conn->query($sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo '<li class="list-group-item">' . $row['track_name'];
					}
				} else {
					echo "0 results";
				}
				?>
			</ul>
		</h2>
	</div>
</div>

<div class="card card-album">
	<img src="images/sawdust.jpg" alt="Sawdust">
	<div class="card-title">
		<?php  
		$sql = "SELECT * FROM albums WHERE album_id = '3'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
			}
		} else {
			echo "0 results";
		}
		?>
		<ul class="card-text list-group list-group-flush">
			<?php  
			$sql = "SELECT * FROM tracks where album_id = '3' ";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<li class="list-group-item">' . $row['track_name'];
				}
			} else {
				echo "0 results";
			}
			?>
		</ul>
	</h2>
</div>
</div>

<div class="card card-album">
	<img src="images/dayandage.jpg" alt="Day and Age">
	<div class="card-title">
		<?php  
		$sql = "SELECT * FROM albums WHERE album_id = '4'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
			}
		} else {
			echo "0 results";
		}
		?>
		<ul class="card-text list-group list-group-flush">
			<?php  
			$sql = "SELECT * FROM tracks where album_id = '4' ";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<li class="list-group-item">' . $row['track_name'];
				}
			} else {
				echo "0 results";
			}
			?>
		</ul>
	</h2>
</div>
</div>

<div class="card card-album">
	<img src="images/royalalbert.jpg" alt="Royal Albert">
	<div class="card-title">
		<?php  
		$sql = "SELECT * FROM albums WHERE album_id = '5'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
			}
		} else {
			echo "0 results";
		}
		?>
		<ul class="card-text list-group list-group-flush">
			<?php  
			$sql = "SELECT * FROM tracks where album_id = '5' ";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<li class="list-group-item">' . $row['track_name'];
				}
			} else {
				echo "0 results";
			}
			?>
		</ul>
	</h2>
</div>
</div>

<div class="card card-album" style="padding-bottom:60px;">
	<img src="images/battleborn.jpg" alt="Battleborn">
	<div class="card-title">
		<?php  
		$sql = "SELECT * FROM albums WHERE album_id = '6'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
			}
		} else {
			echo "0 results";
		}
		?>
		<ul class="card-text list-group list-group-flush">
			<?php  
			$sql = "SELECT * FROM tracks where album_id = '6' ";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<li class="list-group-item">' . $row['track_name'];
				}
			} else {
				echo "0 results";
			}
			?>
		</ul>
	</h2>
</div>
</div>

<div class="card card-album">
	<img src="images/directhits.jpg" alt="Direct Hits">
	<div class="card-title">
		<?php  
		$sql = "SELECT * FROM albums WHERE album_id = '7'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
			}
		} else {
			echo "0 results";
		}
		?>
		<ul class="card-text list-group list-group-flush">
			<?php  
			$sql = "SELECT * FROM tracks where album_id = '7' ";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<li class="list-group-item">' . $row['track_name'];
				}
			} else {
				echo "0 results";
			}
			?>
		</ul>
	</h2>
</div>
</div>

<div class="card card-album" style="padding-bottom:29px;">
	<img src="images/wishes.jpg" alt="Wishes">
	<div class="card-title">
		<?php  
		$sql = "SELECT * FROM albums WHERE album_id = '8'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
			}
		} else {
			echo "0 results";
		}
		?>
		<ul class="card-text list-group list-group-flush">
			<?php  
			$sql = "SELECT * FROM tracks where album_id = '8' ";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<li class="list-group-item">' . $row['track_name'];
				}
			} else {
				echo "0 results";
			}
			?>
		</ul>
	</h2>
</div>
</div>
<div class="card card-album" style="padding-bottom:154px;">
	<img src="images/wonderful.jpg" alt="Wonderful">
	<div class="card-title">
		<?php  
		$sql = "SELECT * FROM albums WHERE album_id = '9'";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<h2>' . $row['album_title'] . '<small>' . $row['album_year'] . '</small>';
			}
		} else {
			echo "0 results";
		}
		?>
		<ul class="card-text list-group list-group-flush">
			<?php  
			$sql = "SELECT * FROM tracks where album_id = '9' ";
			$result = $conn->query($sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo '<li class="list-group-item">' . $row['track_name'];
				}
			} else {
				echo "0 results";
			}
			?>
		</ul>
	</h2>
</div>
</div>
</div>

<footer>
	<h3><a href="https://en.wikipedia.org/wiki/The_Killers" target="_blank">Source</a></h3>
	<small>&copy; 2017 Tyler Gilbert</small>
</footer>
</body>
</html>
