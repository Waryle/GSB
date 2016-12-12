
<?php 
if (isset($_SESSION['id'])){

if (isset($_SESSION['delegue'])){
 
?>

<h1>Visiteur  <?php echo $_SESSION['id']?> Delegué de la region <?php echo $_SESSION['region']?></h1>
<?php
}else
{

	?>
<h1>Visiteur <?php echo $_SESSION['id']?>, de la region  <?php echo $_SESSION['region']?></h1>
<?php
}

?>
<a href="index.php?uc=Connexion&action=deconnexion">Deconnexion </a>
<?php 
}
?>