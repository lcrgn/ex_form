<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php




echo "<h2> Veuillez remplir le formulaire afin de vous inscrire sur notre liste de patients </h2>";
include('ajout-patient.php');

// je récupère les données saisies dans ma base de donnée
$query2 = 'SELECT * FROM patients ';
$sql2 = $database -> prepare($query2);
$sql2-> execute();
$patients = $sql2 -> fetchAll();


echo '<h2> Les noms des clients </h2>';

// je les définis chaque patient comme element pour tous les afficher
// je met le liens href pour récupérer les informations supplémentaires sur le patient
foreach($patients as $patient){
    ?>

    <a href="profil-patient.php"cid="button"> <?php echo $patient['lastname']." "; $patient['firstname']; ?> </a> <br>

    <?php

}








?>


</body>
</html>

