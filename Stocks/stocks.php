
<?php require_once '../connect.php';?>



<!DOCTYPE html>

<html lang="fr">


<head>

		<meta charset="utf-8">

		<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">

    	<link href="../shoes.css" rel="stylesheet" type="text/css">

	<title>CHAUSTORE Espace Administrateur</title>
	
</head>

<body>
    
	<div class="container site">
		
		<?php require_once '../menuHead.php' ?>
	
		<div class=list>
			<h2>STOCK<br><a href="addStock.php" class="buttonAdd">+ Add</a></h2>
			
			<?php require_once '../successAlert.php' ?>
				
			<?php
				/*$stocks= 'select product.name, size.name, stock FROM stock INNER JOIN product ON stock.product_id = product_id INNER JOIN size ON stock.size_id = size_id ORDER by product_id';*/
						
				$stocks= 'select product.name, size.name, stock FROM stock INNER JOIN product ON product_id = product.name INNER JOIN size ON size_id = size.name ORDER by product_id';
						
				$req5 = mysqli_query($connect,$stocks);
						//var_dump ($req5); ?>

			
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
						
						<?php while ($result = mysqli_fetch_array($req5)){
							//var_dump ($result);
  						//for ($i=0; $i < count($result) ; $i++) { ?>
 
  						
            			<tr>
							<td><?php echo $result['product.id']; ?></td>
							<td><?php echo $result['size.id']; ?></td>
							<td><?php echo $result['stock']; ?> </td>
							<td width=200>";
								<a class="btn-update" href="updateStock.php?id=<?php echo $result['id']; ?>">Modify</a>
								
								<a class="btn-delete" href="deleteStock.php?id=<?php echo $result['stock.id']; ?>">Delete</a>
							</td>
						
						</tr>
							
					</tbody>
				
				<?php } ?>
					
			</table>
				
		</div>
								
	</div>
    
    
</body>
    
    
</html>