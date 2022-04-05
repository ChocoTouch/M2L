<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer un compte</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    
    <form class ="box" action="" method="post">
        <h1>
            Creation du Compte
        </h1>
        <input type="text" name="username" placeholder="Saisir nom d'utilisateur" id="username">
        <input type="email" name="mail" placeholder="Saisir adresse e-mail" id="mail">
        <input type="password" name="password" placeholder="Saisir mot de passe" id="password">
        <input type="password" name="confpassword" placeholder="Confirmer mot de passe" id="confpassword">
        <input type="submit" name="registerbutton"value="Creer un compte">
        <p>Déja un compte? <a href="login.php">Se connecter</a></p>

    </form>

    <?php
        $id = mysqli_connect("localhost","root","","m2l");
        if(isset($_POST["registerbutton"]))
        {
            extract($_POST);
            if($password == $confpassword){
                $req = "insert into users values (null,'$username','$mail','$password','1')";
                mysqli_query($id,$req);
                echo "<script>alert('votre compte à bien été créer');</script>";
                header("location:login.php");
            }
            else{
                echo "<script>alert('Les mots de passe ne correspondent pas, veuillez reessayer');</script>";
            }
        }
    
    ?>
</body>
</html>