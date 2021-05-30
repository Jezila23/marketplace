<!DOCTYPE html>
<html>
<head>
	<title>Compte client</title>
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
	height: 300px;
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


#carouselExampleIndicators{
	width: 50%;
	margin: 0 auto;
	margin-top: 5px;
}
.carousel-item img{
	width: 100%;
	height: 100%;
}
	</style>

	
</head>
<body>
<?php 
	$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
 
	$database = "merketplace";
	//connectez-vous dans BDD
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);
	$sql = "SELECT ID_Vend, Email FROM vendeur WHERE Pseudo = '$pseudo'";
	$result = mysqli_query($db_handle, $sql);
	if (mysqli_num_rows($result)==0){
		echo "Pas le bon blaz";
	} else{
		while ($data = mysqli_fetch_assoc($result)){
			$ID = $data['ID_Vend'];
			$mail = $data['Email'];
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
					<u>Vendeur</u><br>
					<?php echo "ID : ".$ID."<br>Pseudo : ".$pseudo."<br> Mail : <a href=\"mailto:ece.marketplace@gmail.com\">".$mail."</a><br> Telephone : <a href=\"tel:0651804042\">"."téléphone</a>"?>
				</p>
			</div>
			<img src="user.svg" alt="pdp" onclick="modif_pdp()">
		</div>

		<h3 id="btn_vente">Articles mis en vente</h3>
		<div class="ligne vente">
<!-- Ici commence le carrousel-->
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="java.jpg" class="d-block w-100" alt="apprendre java">
					</div>
					<div class="carousel-item">
						<img src="coque.jfif" class="d-block w-100" alt="coque">
					</div>
					<div class="carousel-item">
						<img src="java.jpg" class="d-block w-100" alt="capture">
					</div>
				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button>

				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
				</button>
			</div> 
<!-- Ici termine le carrousel-->
		</div>
		<h3 id="btn_nego">Négociations en cours</h3>
		<div class="ligne nego"></div>
		<h3 id="btn_ench">Enchères en cours</h3>
		<div class="ligne ench"></div>
		<h3 id="btn_vendu">Articles vendus</h3>
		<div class="ligne vendu"></div>

		<p id="suppr" onclick="verif_suppr()" style="color:red;cursor:pointer;padding-left: 660px;font-size: 0.8em;"><u>Supprimer le compte</u></p>
	</div>

	<footer></footer>

	<script>
		function verif_suppr() {
			var r = confirm("Etes-vous sur.e de vouloir supprimer votre compte ? Cette action est définitive");
			if (r == true) {
				
				window.open("message.php", "_self");
			}else{}
		}

		function modif_pdp() {
			var i = confirm("Voulez-vous modifier votre photo de profil ?");
			if (i == true) {
				window.open("pdp.php", "_self");
			}else{}
		}

	</script>
</body>
</html>