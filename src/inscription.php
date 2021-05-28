<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
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
			height: 620px;
			margin:115px auto;
			background-color:#ffffff;
			color:#003300;
			padding-top: 40px;
			padding-left:10px;
			text-align: center;
			line-height: 2 ;
			border:1px solid;
		}
		td{
			text-align: left;
			padding-left: 30px;
		}
	</style>
</head>

<body>
	<img src="home.png" alt="home">
	<div class="conteneur">
		<img src="profil.png" alt="profil" width="100px" height="100px"><br><br>
		<form action="inscrit.php" method="post">
			<table>
				<tr>
					<td>Nom : </td><td><input type="text" name="nom"></td>
				</tr>
				<tr>
					<td>Prénom : </td><td><input type="text" name="prenom"></td>
				</tr>
				<tr>
					<td>Pseudo : </td><td><input type="text" name="pseudo"></td>
				</tr>
				<tr>
					<td>Email : </td><td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Mot de passe : </td><td><input type="text" name="mdp"></td>
				</tr>
				<tr>
					<td>Numéro de rue : </td><td><input type="number" name="numr"></td>
				</tr>
				<tr>
					<td>Nom de la rue : </td><td><input type="text" name="nomr"></td>
				</tr>
				<tr>
					<td>Complément d'adresse : </td><td><input type="text" name="adress"></td>
				</tr>
				<tr>
					<td>Ville: </td><td><input type="text" name="ville"></td>
				</tr>
				<tr>
					<td>Code postal : </td><td><input type="text" name="codepost"></td>
				</tr>
				<tr>
					<td>Pays : </td><td><input type="text" name="pays"></td>
				</tr>
				<tr>
					<td>Téléphone : </td><td><input type="text" name="tel"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br><input type="submit" name="save" class="monBouton" style="padding: 15px 60px;" value="Enregistrer">
					</td>
				</tr>
			</table>
		</form>
		
	</div>

</body>
</html>