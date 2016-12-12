

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
					<td><?php //echo  $infosPraticien['PRA_NUM'] ?></td>
					<td><?php //echo $infosPraticien['PRA_NOM'] ?></td>
					<td><?php //echo  $infosPraticien['PRA_PRENOM'] ?></td>
					<td><?php //echo  $infosPraticien['PRA_ADRESSE'] ?></td>
					<td><?php //echo  $infosPraticien['PRA_CP'] ?></td>
					<td><?php //echo  $infosPraticien['PRA_VILLE'] ?></td>
					<td><?php //echo  $infosPraticien['PRA_COEFNOTORIETE'] ?></td>
					<td><?php //echo  $infosPraticien['TYP_CODE'] ?></td>
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
                <input type="text" size="10" name="TYP_LIBELLE" class="zone" value = <?php echo  $infosPraticien['TYP_LIBELLE'] ?>  disabled />
                <label class="titre">Lieu :</label>
                <input type="text" size="10" name="TYP_LIEU" class="zone" value = <?php echo  $infosPraticien['TYP_LIEU'] ?>  disabled />

					    <?php foreach($lesDiplomes as $unDiplome) {
					    	?>

					    	
					    	 <label class="titre">Diplôme :</label>
					    	<input type="text" size="25" name="POS_DIPLOME" class="zone" value = <?php echo  $unDiplome['POS_DIPLOME'] ?>  disabled />
					    	<label class="titre">Spécialité :</label>
					    	 <input type="text" size="50" name="SPE_LIBELLE" class="zone" value = <?php echo  $unDiplome['SPE_LIBELLE'] ?>  disabled />
					    	 <label class="titre">Coefficient de prescription :</label>
					    	 <input type="text" size="10" name="POS_COEFPRESCRIPTION" class="zone" value = <?php echo  $unDiplome['POS_COEFPRESCRIPTION'] ?>  disabled />
							
							<br><br>
					  <?php  }
					    ?>
		   </form>


    </div>
</div>