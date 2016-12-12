

    <div id="gauche">
        <h2>Outils</h2>
        <ul>
            <li>Mes Comptes-Rendus</li>
            <ul>
                <li><a href="index.php?uc=MenuVisiteur&action=choixrapport">Rédiger</a>
                </li>
                <li><a href="index.php?uc=MenuVisiteur&action=consulter">Consulter</a></li>
            </ul>
            <li>Consulter</li>
            <ul>
                <li><a href="index.php?uc=MenuVisiteur&action=medicament">Médicaments</a>
                </li>
                <li><a href="index.php?uc=MenuVisiteur&action=praticiens">Praticiens</a>
                </li>
				<?php
               if(isset($_SESSION['delegue'])){
			   ?>
			   <li><a href="index.php?uc=MenuDelegue&action=consulternouveaux">Les nouveaux rapports</a>
                </li>
				<li><a href="index.php?uc=MenuDelegue&action=toutrapport">Tous les rapports</a>
                </li>
				<?php } ?>
            </ul>
        </ul>
    </div>
