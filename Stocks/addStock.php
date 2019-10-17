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
	
		<h2>Ajouter du stock</h2>
	
			<?php
					
			if(!empty($_POST)){
				
				$stock = checkInput($_POST['stock']);
								
				$req = "INSERT INTO stock (stock) VALUES ('$stock')";
				$insert = mysqli_query($connect, $req);
		
				if ($insert){
					header("Location: stocks.php");
				} else {
				echo '<p class="alert"> Une erreur est survenue impossible de créer cet élément</p>';
				}
			}
		
			?>
				
			<form class="" role="form" action="addStock.php?addsuccess=1" method="post">
				
				<label for="stock">Stock</label>
				<input type="number" id="stock" autocomplete="off" name="stock" placeholder="stock" value="">
								
					<p class="alert">Êtes-vous sûr de vouloir ajouter ce stock ?</p>
				
						<button type="submit" class="buttonAdd">VALIDER</button>
						<a class="btn-view" href="stocks.php">RETOUR</a>
			
			</form>
		
		</div>
		
	</div>
	
</body>

	
</html>