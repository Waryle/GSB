<div id="droite">
    <div id="bas">
        <h1> Praticiens </h1>
			<p> Choisissez un praticien dans la liste : <p>
			<p>
				<form name="formListeRecherche" method="POST" >
					<select name="listePraticiens" class="titre" onChange="document.location.href='index.php?uc=MenuVisiteur&action=praticiens&num='+this.value+''">
						<?php
							
							foreach($lesPraticiens as $praticien) {
								

								//Fonction qui permet de garder le focus de la liste sur la personne sélectionnée
								if((isset($_GET['num']) && ($_GET['num'] == $praticien['PRA_NUM'])) or (isset($pratnum) && $pratnum == $praticien['PRA_NUM'])) {
									echo "<option value='".$praticien['PRA_NUM']."' selected>".$praticien['PRA_NOM']." ".$praticien['PRA_PRENOM']."</option>" ;

								} else {
									echo "<option value='".$praticien['PRA_NUM']."'>".$praticien['PRA_NOM']." ".$praticien['PRA_PRENOM']."</option>" ;
								}
							}
						?>
					</select>
				<!--	<input type="submit" value="Valider" />-->
				</form>
				
			</p>

