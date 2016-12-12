<?php
session_start();
require_once("modele/classConnexion.php");
require_once("modele/fonction.php");

include("vues/v_header.php");


if(!isset($_REQUEST['uc']))
     $uc = 'seConnecter';
else
	$uc = $_REQUEST['uc'];



$pdo = connexionPDO::getconnexionPDO();	 
//	$pdo->md5Pass(); 

switch($uc)
{
	case 'seConnecter':
	{
		include("vues/v_connexion.php");
	break;
	}
	case 'Connexion':{
		
		include("controleur/c_connexion.php");	
	break;
	}
		case 'MenuVisiteur':
	{
	include("vues/v_entete.php") ;
		include("vues/menuCR.php");

		include("controleur/c_visiteur.php");
		break;
	}
	case 'MenuDelegue':
	{
	include("vues/v_entete.php") ;
		include("vues/menuCR.php");
		include("controleur/c_delegue.php");
		break;
	}
}
include("vues/v_pied.php");

?>