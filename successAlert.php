	<?php
		if(!empty($_GET['addsuccess']) AND $_GET['addsuccess']==1){ ?>
			<p class="alert">L'ajout a bien été effectué</p>
		<?php } ?>

	<?php
		if(!empty($_GET['delsuccess']) AND $_GET['delsuccess']==1){ ?>
			<p class="alert">La suppression a bien été effectuée</p>
		<?php } ?>


	<?php
		if(!empty($_GET['updsuccess']) AND $_GET['updsuccess']==1){ ?>
			<p class="alert">La modification a bien été effectuée</p>
		<?php } ?>