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
			<h2>COLOR<br><a href="addShoes.php" class="buttonAdd">+ Add</a></h2>
				
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Actions</th>
						</tr>				
					</thead>
						
					<tbody>
						<?php
						
					
						$colors= 'select id, name
						FROM color order by id';
						
						$req3 = mysqli_query($connect,$colors);

					
						//var_dump ($req);

						
						while ($result = mysqli_fetch_array($req3)){
							//var_dump ($result);
  						//for ($i=0; $i < count($result) ; $i++) {
 
  						
            			echo "<tr>";
							echo "<td> {$result['id']} </td>";								echo "<td> {$result['name']} </td>";
							
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