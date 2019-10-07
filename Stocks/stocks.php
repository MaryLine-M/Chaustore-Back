
<?php require_once '../connect.php';?>



<!DOCTYPE html>

<html lang="fr">


<head>

    <meta charset="utf-8">


		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">



    	<link href="../shoes.css" rel="stylesheet" type="text/css">

    <title>CHAUSTORE</title>

</head>

<body>
    
	<div class="container site">
		
		<?php require_once '../menuHead.php' ?>
	
		<div class=list>
			<h2>STOCK<br><a href="addShoes.php" class="buttonAdd">+ Add</a></h2>
				
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Size</th>
							<th>Stock</th>
							<th>Actions</th>
						</tr>				
					</thead>
						
					<tbody>
						<?php
						
							/*$stocks= 'select product.name, size.name, stock FROM stock INNER JOIN product ON stock.product_id = product_id INNER JOIN size ON stock.size_id = size_id ORDER by product_id';*/
						
						
						$stocks= 'select product.name, size.name, stock FROM stock INNER JOIN product ON product_id = product.name INNER JOIN size ON size_id = size.name ORDER by product_id';
						
						$req5 = mysqli_query($connect,$stocks);

					
						//var_dump ($req5);

						
						while ($result = mysqli_fetch_array($req5)){
							//var_dump ($result);
  						//for ($i=0; $i < count($result) ; $i++) {
 
  						
            			echo "<tr>";
							echo "<td> {$result['product.id']} </td>";
							echo "<td> {$result['size.id']} </td>";
							echo "<td> {$result['stock']} </td>";

							echo "<td width=200>";
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