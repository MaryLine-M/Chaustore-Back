<!--
select * from product  where id_product = $_get['id'];

$produit // tableau associatif

--- > input : value " echo $produit ['nom']?>"

!!! champs input hidden comme pour delete pour recuperer id

select
option value="php echo $color['']? if>"

--------------- comme pour ajout liste des couleurs

option

if($produit['id_color'-->


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
			<h2>Modifier un produit</h2>
			
			<?php 
				if(!empty($_GET['id'])){
					
				$id = checkInput($_GET['id']);
				}

					if(!empty($_POST)){
						$id = checkInput($_POST['id']);
						$req = " FROM color WHERE id = $id";
		
						$sup = mysqli_query($connect, $req);
		
					if ($sup){
						header("Location: colors.php?updsuccess=1");
					} else {
						echo '<p class="alert"> Une erreur est survenue impossible de supprimer cet élément</p>';}
				}
			?>
				
			<form class="" role="form" action="updateColor.php" method="post">
				
				<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				
				<p class="alert">Êtes-vous sûr de vouloir modifier cette couleur ?</p>
				
					<button type="submit" class="btn-delete">Valider</button>
					<a class="btn-view" href="colors.php">Retour</a>
			
			</form>
	
		</div>
			
	</div>
	
</body>

	
</html>

	