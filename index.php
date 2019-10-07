<?php



function verifyInput ($var){
	$var = trim($var);
	$var = stripcslashes($var);
	$var = htmlspecialchars($var);
	return $var;
}

?>



<!DOCTYPE html>

<html lang="fr">


<head>

    <meta charset="utf-8">


		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">



    	<link href="shoes.css" rel="stylesheet" type="text/css">

    <title>CHAUSTORE connexion</title>

</head>

<body>
    
	<div class="container site">
		<h1>CHAUSTORE</h1>
			
	
		<div class=list>
			
			
<?php
		
			if(!empty($_POST)){
				$error = '';
		  
		
			
			if (empty($_POST['username']))
			{
			$error = '<p class="alert">Vous devez indiquer votre nom utilisateur</p>';
			echo $error;
			}
					
			if(empty($_POST['password']))
			{
			$error = '<p class="alert">Vous devez entrer votre mot de passe</p>';
			echo $error;
			}

		}
			
$user ='Mary';
$pwd ='Admin1';
			
						
		if (!empty($_POST) && empty($error)) {

		if ($user == $_POST['username'] && $pwd == $_POST['password']) {

			session_start ();

			$_SESSION['username'] = verifyInput ($_POST['username']);
			$_SESSION['password'] = verifyInput ($_POST['password']);
			
			

		// on redirige le visiteur vers la page de notre section admin
			header('location: Home.php');
			
			
		}
	else {
		$message = '<p class="alert">Nom utilisateur ou mot de passe incorrect</p>';
		echo $message;
	}

}
					
			
/*$req = "insert into `user' (`name`, `password`) values ('$username', '$password');";*/

	
?>
			
	<?php if(empty($_POST) || !empty($error) || !empty($message)){ ?>
				
		<form method="POST" action="index.php" role="form">
			
			<h2>Connectez-vous pour accéder à l'espace de gestion</h2>
    
			<p>
				<label for="Username"> Nom administrateur *</label>
					
					<input type="text" name="username" placeholder="Nom utilisateur" value="<?php if(!empty($_POST['username']))
					echo $_POST['username'];?>"/>
			</p>
  
			<p>
				<label for="Password">Votre mot de passe *</label>

					<input type="password" id="password" name="password" placeholder="Mot de passe" value="<?php if(!empty($_POST['password']))
            		echo $_POST['password'];?>"/>
   			</p>
					
			<p class="alert">* Champs obligatoires</p>
    
				<input type="submit" name="submit" value="Connexion">
  			
		</form>
			
	<?php
		}
		?>
				
				
		</div>
								
	</div>
    
   
    
</body>
    
    
</html>