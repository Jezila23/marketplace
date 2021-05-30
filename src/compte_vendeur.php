<!DOCTYPE html>
<html>
<head>
	<title>Compte vendeur</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn_vente").click(function(){
				$(".vente").toggle();
			});
			$("#btn_nego").click(function(){
				$(".nego").toggle();
			});
			$("#btn_ench").click(function(){
				$(".ench").toggle();
			});
			$("#btn_vendu").click(function(){
				$(".vendu").toggle();
			});
		});
	</script>

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
	width:900px;
	min-width:800px;
	margin:115px auto;
	background-color:#ffffff;
	color:black;
	padding: 20px 20px 20px 20px ;
}
.enonce{
	text-decoration: none;
	background-color: #aaa;
	padding: 10px 40px;
	margin-left:50px;
	color: black;
	width:170px;
	font-size: 1.3em;
	text-align: center;
}
.ligne{
	
	border: solid 1px black;
	margin-bottom: 10px;
	display: none;
}
#infos{
	height: 330px;
}
h2{
	width: 350px;
	margin-left: 0px;
	padding: 10px 0px;
	font-size: 1.5em;
	background-color: #F28F3B;
	text-align: center;
}
p{
	font-size: 1.2em;
	margin-left: 50px;
	line-height: 1.5;
}
#infos img{
	border-radius: 50%;
	margin-top: 40px;
	margin-right: 50px;
	width: 150px;
	height:150px;
	background-color: #ccc;
	float:right;
	cursor: pointer;
}

#gauche{
	float: left;
}
h3{
	width: 300px;
	margin-left: 50px;
	padding: 10px 0px;
	font-size: 1em;
	background-color: #c4c4c4;
	text-align: center;
	cursor: pointer;
}

#col{
		column-count: 3;
	}

	</style>


	
</head>
<body>
<?php 
	$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
 
	$database = "ecemarketplace";
	//connectez-vous dans BDD
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);
	$sql = "SELECT ID_Vend, Email, Img_Vendeur FROM vendeur WHERE Pseudo = '$pseudo'";
	$result = mysqli_query($db_handle, $sql);
	if (mysqli_num_rows($result)==0){
	} else{
		while ($data = mysqli_fetch_assoc($result)){
			$ID = $data['ID_Vend'];
			$mail = $data['Email'];
			$url_pdp = $data['Img_Vendeur'];
		}
	}
	mysqli_close($db_handle);
?>


	<header></header>

	<div class="conteneur">
		<div id="infos">
			<div id="gauche">
				<h2>Votre compte</h2>
				<p>
					<u>Vendeur</u><br><br>
					<?php echo "ID : ".$ID."<br>Pseudo : ".$pseudo."<br> Mail : <a href=\"mailto:ece.marketplace@gmail.com\">".$mail."</a>"?>
				</p>
			</div>
			<img src="<?php echo "$url_pdp" ?>" alt="pdp" onclick="modif_pdp()">
		</div>

		<h3 id="btn_vente">Articles mis en vente</h3>
		<div class="ligne vente">
	 		<div id="section">
 				<div id="col">
	 				<?php
 						define('DB_SERVER','localhost');
						define('DB_USER','root');
						define('DB_PASS','');
						$database = "ecemarketplace";
						$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
						$db_found=mysqli_select_db($db_handle, $database);
						$sql = "SELECT Img FROM image_art WHERE ID_Art IN (SELECT ID_Art FROM articles WHERE ID_Vend = '$ID' and Type='immediat') ";
						$result = mysqli_query($db_handle, $sql);
						while ($data = mysqli_fetch_assoc($result)){
							$image = $data['Img'];
							$sql2 = "SELECT ID_Art FROM image_art WHERE Img = '$image' ";
							$result2 = mysqli_query($db_handle, $sql2);
							$ID_Art = mysqli_fetch_assoc($result2)['ID_Art'];
					?>
					<div class="col-6">

						<a href="article.php?id_art=<?php echo"$ID_Art"?>">
							<img src="<?php echo $data['Img'];?>" class="rounded" alt="photo" width="200" height="200"/>					
						</a>
					</div>
					<?php } ?>
				</div>
		 	</div>
		</div>
		<h3 id="btn_nego">Négociations en cours</h3>
		<div class="ligne nego">
	 		<div id="section">
 				<div id="col">
	 				<?php
						$sql = "SELECT Img FROM image_art WHERE ID_Art IN (SELECT ID_Art FROM articles WHERE ID_Vend = '$ID' and Type='negocier') ";
						$result = mysqli_query($db_handle, $sql);
						while ($data = mysqli_fetch_assoc($result)){
							$image = $data['Img'];
							$sql2 = "SELECT ID_Art FROM image_art WHERE Img = '$image' ";
							$result2 = mysqli_query($db_handle, $sql2);
							$ID_Art = mysqli_fetch_assoc($result2)['ID_Art'];
					?>
					<div class="col-6">
						<a href="article.php?id_art=<?php echo"$ID_Art"?>">
							<img src="<?php echo $data['Img'];?>" class="rounded" alt="photo" width="200" height="200"/>					
						</a>
					</div>
					<?php } ?>
				</div>
		 	</div>
		</div>
		<h3 id="btn_ench">Enchères en cours</h3>
		<div class="ligne ench">
	 		<div id="section">
 				<div id="col">
	 				<?php
						$sql = "SELECT Img FROM image_art WHERE ID_Art IN (SELECT ID_Art FROM articles WHERE ID_Vend = '$ID' and Type='enchere') ";
						$result = mysqli_query($db_handle, $sql);
						while ($data = mysqli_fetch_assoc($result)){
							$image = $data['Img'];
							$sql2 = "SELECT ID_Art FROM image_art WHERE Img = '$image' ";
							$result2 = mysqli_query($db_handle, $sql2);
							$ID_Art = mysqli_fetch_assoc($result2)['ID_Art'];
					?>
					<div class="col-6">
						<a href="article.php?id_art=<?php echo"$ID_Art"?>">
							<img src="<?php echo $data['Img'];?>" class="rounded" alt="photo" width="200" height="200"/>					
						</a>
					</div>
					<?php } ?>
				</div>
		 	</div>
		</div>


		<p onclick="ajouter_article()" style="color:#888;cursor:pointer;margin-left: 660px;font-size: 0.8em;"><u>Ajouter un article</u></p>
		<p onclick="verif_suppr()" style="color:red;cursor:pointer;margin-left: 660px;font-size: 0.8em;"><u>Supprimer le compte</u></p>
	</div>

	<footer></footer>

	<script>
		function verif_suppr() {
			var r = confirm("Etes-vous sur.e de vouloir supprimer votre compte ? Cette action est définitive");
			if (r == true) {
				window.open("conf_suppr_compte.php?pseudo=<?php echo"$pseudo"?>", "_self");
			}else{}
		}

		function modif_pdp() {
			var i = confirm("Voulez-vous modifier votre photo de profil ?");
			if (i == true) {
				window.open("change_pdp.php?pseudo=<?php echo"$pseudo"?>", "_self");
			}else{}
		}

		function ajouter_article() {
			var i = confirm("Voulez-vous ajouter un article ?");
			if (i == true) {

			}else{}
		}

	</script>
</body>
</html>