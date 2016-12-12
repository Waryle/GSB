</form>
<?php
if(empty($lesrapports)){?>
<p>
Il n'exsite aucun rapport pour les critères de recherche renseingés
</p>
<?php
				}else{
?>
<table>
<tr>
<th>Date de visite</th>
<th>Numéro de rapport</th>
<th>Nom praticien</th>
<th>Motif de la visite</th>
<th>Médicament présenté </th> 

</tr>
<?php
foreach($lesrapports as $unrapport){
$lesmedicaments = $pdo->getMedicamentsRapport($_SESSION['id'], $unrapport['RAP_NUM'] );
if($unrapport['motif']=='5'){
	$motif = $unrapport['ChampMotifLibre'];
}else
{
	$motif = $unrapport['Libelle'];
}
?>
<tr>
<td><?php echo $unrapport['DateVisite'] ;?></td>
<td><a href="index.php?uc=MenuVisiteur&action=modifierrapport&numRapport=<?php echo $unrapport['VIS_MATRICULE'].';'.$unrapport['RAP_NUM'];?>&consulter=true"><?php echo $unrapport['VIS_MATRICULE'].$unrapport['RAP_NUM'] ;?></a></td>
<td><?php echo $unrapport['PRA_NUM']." ".$unrapport['PRA_NOM'] ;?></td>
<td><?php echo $motif ?></td>
<td>
<?php

if(!empty($lesmedicaments)){
	
foreach($lesmedicaments as $unmedicament){
?><?php echo $unmedicament['MED_DEPOTLEGAL']."  ". $unmedicament['MED_NOMCOMMERCIAL'] ;?><br> <?php 

} ?>

<?php }else{?>
	Pas de médicaments présenté
	<?php
}
?></td></tr><?php
}
}
?>


</table>
