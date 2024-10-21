<?php
 		$mc="";
		 
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM parent WHERE code_parent LIKE '%$mc%'";
			}
			else
			{
				$req="SELECT * FROM parent";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
			