<?php
	
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
	$pseudo = isset($_POST["nom"])? $_POST["nom"] : "";
	$email = isset($_POST["email"])? $_POST["email"] : "";
	$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
	$numr = isset($_POST["numr"])? $_POST["numr"] : "";
	$nomr = isset($_POST["nomr"])? $_POST["nomr"] : "";
	$adress = isset($_POST["adress"])? $_POST["adress"] : "";
	$ville = isset($_POST["ville"])? $_POST["ville"] : "";
	$codepost = isset($_POST["codepost"])? $_POST["codepost"] : "";
	$pays = isset($_POST["pays"])? $_POST["pays"] : "";
	$tel = isset($_POST["tel"])? $_POST["tel"] : "";

	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','');

	$database = "ecemarketplace";

	$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$db_found=mysqli_select_db($db_handle, $database);

	

	if (isset($_POST["save"])) {
		if ($db_found) {
			$sql = "SELECT * FROM acheteur";
			if ($nom != "") {

				$sql .= " WHERE Nom LIKE '%$nom%'";
				if ($prenom != "") {
						$sql .= " AND Prenom LIKE '%$prenom%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);

			$sql2 = "SELECT * FROM adresse";
			if ($numr != "") {

				$sql2 .= " WHERE Num_rue LIKE '%$numr%'";
				if ($nomr != "") {
					$sql2 .= " AND Nom_rue LIKE '%$nomr%'";
					if($ville!=""){
						$sql2 .= " AND Ville LIKE '%$ville%'";
					}
				}	
			}
			$result2 = mysqli_query($db_handle, $sql2);

			if (mysqli_num_rows($result) != 0 && mysqli_num_rows($result2) != 0) {

				echo "Le compte existe déja.";
			}else{
				$sql2 ="INSERT INTO adresse(Num_rue, Nom_rue, Ville, Code_Postal, Pays, Complement_Ad)
 					VALUES('$numr', '$nomr', '$ville', '$codepost', '$pays', '$adress')";
				$result2 = mysqli_query($db_handle, $sql2);

				$res = mysqli_query($db_handle, "SELECT ID_Adresse FROM adresse ORDER BY ID_Adresse DESC LIMIT 0,1");
				$final = mysqli_fetch_array($res);
				$id = $final["ID_Adresse"];

				$sql = "INSERT INTO acheteur(Nom, Prenom, Pseudo, Email, Mdp_Ach, ID_Adresse)
 					VALUES('$nom', '$prenom', '$pseudo', '$email', '$mdp', '$id')";

				$result = mysqli_query($db_handle, $sql);

				echo "Bienvenue sur ECE MarketPlace. Vous faites désormais parti de nos membres." . "<br>";
 
				$sql = "SELECT * FROM acheteur";
				if ($nom != "") {

					$sql .= " WHERE Nom LIKE '%$nom%'";
					if ($prenom != "") {
						$sql .= " AND Prenom LIKE '%$prenom%'";
					}
				}
				$result = mysqli_query($db_handle, $sql);

				while ($data = mysqli_fetch_assoc($result)) {
					echo "Informations que vous avez saisi:" . "<br>";
					echo "Nom: " . $data['Nom'] . "<br>";
					echo "Prénom: " . $data['Prenom'] . "<br>";
					echo "Pseudo: " . $data['Pseudo'] . "<br>";
					echo "Email: " . $data['Email'] . "<br>";
					echo "<br>"."<br>";
				}

				$sql2 = "SELECT * FROM adresse";
				if ($numr != "") {

					$sql2 .= " WHERE Num_rue LIKE '%$numr%'";
					if ($nomr != "") {
						$sql2 .= " AND Nom_rue LIKE '%$nomr%'";
						if ($ville != "") {
							$sql2 .= " AND Ville LIKE '%$ville%'";
						}
					}
				}

				$result2 = mysqli_query($db_handle, $sql2);
				while ($data = mysqli_fetch_assoc($result2)) {
					echo "Adresse: " . $data['Num_rue']." ";
					echo $data['Nom_rue'] . "<br>";
					echo $data['Complement_Ad']."<br>";
					echo $data['Code_Postal']." ";
					echo $data['Ville']."<br>"."<br>";
				}
			}
		}else {
			echo "Database not found";
		}
	}

	mysqli_close($db_handle);
?>