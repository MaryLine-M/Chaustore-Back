<?php

require_once '../connect.php';

		/*$name = checkInput $_POST['name'];*/

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
		<h1>CHAUSTORE</h1>
		
		
	<nav>
			<ul>
				<li><a href="../Shoes/shoes.php">Shoes</a></li>
				<li><a href="../Brands/brands.php">Brands</a></li>
				<li><a href="../Categories/categories.php" >Categories</a></li>
				<li><a href="colors.php">Colors</a></li>
				<li><a href="../Sizes/sizes.php">Sizes</a></li>
				<li><a href="../Stocks/stocks.php">Stocks</a></li>
			</ul>
	</nav>
		
	</div>
	
	<div class=list>
	
		<h2>Ajouter une couleur</h2>
	
		<?php
			
		if(empty($_POST)){
		
			if(!empty($_POST)){
				
			$req = "INSERT INTO color ('name') VALUES ('$name')";
				$sup = mysqli_query($connect, $req);
		
		if ($sup){
			header("Location: Colors.php");
		} else {
			echo '<p class="alert"> Une erreur est survenue impossible de créer cet élément</p>';
			}
		}
	?>
				
			<form class="" role="form" action="addcolor.php" method="post">
				
				<label for="name">Nom</label>
				<input type="text" id="name" autocomplete="off" name="name" placeholder="Nom" value="<?php echo ($name); ?>">
								
				<p class="alert">Êtes-vous sûr de vouloir créer cette couleur ?</p>
				
					<button type="submit" class="buttonAdd">VALIDER</button>
					<a class="btn-view" href="colors.php">RETOUR</a>
			
			</form>
	
	<?php } ?>
	
	</div>
	
	
</body>

	
</html>
