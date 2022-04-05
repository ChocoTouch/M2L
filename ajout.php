<?php
try {
    require 'fonctions.php';
    $bdd = getBdd();
    $ajout = "SELECT numType FROM type ORDER BY numType";
    $level = $bdd->query($ajout);
} catch (Exception $e) {
    $msgErreur = $e->getMessage() . '(' . $e->getFile() . ', ligne ' . $e->getLine() . ')';
}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Ajout d'adherent</title>
    <link rel="stylesheet" type="text/css" href="style02.css" media="all" />
</head>

<body>
    <h1>Ajouter un Adhérent</h1>
    <hr>
    <form method="post" action="">


        <div class="lcontainer">
            <div class="lbcontainer">
                <div class="label">
                    <p><label for="matricule">Matricule</label></p><input class="ajout" type="text" name="matricule">
                </div>
                <div class="label">
                    <p><label for="nom">Nom</label></p> <input class="ajout" type="text" name="nom">
                </div>
                <div class="label">
                    <p><label for="prenom">Prénom</label></p> <input class="ajout" type="text" name="prenom">
                </div>
                <div class="label">
                    <p><label for="adresse">Adresse</label></p> <input class="ajout" type="text" name="adresse">
                </div>
                <div class="label">
                    <p><label for="cp">Code postal</label></p> <input class="ajout" type="text" name="cp">
                </div>
                <div class="label">
                    <p><label for="ville">Ville</label></p> <input class="ajout" type="text" name="ville">
                </div>
            </div>
            <div class="lbbcontainer">
                <div class="label">
                    <label for="type">Type :</label>
                    <select name="type" id="ty">
                        <?php


                        foreach ($level as $row) {


                            $type = $row['numType'];
                            echo "<option>$type</option>";
                        }
                        ?>

                    </select>
                </div>


                <div class="label2">
                    <label for="niveau">Niveau :</label>

                    <select name="niveau">
                        <option selected>Expert</option>
                        <option>Confirmé</option>
                        <option>Débutant</option>

                    </select>

                </div>


                <input class="sub" type="submit" value="Ajouter">
            </div>
        </div>
        <hr>
        <div class="return">
            <div class="itmcontainer">
                <a href="gestionAdh.php">Gestion des adhérents</a>
            </div>
            <div class="itmcontainer">
                <a href="indexlogged.php">Retour à l'accueil</a>
            </div>
        </div>


    </form>


    <?php
    try {


        if (
            isset($_POST['matricule']) && isset($_POST['nom'])
            && isset($_POST['prenom']) && isset($_POST['niveau']) && isset($_POST['adresse']) && isset($_POST['cp'])
        ) {
            // Récupération des champs saisis
            $matricule = $_POST['matricule'];
            $numTy = $_POST['type'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $ville = $_POST['ville'];
            $cp = $_POST['cp'];
            $niveau = $_POST['niveau'];






            $stmtAjoutAdh = $bdd->prepare("INSERT INTO adherent VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmtAjoutAdh->execute(array($matricule, $nom, $prenom, $adresse, $ville, $cp, $niveau, $numTy));





            $modifOk = true;
        }
    } catch (Exception $e) {
        $msgErreur = $e->getMessage() . '(' . $e->getFile() . ', ligne ' . $e->getLine() . ')';
    }
    ?>



    <p>
        <?php
        if (isset($modifOk)) {
            echo "L'adhèrent a bien été rajouté ";
        }
        ?>
    </p>






</body>

</html>