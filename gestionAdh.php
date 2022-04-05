<?php
try {
    require 'fonctions.php';


    $bdd = getBdd();
    // Définition de la requête SQL
    $req = "SELECT * FROM adherent ORDER BY nomAdh";
    // Exécution de la requête SQL et récupération de ses résultats
    $resultat = $bdd->query($req);

    $nbAdh = $resultat->rowCount();
} catch (Exception $e) {
    die('Erreur fatale : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gestion des adhérents</title>
    <link rel="stylesheet" type="text/css" href="style02.css" media="all" />
</head>

<body>
    <div class="">
        <h1>Gestion des adhérents</h1>
    </div>
    <hr>

    <div class="">
        <table>
            <tr>
                <th>Actions</th>
                <th>Nom de l'adhérent</th>
                <th>Prénom de l'adhérent</th>
                <th>Niveau de l'adhérent</th>
            </tr>




            <?php
            // Récupération de tous les résultats de la requête dans un tableau
            $donnees = $resultat->fetchAll();
            // Itération sur les résultats de la requête SQL
            foreach ($donnees as $ligne) {
                $nom = $ligne['nomAdh'];
                $prenom = $ligne['prenomAdh'];
                $niveau = $ligne['niveauAdh'];
                $matricule = $ligne['matriculeAdh'];


                echo '<tr><td>' . "<div class='action'><button><a href='detail.php?id=$matricule'>Détails  </a></button> <button><a href='delete.php?id=$matricule'>Supprimer  </a></button> <button><a href='update.php?id=$matricule'>Modifier</a></button></div>" . '</td><td>' . $nom . '</td><td>' . $prenom . '</td><td>' . $niveau . '</td></tr>';
            }

            ?>
        </table>

    </div>
    <hr>
    <div class="return">
        <div class="itmcontainer">
            <a href="ajout.php">Ajouter un adhérent</a>
        </div>
        <div class="itmcontainer">
            <a href="indexlogged.php">Retour à l'accueil</a>
        </div>
    </div>

</body>

</html>