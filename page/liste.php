<?php
include ("./connexion_bdd.php");

if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $date_de_naissance = $_POST["date_de_naissance"];
    $date_de_debut_abonnement = $_POST["date_de_debut_abonnement"];
   
    
    
   

    $query = "INSERT INTO `abonne` (`email`,`nom`, `prenom`, `telephone`, `date_de_naissance`,  `date_de_debut_abonement`) 
    VALUES ('$email','$nom', '$prenom', '$telephone', '$date_de_naissance', '$date_de_debut_abonnement')";

    $resultat = mysqli_query ($connexion, $query);

    if ($resultat){
        echo "enregistrement reçut";
        header ("Location: ./formilaire.php");
        exit;
    }
    else {
        echo "enregistrement echouer";
    }
}
?>