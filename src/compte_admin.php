<!DOCTYPE html>
<html>
<head>
	<title>Compte admin</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<style type="text/css">
	body{
		background-color: #EDF6F9;
	}
	.gauche{
		width:900px;
		min-width:800px;
		margin:115px auto 115px 50px;
		background-color:#ffffff;
		color:black;
		padding: 20px 20px 20px 20px ;
		float:left;
	}
	.droite{
		width:900px;
		min-width:800px;
		margin:115px auto;
		background-color:#ffffff;
		color:black;
		padding: 20px 20px 20px 20px ;
		float:right;
		margin-right: 50px;
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
	#vendeur{
	width: 300px;
	margin-left: 250px;
	padding: 10px 0px;
	font-size: 1.3em;
	background-color: #F28F3B;
	text-align: center;
	cursor: pointer;
	}
	#articles{
	width: 300px;
	margin-left: 50px;
	padding: 10px 0px;
	font-size: 1.3em;
	background-color: #F28F3B;
	text-align: center;
	cursor: pointer;
	}
	.ligne{
	margin-bottom: 10px;
	}
	#col{
		column-count: 3;
		text-align: center;
	}
	.nom_vend{
		text-decoration: none;
		font-size: 1.4em;
		color:black;
	}
	#invit{
		color:#888;
		margin-left: 560px;
	}
	#presentation{
		width:900px;
	min-width:800px;
	margin:115px auto;
	background-color:#ffffff;
	color:black;
	padding: 20px 20px 20px 20px ;
	}


</style>
<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
$database = "ecemarketplace";
$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found=mysqli_select_db($db_handle, $database);
?>


<body>
<a class="ms-3" href="./index.php">
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
	<div id="presentation">
		<?php
			$id_ad = isset($_GET["id_ad"])? $_GET["id_ad"] : "";
			$sql = "SELECT Email, Nom, Prenom FROM administrateur WHERE ID_Ad = '$id_ad'";
			$result = mysqli_query($db_handle, $sql);
			if (mysqli_num_rows($result)==0){
			} else{
				while ($data = mysqli_fetch_assoc($result)){
					$nom = $data['Nom'];
					$mail = $data['Email'];
					$prenom = $data['Prenom'];
				}
			}
		?>
		<p>
			<u>Administrateur</u><br><br>
			<?php echo "ID : ".$id_ad."<br>Nom : ".$nom."<br>Prenom : ".$prenom."<br> Mail : <a href=\"mailto:ece.marketplace@gmail.com\">".$mail."</a>"?>
		</p>
	</div>
	<div class="gauche">
		<h3 id="vendeur"><b>Les vendeurs</b></h3>
		<a href="#" id="invit">inviter de nouveaux vendeurs</a><br><br><br><br><br>
		<div class="ligne vente">
	 		<div id="section">
 				<div id="col">
	 				<?php
						$sql = "SELECT * FROM vendeur";
						$result = mysqli_query($db_handle, $sql);
						while ($data = mysqli_fetch_assoc($result)){
							$pdp = $data['Img_Vendeur'];
							$id_vend = $data['ID_Vend'];
							$pseudo_vend = $data['Pseudo'];
					?>
					<div class="col-6">

						<a href="compte_vendeur.php?pseudo=<?php echo"$pseudo_vend"?>">
							<img src="<?php echo $data['Img_Vendeur'];?>" class="rounded" alt="photo" style="width:200px;height:200px;border-radius: 50%;background-color: #ccc;"/>
									
						</a>
					</div>
					<?php } ?>
				</div>
		 	</div>
		</div>
		<div>
	 		<div id="section">
 				<div id="col">
	 				<?php
						$sql = "SELECT * FROM vendeur";
						$result = mysqli_query($db_handle, $sql);
						while ($data = mysqli_fetch_assoc($result)){
							$pdp = $data['Img_Vendeur'];
							$id_vend = $data['ID_Vend'];
							$pseudo_vend = $data['Pseudo'];
					?>
					<div class="col-6">

						<a class="nom_vend" href="merde.php?pseudo=<?php echo"$pseudo_vend"?>"><?php echo"$pseudo_vend"?></a>
					</div>
					<?php } ?>
				</div>
		 	</div>
		</div>
	</div>

	<div class="droite">
		<h3 id="articles"><b>Articles mis en vente</b></h3>
		<div class="ligne vente">
	 		
		</div>
	</div>
</body>
</html>