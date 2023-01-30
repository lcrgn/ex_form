<?php

include('liste-patient.php');
include('liste-rendezvous.php');

foreach($patients as $patient){
    ?>

    <div> <?php echo $patient['phone']." "; echo $patient['mail']; ?> </div> <br>
    <div> <?php echo $appointments['dateHour']." "; echo $appointments['idPatients']; ?> </div> <br>

    <?php

}



?>