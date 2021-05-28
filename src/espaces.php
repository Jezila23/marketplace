<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-color: #EDF6F9;
		}

		.monBouton{
			text-decoration: none;
			background-color: #F28F3B;
			color:white;
			width:300px;
			border-radius: 30px;
			margin: 0px 20px;
		}

		.monBouton:hover{
			background-color: #C8553D;
		}

		.conteneur{
			width:680px;
			min-width:680px;
			height: 400px;
			margin:115px auto;
			background-color:#EDF6F9;
			color:#003300;
			padding-top: 40px;
			padding-left:10px;
			text-align: center;
			line-height: 4.5 ;
		}
	</style>
</head>

<body>
	<img src="home.png" alt="home">
	<div class="conteneur">
		<img src="profil.png" alt="profil" width="100px" height="100px"><br>
		<a href="seConnecterAd.php" class="monBouton" style="padding: 15px 40px;">Espace Administrateur</a><br>
		<a href="seConnecter.php" class="monBouton" style="padding: 15px 60px;">Espace Acheteur</a><br>
		<a href="seConnecterV.php" class="monBouton" style="padding: 15px 60px;">Espace Vendeur</a><br>
		<a href="inscription.php" class="monBouton" style="padding: 15px 60px;">Créer un compte</a><br>
	</div>

</body>
</html>