  <script language="javascript">
        function selectionne(pValeur, pSelection, pObjet, datesaisi = 'NULL') {
        
            //active l'objet pObjet du formulaire si la valeur sélectionnée (pSelection) est égale à la valeur attendue (pValeur)
            if (pSelection == pValeur) {

            if((datesaisi == 'NULL' | datesaisi == '') & formRAPPORT_VISITE.elements[pObjet].name =='RAP_DATE'){
             var ladate=new Date()    
             var date = ladate.getDate()+"/"+(ladate.getMonth()+1)+"/"+ladate.getFullYear();
             formRAPPORT_VISITE.elements[pObjet].value = date;

            }

               // formRAPPORT_VISITE.elements[pObjet].disabled = false;
               formRAPPORT_VISITE.elements[pObjet].style.visibility  =  "visible";
                
            } else {
                  // formRAPPORT_VISITE.elements[pObjet].disabled = true;
                formRAPPORT_VISITE.elements[pObjet].style.visibility  =  "hidden";
            }
        }
	
      
  function ajoutLigne(pNumero) { //ajoute une ligne de produits/qté à la div "lignes"     
            //masque le bouton en cours
     
            document.getElementById("but" + pNumero).setAttribute("hidden", "true");
            pNumero++; //incrémente le numéro de ligne
            var laDiv = document.getElementById("lignes"); //récupère l'objet DOM qui contient les données
            var titre = document.createElement("label"); //crée un label
            laDiv.appendChild(titre); //l'ajoute à la DIV
            titre.setAttribute("class", "titre"); //définit les propriétés
            titre.innerHTML = "   Produit : ";
            var liste = document.createElement("select"); //ajoute une liste pour proposer les produits
            laDiv.appendChild(liste);
            liste.setAttribute("name", "PRA_ECH" + pNumero);
            liste.setAttribute("class", "zone");
            //remplit la liste avec les valeurs de la première liste construite en PHP à partir de la base
            liste.innerHTML = formRAPPORT_VISITE.elements["PRA_ECH1"].innerHTML;
            var qte = document.createElement("input");
            laDiv.appendChild(qte);
            qte.setAttribute("name", "PRA_QTE" + pNumero);
            qte.setAttribute("size", "2");
            qte.setAttribute("class", "zone");
            qte.setAttribute("type", "text");
            var bouton = document.createElement("input");
            laDiv.appendChild(bouton);

            var compteur = document.getElementById("compteur").setAttribute("value",  pNumero);

            //ajoute une gestion évenementielle en faisant évoluer le numéro de la ligne
            bouton.setAttribute("onClick", "ajoutLigne(" + pNumero + ");");
            bouton.setAttribute("type", "button");
            bouton.setAttribute("value", "+");
            bouton.setAttribute("class", "zone");
            bouton.setAttribute("id", "but" + pNumero);
        }
        
function getSelectValue(selectId)
{
  /**On récupère l'élement html <select>*/
  var selectElmt = document.getElementById(selectId);
  /**
  selectElmt.options correspond au tableau des balises <option> du select
  selectElmt.selectedIndex correspond à l'index du tableau options qui est actuellement sélectionné
  */
  return selectElmt.options[selectElmt.selectedIndex].value;
}
     </script>
	 <?php
		  function verifRapport($autreselec, $idmedecin, $dateVisite, $motifvisite, $bilan, $coeffconfiance){
            $message=array();
           
            if(empty($idmedecin)){
                $message[] = "Vous n'avez pas renseigner le practicien";
            }
            if(empty($dateVisite)){
             $message[] = "Vous n'avez pas renseigner la date de la visite";
            }
            if(empty($motifvisite)){
             $message[] = "Vous n'avez pas renseigner le motif de la visite";
            }elseif($motifvisite == '5' and empty($autreselec)){
            $message[] = "Vous n'avez pas renseigner le champ autre de la visite";
            }
            if(empty($bilan)){
             $message[] = "Vous n'avez pas renseigner le bilan de la visite";
            }
            if(empty($coeffconfiance)){
             $message[] = "Vous n'avez pas renseigner le coefficient de confiance";
            }elseif(!is_numeric ($coeffconfiance) ){
                $message[] = "Le coefficient de confiance doit etre un nombre";
            }
        
            return $message;
         }

          function Conversion(&$chaine)
  {
    if (empty($chaine)){
      $res = "";
    } 
          
  }

        //  function verifSaisiMedicament($medicament1,$medicament2){
       //     $flag=true;
          //    if(empty($medicament1) and empty($medicament2)){

         //    $flag = false;
        //  }
        //  return $flag;
   //  }
		?>
