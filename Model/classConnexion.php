<?php
/*-------------------------- Déclaration de la classe -----------------------------*/
// class clstBDD {
// /*----------------Propriétés de la classe  -----------------------------------*/
// var $connexion ; 
// var $dsn ="" ;
// /*---------------------- Accès aux propriétés --------------------------------------*/
	// function getConnexion() {return $this->connexion;}
// /* --------------   Connexion à une base par un ODBC-------------- ------------------- */
	// function connecte($pNomDSN, $pUtil, $pPasse) {
		// //tente d'établir une connexion à une base de données 
		// $this->connexion = odbc_connect( $pNomDSN , $pUtil, $pPasse );	
		// return $this->connexion; 		
	// }
// /* --------------   Requetes sur la base -------------- ------------------- */
	// function requeteAction($req) {
		// //exécute une requête action (insert, update, delete), ne retourne pas de résultat
		// odbc_do($this->connexion,$req);
	// }
	// function requeteSelect($req) {
		// //interroge la base (select) et retourne le curseur correspondant
		// $retour = odbc_do($this->connexion,$req);
		// return $retour;
	// }
	
	// function close() {
		// odbc_close($this->connexion);
	// }
// }


	class connexionPDO
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gsb';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoCO = null;
			
	private function __construct()
	{
    		connexionPDO::$monPdo = new PDO(connexionPDO::$serveur.';'.connexionPDO::$bdd, connexionPDO::$user, connexionPDO::$mdp); 
			connexionPDO::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		connexionPDO::$monPdo = null;
	}

	public  static function getconnexionPDO()
	{
		if(connexionPDO::$monPdoCO == null)
		{
			connexionPDO::$monPdoCO= new connexionPDO();
		}
		return connexionPDO::$monPdoCO;  
	}
	


public function Findcollaborateur($id,$pass)
	{
		
		$trouver = false;
		
		$req = "SELECT VIS_MATRICULE, MDP FROM collaborateur ";
				$res = connexionPDO::$monPdo->query($req);
				$rep = $res->fetchAll(); 
				foreach($rep as $uncollaborateur){
					
					if ($uncollaborateur['MDP'] == $pass and $uncollaborateur['VIS_MATRICULE'] == $id){
						$trouver=true;
									
						 $this->FindRegion($uncollaborateur['VIS_MATRICULE']);
						
					}
				}
				
				
		return $trouver;
	}



		

public function FindRegion($idcolaborateur)
	{
				$req = connexionPDO::$monPdo->prepare("SELECT  REG_CODE, TRA_ROLE FROM travailler where  VIS_MATRICULE = :idcolaborateur");
					$req->execute ( array (
					'idcolaborateur' => $idcolaborateur 
			) );
				$rep = $req->fetch(); 
				$idregion= $rep['REG_CODE'];
				$role= $rep['TRA_ROLE'];
		

			
				$req2 = "SELECT  REG_NOM FROM region where  REG_CODE = '$idregion'";
				$res2 = connexionPDO::$monPdo->query($req2);
				$rep2 = $res2->fetch(); 
				$region= $rep2['REG_NOM'];
		
				$_SESSION['region'] = $region;
				if ($role == "Délégué"){
					$_SESSION['delegue'] = true;
				}
	}


public function GetLemedicaments($medicament)
	{
				$req = connexionPDO::$monPdo->prepare("SELECT  MED_DEPOTLEGAL, MED_NOMCOMMERCIAL,FAM_CODE, MED_COMPOSITION, MED_EFFETS, MED_CONTREINDIC, MED_PRIXECHANTILLON 
					FROM medicament where MED_DEPOTLEGAL =:medicament ");
					$req->execute ( array (
					'medicament' => $medicament 
			) );
				$rep = $req->fetch(); 
				return $rep ;
	}

	public function Getmedicaments()
	{
				$req = "SELECT  MED_DEPOTLEGAL, MED_NOMCOMMERCIAL FROM medicament ";
				$res = connexionPDO::$monPdo->query($req);
				$rep = $res->fetchAll(); 
				return $rep ;
	
				}
public function Conversion(&$chaine)
	{
		if (isset($chaine)){
			$res = "";
		} 
					
	}
		public function getPraticiens() {
		// La différence de performance entre un * et une sélection des colonnes désirées sur une table de 86 éléments est insignifiante
		$req = "SELECT * FROM praticien inner join type_praticien where praticien.TYP_CODE = type_praticien.TYP_CODE ";
        $res = connexionPDO::$monPdo->query($req);
        $rep = $res->fetchAll();
        return $rep;
	}

	public function getMotif(){
		$req = "SELECT * FROM motif_visit ";
        $res = connexionPDO::$monPdo->query($req);
        $rep = $res->fetchAll();
        return $rep;
	}


public function getLesrapport($idvisiteur){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite inner join praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM where VIS_MATRICULE = :idvisiteur ");
     $req->execute ( array (
					'idvisiteur' => $idvisiteur
			) );
        $rep = $req->fetchAll();
        return $rep;

}

				
	/* public function isDelegue($vis_matricule) {
		$req = "SELECT TRA_ROLE FROM travailler WHERE VIS_MATRICULE = '".$vis_matricule."'" ;
		$res = connexionPDO::$monPdo->query($req) ;
		$rep = $res->fetch() ;
		if($rep['TRA_ROLE'] == "Délégué")
			$retour = true ;
		else
			$retour = false ;
		return $retour ;
	} */
}
?>
