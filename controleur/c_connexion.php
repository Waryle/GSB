<?php

$action = $_REQUEST['action'];

switch($action)
{
	case 'connexion':
	{

  	//TEST DE RESUSSITE DE CONNEXION 
		$id = $_REQUEST['ID'];
		$pass = $_REQUEST['pass'];
		$result= $pdo->Findcollaborateur($id,md5($pass));
  	
  		if ($result){
  			$_SESSION['id']=$id;
	//TEST DE TYPE DUTILISATEUR

include("vues/v_entete.php") ;
    include("vues/menuCR.php");
  		}else
  		{
  			$message = "Le nom ou le mot de passe est incorrect, veuillez recommencer";

        include("vues/v_message.php");
  			include("vues/v_connexion.php");
  		}

  		break;
	}
  case 'deconnexion':
  {
    session_destroy();
  $_SESSION['id'] = "";
   $_SESSION['region'] = "";
     $_SESSION['delegue'] = "";
//header("Location:index.php?uc=seConnecter");
      include("vues/v_connexion.php");
  }

}
	?>