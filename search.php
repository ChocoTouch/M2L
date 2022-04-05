<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>search</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>


<ul>

<?php

 require 'fonctions.php';

 $recherche = $_POST['recherche'];

 if (isset($recherche)) {

 $bdd = getBdd();
    // Définition de la requête SQL
    $reqr = "SELECT * FROM adherent WHERE nomAdh LIKE '%$recherche%'";
    
    $resultatr = $bdd->query($reqr);


    $data = $resultatr->fetchAll();

foreach ($data as $line) {
    $nom = $line['nomAdh'];
    $prenom = $line['prenomAdh'];
    $niveau = $line['niveauAdh'];
    $matricule = $line['matriculeAdh'];


    echo 'Résultat de la recherche:<li> '.$matricule.', '.$nom.', '.$prenom.'<br> '.$niveau.'</li> <br/>'
;
     }



}

?>

</ul>

 <p class="lien"><a href="index.php">Retour à l'accueil</a></p>





</body>
</html>