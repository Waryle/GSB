<div id="droite">
    <div id="bas">
        <h1> Praticiens </h1>
			<p> Choisissez un praticien dans la liste : <p>
			<p>
				<form name="formListeRecherche" method="POST" action="index.php?uc=Menu&action=praticiens">
					<select name="listePraticiens" class="titre">
						<?php
							$indice = -1 ;
							foreach($lesPraticiens as $praticien) {
								$indice++ ;
								//Fonction qui permet de garder le focus de la liste sur la personne sélectionnée
								if(isset($_POST['listePraticiens']) && $_POST['listePraticiens'] == $indice) {
									echo "<option value='".$indice."' selected>".$praticien['PRA_NOM']." ".$praticien['PRA_PRENOM']."</option>" ;
								} else {
									echo "<option value='".$indice."'>".$praticien['PRA_NOM']." ".$praticien['PRA_PRENOM']."</option>" ;
								}
							}
						?>
					</select>
					<input type="submit" value="Valider" />
				</form>
				<form id="formPraticien">
				</form>
			</p>


<?php
	if(isset($_POST['listePraticiens'])) {
		$infosPraticien = $lesPraticiens[$_POST['listePraticiens']] ;
		
		echo "
			<table class='tableau'>
				<tr>
					<td> Numéro </td>
					<td> Nom </td>
					<td> Prénom </td>
					<td> Adresse </td>
					<td> Code Postal </td>
					<td> Ville </td>
					<td> Coefficient de notoriété </td>
					<td> Code type </td>
				</tr>
				<tr>
					<td>". $infosPraticien['PRA_NUM'] ."</td>
					<td>". $infosPraticien['PRA_NOM'] ."</td>
					<td>". $infosPraticien['PRA_PRENOM'] ."</td>
					<td>". $infosPraticien['PRA_ADRESSE'] ."</td>
					<td>". $infosPraticien['PRA_CP'] ."</td>
					<td>". $infosPraticien['PRA_VILLE'] ."</td>
					<td>". $infosPraticien['PRA_COEFNOTORIETE'] ."</td>
					<td>". $infosPraticien['TYP_CODE'] ."</td>
				</tr>
			</table>
			
		" ;
	}
?>

    </div>
</div>