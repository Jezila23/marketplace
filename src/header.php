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
			<a href="#">
			<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    		<path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z" />
			</svg>
			</a>
			<a href="#"><img src="panier.png" alt="panier"></a>
			<a href="#"><img src="deconnexion.png" alt="deconnexion"></a>
		</div>
	</header>

</body>
</html>