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
			width:400px;
			min-width:400px;
			height: 300px;
			margin:115px auto;
			background-color:#ffffff;
			color:#003300;
			padding-top: 60px;
			padding-left:10px;
			text-align: center;
			line-height: 2 ;
			border:1px solid;
		}
	</style>
</head>

<body>
	<img src="home.png" alt="home">
	<div class="conteneur">
		<img src="profil.png" alt="profil" width="100px" height="100px"><br><br><br>
		<form>
			<input type="text" name="NomUtilisateur" placeholder="adresse mail"><br>
			<input type="password" name="mdp" placeholder="mot de passe"><br><br>
		</form>
		<a href="#" class="monBouton" style="padding: 15px 60px;">Connexion</a><br>
	</div>

</body>
</html>