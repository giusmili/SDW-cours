<?php
	const titre="Cours php : les formulaires";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php print titre ?></title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		figure{
			width: 400px;
			margin:10px auto;
			text-align: center;
		}
		figure img{
			display: inline-block;
		}
		figure h2{
			width: auto;
		}
		figure h2:before,figure h2:after{
			content:'';
			border:0;
		}
		form{
			width: 700px;
			margin:0 auto;
			padding: 8px;
		}
		form input{
			display: block;
			line-height: 35px;
			padding:5px;
			width: 100%;
			margin-bottom:5px;
			border: solid 1px #ccc;
		}
		form input[type="submit"]{
			background: rgba(0,150,0,0.9);
			font-size: 1rem;
			text-align: center;
			color:#fafafa;
			border:0;
		}
		[placeholder]{
			font-size: 1rem;
			font-style: italic;
		}
		.warning{
			background: rgba(200,0,0,0.9);
			color: #fafafa;
			border:0;
		}
	</style>
</head>
<body>
	<header>
		<h1><?php print titre ?></h1>
	</header>
	<main>
		<figure>
			<img src="../asset/secret.png" alt="secret">
			<figcaption>
				<h2>Saissez votre code secret?</h2>
			</figcaption>
		</figure>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<input type="password" name="code" placeholder="votre code secret" aria-required="true" autofocus="true">
		<input type="submit" value="Envoyer">
			
		</form>
		<?php
			include_once('./secret.php');
		?>
	</main>
</body>
</html>