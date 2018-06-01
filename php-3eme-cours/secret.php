<?php
	//print $_SERVER['PHP_SELF'];
		session_start();

		$_SESSION['code']=2018;
			if(isset($_POST['code'])){
				$myCode=$_POST['code'];
				if($myCode==$_SESSION['code']){
					echo "<p>Bravo votre code secret est  : ".md5($_SESSION['code'])."</p>";
				}
				else{
					echo '<p class="warning">Erreur de code</p>';
				}

			}
		session_destroy();

?>