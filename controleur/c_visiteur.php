<?php

if(!isset($_REQUEST['action']) || $_REQUEST['action'] == "") {
	$action = 'accueil' ;
} else {
	$action = $_REQUEST['action'];
}

switch($action)
{
case 'accueil':
{
	break;
}
case 'medicament':
{

	

	if(isset($_REQUEST['lemedicament'])){
		$lemedicament = $_REQUEST['lemedicament'];
		$nbretour = -1;
		include("vues/v_retour.php") ;

	}




	$lesmedicaments = $pdo->Getmedicaments();
	if (isset($lesmedicaments)){

include("vues/v_medicament.php");
	
				if(isset($_GET['num'])){
                    $res = $pdo->GetLemedicaments($_GET['num']);
                     include("vues/v_medicament2.php");
                }elseif(isset($lemedicament)){
                      $res = $pdo->GetLemedicaments($lemedicament);
                       include("vues/v_medicament2.php");
                }
               

	 }else
	{
		$message = "Aucun médicaments enregistrés";
		include("vues/message.php");
	}
	
break;
}
case'praticiens':

	{

	

		if(isset($_REQUEST['pratnum'])){
		$pratnum = $_REQUEST['pratnum'];
		$nbretour = -1;
		include("vues/v_retour.php") ;

	}

		
			$lesPraticiens = $pdo->getPraticiens() ;
		


		if (isset($lesPraticiens)){

include("vues/v_praticiens.php") ;


if(isset($_GET['num'])){
                   $infosPraticien =  $pdo->getLePraticien($_GET['num']) ;
			$lesDiplomes=$pdo->getDiplomePracticien($infosPraticien['PRA_NUM']);
               include("vues/v_practiciens2.php") ;

                }elseif(isset($pratnum )){
                    $infosPraticien =  $pdo->getLePraticien($pratnum) ;
			$lesDiplomes=$pdo->getDiplomePracticien($infosPraticien['PRA_NUM']);
               include("vues/v_practiciens2.php") ;

                }

		


	}else
	{
		$message = "Aucun practiens enregistrés";
		include("vues/message.php");
	}
		
        break;
    }



case'nouveauRapport':
{
	$lespracticiens = $pdo->getPraticiens();
	$lesmotifs = $pdo->getMotif();
	$lesmedicaments = $pdo->Getmedicaments();

$checkboxDateSaisie = "checked";
$datesaisie = date("d/m/y");
$affichedate="visible";
$afficheRemp="hidden";
	include("vues/v_rapportVisite.php");	
	
	
break;
}
case 'ajoutrapport':
{

	$modifier = $_REQUEST['modif'];
	var_dump($modifier);
	$numrapport = $pdo->getMaxNumRapport($_SESSION['id']);
	$numrapport =$numrapport['max'] +1;
	if(!empty($_REQUEST['RAP_DATEVISITE'])){
	$datevisite  = $_REQUEST['RAP_DATEVISITE'];
}else
{
	$datevisite = NULL;
}
	$motifvisite = $_REQUEST['RAP_MOTIF'];
	$motifautre = $_REQUEST['RAP_MOTIFAUTRE'];
	$bilan = $_REQUEST['RAP_BILAN'];
	$medicament1 = $_REQUEST['PROD1'];
	$medicament2 = $_REQUEST['PROD2'];
	$numpracticien = $_REQUEST['PRA_NUM'];
	$coeffpracticien = $_REQUEST['PRA_COEFF'];
	$compteur = $_REQUEST['compteur'];	
	$qtevide=false;


	if(!empty($_REQUEST['RAP_DATESAISI'])){
		$datesaisie =date("d/m/y");
	}else{
		$datesaisie = NULL;
	}

	if(!empty($_REQUEST['checkremplacent'])){
		$numremplacent = $_REQUEST['PRA_REMPLACANT'];
	}else{
		$numremplacent = NULL;
	}
	if(!empty($_REQUEST['RAP_DOC'])){
		$documentation = true;
		}else{
			$documentation = false; 
		}

	for($i=1 ; $i<=$compteur ;$i++){
		$echantillon = $_REQUEST['PRA_ECH'.$i];
		$qte = $_REQUEST['PRA_QTE'.$i];
		if(empty($qte)){
			$qtevide = true;
		}
	}

		
	if(!empty($_REQUEST['RAP_LOCK'])){
		$lock = $_REQUEST['RAP_LOCK'];
		$msgErreurs = verifRapport($motifautre, $numpracticien,$datevisite,$motifvisite,$bilan,$coeffpracticien);
		if (count($msgErreurs)==0){
	if($modifier== 1){

$flag4 = $pdo->modifieRapport($numrapport, $_SESSION['id'], $datesaisie, $datevisite, $numpracticien, '2', $motifautre, $documentation, $bilan, $coeffpracticien, $motifvisite, $numremplacent);
		var_dump($flag4);

	}elseif($modifier== 0){
		$flag4 =$pdo->ajoutNewRapport($numrapport, $_SESSION['id'], $datesaisie, $datevisite, $numpracticien, '2', $motifautre, $documentation, $bilan, $coeffpracticien, $motifvisite, $numremplacent);

	}
			

				for($i=1 ; $i<=$compteur ;$i++){
					$echantillon = $_REQUEST['PRA_ECH'.$i];
					$qte = $_REQUEST['PRA_QTE'.$i];
					if($modifier== 1){
						$flag1 = $pdo->modifEchantillonOffert($_SESSION['id'], $numrapport, $echantillon, $qte);
					}elseif($modifier== 0){
					$flag1 = $pdo->ajoutEchantillonOffert($_SESSION['id'], $numrapport, $echantillon, $qte);
				}
				}
	

			if($modifier== 1){
		$flag3 =$pdo->modifmedicamentpresenter($numrapport, $medicament1, $_SESSION['id']);
		$flag2 =$pdo->modifmedicamentpresenter($numrapport, $medicament2, $_SESSION['id']);
}
	elseif($modifier== 0){
		$flag3 = $pdo->ajoutmedicamentpresenter($numrapport, $medicament1, $_SESSION['id']);
		$flag2 =$pdo->ajoutmedicamentpresenter($numrapport, $medicament2, $_SESSION['id']);
	}
			if ($flag1 and $flag2 and $flag3 and $flag4){
 				echo '<script language="javascript">';
  				echo 'alery(Le rapport a bien était pris en compte)';  //not showing an alert box.
  				echo '</script>';
			}
		// UNE REDIRECTION EST NECESSAIRE
		$lesrapports= $pdo->getLesrapports($_SESSION['id']);
		include("vues/v_listRapport.php");	
		
		}

		else{

			//UNE REDIRECTION
			$lespracticiens = $pdo->getPraticiens();
			$lesmotifs = $pdo->getMotif();
			$lesmedicaments = $pdo->Getmedicaments();
			include ("vues/v_erreurs.php");
		include("vues/v_rapportVisite.php");
	
	}
	}else{
	if($modifier == 1){
$flag4 =$pdo->modifieRapport($numrapport, $_SESSION['id'], $datesaisie, $datevisite, $numpracticien, '1', $motifautre, $documentation, $bilan, $coeffpracticien, $motifvisite, $numremplacent);
	}elseif($modifier == 0){
		$flag4 =$pdo->ajoutNewRapport($numrapport, $_SESSION['id'], $datesaisie, $datevisite, $numpracticien, '1', $motifautre, $documentation, $bilan, $coeffpracticien, $motifvisite, $numremplacent);
	}

		for($i=1 ; $i<=$compteur ;$i++){
			$echantillon = $_REQUEST['PRA_ECH'.$i];
			$qte = $_REQUEST['PRA_QTE'.$i];
			if($modifier == 1){
						$flag1 =  $pdo->modifEchantillonOffert($_SESSION['id'], $numrapport, $echantillon, $qte);
					}elseif($modifier== 0){
					$flag1 = $pdo->ajoutEchantillonOffert($_SESSION['id'], $numrapport, $echantillon, $qte);
				}
		}
	

		if($modifier== 1){
		$flag3 =$pdo->modifmedicamentpresenter($numrapport, $medicament1, $_SESSION['id']);
		$flag2 =$pdo->modifmedicamentpresenter($numrapport, $medicament2, $_SESSION['id']);
}
	elseif($modifier== 0){
		$flag3 =$pdo->ajoutmedicamentpresenter($numrapport, $medicament1, $_SESSION['id']);
		$flag2 =$pdo->ajoutmedicamentpresenter($numrapport, $medicament2, $_SESSION['id']);
	}
		if ($flag1 and $flag2 and $flag3 and $flag4){
 			echo '<script language="javascript">';
 			echo "alert('Le rapport a bien était pris en compte')";  //not showing an alert box.
  			echo '</script>';
		}
		// UNE REDIRECTION EST NECESSAIRE
		$lesrapports= $pdo->getLesrapports($_SESSION['id']);
		include("vues/v_listRapport.php");	
		
	}
	
break;
}
case 'choixrapport':{
	$lesrapports= $pdo->getLesrapports($_SESSION['id']);
	if(isset($lesrapports)){
		include("vues/v_listRapport.php");	

	}else{
		
		header("Location:index.php?uc=MenuVisiteur&action=nouveauRapport");
		
	}
break;
}
case'modifierrapport':{
$numrapport = $_REQUEST['numRapport'];

	list($VIS_MATRICULE, $numrapport) = explode(";", $numrapport);
	

	if (isset($_REQUEST['consulter']) and $_REQUEST['consulter'] = true){
	$consulter = true;
	$nbretour = '-2';
	if(isset($_REQUEST['delegue'])){
	$nbretour = '-1';
	//changement de l'état du rapport
	$pdo->setEtat($numrapport, $VIS_MATRICULE);
	}
	include("vues/v_retour.php");
		}else{
		$modifier = 1;
	}
	
	

	$leRapport =$pdo->getUnrapport($VIS_MATRICULE, $numrapport);
	
	$lespracticiens = $pdo->getPraticiens();
	$lesmotifs = $pdo->getMotif();
	$lesmedicaments = $pdo->Getmedicaments();




if ($leRapport['RAP_DATE']!= NULL){
$checkboxDateSaisie = "checked";
$datesaisie = $leRapport['RAP_DATE'];
$affichedate="visible";
}else{
$affichedate="hidden";	
}
if($leRapport['DateVisite']!= null){
$datevisite  = 	$leRapport['DateVisite'];
}
if($leRapport['motif'] != null){
	$motif = $leRapport['motif'];
}
if($motif == "5"){
$motifautre = $leRapport['ChampMotifLibre'];
}
if($leRapport['Coeff_Conf'] != null){
	$coeffpracticien = $leRapport['Coeff_Conf'];
}

if($leRapport['PRA_NUM']!= null){
$numpra = $leRapport['PRA_NUM'];
}
if($leRapport['Observation']!= null){
$bilan = $leRapport['Observation'];
}

if($leRapport['Remplacant']!= null){
$numremp = $leRapport['Remplacant'];
$checkboxRemplacant = "checked";
$afficheRemp="visible";
}
else{
$afficheRemp="hidden";	
}

if($leRapport['DocumentationDistribue']== 1){
$checkboxRemplacant ="checked";
}

$medicamentsPresente = $pdo->getMedicamentsRapport($_SESSION['id'], $numrapport);
$compt = 1;


foreach ($medicamentsPresente as $unmedicament ) {
	${'med'.$compt} = $unmedicament['MED_DEPOTLEGAL'];
	

	$compt +=1 ;
}

$medicamentsOffer = $pdo->getMedicamentsOffer($_SESSION['id'], $numrapport);

$pNumero= 1;
foreach ($medicamentsOffer as $unmedicament ) {
?>
	<script> ajoutLigne(1) </script>";<?php
	$pNumero+=1;
}

include("vues/v_rapportVisite.php");	


	break;
}
case'consulter':{
	$lespracticiens = $pdo->getPraticiens();

	include("vues/v_consulter.php");	
		break;
}
case'consultation':{

			if(!empty($_POST['DATETOT']) and !empty($_POST['DATETARD'])){
				
				if(empty($_POST['PRA_NUM'])){
$lesrapports = $pdo->getrapportsDate($_SESSION['id'], $_POST['DATETARD'], $_POST['DATETOT']);
			}else{
$lesrapports = $pdo->getrapportsDatePraticien($_SESSION['id'], $_POST['DATETARD'], $_POST['DATETOT'],$_POST['PRA_NUM'] );
				}			
	include("vues/v_tableauRapport.php");
	break;
}

}
}
?>