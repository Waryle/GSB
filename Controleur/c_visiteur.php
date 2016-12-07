<?php

if(!isset($_REQUEST['action']) || $_REQUEST['action'] == "") {
	$action = 'accueil' ;
} else {
	$action = $_REQUEST['action'];
}

include("vue/menuCR.html");
switch($action)
{
case 'accueil':
{
	break;
}
case 'medicament':
{

	$lesmedicaments = $pdo->Getmedicaments();
	if (isset($lesmedicaments)){

include("vue/formMEDICAMENT.php");
	}else
	{
		$message = "Aucun médicaments enregistrés";
		include("vue/message.php");
	}
	
break;
}
case'praticiens':

	{
		if(!isset($lesPraticiens)) {
			$lesPraticiens = $pdo->getPraticiens() ;
		
		}
		include("vue/v_praticiens.php") ;
        break;
    }

case'nouveauRapport':
{
	$lespracticiens = $pdo->getPraticiens();
$lesmotifs = $pdo->getMotif();
	$lesmedicaments = $pdo->Getmedicaments();

include("vue/formRAPPORT_VISITE.html");	
	
	
	
break;
}
case 'ajoutrapport':
{
break;
}
case 'choixrapport':{
	$lesrapports= $pdo->getLesrapport($_SESSION['id']);
	if(isset($lesrapport)){
		include("vue/v_listRapport.php");	

	}else{
		header('Location:index.php?uc=MenuVisiteur&action=nouveauRapport');
	}
break;
}
case'modifierrapport':{
	break;
}


}
?>