<?php

if (isset($_POST['login']) && isset ($_POST ['password']) && $_POST ['password']== "2020") {

echo "login : " .$_POST['login'];
echo "<br>password : ".$_POST['password'];

session_start();

$_SESSION ["id"]= $_POST ['login'];
echo "<a href= 'mini-site-routing.pho?page=1' </a>" ; 
}

else {
    echo "Mauvais couple identifiant/mot de passe.";
    echo "<a href= 'connexion.php' > connexion </a>";
}


?>