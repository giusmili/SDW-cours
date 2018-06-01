<?php
session_start();
$_SESSION['nom']="";
const titre="Les formulaires";
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
	<meta charset="UTF-8">
	<title><?php print titre ?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<h1><?php print titre ?></h1>
</header>
<?php
	include_once('./traitement.php');
	$print=traitement();
?>
<form action="formulaire.php" method="post">
<label for="mail">Votre mail</label>
	<input type="email" placeholder="Votre mail" autofocus="true" name="mail" id="mail">
	Femme : <input type="radio" name="civilite" value="femme" checked="checked">
	Homme : <input type="radio" name="civilite" value="homme">
	<select name="pays" id="pays">
		<option value="">Votre Pays</option>
		<option value="France">France</option>
		<option value="Italie">Italie</option>
		<option value="Espagne">Espagne</option>
	</select>
	<input type="submit" value="Envoyer">
	
</form>
	
</body>
</html>
<?php
	session_destroy();
?>