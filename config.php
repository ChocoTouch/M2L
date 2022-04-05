<?php
define('GOOGLE_ID','72512527576-mjj3mjg3dab1libhjn28sni3e6rqku65.apps.googleusercontent.com');
define('GOOGLE_SECRET','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');


 $hote = "localhost";  
 $pseudo = "root";  
 $mdp = "";  
 $nomdb = "m2l";
 $connect = new PDO("mysql:host=$hote; dbname=$nomdb", $pseudo, $mdp);
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>