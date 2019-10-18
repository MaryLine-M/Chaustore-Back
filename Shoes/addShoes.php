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
	
		<h2>Ajouter un produit</h2>
	
			<?php
		
			if(!empty($_POST)){
			
				$name = checkInput($_POST['name']);
				$category = checkInput($_POST['category']);
				$brand = checkInput($_POST['brand']);
				$color = checkInput($_POST['color']);
				$price = checkInput($_POST['price']);
				$gender = checkInput($_POST['gender']);
			
		
				if (empty($name)){
				echo "Ce champs ne peut pas être vide";	
				}
				
				if (empty($category)){}
				
				if (empty($brand)){}
					
				if (empty($color)){}
			
				if (empty($price)){
				echo "Ce champs ne peut pas être vide";
				}
			
				if (empty($gender)){
				echo "Ce champs ne peut pas être vide";
				}
				
				$req = "INSERT INTO product (name, category_id, brand_id, color_id, gender, price) VALUES ('$name','$category', '$brand', '$color', '$gender', '$price')";
				$add = mysqli_query($connect, $req);
			
				if ($add){
					header("Location: shoes.php?addsuccess=1");
				} else {
					echo '<p class="alert"> Une erreur est survenue impossible de créer cet élément</p>';
					}
				}
			?>
				
			<form class="" role="form" action="addShoes.php" method="post" autocomplete="off" enctype="multipart/form-data">
				<!-- entype = pour upload des images -->
				
			
				<label for="name">Nom</label>
				<input type="text" id="name" name="name" placeholder="Nom" value="">
				
				
				<label for="category">Catégorie</label>
				<select  id="category" name="category" >
					<?php 
						$categoryreq = "SELECT id, name FROM category";
						$categorysend = mysqli_query($connect,$categoryreq);
					
						while($category = mysqli_fetch_array($categorysend)){
					?>
							<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
					<?php } ?>
				</select>
				
				
				<label for="brand">Marque</label>
				<select  id="brand" name="brand" >
					<?php 
						$brandreq = "SELECT id, name FROM brand";
						$brandsend = mysqli_query($connect,$brandreq);
					
						while($brand = mysqli_fetch_array($brandsend)){
					?>
							<option value="<?php echo $brand['id']; ?>"><?php echo $brand['name']; ?></option>
							
					<?php } ?>
				</select>
				
				
				<label for="color">Couleur</label>
				<select  id="color" name="color">
					<?php 
						$colorreq = "SELECT id, name FROM color";
						$colorsend = mysqli_query($connect,$colorreq);
					
						while($color = mysqli_fetch_array($colorsend)){
					?>
							<option value="<?php echo $color['id']; ?>"><?php echo $color['name']; ?></option>
							
					<?php } ?>
				</select>
				
				<label for="gender">Type</label>
				<input type="text" id="gender" name="gender" placeholder="type" value="">
				
				<label for="price">Prix en euros</label>
				<input type="number" step="0.01" id="price" name="price" placeholder="Prix" value="">
				
				<!--<label>Seléctionnez une image</label>
				<input type="file" id="image" placeholder="image" value="">-->
				
					<p class="alert">Êtes-vous sûr de vouloir créer ce produit ?</p>
				
						<button type="submit" class="buttonAdd">VALIDER</button>
						<a class="btn-view" href="shoes.php">RETOUR</a>
			
			</form>
	
		</div>

	</div>
	
</body>

	
</html>

	