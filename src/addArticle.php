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
			height: 550px;
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

		.photo{
			background-color: #dddddd;
			margin-left: 170px;
			width: 80px;
			height: 80px;
			text-align: center;
		}
	</style>
</head>

<body>
	<img src="home.png" alt="home">
	<div class="conteneur">
		<div class="photo">
			add
		</div>
		<br><br>
		<form>
			<table>
				<tr>
					<td>Nom : </td><td><input type="text" name="NomUtilisateur"></td>
				</tr>
				<tr>
					<td>Prix: </td><td><input type="text" name="prix"></td>
				</tr>
				<tr>
					<td>Catégorie : </td>
					<td>
						<select name="catégorie">
							<option value=""> </option>
							<option value="art">Meubles et objets d'art</option>
							<option value="vip">Objets VIP</option>
							<option value="scolaire">Matériel scolaire</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label class="labelCol">Description :</label></td>
					<td><textarea name="Description"></textarea></td>
				</tr>
				<tr>
					<td>Modèle de vente : </td>
					<td>
						<select name="catégorie">
							<option value=""> </option>
							<option value="enchere">Meilleure offre</option>
							<option value="negoc">Transaction client-vendeur</option>
							<option value="immediat">Achat immédiat</option>
						</select>
					</td>
				</tr>
			</table>
		</form>
		<br><br><a href="#" class="monBouton" style="padding: 15px 40px;">Ajouter l'article</a><br>
	</div>

</body>
</html>