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
		
		<div class="list">
			
			<?php 
				if(!empty($_GET['id'])){

				$id = checkInput($_GET['id']);
				}

				if(!empty($_POST)){
					$id = checkInput($_POST['id']);
					$req = "DELETE FROM product WHERE id = $id";
					$sup = mysqli_query($connect, $req);
		
					if ($sup){
						header("Location: shoes.php");
					} else {
						echo '<p class="alert"> Une erreur est survenue impossible de supprimer cet élément</p>';}
				}
			?>
				
			<form class="" role="form" action="deleteShoes.php" method="post">
				
				<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				
				<p class="alert">Êtes-vous sûr de vouloir supprimer ce produit ?</p>
				
					<button type="submit" class="btn-delete">OUI</button>
					<a class="btn-view" href="shoes.php">NON</a>
			
			</form>
	
		</div>
			
	</div>
	
</body>

	
</html>

	