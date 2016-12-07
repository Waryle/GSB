<?php
session_start();
require_once("Model/classConnexion.php");
require_once("Model/fonction.php");
include("vue/v_entete.php") ;


if(!isset($_REQUEST['uc'])){
     $uc = 'seConnecter';
}else{
	$uc = $_REQUEST['uc'];
}

$pdo = connexionPDO::getconnexionPDO();	 
switch($uc)
{
	case 'seConnecter':
			{
				include("vue/v_connexion.php");
			break;
			}
			case 'Connexion':{
				include("Controleur/c_connexion.php");
				break;
			}
	
	case 'MenuVisiteur':
	{
				include("Controleur/c_visiteur.php");

break;
	}
	case 'MenuDelegue':
	{
				
break;
}


	}
include("vue/v_pied.php");

?>
