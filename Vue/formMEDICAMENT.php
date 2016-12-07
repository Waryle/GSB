

    <div id="droite">
	   
        <div id="bas">
		 <h1>Les médicaments </h1>
             <form name="formListeRecherche" method="post">
                <select name="lstMed" id="MedicamentL" class="titre" onChange=" document.location.href='index.php?uc=MenuVisiteur&action=medicament&num='+this.value+''; ">
                    <option>Choisissez un médicaments</option>
                   <?php 
					foreach($lesmedicaments as $unmedicament){
					?> <option value=<?php echo $unmedicament['MED_DEPOTLEGAL'] ?>><?php echo $unmedicament['MED_NOMCOMMERCIAL'] ?></option><?php
					}
                   ?>
                </select>
            </form>
			<?php
			if(!empty($_GET['num'])){
				$res = $pdo->GetLemedicaments($_GET['num']);
				$pdo->Conversion($res['MED_PRIXECHANTILLON']);	
									
									?>
			<form id="formmedica">

                <h1> Pharmacopee </h1>
                <label class="titre">DEPOT LEGAL :</label>
                <input type="text" size="10" name="MED_DEPOTLEGAL" class="zone" value = <?php echo $res['MED_DEPOTLEGAL']?> disabled  />
                <label class="titre">NOM COMMERCIAL :</label>
                <input type="text" size="25" name="MED_NOMCOMMERCIAL" class="zone" value = <?php echo $res['MED_NOMCOMMERCIAL']?> disabled  />
                <label class="titre">FAMILLE :</label>
                <input type="text" size="3" name="FAM_CODE" class="zone" value = <?php echo $res['FAM_CODE']?> disabled />
                <label class="titre">COMPOSITION :</label>
                <textarea rows="5" cols="50" name="MED_COMPOSITION" class="zone" disabled ><?php echo $res['MED_COMPOSITION']?> </textarea>
                <label class="titre">EFFETS :</label>
                <textarea rows="5" cols="50" name="MED_EFFETS" class="zone" disabled ><?php echo $res['MED_EFFETS']?> </textarea>
                <label class="titre">CONTRE INDIC. :</label>
                <textarea rows="5" cols="50" name="MED_CONTREINDIC" class="zone"  disabled ><?php echo $res['MED_CONTREINDIC']?></textarea>
                <label class="titre">PRIX ECHANTILLON :</label>
                <input type="text" size="7" name="MED_PRIXECHANTILLON" class="zone" value = <?php echo $res['MED_PRIXECHANTILLON']?>  disabled />
                <label class="titre">&nbsp;</label>
               <!-- <input class="zone" type="button" value="<"></input>
                <input class="zone" type="button" value=">"></input>-->
					       
		   </form>
			<?php } ?>     
        </div>
    </div>
