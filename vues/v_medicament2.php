
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
		
        </div>
    </div>