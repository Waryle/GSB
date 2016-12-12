
    <div id="droite">
        <div id="bas">
			<h2>Les rapports effectués</h2>
			<form name="ListeRapport" method="POST" action="index.php?uc=MenuVisiteur&action=consultation">
				<fieldset>
				<legend>Recherche des rapports</legend>
				<label class="titre">Date au plus tot :</label>
  				  <input type="date" size="10" name="DATETOT" class="zone" required/>
         
   				 <label class="titre">Date au plus tards :</label>
    			<input type="date" size="10" name="DATETARD" class="zone" required />
  				 <label class="titre">Practicien :</label>
    			<select name="PRA_NUM" class="zone" id="PRA_NUM"  >
					<option  selected value="">Choisissez un practicien</option>
           			 <?php 
					foreach($lespracticiens as $unpracticien){
					?> <option value=<?php echo $unpracticien['PRA_NUM'] ?>> <?php echo $unpracticien['PRA_NOM']  ?> </option> <?php
			} ?>   
	</select>

	</fieldset>
 <input type="submit"/>


   </div>
    </div>