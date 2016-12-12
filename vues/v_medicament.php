

    <div id="droite">
	   
        <div id="bas">
		 <h1>Les médicaments </h1>
             <form name="formListeRecherche" method="post">
                <select name="lstMed" id="MedicamentL" class="titre" onChange=" document.location.href='index.php?uc=MenuVisiteur&action=medicament&num='+this.value+''; ">
                    <option>Choisissez un médicament</option>
                   <?php 
                 
                  
					foreach($lesmedicaments as $unmedicament){
					?> <option value=<?php echo $unmedicament['MED_DEPOTLEGAL'] ?> <?php if((isset($lemedicament ) and $unmedicament['MED_DEPOTLEGAL']== $lemedicament) or (isset($_GET['num']) && ($_GET['num'] == $unmedicament['MED_DEPOTLEGAL']))  ) { echo "selected";}?> ><?php echo $unmedicament['MED_NOMCOMMERCIAL'] ?></option><?php
					}
                   ?>
                </select>
            </form>
			
