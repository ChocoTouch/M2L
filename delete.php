<?php

try {
    require 'fonctions.php';
    $bdd = getBdd();

    $id = $_GET['id'];

    $sup = $bdd->prepare("DELETE FROM adherent WHERE matriculeAdh= '$id'");
   
    $sup->execute(array($id));

   
  
}
catch (Exception $e) {
    die('Erreur fatale : ' . $e->getMessage());
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Suppression</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>

	

     <p>
            
        L'adhèrent a été supprimé
            
        </p>

        <p><a href="indexlogged.php">Retour à l'accueil</a></p>

</body>
</html