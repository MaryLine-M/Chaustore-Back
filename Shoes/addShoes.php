<?php

require_once '../connect.php';

		/*$name = checkInput $_POST[''];
		$category = checkInput $_POST[''];
		$brand = checkInput $_POST[''];
		$color = checkInput $_POST[''];
		$price = checkInput $_POST[''];
		$gender = checkInput $_POST[''];
*/
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
				<li><a href="shoes.php">Shoes</a></li>
				<li><a href="../Brands/brands.php">Brands</a></li>
				<li><a href="../Categories/categories.php" >Categories</a></li>
				<li><a href="../Colors/colors.php">Colors</a></li>
				<li><a href="../Sizes/sizes.php">Sizes</a></li>
				<li><a href="../Stocks/stocks.php">Stocks</a></li>
			</ul>
	</nav>
		
	</div>
	
	<div class=list>
	
		<h2>Ajouter un produit</h2>
	
		<?php
			
		if(empty($_POST)){
		
			if(!empty($_POST)){
				
			$req = "INSERT INTO product ('name', 'category', 'brand', 'color', 'gender', 'price') VALUES ('$name','$category', '$brand', '$color', '$gender', '$price')";
				$sup = mysqli_query($connect, $req);
		
		if ($sup){
			header("Location: shoes.php");
		} else {
			echo '<p class="alert"> Une erreur est survenue impossible de créer cet élément</p>';
			}
		}
	?>
				
			<form class="" role="form" action="addShoes.php" method="post" enctype="multipart/form-data">
				<!-- entype = pour upload des images -->
				
				<label for="name">Nom</label>
				<input type="text" id="name" name="name" placeholder="Nom" value="<?php echo ($name); ?>">
				
				<label for="category">Catégorie</label>
					<select  id="category" name="category" >
					<?php 
			$categoryreq = "SELECT name FROM category";
			$categorysend = mysqli_query($connect,$categoryreq);
			while($category = mysqli_fetch_array($categorysend)){
				echo "<option>$category[0]</option>";
			}
					?></select>
				
				<label for="brand">Marque</label>
				<input type="text" id="brand" name="brand" placeholder="Marque" value="<?php echo ($brand); ?>">
				
				<label for="color">Couleur</label>
				<input type="text" id="color" name="color" placeholder="Couleur" value="<?php echo ($color); ?>">
				
				<label for="gender">Type</label>
				<input type="text" id="gender" name="gender" placeholder="type" value="<?php echo ($gender); ?>">
				
				<label for="price">Prix en euros</label>
				<input type="number" step="0.01" id="price" name="price" placeholder="Prix" value="<?php echo ($price); ?>">
				
				<!--<label>Seléctionnez une image</label>
				<input type="file" id="image" placeholder="image" value="">-->
				
				
				<p class="alert">Êtes-vous sûr de vouloir créer ce produit ?</p>
				
					<button type="submit" class="buttonAdd">VALIDER</button>
					<a class="btn-view" href="shoes.php">RETOUR</a>
			
			</form>
	
	<?php } ?>
	
	</div>
	
	
</body>

	
</html>

	