
 


    <div id="droite">
        <div id="bas">
<?php 

if(isset($modifier)){
?><form name="formRAPPORT_VISITE" method="post" action="index.php?uc=MenuVisiteur&action=ajoutrapport&modif=1" ><?php
}else{?>
<form name="formRAPPORT_VISITE" method="post" action="index.php?uc=MenuVisiteur&action=ajoutrapport&modif=0" ><?php 
  } ?>
            
                <h1> Rapport de visite </h1>
                 <label class="titre">Voulez-vous que le système enregistre la date de saisie du rapport ? :</label>
                <input name="RAP_DATESAISI" type="checkbox" value="true" class="zone" <?php if(isset($consulter)) { echo "disabled";}?> <?php if(isset($checkboxDateSaisie)) { echo $checkboxDateSaisie; ; }?> onClick= "selectionne(true,this.checked,'RAP_DATE', '<?php if(isset($datesaisie)) { echo $datesaisie;} ?>' )"/>

                
                <input type="text" size="19" <?php if(isset($datesaisie)) { echo "value =".$datesaisie;} ?> <?php if(isset($consulter)) { echo "disabled";}?> class="zone" name="RAP_DATE" style="visibility:<?PHP if(isset($affichedate)) { echo $affichedate;}?>" disabled/>
              

				<label class="titre">Date de la visite :</label>
                <input type="date" size="10"<?php if(isset($datevisite)) { echo  'value ='.$datevisite;} ?> <?php if(isset($consulter)) { echo "disabled";}?> name="RAP_DATEVISITE" class="zone" />
				
                <label class="titre">Praticien :</label>
               
			   <select name="PRA_NUM" class="zone" id="PRA_NUM" onautocomplete="<?php $idpraticien ?> = getSelectValue(selectId)"  >
				 <option  selected value="-1">Choisissez un praticien</option>
                   <?php 
					foreach($lespracticiens as $unpracticien){
					?> <option value=<?php echo $unpracticien['PRA_NUM'] ?> <?php if(isset($consulter)) { echo "disabled";}?> <?php if(isset($numpra) and $unpracticien['PRA_NUM']== $numpra) { echo "selected";}?>><?php echo $unpracticien['PRA_NOM']  ?> </option><?php
					}
                   ?>   
				</select><?php if (isset($consulter) and isset($numpra)){?>
<a href="index.php?uc=MenuVisiteur&action=praticiens&pratnum=<?php echo $numpra?>">+ Détails</a>

     <?php    }?>
                <label class="titre">Coefficient :</label>
                <input type="text" <?php if(isset($coeffpracticien) and !empty($coeffpracticien)) { echo "value =".$coeffpracticien; }?> <?php if(isset($consulter)) { echo "disabled";}?> size="6" name="PRA_COEFF" class="zone" />

                <label class="titre">Remplaçant :</label>
                <input type="checkbox" name="checkremplacent" class="zone" value="true" <?php if(isset($consulter)) { echo "disabled";}?> <?php if(isset($checkboxRemplacant)) { echo $checkboxRemplacant;} ?> onClick= "selectionne(true,this.checked,'PRA_REMPLACANT')"; />
                <select name="PRA_REMPLACANT" class="zone" style="visibility:<?PHP if(isset($afficheRemp)) { echo $afficheRemp;}?>" >
                     <option  value="" >Choisissez un remplaçant</option>
                   <?php 
                    foreach($lespracticiens as $unpracticien){
                   ?> <option value=<?php echo $unpracticien['PRA_NUM']; ?> <?php if(isset($consulter)) { echo "disabled";}?> <?php if(isset($numremp) and $unpracticien['PRA_NUM']== $numremp) { echo "selected";}?>><?php echo $unpracticien['PRA_NOM']  ?></option><?php
                    }
                   ?>
                </select>
             
                <label class="titre">Motif de la visite :</label>
                <select name="RAP_MOTIF" class="zone" onClick="selectionne('5',this.value,'RAP_MOTIFAUTRE');">
                  <option  value="" >Choisissez un motif</option>
                  <?php foreach($lesmotifs as $unmotif){
                    ?> <option value=<?php echo $unmotif['id'] ?> <?php if(isset($consulter)) { echo "disabled";}?> <?php if(isset($motif) and $unmotif['id']== $motif) { echo "selected";}?>><?php echo $unmotif['Libelle']  ?></option><?php
                    }
                   ?>
                </select>
                <input type="text" <?php if(isset($consulter)) { echo "disabled";}?> name="RAP_MOTIFAUTRE" value="" class="zone" style="visibility:hidden" />
                <label class="titre">Bilan :</label>
                <textarea rows="5" cols="50" <?php if(isset($consulter)) { echo "disabled";}?> name="RAP_BILAN" class="zone"> <?php if(isset($bilan)) { echo $bilan;}?> </textarea>
                <label class="titre">
                    <h3> Eléments présentés </h3>
                </label>
                <label class="titre">Produit 1 : </label>
                <select name="PROD1" class="zone">
                    <option  value="" >Choisissez un produit</option>
  <?php foreach(    $lesmedicaments as  $unmedicament){
                    ?> <option value=<?php echo $unmedicament['MED_DEPOTLEGAL'] ?> <?php if(isset($consulter)) { echo "disabled";}?> <?php if(isset($med1) and $unmedicament['MED_DEPOTLEGAL']== $med1) { echo "selected";}?>><?php echo $unmedicament['MED_NOMCOMMERCIAL']  ?></option><?php
                    }
                   ?>

                </select>
                <?php if (isset($consulter) and isset($med1)){?>
<a href="index.php?uc=MenuVisiteur&action=medicament&lemedicament=<?php echo $med1?>">+ Détails</a>

     <?php    }?>
                <label class="titre">Produit 2 : </label>
                <select name="PROD2" class="zone" >
                      <option  value="" >Choisissez un produit</option>
                      <?php foreach(    $lesmedicaments as  $unmedicament){
                   ?> <option value=<?php echo $unmedicament['MED_DEPOTLEGAL'] ?>  <?php if(isset($consulter)) { echo "disabled";}?> <?php if(isset($med2) and $unmedicament['MED_DEPOTLEGAL']== $med2) { echo "selected";}?>><?php echo $unmedicament['MED_NOMCOMMERCIAL']  ?></option><?php
                    }
                    ?>
                </select> <?php if (isset($consulter) and isset($med2)){?>
<a href="index.php?uc=MenuVisiteur&action=medicament&lemedicament=<?php echo $med2?>">+ Détails</a>

     <?php    }?>
                <label class="titre">Documentation offerte :</label>
                <input name="RAP_DOC" type="checkbox" class="zone" <?php if(isset($checkboxRemplacant)) { echo $checkboxRemplacant;}?> <?php if(isset($consulter)) { echo "disabled";} ?> value="true"  />
                <label class="titre">
                    <h3>Echantillons</h3>
                </label>
                <div class="titre" id="lignes">
                    <label class="titre">Produit : </label>
                    <select name="PRA_ECH1" class="zone">
                     <option  value="" >Choisissez un échantillon</option>
                      <?php foreach(    $lesmedicaments as  $unmedicament){
                    ?> <option value=<?php echo $unmedicament['MED_DEPOTLEGAL'] ?> <?PHP if(isset($consulter)) { echo "disabled";}?> ><?php echo $unmedicament['MED_NOMCOMMERCIAL']  ?></option><?php
                    }
                   ?>
                    </select>

                    <input type="text" name="PRA_QTE1" size="2" class="zone" <?php if(isset($consulter)) { echo "disabled";}?> />
                    <input type="hidden" name="compteur" id="compteur" value='1' />
                    <input type="button" id="but1" value="+" onclick="ajoutLigne(1);" class="zone"  <?php if(isset($consulter)) { echo "disabled";}?> />
                </div>
                <label class="titre">SAISIE DEFINITIVE :</label>
                <input name="RAP_LOCK" type="checkbox" class="zone"  value="true" <?php if(isset($consulter)) { echo "disabled";}?> />
                <label class="titre"></label>
                <div class="zone">
               <?php if(!isset($consulter)){?>
                 <input type="reset" value="annuler"></input>
                    <input type="submit" onclick="if(formRAPPORT_VISITE.elements['PRA_NUM'].value == '-1')
{
  if(!confirm('Vous n\'avez pas renseigné de praticien, voulez-vous continuer ?')) return false;
  
}
if(formRAPPORT_VISITE.elements['PROD1'].value == '' | formRAPPORT_VISITE.elements['PROD2'].value == ''){
   if(!confirm('Vous n\'avez pas renseigné de médicaments présentés, voulez-vous continuer ?')) return false;
}" ></input>
<?php
}?>
                   
            </form>

          </div>
</div>
