<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		header{
            padding-top: 0px;
	        height: 120px;
	        background-color: #83C5BE;
        }
        
        .header-logo{
    	    padding-top: 15px;
        	float: left;
	        cursor:pointer;
        }

        .header-boutons{
    	    margin-left: 10px;
	        padding-top: 65px;
	        float: left;
        }

        .monBouton{
    	    text-decoration: none;
	        background-color: #F28F3B;
	        color:white;
    	    border-radius: 30px;
	        padding: 15px 40px;
	        margin: 0px 20px;
        }

        .monBouton:hover{
	        background-color: #C8553D;
        }

        .header-right{
	        padding-top: 75px;
	        float: right;
        }

        .header-right a{
	        margin-right: 10px;
        }
	</style>

</head>
<body>

	<header>
		<div class="header-logo">
			<a href="#"><img src="logo.png" alt="logo"></a>
		</div>

		<div class="header-boutons">
			<a href="#" class="monBouton">Accueil</a>
			<a href="#" class="monBouton">Tout parcourir</a>
			<a href="#" class="monBouton">Notifications</a>
		</div>

		<div class="header-right">
			<a href="#"><img src="profil.png" alt="profil"></a>
			<a href="#"><img src="panier.png" alt="panier"></a>
			<a href="#"><img src="deconnexion.png" alt="deconnexion"></a>
		</div>
	</header>

</body>
</html>