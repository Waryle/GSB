
<?php 
if (isset($_SESSION['id'])){

if (isset($_SESSION['delegue'])){
 
?>

<h1>Visiteur  <?php echo $_SESSION['id']?> Délégué de la région <?php echo $_SESSION['region']?></h1>
<?php
}else
{

	?>
<h1>Visiteur <?php echo $_SESSION['id']?>, de la région  <?php echo $_SESSION['region']?></h1>
<?php
}

}
?>