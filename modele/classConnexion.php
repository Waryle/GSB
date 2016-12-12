<?php
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
		
		$req = "SELECT VIS_MATRICULE, MDP FROM collaborateur where VIS_DATEDEPART IS NULL ";
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
				$req = connexionPDO::$monPdo->prepare("SELECT JJMMAA, REG_CODE, TRA_ROLE FROM travailler where  VIS_MATRICULE = :idcolaborateur order by JJMMAA DESC" );
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
					$_SESSION['idregion'] = $idregion;
				}
	}


public function GetLemedicaments($medicament)
	{
				$req = connexionPDO::$monPdo->prepare("SELECT  MED_DEPOTLEGAL, MED_NOMCOMMERCIAL,FAM_CODE, MED_COMPOSITION, MED_EFFETS, MED_CONTREINDIC, MED_PRIXECHANTILLON 
					FROM medicament where MED_DEPOTLEGAL =:medicament order by MED_NOMCOMMERCIAL asc");
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

		public function getPraticiens() {
		// La différence de performance entre un * et une sélection des colonnes désirées sur une table de 86 éléments est insignifiante
		$req = "SELECT * FROM praticien inner join type_praticien where praticien.TYP_CODE = type_praticien.TYP_CODE order by PRA_NOM asc";
        $res = connexionPDO::$monPdo->query($req);
        $rep = $res->fetchAll();
        return $rep;
	}

			public function getLePraticien($id) {
		$req =  connexionPDO::$monPdo->prepare("SELECT * FROM praticien inner join type_praticien where praticien.TYP_CODE = type_praticien.TYP_CODE  and praticien.PRA_NUM =:id order by PRA_NOM asc");
         $req->execute ( array (
					'id' => $id
			) );
$rep = $req->fetch();
        return $rep;

       
	}

	public function getMotif(){
		$req = "SELECT * FROM motif_visit ";
        $res = connexionPDO::$monPdo->query($req);
        $rep = $res->fetchAll();
        return $rep;
	}


public function getLesrapports($idvisiteur){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite inner join praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM where VIS_MATRICULE = :idvisiteur and etat='1'");
     $req->execute ( array (
					'idvisiteur' => $idvisiteur
			) );
        $rep = $req->fetchAll();
        return $rep;
}


public function getUnrapport($idvisiteur, $numrapport){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite  where VIS_MATRICULE = :idvisiteur and RAP_NUM =:numrapport");
     $req->execute ( array (
					'idvisiteur' => $idvisiteur,
					'numrapport' => $numrapport
			) );
        $rep = $req->fetch();
        return $rep;
}


public function getMaxNumRapport($idvisiteur){
	$req = connexionPDO::$monPdo->prepare( "SELECT max(RAP_NUM) as 'max'FROM rapport_visite  where VIS_MATRICULE = :idvisiteur ");
     $req->execute ( array (
					'idvisiteur' => $idvisiteur
			) );
        $rep = $req->fetch();
        return $rep;

}


public function ajoutNewRapport($RAP_NUM, $visiteur, $datesaisi, $datevisite, $idpracticien, $etat, $champlibre, $docdistribue, $bilan, $coeffconf, $motif, $numremp){


	$req = connexionPDO::$monPdo->prepare( "INSERT INTO rapport_visite (RAP_NUM ,VIS_MATRICULE, RAP_DATE,DateVisite, PRA_NUM, Etat, ChampMotifLibre, DocumentationDistribue, Observation, Coeff_Conf, motif, Remplacant)VALUES (:RAP_NUM, :visiteur, :datesaisi, :datevisite, :idpracticien, :etat, :champlibre, :docdistribue, :bilan, :coeffconf,:motif, :numremp) ");
     $req->execute ( array (
'RAP_NUM'=>$RAP_NUM,
     	'visiteur'=>$visiteur,
     	'datesaisi'=>$datesaisi,
     	 'datevisite' =>$datevisite,
     	 'idpracticien' => $idpracticien,
     	   'etat' => $etat, 
     	  'champlibre' => $champlibre, 
     	   'docdistribue'=> $docdistribue,
     	   'bilan' => $bilan, 
     	   'coeffconf' => $coeffconf,
     	   'motif' => $motif, 
     	   'numremp' => $numremp
					
			) );
        $rep = $req->fetch();
      	return true;
}
public function ajoutEchantillonOffert($VIS_MATRICULE, $RAP_NUM, $MED_DEPOTLEGAL, $OFF_QTE){
	$req = connexionPDO::$monPdo->prepare( "INSERT INTO offrir (VIS_MATRICULE, RAP_NUM, MED_DEPOTLEGAL, OFF_QTE)VALUES (:VIS_MATRICULE, :RAP_NUM, :MED_DEPOTLEGAL, :OFF_QTE) ");
     $req->execute ( array (

     	'VIS_MATRICULE'=>$VIS_MATRICULE,
     	'RAP_NUM'=>$RAP_NUM,
     	 'MED_DEPOTLEGAL' =>$MED_DEPOTLEGAL,
     	 'OFF_QTE' => $OFF_QTE
     	  				
			) );
        $rep = $req->fetch();
      	return true;
}
public function ajoutmedicamentpresenter($RAP_NUM, $MED_DEPOTLEGAL, $VIS_MATRICULE){
	$req = connexionPDO::$monPdo->prepare( "INSERT INTO presenter (RAP_NUM, MED_DEPOTLEGAL, VIS_MATRICULE)VALUES (:RAP_NUM, :MED_DEPOTLEGAL, :VIS_MATRICULE) ");
     $req->execute ( array (

     	'RAP_NUM'=>$RAP_NUM,
     	'MED_DEPOTLEGAL'=>$MED_DEPOTLEGAL,
     	 'VIS_MATRICULE' =>$VIS_MATRICULE
    	
			) );
        $rep = $req->fetch();
	return true;
}
public function md5Pass(){
	$req ="SELECT VIS_MATRICULE, MDP FROM collaborateur ";
	 $res = connexionPDO::$monPdo->query($req);
       $rep = $res->fetchAll();

       foreach ($rep as $uncollaborabteur ) {
       	$id = $uncollaborabteur['VIS_MATRICULE'];
     $mdp=md5($uncollaborabteur['VIS_MATRICULE']);
     $req2 =" UPDATE collaborateur
SET MDP = '$mdp'
WHERE VIS_MATRICULE = '$id'";
 $res2 = connexionPDO::$monPdo->query($req2);
       $rep2 = $res2->fetch();
       }

}
public function getDiplomePracticien($numpracticien) {


	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM posseder inner join specialite on posseder.SPE_CODE = specialite.SPE_CODE where PRA_NUM = :numPracticien ");
     $req->execute ( array (
					'numPracticien' => $numpracticien
			) );
        $rep = $req->fetchAll();
        return $rep;
		
	
	}

	public function getMedicamentsRapport($matricule, $numrapport){
$req = connexionPDO::$monPdo->prepare( "SELECT medicament.MED_DEPOTLEGAL, medicament.MED_NOMCOMMERCIAL FROM presenter inner join medicament on presenter.MED_DEPOTLEGAL = medicament.MED_DEPOTLEGAL where RAP_NUM = :numrapport and VIS_MATRICULE = :matricule ");
     $req->execute ( array (
					'matricule' => $matricule,
					'numrapport' => $numrapport
			) );
        $rep = $req->fetchAll();
        return $rep;

 
	}

	
			public function getMedicamentsOffer($matricule, $numrapport){
			$req = connexionPDO::$monPdo->prepare( "SELECT medicament.MED_DEPOTLEGAL, medicament.MED_NOMCOMMERCIAL, OFF_QTE FROM offrir inner join medicament on offrir.MED_DEPOTLEGAL = medicament.MED_DEPOTLEGAL where RAP_NUM = :numrapport and VIS_MATRICULE = :matricule ");
   			  $req->execute ( array (
					'matricule' => $matricule,
					'numrapport' => $numrapport
				) );
       		 $rep = $req->fetchAll();
       		 return $rep;

 
	}

public function modifieRapport($RAP_NUM, $visiteur, $datesaisi, $datevisite, $idpracticien, $etat, $champlibre, $docdistribue, $bilan, $coeffconf, $motif, $numremp){


	$req = connexionPDO::$monPdo->prepare( "UPDATE rapport_visite SET RAP_DATE = :datesaisi ,DateVisite =:datevisite, PRA_NUM = :idpracticien, Etat = :etat, ChampMotifLibre = :champlibre, DocumentationDistribue =  :docdistribue, Observation = :bilan, Coeff_Conf = :coeffconf, motif = :motif, Remplacant=  :numremp where  RAP_NUM = :RAP_NUM and VIS_MATRICULE = :visiteur " );
     $req->execute ( array (
'RAP_NUM'=>$RAP_NUM,
     	'visiteur'=>$visiteur,
     	'datesaisi'=>$datesaisi,
     	 'datevisite' =>$datevisite,
     	 'idpracticien' => $idpracticien,
     	   'etat' => $etat, 
     	  'champlibre' => $champlibre, 
     	   'docdistribue'=> $docdistribue, 
     	   'bilan' => $bilan, 
     	   'coeffconf' => $coeffconf,
     	   'motif' => $motif, 
     	   'numremp' => $numremp
					
			) );
        $rep = $req->fetch();
      	return true;
}

public function modifEchantillonOffert($VIS_MATRICULE, $RAP_NUM, $MED_DEPOTLEGAL, $OFF_QTE){
	$req = connexionPDO::$monPdo->prepare( "UPDATE offrir set  MED_DEPOTLEGAL = :MED_DEPOTLEGAL, OFF_QTE =:OFF_QTE  where VIS_MATRICULE = :VIS_MATRICULE and RAP_NUM = :RAP_NUM");
     $req->execute ( array (

     	'VIS_MATRICULE'=>$VIS_MATRICULE,
     	'RAP_NUM'=>$RAP_NUM,
     	 'MED_DEPOTLEGAL' =>$MED_DEPOTLEGAL,
     	 'OFF_QTE' => $OFF_QTE
     	  				
			) );
        $rep = $req->fetch();
      	return true;
}




public function modifmedicamentpresenter($RAP_NUM, $MED_DEPOTLEGAL, $VIS_MATRICULE){
	$req = connexionPDO::$monPdo->prepare( "UPDATE presenter set  MED_DEPOTLEGAL = :MED_DEPOTLEGAL  where RAP_NUM = :RAP_NUM and VIS_MATRICULE = :VIS_MATRICULE");
     $req->execute ( array (

     	'RAP_NUM'=>$RAP_NUM,
     	'MED_DEPOTLEGAL'=>$MED_DEPOTLEGAL,
     	 'VIS_MATRICULE' =>$VIS_MATRICULE
    	
			) );
        $rep = $req->fetch();
	return true;
}

public function getrapportsDate($idvisiteur, $datetard, $datetot){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite INNER JOIN praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM INNER JOIN motif_visit on rapport_visite.motif = motif_visit.id where rapport_visite.VIS_MATRICULE = :idvisiteur and DateVisite between :datetot and :datetard ORDER BY DateVisite ");
     $req->execute ( array (
					'idvisiteur' => $idvisiteur,
					'datetot' => $datetot,
					'datetard' => $datetard
			) );
        $rep = $req->fetchAll();
        return $rep;
}



public function getrapportsDatePraticien($idvisiteur, $datetard, $datetot, $praticien){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite INNER JOIN praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM INNER JOIN motif_visit on rapport_visite.motif = motif_visit.id where rapport_visite.VIS_MATRICULE = :idvisiteur and DateVisite between :datetot and :datetard and praticien.PRA_NUM = :praticien ORDER BY DateVisite ");
     $req->execute ( array (
					'idvisiteur' => $idvisiteur,
					'datetot' => $datetot,
					'datetard' => $datetard,
					'praticien' => $praticien
			) );
        $rep = $req->fetchAll();
        return $rep;
}

public function getRapportNouveauxRegion($region){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite INNER JOIN collaborateur on rapport_visite.VIS_MATRICULE = collaborateur.VIS_MATRICULE INNER JOIN travailler on collaborateur.VIS_MATRICULE = travailler.VIS_MATRICULE inner join motif_visit on motif_visit.id = rapport_visite.Etat inner join praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM   where travailler.REG_CODE = :region and rapport_visite.Etat = 2");
     $req->execute ( array (
					'region' => $region,
					
			) );
        $rep = $req->fetchAll();
        return $rep;
}

public function setEtat($RAP_NUM, $VIS_MATRICULE){
	$req = connexionPDO::$monPdo->prepare( "UPDATE rapport_visite set  Etat = '3'  where RAP_NUM = :RAP_NUM and VIS_MATRICULE = :VIS_MATRICULE");
     $req->execute ( array (

     	'RAP_NUM'=>$RAP_NUM,
     	 'VIS_MATRICULE' =>$VIS_MATRICULE
    	
			) );
        $rep = $req->fetch();
	return true;
}


public function getToutrapportsDatePraticien($region, $datetard, $datetot, $praticien){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite INNER JOIN praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM INNER JOIN motif_visit on rapport_visite.motif = motif_visit.id INNER JOIN collaborateur on rapport_visite.VIS_MATRICULE = collaborateur.VIS_MATRICULE INNER JOIN travailler on collaborateur.VIS_MATRICULE = travailler.VIS_MATRICULE where travailler.REG_CODE = :region and DateVisite between :datetot and :datetard and praticien.PRA_NUM = :praticien ORDER BY DateVisite ");
     $req->execute ( array (
					'region' => $region,
					'datetot' => $datetot,
					'datetard' => $datetard,
					'praticien' => $praticien
			) );
        $rep = $req->fetchAll();
        return $rep;
}


public function getToutrapportsDate($region, $datetard, $datetot){
	$req = connexionPDO::$monPdo->prepare( "SELECT * FROM rapport_visite INNER JOIN praticien on rapport_visite.PRA_NUM = praticien.PRA_NUM INNER JOIN motif_visit on rapport_visite.motif = motif_visit.id INNER JOIN collaborateur on rapport_visite.VIS_MATRICULE = collaborateur.VIS_MATRICULE INNER JOIN travailler on collaborateur.VIS_MATRICULE = travailler.VIS_MATRICULE where travailler.REG_CODE = :region and DateVisite between :datetot and :datetard ORDER BY DateVisite ");
     $req->execute ( array (
					'region' => $region,
					'datetot' => $datetot,
					'datetard' => $datetard
			) );
        $rep = $req->fetchAll();
        return $rep;
}


}
?>