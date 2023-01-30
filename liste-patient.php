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



$query2 = 'SELECT * FROM patients ';
$sql2 = $database -> prepare($query2);
$sql2-> execute();
$patients = $sql2 -> fetchAll();


echo '<h2> Les noms des clients </h2>';
include('profil-patient.php');
$button = document.getElementById('button');
$button.addEventListener('click', function(){
    ?>

    <div> <?php echo $patient['phone']." "; echo $patient['mail']; ?> </div> <br>

    <?php
    
});


foreach($patients as $patient){
    ?>

    <button id="button"> <?php echo $patient['lastname']." "; $patient['firstname']; ?> </button> <br>

    <?php

}








?>


</body>
</html>

