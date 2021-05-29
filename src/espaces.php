<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" sizes="32x32" href="./images/cart.png">
	<title>Connexion</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			background-color: #EDF6F9;
		}

		.monBouton {
			text-decoration: none;
			background-color: #F28F3B;
			color: white;
			width: 300px;
			border-radius: 30px;
			margin: 0px 20px;
		}

		.monBouton:hover {
			background-color: #C8553D;
		}

		.conteneur {
			width: 680px;
			min-width: 680px;
			height: 400px;
			margin: 115px auto;
			background-color: #EDF6F9;
			color: #003300;
			padding-top: 40px;
			padding-left: 10px;
			text-align: center;
			line-height: 4.5;
		}
	</style>
</head>

<body>
	<a href="#">
		<!-- image home en svg -->
		<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0)">
				<path d="M5.625 16.875L22.5 3.75L39.375 16.875V37.5C39.375 38.4946 38.9799 39.4484 38.2766 40.1516C37.5734 40.8549 36.6196 41.25 35.625 41.25H9.375C8.38044 41.25 7.42661 40.8549 6.72335 40.1516C6.02009 39.4484 5.625 38.4946 5.625 37.5V16.875Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				<path d="M16.875 41.25V22.5H28.125V41.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				<path d="M28.125 40.875L45 27.75L61.875 40.875V61.5C61.875 62.4946 61.4799 63.4484 60.7766 64.1516C60.0734 64.8549 59.1196 65.25 58.125 65.25H31.875C30.8804 65.25 29.9266 64.8549 29.2233 64.1516C28.5201 63.4484 28.125 62.4946 28.125 61.5V40.875Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</g>
			<defs>
				<clipPath id="clip0">
					<rect width="45" height="45" fill="white" />
				</clipPath>
			</defs>
		</svg>
	</a>
	<div class="conteneur">
		<img src="profil.png" alt="profil" width="100px" height="100px"><br>
		<a href="seConnecterAd.php" class="monBouton" style="padding: 15px 40px;">Espace Administrateur</a><br>
		<a href="seconnecter.php" class="monBouton" style="padding: 15px 60px;">Espace Acheteur</a><br>
		<a href="seConnecterV.php" class="monBouton" style="padding: 15px 60px;">Espace Vendeur</a><br>
		<a href="inscription.php" class="monBouton" style="padding: 15px 60px;">Créer un compte</a><br>
	</div>

</body>

</html>