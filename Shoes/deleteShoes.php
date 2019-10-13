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
		
		<?php require_once '../menuHead.php';
	
	
	if (!empty($_GET['id'])){

		$id = $_GET['id'];
	
    	$req= "SELECT count(product.id) FROM product WHERE product.id = $id";
		$result = mysqli_query($connect, $req);
		$exist = mysqli_fetch_assoc($result);
		/*var_dump($exist['exist']);
		die ("OK");*/
		if ($exist['exist'] == 1){
		$sup = "DELETE FROM product WHERE product.id = $id";

		$result = mysqli_query($connect, $sup);
	
			if ($result === true){
				echo "La suppression a bien été effectuée";
	
			}else echo "La suppression n'a pas fonctionné";
		
		}else{
		echo "product doesn't exist";
		}
	
		
	}else{
		echo "La page demandée n'est pas accessible";
}

?>
		
	</div>
	
</body>

	
</html>

	