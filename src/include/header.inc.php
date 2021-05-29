<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="title" content="<?php echo $titre ?>" />
	<meta name="author" content="" />

	<link rel="icon" type="image/png" sizes="32x32" href="./images/cart.png" />
	<?php
	if (isset($boostrap)) {
		echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">";
	}
	?>
	<link rel="stylesheet" href="styles.css" />
	<title><?php echo $titre ?></title>
</head>

<body>
	<header>
		<div class="header-logo">
			<a href="#"><img src="images/logo.png" alt="logo" /></a>
		</div>

		<div class="header-boutons">
			<a href="#" class="monBouton">Accueil</a>
			<a href="#" class="monBouton">Tout parcourir</a>
			<a href="#" class="monBouton">Notifications</a>
		</div>


		<div class="header-right">
			<a href="#">
				<svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z" />
				</svg>
			</a>
			<a href="#"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" />
				</svg>
			</a>
			<a href="#"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
					<path fill="currentColor" d="M16.56,5.44L15.11,6.89C16.84,7.94 18,9.83 18,12A6,6 0 0,1 12,18A6,6 0 0,1 6,12C6,9.83 7.16,7.94 8.88,6.88L7.44,5.44C5.36,6.88 4,9.28 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12C20,9.28 18.64,6.88 16.56,5.44M13,3H11V13H13" />
				</svg>
			</a>
			<div class="connect">
				<br />Profil Panier Deconnexion
			</div>
		</div>
	</header>