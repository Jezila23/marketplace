<!DOCTYPE html>
<html>
<head>
	<title>Suppression reussie</title>
	<meta http-equiv="refresh" content="3; accueil.php">
	<style type="text/css">
		p{
			font-size: 2em;
		}
	</style>
</head>
<body>
	<?php
		$pseudo = isset($_GET["pseudo"])? $_GET["pseudo"] : "";
	?>

<script>
	<?php
		$database = "ecemarketplace";
		$db_handle = mysqli_connect('localhost','root','');
		$db_found = mysqli_select_db($db_handle, $database);
		$sql = "DELETE FROM vendeur WHERE Pseudo = '$pseudo' ";
		mysqli_query($db_handle, $sql);
	?>;
</script>
	<p>Votre compte a bien été supprimé.
	Vous allez être redirigé dans 3 secondes.</p>
</body>
</html>