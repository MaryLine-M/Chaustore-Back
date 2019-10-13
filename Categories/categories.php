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
			<h2>CATEGORY<br><a href="addCategory.php" class="buttonAdd">+ Add</a></h2>
				
				<?php
					$category= 'select id, name FROM category order by id';
						
					$req2 = mysqli_query($connect,$category);
					//var_dump ($req); ?>
			
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Actions</th>
						</tr>				
					</thead>
						
					<tbody>
							
				<?php while ($result = mysqli_fetch_array($req2)){ ?>
 
            			<tr>
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td width=200>
								<a class="btn-update" href="updateCategory.php">Modify</a>
								
								<a class="btn-delete" href="deleteCategory.php?id=<?php echo $result['category.id']; ?>">Delete</a>
							</td>
						</tr>
					
					</tbody>
				
				<?php } ?>
			
			</table>
				
		</div>
								
	</div>
    
    
</body>
    
    
</html>