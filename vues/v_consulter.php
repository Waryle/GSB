
    <div id="droite">
        <div id="bas">
			<h2>Les rapports effectués</h2>
			<form name="ListeRapport" method="POST" action="index.php?uc=MenuVisiteur&action=consultation">
				<fieldset>
				<legend>Recherche des rapports</legend>
				<label class="titre">Date au plus tôt :</label>
  				  <input type="date" size="10" name="DATETOT" class="zone" required/>
         
   				 <label class="titre">Date au plus tard :</label>
    			<input type="date" size="10" name="DATETARD" class="zone" required />
  				 <label class="titre">Praticien :</label>
    			<select name="PRA_NUM" class="zone" id="PRA_NUM"  >
					<option  selected value="">Choisissez un praticien</option>
           			 <?php 
           			 
           			 if(isset($visiteur)){
					foreach($lesvisiteurs as $unvisiteur){
					?> <option value=<?php echo $unvisiteur['VIS_MATRICULE'] ?>> <?php echo $unvisiteur['VIS_NOM']." ".$unvisiteur['Vis_PRENOM']  ?> </option> <?php
			}   
			}else{
			foreach($lespracticiens as $unpracticien){
					?> <option value=<?php echo $unpracticien['PRA_NUM'] ?>> <?php echo $unpracticien['PRA_NOM']." ".$unpracticien['PRA_PRENOM']  ?> </option> <?php
			}   
			} ?>
	</select>

	</fieldset>
 <input type="submit"/>


   </div>
    </div>