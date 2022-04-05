<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mise à jour d'informations</title>
    <link rel="stylesheet" type="text/css" href="style02.css" media="all" />
</head>

<body>

    <h1>Modification des informations d'un adhérent</h1>
    <hr>



    <?php
    try {
        require 'fonctions.php';
        $bdd = getBdd();
        $ajout = "SELECT * FROM type ORDER BY numType";
        $level = $bdd->query($ajout);
        $id = $_GET['id'];
        $req2 = "SELECT * FROM adherent WHERE matriculeAdh= '$id'";

        $result = $bdd->query($req2);
    } catch (Exception $e) {
        $msgErreur = $e->getMessage() . '(' . $e->getFile() . ', ligne ' . $e->getLine() . ')';
    }
    ?>



    <form method="post" action="">
        <?php while ($reponse = $result->fetch()) { ?>
            <div class="lcontainer">
                <div class="lbcontainer">
                    <label for="matricule">Matricule :</label> <input class="ajout" type="text" name="matricule" value="<?= $reponse['matriculeAdh']; ?>"></p>
                    <label for="nom">Nom :</label> <input class="ajout" type="text" name="nom" value="<?= $reponse['nomAdh']; ?>"></p>
                    <label for="prenom">Prénom :</label> <input class="ajout" type="text" name="prenom" value="<?= $reponse['prenomAdh']; ?>"></p>
                    <label for="adresse">Adresse :</label> <input class="ajout" type="text" name="adresse" value="<?= $reponse['adresseAdh']; ?>"></p>
                    <label for="cp">Code postal :</label> <input class="ajout" type="number" name="cp" value="<?= $reponse['cpAdh']; ?>"></p>
                    <label for="ville">Ville :</label> <input class="ajout" type="text" name="ville" value="<?= $reponse['villeAdh']; ?>"></p>
                </div>
                


            <?php
        }

            ?>

            <div class="lbbcontainer">
                <div class="label">
                    <label for="type">Type :</label>
                    <select name="type" id="ty">
                        <?php


                        foreach ($level as $row) {


                            $type = $row['numType'];
                            echo "<option selected>$type</option>";
                        }
                        ?>

                    </select>
                </div>
                <div class="label2">
                    <label for="niveau">Niveau :</label>

                    <select name="niveau">
                        <option>Expert</option>
                        <option>Confirmé</option>
                        <option>Débutant</option>

                    </select>
                </div>


                <input class="sub" type="submit" value="Modifier">

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


        $bdd = getBdd();
        if (
            isset($_POST['matricule']) && isset($_POST['type']) && isset($_POST['nom'])
            && isset($_POST['prenom']) && isset($_POST['niveau']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['cp'])
        ) {

            $matricule = $_POST['matricule'];
            $type = $_POST['type'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $ville = $_POST['ville'];
            $cp = $_POST['cp'];
            $niveau = $_POST['niveau'];

            $req3 = $bdd->prepare("UPDATE adherent SET matriculeAdh='$matricule', numType='$type', nomAdh='$nom', prenomAdh='$prenom', adresseAdh='$adresse', villeAdh='$ville', cpAdh='$cp', niveauAdh='$niveau' WHERE matriculeAdh= '$id' LIMIT 1");
            $req3->execute();


            $modifOk = true;
        }
    } catch (Exception $e) {
        die('Erreur fatale : ' . $e->getMessage());
    }


    ?>


    <p>

        <?php
        if (isset($modifOk)) {
            echo "la modification à été effectuée";
        }
        ?>
    </p>


</body>

</html>