	<?php
			//if(!isset($_POST["mediNum"])){
				 $res = $pdo->GetLemedicaments($_POST["medinumNum"]);
				
			echo '
                <h1> Pharmacopee </h1>
                <label class="titre">DEPOT LEGAL :</label>
                <input type="text" size="10" name="MED_DEPOTLEGAL" class="zone" disabled  />
                <label class="titre">NOM COMMERCIAL :</label>
                <input type="text" size="25" name="MED_NOMCOMMERCIAL" class="zone" disabled  />
                <label class="titre">FAMILLE :</label>
                <input type="text" size="3" name="FAM_CODE" class="zone" />
                <label class="titre">COMPOSITION :</label>
                <textarea rows="5" cols="50" name="MED_COMPOSITION" class="zone" disabled ></textarea>
                <label class="titre">EFFETS :</label>
                <textarea rows="5" cols="50" name="MED_EFFETS" class="zone" disabled ></textarea>
                <label class="titre">CONTRE INDIC. :</label>
                <textarea rows="5" cols="50" name="MED_CONTREINDIC" class="zone" disabled ></textarea>
                <label class="titre">PRIX ECHANTILLON :</label>
                <input type="text" size="7" name="MED_PRIXECHANTILLON" class="zone" disabled />
                <label class="titre">&nbsp;</label>
               <!-- <input class="zone" type="button" value="<"></input>
                <input class="zone" type="button" value=">"></input>-->
					'
	//} 
 ?>    