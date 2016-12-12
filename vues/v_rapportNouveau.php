<div id="droite">
    <div id="bas">
<table>
	<tr>
	<th>Nom visiteur</th>
	<th>Numéro de rapport</th>
	<th>Numéro nom praticien</th>
	<th>Motif</th>
	<th>Date</th>
	<th>Code nom médicaments</th>
	</tr>
	

	
	<?php
		foreach($lesrapports as $unrapport){?>
			<tr>
<td><?php echo $unrapport['VIS_NOM']?></td>
<td><a href="index.php?uc=MenuVisiteur&action=modifierrapport&numRapport=<?php echo $unrapport['VIS_MATRICULE'].';'.$unrapport['RAP_NUM'];?>&consulter=true&delegue=true"><?php echo $unrapport['VIS_NOM'].$unrapport['RAP_NUM']?></a></td>
<td><?php echo $unrapport['PRA_NUM']." ".$unrapport['PRA_NOM']?></td>
<td><?php echo $unrapport['Libelle']?></td>
<td><?php echo $unrapport['DateVisite']?></td>
<td>
<?php
$lesmedicaments = $pdo->getMedicamentsRapport($unrapport['VIS_NOM'], $unrapport['RAP_NUM'] );	
if(!empty($lesmedicaments)){
	
foreach($lesmedicaments as $unmedicament){
?> <?php echo $unmedicament['MED_DEPOTLEGAL']."  ". $unmedicament['MED_NOMCOMMERCIAL'] ;?><br> <?php 

} ?>

<?php }else{?>
	Pas de médicaments présenté
	<?php
}
?></td>

		<?php }
?>

	
	</tr>
</table>

    </div>
</div>