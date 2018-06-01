<?php
/*$str="<p><html>&amp;</p>";
print htmlentities($str);
*/function traitement(){
	if(isset($_POST['mail']) && isset($_POST['civilite']) && isset($_POST['pays'])){
		//passer les variables et les réinitailser
		$mail=$_POST['mail'];
		$civilite=$_POST['civilite'];
		$pays=$_POST['pays'];
		//tester les champs
		if(!$mail){
			print '<p class="msg-warning">Mail obligatoires!!!</p>';
		}
		else if(strlen($mail)>20){//méthode pour le nombre de caractères
			print '<p class="msg-warning">Mail trop de caractères!!!</p>';
		}
		else if(is_numeric($mail)){//méthode pour vérifier qu'il s'agit bien d'une chaine
			print '<p class="msg-warning">Pas de chiffres</p>';
		}
		else if(!$civilite){
			print '<p class="msg-warning">Civilité obligatoires!!!</p>';
		}
		else if(!$pays){
			print '<p class="msg-warning">Civilité obligatoires!!!</p>';
		}
		
		else{
			//stocker les variables dans un tableau
			$user_push=[$mail,$civilite,$pays];
			print '<p class="msg-success">Bonjour '.$_SESSION['nom']=$mail.'<br>';
			$user=array_merge($user_push);
			foreach($user as $cle => $valeur){
				echo ($cle+1)." : ".htmlentities($valeur)."<br>";
			}
			print "</p>";

			
		}
		//print_r($user);
		//afficher
	}
}
?>