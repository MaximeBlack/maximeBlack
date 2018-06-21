<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Maxime Black</title>
		<script type="text/javascript" src="slide.js"></script>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>

	<body>
		<div class= 'sticky-footer'>
			<style type="text/css">
				.fond
				{
					background-image: url('media/univers/fond.png');
					height: 500px;
				}
			</style>
			<div class = "fond">
				<div class="less_nav">
					<header>
						<div class = "full-logo">
							<div class="logo">
							 	<img class="maison" src="media/logo.png">
							 	<img class="nom" src="media/nom_noir.png">
							</div>
						 	<p>Vêtements pour hommes</p>
						</div>
					</header>

					<img class= "univers" src="media/univers/univers1.png" >
					<img class= "univers" src="media/univers/univers2.png" style="display: none;">
					<img class= "univers" src="media/univers/univers3.png" style="display: none;">
					<img class= "univers" src="media/univers/univers4.png" style="display: none;">
					<img class= "univers" src="media/univers/univers5.png" style="display: none;">
					<img class= "univers" src="media/univers/univers6.png" style="display: none;">
					<script type="text/javascript">
						var myIndex = 0;
						carousel();
					</script>
				</div>

			<style>
			    <?php
			      // This PHP code inserts CSS to style the "current page" link in the nav area
			      $here = $_SERVER['SCRIPT_NAME']; 
			      $bits = explode('/',$here); 
			      $filename = $bits[count($bits)-1]; 
			      echo "nav a[href$='$filename'] 
			      {
			      	color: #1a5724; 
			      }";
			    ?>
	    
	 		</style>

				<nav>
					<ul>
						<li class="menu" ><a href ="menu.php" >Menu</a></li>
						<li class="menu" > <a href = "univers.php">Univers</a></li>
						<li class="menu" ><a href ="collection.php" >Collection</a></li>		<li class="menu" ><a href = "histoire.php">Histoire</a></li>
						<li class="menu" > <a href = "informations.php">Informations</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<footer>
			<ul class = "ul-footer">
				<li class="footer" >&copy; 2018 Maxime Black</li>
				<li class="footer">37190 Azay-le-Rideau FRANCE</li>
				<li class="footer">T: +44.(0)7.83.83.783</li>
				<li class="footer">F: +44.(0)7.99.96.52</li>
				<li class="footer" ><a href = "mailto:info@maxime-black.com">info@maxime-black.com</a></li>
			</ul>
		</footer>
	</body>
</html>