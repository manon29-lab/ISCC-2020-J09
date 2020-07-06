<form action="admin.php" method="post" enctype="multipart/form-data">
<input type= "file" accept="image/png" name="fichier">
<input type= "text" name="title">
<input type="text" name="description">
<input type="submit" name= "submit">

</form>

<?php

$taille_maxi =2097152;
$taille = (filesize ($_FILES ['fichier'] ['name']));
echo ($taille);
if($taille>$taille_maxi)

{

    echo "Le fichier est trop gros...";

}

function get_file_extension($file) {
    return substr(strrchr($file,'.'),1);

}

$info = get_file_extension($_FILES ['fichier']['name']);

$extensions =  array ('png', 'jpg' , 'jpeg');
if(!in_array($info, $extensions))
{

    echo "Vous devez uploader un fichier de type png, jpg ou jpeg..."; 
}

?>

</body>
</html>
