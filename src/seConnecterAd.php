<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS Bootsrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
	<link rel="stylesheet" href="connexion.css" />

	<link rel="icon" type="image/png" sizes="32x32" href="./images/cart.png" />
	<title>Se connecter</title>
</head>

<body>
	<!-- class="fixed-top" : le header reste en position fixe en haut de l'écran -->
	<header class="fixed-top mt-3">
		<!-- balise nav pour signaler les éléments de navigation, pour cette page il s'agit seulement du bouton home-->
		<nav>
			<a class="ms-3" href="index.php">
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
		</nav>
	</header>

	<!--  -Balise main pour signaler le contenu principal de la page
		  -class="container" | utilisation de boostrap pour gérer une partie du layout
		  -class="justify-content-center" | pour centrer le contenu
	-->
	<main class="form-connexion container justify-content-center">
		<!-- class="mx-auto" | classe boostrap (marge automatique pour centrer horizontalement le contenu, cf. https://getbootstrap.com/docs/5.0/utilities/spacing/#horizontal-centering )-->
		<form class="mx-auto" action="./include/connexionadmin.inc.php" method="post">
			<!-- class="mb-4" | classe boostrap (marge bottom 4)
				 class="form-connexion-image" | classe personnalisée pour gérer l'image (bordure aroundie, background, taille)
			-->
			<div class="form-connexion-image mb-4">
				<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M50 52.5V47.5C50 44.8478 48.9464 42.3043 47.0711 40.4289C45.1957 38.5536 42.6522 37.5 40 37.5H20C17.3478 37.5 14.8043 38.5536 12.9289 40.4289C11.0536 42.3043 10 44.8478 10 47.5V52.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M30 27.5C35.5228 27.5 40 23.0228 40 17.5C40 11.9772 35.5228 7.5 30 7.5C24.4772 7.5 20 11.9772 20 17.5C20 23.0228 24.4772 27.5 30 27.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</div>

			<!-- class="row" utilisation du systeme grid de boostrap-->
			<div class="row justify-content-center mb-4">
				<!-- class="col-8" | classe boostrap, taille de l'élément
					 class="border border-2" | classes boostrap pour la bordure 
				-->
				<div class="col-8">
					<input class="form-control border border-2 " type="text" name="NomUtilisateur" placeholder="Adresse mail" />
				</div>
			</div>
			<div class="row justify-content-center mb-4">
				<div class="col-8">
					<input class="form-control border border-2" type="password" name="mdp" placeholder="Mot de passe" />
				</div>
			</div>
			<div class="row justify-content-center mt-3">
				<!-- class="btn btn-primary rounded-pill col-4" classe boostrap bouton primaire, rounded-pill pour l'aroundi-->
				<input class="btn btn-primary rounded-pill col-4" type="submit" name="Connexion" value="Connexion" />
			</div>
		</form>
	</main>
</body>

</html>