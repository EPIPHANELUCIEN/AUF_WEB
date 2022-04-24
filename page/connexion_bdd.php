
<?php
    $connexion = new mysqli ("localhost","root","","auf_bdd");

    if ($connexion->connect_error){
        echo "Connexion à Echouer";
    }
    else {
        echo "Connexion Etablie avec succès"; 
    }
?>