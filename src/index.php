<?php
include("header.php");
?>
<head>
	<title>Caroussel d'articles</title>
	<meta charset="utf-8">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style>
		body{
			margin: 0;
			padding: 0;
			height: 10vh;
            background-color: #EDF6F9;
		}
		#carouselExampleIndicators{
			width: 10%;
			margin: 0 auto;
			margin-top: 10px;
		}
		.carousel-item img{
			width: 100%;
			height: auto;
		}
	</style>
</head>
<body>

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
</body>
<?php
include("footer.php");
?>