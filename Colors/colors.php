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
			<h2>COLOR<br><a href="addColor.php" class="buttonAdd">+ Add</a></h2>
				
			<?php
				$colors= 'select id, name FROM color order by id';
						
						$req3 = mysqli_query($connect,$colors);
						//var_dump ($req);   ?>
			
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Actions</th>
						</tr>				
					</thead>
						
					<tbody>
						
				<?php while ($result = mysqli_fetch_array($req3)){
							//var_dump ($result);
  						//for ($i=0; $i < count($result) ; $i++) { ?>
 
  						<tr>
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td width=200>
								<a class="btn-update" href="updateColor.php">Modify</a>
								
								<a class="btn-delete" href="deleteColor.php?id=<?php echo $result['color.id']; ?>">Delete</a>
							</td>
						
						</tr>
						
					</tbody>

				<?php } ?>	
					
			</table>
				
		</div>
								
	</div>
    
    
</body>
    
    
</html>