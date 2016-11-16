<?php

if(!isset($_REQUEST['action']) || $_REQUEST['action'] == "") {
	$action = 'accueil' ;
} else {
	$action = $_REQUEST['action'];
}

include("vue/menuCR.html");

switch ($action) {
    case 'accueil': {
        break;
    }
    case 'medicament': {
        $lesmedicaments = $pdo->Getmedicaments();
        if (isset($lesmedicaments)) {
            include("vue/formMEDICAMENT.php");
        } else {
            $message = "Aucun médicament enregistré";
            include("vue/message.php");
        }
        break;
    }
    case 'praticiens': {
		if(!isset($lesPraticiens)) {
			$lesPraticiens = $pdo->getPraticiens() ;
		}
		include("vue/v_praticiens.php") ;
        break;
    }
    case 'nouveauRapport': {
        break;
    }
        
        
}
?>