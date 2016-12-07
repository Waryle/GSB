   <script language="javascript">
        function selectionne(pValeur, pSelection, pObjet) {
            //active l'objet pObjet du formulaire si la valeur sélectionnée (pSelection) est égale à la valeur attendue (pValeur)
            if (pSelection == pValeur) {
               // formRAPPORT_VISITE.elements[pObjet].disabled = false;
               formRAPPORT_VISITE.elements[pObjet].style.visibility  =  "visible";
                
            } else {
                  // formRAPPORT_VISITE.elements[pObjet].disabled = true;
                formRAPPORT_VISITE.elements[pObjet].style.visibility  =  "hidden";
            }
        }
    </script>
    <script language="javascript">
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
            //ajoute une gestion évenementielle en faisant évoluer le numéro de la ligne
            bouton.setAttribute("onClick", "ajoutLigne(" + pNumero + ");");
            bouton.setAttribute("type", "button");
            bouton.setAttribute("value", "+");
            bouton.setAttribute("class", "zone");
            bouton.setAttribute("id", "but" + pNumero);
        }
    </script>
	 <script language="javascript">
        function chercher($pNumero) {
            var xhr_object = null;
            if (window.XMLHttpRequest) // Firefox 
                xhr_object = new XMLHttpRequest();
            else if (window.ActiveXObject) // Internet Explorer 
                xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
            else { // XMLHttpRequest non supporté par le navigateur 
                alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
                return;
            }
            //traitement à la réception des données
            xhr_object.onreadystatechange = function() {
                    if (xhr_object.readyState == 4 && xhr_object.status == 200) {
                        var formulaire = document.getElementById("formPraticien");
                        formulaire.innerHTML = xhr_object.responseText;
                    }
                }
                //communication vers le serveur
				 
            xhr_object.open("POST", "cherchePraticien.php", true);
            xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var data = "pratNum=" + $pNumero;
            xhr_object.send(data);

        }
    </script>
<?php

	?>