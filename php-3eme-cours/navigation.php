<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h1>Navigation</h1>
	</header>
	<ul>
		<li><a href="navigation.php?page=1">Home</a></li>
		<li><a href="navigation.php?page=2">Présentation</a></li>
		<li><a href="navigation.php?page=3">Contact</a></li>
	</ul>
	<main>
		<?php
			if(isset($_GET['page'])){
				if($_GET['page']==1){
					//print "<p>Page ".$_GET['page']."</p>";
					include_once('./pres.html');
				}
				if($_GET['page']==2){
					print "<p>Page ".$_GET['page']."</p>";
					
				}
				if($_GET['page']==3){
					//print "<p>Page ".$_GET['page']."</p>";
					include_once('./formulaire.php');
				}
				else if($_GET['page']>3){
					print "<p>Page erreur</p>";
				}
			}
			else{
				include_once('./pres.html');
			}
		?>
	</main>
	
</body>
</html>