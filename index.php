<!DOCTYPE html>
<html lang="fr">
<head>
  <title> Summer code camp</title>
  <link rel="stylesheet" href="vitrine.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <nav>
                    <a  href ="index.php?Page=Accueil"> ACCUEIL </a> 
                    <a  href ="index.php?Page=Programme"> PROGRAMME</a> 
                    <a  href ="index.php?Page=Contact"> CONTACT </a> 
                    <a  href ="index.php?Page=contact-form">Contact formulaire </a>
            </nav>
  <h1> Summer Code Camp</h1>

<?php 
if ($_GET["Page"] == "Accueil"){
        include ("vitrine-accueil.php"); 
}

elseif ($_GET ["Page"] == "Programme") {

    include ("vitrine-programme.php"); 
}
elseif ($_GET["Page"] == "Contact"){
    include ("vitrine-contacts.php");
}

elseif ($_GET["Page"] == "contact-form"){
    include ("contact-form.php");
}

else
{include '404.php';}



    ?>

    <footer>
                
                <div class="image">
                    <a href="https://www.epitech.eu/"><img  src="logo_epitech.png" alt="logo"></a>
                </div>
                
        </footer>