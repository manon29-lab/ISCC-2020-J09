<body>
    <p><form action="index.php?Page=contact-form" method="post">
        <div>
            <label for="name/firstname">Nom/Prénom :</label>
            <input type="text" id="name" name="user_name">
</div>
<div>
    <label for="mail">e-mail :</label>
    <input type="user_email" id="mail" name="user_mail">
</div>
<div>
    <label for="msg"> Message :</label>
    <textarea id="msg" name="user_message"></textarea>
</div>
<input type="submit" value="envoyer" />
</form></p>
<?php 
echo "Nom prénom : ".$_POST['user_name'];
echo "Mail : ".$_POST['user_mail'];
echo "Message : ".$_POST['user_message'];
?> 
</body>