<!DOCTYPE html>
<html>

<head>
	<title>Inscription</title>
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
			width: 400px;
			min-width: 400px;
			height: 620px;
			margin: 115px auto;
			background-color: #ffffff;
			color: #003300;
			padding-top: 40px;
			padding-left: 10px;
			text-align: center;
			line-height: 2;
			border: 1px solid;
		}

		td {
			text-align: left;
			padding-left: 30px;
		}
	</style>
</head>

<body>
	<a href="index.php">
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
		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
			<path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
		</svg>
		<form action="./inscrit.php" method="post">
			<table>
				<tr>
					<td>Nom : </td>
					<td><input type="text" name="nom"></td>
				</tr>
				<tr>
					<td>Pr??nom : </td>
					<td><input type="text" name="prenom"></td>
				</tr>
				<tr>
					<td>Pseudo : </td>
					<td><input type="text" name="pseudo"></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Mot de passe : </td>
					<td><input type="text" name="mdp"></td>
				</tr>
				<tr>
					<td>Num??ro de rue : </td>
					<td><input type="number" name="numr"></td>
				</tr>
				<tr>
					<td>Nom de la rue : </td>
					<td><input type="text" name="nomr"></td>
				</tr>
				<tr>
					<td>Compl??ment d'adresse : </td>
					<td><input type="text" name="adress"></td>
				</tr>
				<tr>
					<td>Ville: </td>
					<td><input type="text" name="ville"></td>
				</tr>
				<tr>
					<td>Code postal : </td>
					<td><input type="text" name="codepost"></td>
				</tr>
				<tr>
					<td>Pays : </td>
					<td><input type="text" name="pays"></td>
				</tr>
				<tr>
					<td>T??l??phone : </td>
					<td><input type="text" name="tel"></td>
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