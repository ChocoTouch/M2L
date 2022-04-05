<?php
require('config.php');

session_start();
if(isset($_POST["loginbutton"]))
{
    $id = mysqli_connect("127.0.0.1","root","","M2L");
    $username = mysqli_real_escape_string($id,$_POST["username"]); //sql injection defense (mysqli)
    $password = $_POST["password"];
    
    $req = "select * from users where pseudo = '$username' and password = '$password'";
    $result = mysqli_query($id,$req);
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION["username"] = $username;
        header("location:indexlogged.php");
    }
    else
    {
        $error = "Username or Password error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="css/stylelogin.css">


</head>
<body>
    <form class ="box" action="login.php" method="post">
        
        <h1>
            Connexion
        </h1>
        <p class="googleconnect">
            <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&redirect_uri=<?= urlencode('http://localhost/F2I2022INITSLAM/JavaScript/SitedelaM2L/connect.php') ?>&response_type=code&client_id=<?= GOOGLE_ID ?>&">Se connecter via google</a>
        </p>
        <input type="text" name="username" placeholder="Saisir nom d'utilisateur" id="username">
        <input type="password" name="password" placeholder="Saisir mot de passe" id="password">
        <input type="submit" name="loginbutton"value="Se connecter">
        <p>Pas de compte ? <a href="register.php">S'enregistrer</a></p>

    </form>
    
</body>
</html>