
<?php

if(!isset($_REQUEST['action']) || $_REQUEST['action'] == "") {
	$action = 'accueil' ;
} else {
	$action = $_REQUEST['action'];
}

switch($action)
{
case 'consulternouveaux':
{

$region = $_SESSION['idregion'];
$lesrapports =$pdo->getRapportNouveauxRegion($region);

include("vues/v_rapportNouveau.php");
	break;


}
case 'toutrapport':{
	// au lieu de getPraticiens, faire un getVisiteur de la region $_session['idregion']
	$lesvisiteurs = $pdo->getListeVisiteursMemeRegion($_SESSION['idregion']);
	$visiteur = true;
	include("vues/v_consulter.php");	

}
case'':{

	if(!empty($_POST['DATETOT']) and !empty($_POST['DATETARD'])){
				
				if(empty($_POST['PRA_NUM'])){
$lesrapports = $pdo-> getToutrapportsDate($_SESSION['idregion'], $_POST['DATETARD'], $_POST['DATETOT']);
			}else{
$lesrapports = $pdo->getToutrapportsDatePraticien($_SESSION['idregion'], $_POST['DATETARD'], $_POST['DATETOT'],$_POST['PRA_NUM'] );
				}			
	include("vues/v_tableauRapport.php");
	break;
}
}
}
?>