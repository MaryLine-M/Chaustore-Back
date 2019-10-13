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
		
		<?php require_once '../menuHead.php'?>
	
		<div class=list>
			<h2>BRAND<br><a href="addBrands.php" class="buttonAdd">+ Add</a></h2>
				
			<?php
				$brands= 'select id, name, logo
						FROM brand order by id';
				$req1 = mysqli_query($connect,$brands); 
				//var_dump ($req); ?>
			
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Logo</th>
							<th>Actions</th>
						</tr>				
					</thead>
						
					<tbody>
						
						<?php while ($result = mysqli_fetch_array($req1)){ ?>
							
            			<tr>
							<td><?php echo $result['id'];?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['logo'];?></td>
							<td width=200>
								<a class="btn-update" href="updateBrands.php">Modify</a>
								
								<a class="btn-delete" href="deleteBrands.php?=id<?php echo $result['brand.id'];?>">Delete</a>
							</td>
						</tr>
						
					</tbody>
					
				<?php } ?>
			
			</table>
				
		</div>
								
	</div>
    
</body>
    
    
</html>