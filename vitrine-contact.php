<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style/vitrine.css">
    </head>
    <body>
        <div>

            <header>
                <nav>
                    <ul id="menu">
                        <li class="choix" ><a href="vitrine-accueil.html" >Accueil</a></li>
                        <li class="choix"><a href="vitrine-programme.html">Programme</a></li>
                        <li class="choix"> <a href="vitrine-contact.html" id="ici">Contact</a></li>
                    </ul>
                </nav>
                <div id="titre_principal">
                    <h1>Summer Code Camp</h1>
                </div>
            </header>

            <div id="text2">
                <h2 id="titre2">Contact</h2>
                <form class="formulaire" action="contact-form.php" method="post">
            </div>

            <section>
                <form action="/ma-page-de-traitement" method="post">
                    <div>
                        <input type="text" id="name" name="user_name" placeholder="Votre Nom.">
                    </div>
                    <div>
                        <input type="email" id="mail" name="user_mail" placeholder="Votre email.">
                    </div>
                    <div>
                        <textarea id="msg" name="user_message"placeholder="Comment améliorer mon site ?"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </section>

            <?php include ("../footer.php") ?>

        </div>
    </body>
</html>