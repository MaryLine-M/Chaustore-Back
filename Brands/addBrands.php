<?php require_once '../connect.php';

		function checkInput($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
?>


<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="utf-8">

		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">

    	<link href="../shoes.css" rel="stylesheet" type="text/css">

    <title>CHAUSTORE Espace administrateur</title>

</head>
	

<body>
    
	<div class="container site">
		
		<?php require_once '../menuHead.php'; ?>
	
	<div class=list>
	
		<h2>Ajouter une marque</h2>
	
			<?php
					
			if(!empty($_POST)){
				
				$name = checkInput($_POST['name']);
								
				$req = "INSERT INTO brand (name) VALUES ('$name')";
				$insert = mysqli_query($connect, $req);
		
				if ($insert){
					header("Location: brands.php");
				} else {
				echo '<p class="alert"> Une erreur est survenue impossible de créer cet élément</p>';
				}
			}
		
			?>
				
			<form class="" role="form" action="addBrands.php" method="post">
				
				<label for="name">Nom</label>
				<input type="text" id="name" autocomplete="off" name="name" placeholder="Nom" value="">
								
					<p class="alert">Êtes-vous sûr de vouloir créer cette marque ?</p>
				
						<button type="submit" class="buttonAdd">VALIDER</button>
						<a class="btn-view" href="brands.php">RETOUR</a>
			
			</form>
		
		</div>
		
	</div>
	
</body>

	
</html>