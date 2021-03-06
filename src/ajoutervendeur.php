<!DOCTYPE html>
<html>
<head>
	<title>Ajouter vendeur</title>
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
			height: 350px;
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
<a href="#"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
    </svg>
    </a>
	<div class="conteneur">
	<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
	</svg>
		<form action="./include/addvendeur.inc.php" method="post">
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
					<td colspan="2" align="center">
						<br><input type="submit" name="add" class="monBouton" style="padding: 15px 60px;" value="Ajouter le vendeur">
					</td>
				</tr>
			</table>
		</form>
		
	</div>

</body>
</html>