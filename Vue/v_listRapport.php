<h2>Saisie des rapports de visites</h2>
<form name="ListeRapport" method="POST" action="index.php?uc=MenuVisiteur&action=modifierrapport">
 <label >les rapports de visite en cours : </label>
<select>
   <option>Choisissez un rapport de visite</option>
  <?php foreach($lesrapports as  $unrapport){
     ?> <option value=<?php echo $unrapport['VIS_MATRICULE'].$unrapport['RAP_NUM'] ?>><?php echo $unrapport['RAP_DATE']." ".$unrapport['PRA_NOM']." ".$unrapport['PRA_PRENOM']  ?></option><?php
          }
      ?>
 </select>
</form>
 <a href ="index.php?uc=MenuVisiteur&action=nouveauRapport">Creer un nouveau rapport</a>
