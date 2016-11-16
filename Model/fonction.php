
<?php
public function Findcollaborateur($id,$pass)
	{
		
		$trouver = false;
		
		$req = "SELECT VIS_MATRICULE, MDP, CODE_REG FROM collaborateur ";
				$res = PdoLafleur::$monPdo->query($req);
				$rep = $res->fetchAll(); 
				foreach($rep as $unAdmin){
					
					if ($unAdmin['mdp'] == $pass and $unAdmin['nom'] == $id){
						$trouver=true;
					}
				}
				
		return $trouver;
	}

	?>