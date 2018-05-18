<?php
	const titre="Cours php : les requêtes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php print titre ?></title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		img{
			vertical-align: middle;
			margin-right:5px;
		}
		.warning{
			background: red;
			color: #fafafa;
		}
		section{
			text-align: center;
		}
		section a{
			text-decoration: none;
			display: inline-block;
			background: #ccc;
			line-height: 35px;
			width: auto;
			padding: 10px;
			text-align: center;
			border-radius:4px;
			margin-right: 4px;
			color: #fff;
		}
	</style>
</head>
<body>
	<header>
		<h1><?php print titre ?></h1>
	</header>
	<main>
	<section>
		<a href="requete.php?civilite=femme">Vous êtes une femme?</a>
		<a href="requete.php?civilite=homme">Vous êtes une homme?</a>
	</section>
		<?php
			if(isset($_GET['civilite'])){
				$civ=$_GET['civilite'];
				if($civ=="femme"){
					echo '<p><img src="asset/woman.png" alt="">Vous êtes une '.$civ.'</p>';
				}
				else{
					echo '<p><img src="asset/man.png" alt="">
					Vous êtes un '.$civ.'</p>';
				}
			}
			else{
				echo '<p class="warning">erreur de requete</p>';
			}
		?>
	</main>
</body>
</html>