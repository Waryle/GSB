<?php

$action = $_REQUEST['action'];

switch($action)
{
	case 'connexion':
	{
  	//TEST DE RESUSSITE DE CONNEXION 
		$id = $_REQUEST['ID'];
		$pass = $_REQUEST['pass'];
		$result= $pdo->Findcollaborateur($id,$pass);
  		if ($result){
  			$_SESSION['id']=$id;
	//TEST DE TYPE DUTILISATEUR


    header('Location:index.php?uc=MenuVisiteur&action=accueil');

  		}else
  		{
  			$message = "Le nom ou le mot de passe est incorrect, veuillez recommencer";

        include("vue/v_message.php");
  			include("vue/v_connexion.php");
  		}

  		break;
	}
  case 'deconnexion':
  {
    session_destroy();
  $_SESSION['id'] = "";
   $_SESSION['region'] = "";
     $_SESSION['delegue'] = "";
header('Location:index.php?uc=seConnecter');
      //include("vue/v_connexion.php");
  }

}
	?>