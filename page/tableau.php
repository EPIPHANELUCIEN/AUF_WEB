<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>✨Tableau AUF</title>
  <link rel="stylesheet" href="../style/uikit.min.css">
  <link rel="stylesheet" href="./tab.css">
</head>

<body>

  <section id="h">
  </section>

  


  <section class="header">
    <div >
      <a href="../index.php">
        <img src="../images/Logo_AUF.png" alt="" class="logo">
      </a>
      </div>
</section>
<!-- fin header -->











<!-- fin header -->

<div class="decor"> </div>
<marquee>
<center>
<h1 class="titre">BIENVENUE A LA BIBLIOTHEQUE DE L'AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE</h1>
</center>
</marquee>
<div class="decor"> </div>

<section class="e">
  <marquee behavior="scroll" direction="right">
    <div classe="p">
      <img src="../images/play/1(1).jpg" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </marquee>
  <marquee behavior="scroll" direction="up">
    <div classe="p">
      <img src="../images/play/1(1).jpg" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </marquee>
  <marquee behavior="scroll" direction="left">
    <div classe="p">
      <img src="../images/play/1(1).jpg" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </marquee>
</section>

<section class="bag"> 
  <div class="container mt-3">
    <center>
    <h1>Tableau des abonnés de AUF</h1>
    <p>Ce tableau contient la liste des abonnés enregistreé de lAUF</p>
  </center>

  <?php
  include ("./connexion_bdd.php");

$query = "SELECT * FROM `abonne`";
$result = mysqli_query ($connexion,$query);
if ($result){
  echo '
    <table>
      <tr class="tete">
        <th scope="col">Nub</th>
        <th scope="col">Nom</th>
        <!-- on ajoute scope="col">et ajoute le nom relier -->
        <th scope="col">Prenom</th>
        <th scope="col">Date_de_Naissance</th>
        <th scope="col">Numero_tel</th>
        <th scope="col">Date_de-debut_Abonnement</th>
        <th scope="col">Email</th>
      </tr>

      <tr>
      <td>1</td>
      <td>SANOU</td>
      <td>Ali</td>
      <td>04-03-20</td>
      <td>20 02 20 02</td>
      <td>04-06-21</td>
      <td>sanouali@yahoo.fr</td>
    </tr>
      <tr>
      <td>2</td>
      <td>SAWADOGO</td>
      <td>Valerie</td>
      <td>04-03-98</td>
      <td>70 82 20 22</td>
      <td>04-06-21</td>
      <td>swadogoval253@gmail.com</td>
    </tr>

      ';
      $i=3;
        while ($data= mysqli_fetch_assoc($result)){
          echo '
          <tr>
          <th scope="row">'.$i.'</th>
        
          <td>'.$data["nom"].'</td>
          <td>'.$data["prenom"].'</td>
          <td>'.$data["date_de_naissance"].'</td>
          <td>'.$data["telephone"].'</td>
          <td>'.$data["date_de_debut_abonement"].'</td>
          <td>'.$data["email"].'</td>
          
        </tr>
          ';
          $i++;
      }
      echo '
    
      </tbody>
    </table>
    ';
  }
    ?>
  </div>


<!-- footer -->
<section class="foot">
  <div >
      <img src="../images/Logo_AUF.png" alt="" class="lago">
  </div>
      <ul class="m">
          <li><h2>Nous contacter</h2></li>
          <li>+226 25 31 61 88</li>
          <li>+226 25 31 61 90</li>
          <li>info@bf.auf.org</li>
      </ul>
</section>
<!-- footer -->











  <script src="../js/uikit.min.js"></script>
  <script src="../js/uikit-icons.min.js"></script>
  <script src="../js/tab.js"></script>
</body>

</html>