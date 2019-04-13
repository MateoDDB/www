<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/
header('Content-Type: text/plain; charset=UTF-8') ;

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");



//$result = $conn->query ('SELECT SituationAujourdhui, COUNT(*) as nb FROM SaisieEmploi_Recette s GROUP BY s.SituationAujourdhui');
$result = $conn->query ("select SituationAujourdhui as situation, count(case when Sexe='M' then 1 end) as NbM, count(case when Sexe='F' or Sexe='Femme' then 1 end) as NbF, count(*) as total from SaisieEmploi_Recette group by SituationAujourdhui");
//$result = $conn->query ('SELECT SituationAujourdhui, COUNT(*) as nb FROM SaisieEmploi_Recette s GROUP BY s.SituationAujourdhui');

//select SituationDuBeneficiaire, count(case when Sexe='M' then 1 end) as NbM, count(case when Sexe='F' or Sexe='Femme' then 1 end) as NbF, count(*) as total from SaisieCreation_Recette group by SituationDuBeneficiaire
$dataEmploi = array();
foreach ($result as $row) {
  array_push($dataEmploi,$row);
}
$data['type']['Emploie'] = $dataEmploi;

$dataCreation = array();
//$result = $conn->query ('SELECT SituationAujourdhui, COUNT(*) as nb FROM SaisieEmploi_Recette s GROUP BY s.SituationAujourdhui');
$result = $conn->query ("select SituationDuBeneficiaire as situation, count(case when Sexe='M' then 1 end) as NbM, count(case when Sexe='F' or Sexe='Femme' then 1 end) as NbF, count(*) as total from SaisieCreation_Recette group by SituationDuBeneficiaire");

foreach ($result as $row) {
  array_push($dataCreation,$row);
}

$data['type']['Creation'] = $dataCreation;

echo json_encode($data,JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);


?>
