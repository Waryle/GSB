<div id="gauche">
   <h2>Outils</h2>
   <ul>
      <li>Comptes-Rendus</li>
      <ul>
         <li><a href="index.php?uc=MenuVisiteur&action=choixrapport">Nouveaux</a>
         </li>
         <li><a href="index.php?uc=MenuVisiteur&action=">Consulter</a></li>
      </ul>
      <li>Consulter</li>
      <ul>
         <li><a href="index.php?uc=MenuVisiteur&action=medicament">Médicaments</a>
         </li>
         <li><a href="index.php?uc=MenuVisiteur&action=praticiens">Praticiens</a>
         </li>
         <?php var_dump($_SESSION['delegue']); if(isset($_SESSION['delegue'])){ ?>
         <li><a href="index.php?uc=MenuDelegue&action=">Consulter les nouveaux rapports</a>
         </li>
         <li><a href="index.php?uc=MenuDelegue&action=">Consulter tous les rapports</a>
         </li>
         <?php } ?>
      </ul>
   </ul>
</div>