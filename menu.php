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
		
		<style type="text/css">
			.fond
			{
				background-image: url('media/menu/fond.png');
			}
		</style>
		<div class = "fond" >
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
				<img class= "collection" src="media/menu/menu1.png">
				<img class= "collection" src="media/menu/menu2.png" style="display:none;">
				<img class= "collection" src="media/menu/menu3.png" style="display:none;">
				<img class= "collection" src="media/menu/menu4.png" style="display:none;">
				<img class= "collection" src="media/menu/menu5.png" style="display:none;">
				<img class= "collection" src="media/menu/menu6.png" style="display:none;">
				<button class="display left" onclick="plusDivs(-1,0)">&#10094;</button>
				<button class="display right" onclick="plusDivs(+1,0)">&#10095;</button>
				<div class = "dots">
					<span class="badge white" onclick="currentDiv(1,0)"></span>
	   				<span class="badge" onclick="currentDiv(2,0)"></span>
	    			<span class="badge" onclick="currentDiv(3,0)"></span>
	    			<span class="badge" onclick="currentDiv(4,0)"></span>
	    			<span class="badge" onclick="currentDiv(5,0)"></span>
	    			<span class="badge" onclick="currentDiv(6,0)"></span>
				</div>
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
					<li class="menu" ><a href ="collection.php" >Collection</a></li>
					<li class="menu" ><a href = "histoire.php">Histoire</a></li>
					<li class="menu" > <a href = "informations.php">Informations</a></li>
				</ul>
			</nav>

		</div>

		<main>
			<p class="first">Maxime Black embellit le moyen.</p>
			<p class="second">AVERAGE</p>
		</main>

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