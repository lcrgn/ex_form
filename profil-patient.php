<?php

$button = document.getElementById('button');
$button.addEventListener('click', function(){
    ?>

    <div> <?php echo $patient['phone']." "; echo $patient['mail']; ?> </div> <br>

    <?php
    
});

// function donneesP($patient){

//     ?>

//     <div> <?php echo $patient['phone']." "; echo $patient['mail']; ?> </div> <br>

//     <?php
    
// }

?>