<?php
	const titre="Cours php : les boucles";
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
		print "<h2> les boucles for</h2>";
		for($i=0; $i<10; $i++){
			echo "<br>Passage de i = ".($i+1);
		}
	?>
	<?php
		print "<h2> les boucles while</h2>";
		$i=0;
		while($i<10){
			$i++;
			echo "<br>Passage de i = ".$i;

		}
	?>
	<?php
		print "<h2> les boucles foreach</h2>";
		const table=["HTML","JS","Php",true];
		//print "<br>";
		//var_dump(table);
		print "<ul>";
		foreach (table as $key => $elements) {
			echo "<li>".($key+1)." : ".$elements."</li>";
		}
		print "</ul>";

	?>
	<?php
		print "<h2> les boucles foreach plus complexe</h2>";
		const user=array(
					"Nom"=>"Ledorf",
					"Prénom"=>"Rasmus",
					"Statut"=>"Ingénieur",
					"Lang"=>"PHP (php,HypertextProcessor)",
					"Date"=>1994
						);
		print "<ul>";
		foreach (user as $key => $value) {
				echo "<li>".$key." : ".$value."</li>";
		}
		print "</li>";
		print "</ul>";
	?>
	<?php
	print "<h2> les boucles foreach mixer 2 tableaux</h2>";
		$result=array_merge(user,table);
		print "<ul>";
		foreach ($result as $key => $mix) {
			echo "<li>".$key." : ".$mix."</li>";
		}
		print "</ul>";

	?>
</body>
</html>



