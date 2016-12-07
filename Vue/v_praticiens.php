<div id="droite">
    <div id="bas">
        <h1> Praticiens </h1>
			<p> Choisissez un praticien dans la liste : <p>
			<p>
				<form name="formListeRecherche" method="POST" action="index.php?uc=MenuVisiteur&action=praticiens">
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
				
			</p>


<?php
	if(isset($_POST['listePraticiens'])) {
		$infosPraticien = $lesPraticiens[$_POST['listePraticiens']] ;
		

	
	?>
		
			<!--<table class='tableau'>
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
					<td><?php echo  $infosPraticien['PRA_NUM'] ?></td>
					<td><?php echo $infosPraticien['PRA_NOM'] ?></td>
					<td><?php echo  $infosPraticien['PRA_PRENOM'] ?></td>
					<td><?php echo  $infosPraticien['PRA_ADRESSE'] ?></td>
					<td><?php echo  $infosPraticien['PRA_CP'] ?></td>
					<td><?php echo  $infosPraticien['PRA_VILLE'] ?></td>
					<td><?php echo  $infosPraticien['PRA_COEFNOTORIETE'] ?></td>
					<td><?php echo  $infosPraticien['TYP_CODE'] ?></td>
				</tr>
			</table>-->
		<form id="formpratic">

                <h1> Particiens </h1>
                <label class="titre">Numéro :</label>
                <input type="text" size="10" name="NUM" class="zone" value = <?php echo  $infosPraticien['PRA_NUM'] ?> disabled  />
                <label class="titre">Nom :</label>
                <input type="text" size="20" name="NOM" class="zone" value = <?php echo $infosPraticien['PRA_NOM'] ?> disabled  />
                <label class="titre">Prénom :</label>
                <input type="text" size="20" name="PRENOM" class="zone" value = <?php echo  $infosPraticien['PRA_PRENOM'] ?> disabled />
                <label class="titre">Adresse :</label>
                <textarea rows="3" cols="50" name="ADRESSE" class="zone" disabled ><?php echo  $infosPraticien['PRA_ADRESSE'] ?> </textarea>
                <label class="titre">Code Postal :</label>
                <input type ="text "size="7" name="CP" class="zone"  value = <?php echo  $infosPraticien['PRA_CP'] ?> disabled />
                <label class="titre">Ville :</label>
                <input type ="text "size="25" name="VILLE" class="zone"  disabled value =<?php echo $infosPraticien['PRA_VILLE'] ?> />
                <label class="titre">Coefficient de notoriété :</label>
                <input type="text" size="7" name="COEFF_NOTORIETE" class="zone" value = <?php echo $infosPraticien['PRA_COEFNOTORIETE'] ?>  disabled />
                <label class="titre">Type :</label>
                <input type="text" size="10" name="CODE_TYPE" class="zone" value = <?php echo  $infosPraticien['TYP_LIBELLE'] ?>  disabled />
                 <label class="titre">Lieu :</label>
                <input type="text" size="10" name="CODE_TYPE" class="zone" value = <?php echo  $infosPraticien['TYP_LIEU'] ?>  disabled />
                <label class="titre">&nbsp;</label>
              
					       
		   </form>
			
		<?php
	}
?>

    </div>
</div>


