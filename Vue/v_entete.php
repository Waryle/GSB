<html lang="fr">
<head>
<title>GSB</title>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body >
<img src="images/logo.jpg" width="100" height="60"/>
<h1>Gestion des visite</h1>
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