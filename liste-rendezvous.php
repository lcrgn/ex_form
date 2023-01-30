<?php

include('ajout-rendezvous.php');

echo '<h2> Liste des RDV </h2>';

$query3 = 'SELECT * FROM appointments ';
$sql3 = $database -> prepare($query3);
$sql3-> execute();
$appointments = $sql3 -> fetchAll();

foreach($appointments as $appointments){
    ?>

    <div> <?php echo $appointments['dateHour']." "; echo $appointments['idPatients']; ?> </div> <br>

    <?php

}


 ?> "<a href="ajout-rendezvous.php"> Ajouter un rdv </a>" <?php

?>