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
				background-image: url('media/histoire/fond.png');
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

				<img class= "histoire-img" src="media/histoire/histoire_1.png">
				<img class= "histoire-img" src="media/histoire/histoire_2.jpg" style="display: none;">
				<img class= "histoire-img" src="media/histoire/histoire_3.jpg" style="display: none;">
				<button class="display left" onclick="plusDivs(-1,1)">&#10094;</button>
				<button class="display right" onclick="plusDivs(+1,1)">&#10095;</button>
				<div class = "dots">
					<span class="badge white" onclick="currentDiv(1,1)"></span>
	   				<span class="badge" onclick="currentDiv(2,1)"></span>
	    			<span class="badge" onclick="currentDiv(3,1)"></span>
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
			<p class='histoire'>Maxime Black est un studio de création de prêt-à-porter masculin, qui puise son inspiration dans le style de vie et les vêtements de la classe moyenne, rurale, française. Avec un accent porté sur l’innovation et la praticabilité du vêtement « moyen », Maxime Black rend hommage à un univers trop souvent délaissé par la mode. Nous embellissons le moyen, AVERAGE.</p>

			<p class='histoire'>"Aujourd'hui, la notion même de classe moyenne ne veut sociologiquement plus rien dire puisqu'il est extrêmement difficile de lui donner une définition "scientifique", elle sert encore d'illusion pour un peuple qui a honte de son état ou de déguisement pour certains membres des classes supérieures qui refusent de s'assumer comme tel."Gaël Brustier et Jean-Philippe Huelin - Recherche le peuple désespérément - 2009</p>

			<p class='histoire'>Notre but est de rendre hommage à un fragment important de la société qui n’est pas représenté dans la mode et l’art. Nous sommes fiers de nos racines et de cet héritage que nous cherchons à mettre sur le devant de la scène à travers la mode. Nous adoptons une approche simple et honnête, basée sur notre vécu, nos souvenirs d’enfance et notre vie de tous les jours. Nous faisons abstraction des barrières élitistes qui font abstraction de cette riche culture que nous avons tous côtoyé.</p>
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