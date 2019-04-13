
<?php
//export.php
$connect = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
$output = '';

  mysqli_set_charset($connect, "utf8_general_ci");
 $query = "SELECT * FROM SaisieEmploi_Recette";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table table-bordered" bordered="10">
                    <tr>
                         <th>ID</th>
                         <th>Projet</th>
                         <th>Recherche Emploi</th>
                         <th>Recherche Formation</th>
                         <th>Expérience professionnelle</th>
                         <th>Niveau étude</th>
                         <th>Bac +2</th>
                         <th>Supérieur à Bac +2</th>
                         <th>Commentaire Diplôme</th>
                         <th>Situation</th>
                         <th>Etes vous accompagné par une structure?</th>
                         <th>Souhaitez vous être recontacte?</th>
                         <th>Reponse par rapport à un accompagnement via une structure</th>
                         <th>Nom</th>
                         <th>Prénom</th>
                         <th>Sexe</th>
                         <th>Date de naissance</th>
                         <th>n° de rue</th>
                         <th>nom de rue</th>
                         <th>Ville</th>
                         <th>Quartier</th>
                         <th>Telephone 1</th>
                         <th>Telephone 2</th>
                         <th>email</th>
                        <th>Signature</th>
                        <th>Lieu du Bus</th>
                        <th>Date du Bus</th>
                        <th>Structure du conseiller</th>
                        <th>Information communiquée</th>
                        <th>Commentaire Information communiquée</th>
                        <th>OrientationEmploi</th>




                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
     <td>'.$row["IdSaisieEmploi"].'</td>
     <td>'.$row["Projet"].'</td>
     <td>'.$row["RechercheEmploi"].'</td>
     <td>'.$row["RechercheFormation"].'</td>
     <td>'.$row["SecteurActivite"].'</td>
     <td>'.$row["ExpProfessionnelle"].'</td>
     <td>'.$row["NiveauEtude"].'</td>
     <td>'.$row["BacPlusDeux"].'</td>
     <td>'.$row["SupBacPlusDeux"].'</td>
     <td>'.$row["CommentaireSurDiplôme"].'</td>
     <td>'.$row["ContraintesOuBesoins"].'</td>
     <td>'.$row["SituationAujourdhui"].'</td>
     <td>'.$row["EtesVousAccompagneParStructure"].'</td>
     <td>'.$row["SouhaitezVousEtreRecontacte"].'</td>
     <td>'.$row["ReponseAccompagneParStructure"].'</td>
     <td>'.$row["ComReponseAccompagneParStructure"].'</td>
     <td>'.$row["Nom"].'</td>
     <td>'.$row["Prenom"].'</td>
     <td>'.$row["Sexe"].'</td>
     <td>'.$row["DateNaissance"].'</td>
     <td>'.$row["NumeroRue"].'</td>
     <td>'.$row["NomRue"].'</td>
     <td>'.$row["Ville"].'</td>
     <td>'.$row["CodePostal"].'</td>
     <td>'.$row["Quartier"].'</td>
     <td>'.$row["Telephone_1"].'</td>
     <td>'.$row["Telephone_2"].'</td>
     <td>'.$row["email"].'</td>
     <td>'.$row["Signature"].'</td>
     <td>'.$row["LieuBus"].'</td>
     <td>'.$row["DateBus"].'</td>
     <td>'.$row["StructureConseiller"].'</td>
     <td>'.$row["InfoCom"].'</td>
     <td>'.$row["CommentaireInfoCom"].'</td>
     <td>'.$row["OrientationEmploi"].'</td>

    </tr>
   ';

  }
  $output .= '</table>';
  //header('Content-Type: text/xls');
   header("Content-type: application/octet-stream");
  header('Content-Disposition: attachment; filename=emploi_'.date("d-m-Y").'.xls');


  echo $output;
 }





 /*header('Content-Type: text/csv');
 header('Content-Disposition: attachment; filename=extract-emploi_'.date("d-m-Y").'.csv');

$connect = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
//$output = '';

  mysqli_set_charset($connect, "utf8_general_ci");
 $query = "SELECT * FROM SaisieEmploi_Recette";
 $res = $connect->query($query);
 $rows = $res->fetch_assoc();

if($rows) {
  makecsv(array_keys($rows));
}

while($rows) {
  makecsv($rows);
  $rows = $res->fetch_assoc();
}

  $output = 'Nom;prenom;ville';

 echo $output."\r";
  while($row = $res->fetch_assoc())
  {
  $row = str_replace(array(";"), array(','), $row);
    echo $row["Nom"].$row["Prenom"].$row["Ville"];

   $output = ';';

  }echo "\r";*/


?>
