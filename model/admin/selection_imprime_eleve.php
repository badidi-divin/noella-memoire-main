<?php

			
				$req="SELECT * FROM parent";

			$ps=$pdo->prepare($req);
			$ps->execute();
			