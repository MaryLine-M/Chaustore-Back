<?php require_once '../connect.php';?>



<!DOCTYPE html>

<html lang="fr">


<head>

    	<meta charset="utf-8">

		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">

    	<link href="../shoes.css" rel="stylesheet" type="text/css">

    <title>CHAUSTORE Espace Administrateur - Shoes</title>

</head>

<body>
    
	<div class="container site">
		
		<?php require_once '../menuHead.php' ?>
	
		<div class=list>
			<h2>SHOE<br><a href="addShoes.php" class="buttonAdd"> + Add</a></h2>
			
			<?php
				$shoes2 = "SELECT category.name as category, product.id, brand.name AS brand, color.name AS color, product.image, product.price, product.gender, product.name FROM product INNER JOIN brand ON product.brand_id = brand.id INNER JOIN color ON product.color_id = color.id INNER JOIN category ON product.category_id = category.id ORDER  BY id";
					
		/*$shoes= 'select id, name, brand, price, gender FROM product order by id';*/
						
			$req = mysqli_query($connect,$shoes2); ?>
				
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Produits</th>
							<th>Marque</th>			
							<th>Price</th>
							<th>Gender</th>
							<th>Actions</th>
						</tr>				
					</thead>
						
					<tbody>	

			<?php while ($result = mysqli_fetch_array($req)){ ?>
							
						<tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['brand'];?></td>
							<td><?php echo $result['price'];?></td>
							<td><?php echo $result['gender'];?></td>
							<td width=300>
								<a class="btn-view" title="voir le produit" href="viewShoes.php">See product</a>
								
								<a class="btn-update" title="modifier" href="updateShoes.php?id=<?php echo $result['product.id'];?>">Modify</a>
								
								<a class="btn-delete" href="deleteShoes.php?id=<?php echo $result['product.id'];?>">Delete</a>
							</td>
						</tr>
				
					</tbody>
					
				<?php }?>
				
			</table>
				
		</div>
								
	</div>
    
     
</body>
    
    
</html>





