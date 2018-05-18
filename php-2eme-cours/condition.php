<?php
	const titre="Cours php : les conditions";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php print titre ?></title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<header>
		<h1><?php print titre ?></h1>
	</header>
	<?php
	//init
	$login="admin";
	$mdp=2018;
	$etat=true;
	//condition
	if($login && $mdp || $etat){
		echo "<p>Votre login est : ".$login."<br>
		Votre mot de passe est : ".$mdp."</p>";
	}
	else{
		print "<p>Erreur de login ou mdp</p>";
	}
	function user($nom){
		return "<p>Bonjour ".$nom."</p>";
	}
	print user($login);
	function calc(){
		$a=10;
		$b=5;
		if($a>$b){
			echo "<p>Oui a est sup à : ".$b."</p>";
		}
	}
	$result=calc();
	?>
</body>
</html>