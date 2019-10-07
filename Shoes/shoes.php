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
				
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Produits</th>
							<th>Marque</th>							<th>Price</th>
							<th>Gender</th>							<th>Actions</th>
						</tr>				
					</thead>
						
					<tbody>
						<?php
						
	
					$shoes2 = "SELECT category.name as category, product.id, brand.name AS brand, color.name AS color, product.image, product.price, product.gender, product.name FROM product INNER JOIN brand ON product.brand_id = brand.id INNER JOIN color ON product.color_id = color.id INNER JOIN category ON product.category_id = category.id ORDER  BY brand";
					
						/*$shoes= 'select id, name, brand, price, gender
						FROM product order by id';*/
						
						$req = mysqli_query($connect,$shoes2);

					
						//var_dump ($req);

						
						while ($result = mysqli_fetch_array($req)){
							//var_dump ($result);
  						//for ($i=0; $i < count($result) ; $i++) {
 
  						
            			echo "<tr>";
							echo "<td> {$result['id']} </td>";				
							echo "<td> {$result['name']} </td>";
							echo "<td> {$result['brand']} </td>";
							echo "<td> {$result['price']} </td>";
							echo "<td> {$result['gender']} </td>";
						
							
							echo "<td width=300>";
								echo '<a class="btn-view" href="viewShoes.php">See product</a>';
							echo ' ';
								echo '<a class="btn-update" href="updateShoes.php">Modify</a>';
							echo ' ';
								echo '<a class="btn-delete" href="deleteShoes.php">Delete</a>';
							echo "</td>";
						
						echo "</tr>";
							
						
						}
						
							   
				?>
					</tbody>
				
						</table>
				
				
				
			</div>
								
	</div>
    
   
    
</body>
    
    
</html>





