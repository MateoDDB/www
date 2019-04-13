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
$result = $conn->query ("select SituationAujourdhui, count(case when Sexe='M' then 1 end) as NbM, count(case when Sexe='F' or Sexe='Femme' then 1 end) as NbF, count(*) as total from SaisieEmploi_Recette group by SituationAujourdhui");
//$result = $conn->query ('SELECT SituationAujourdhui, COUNT(*) as nb FROM SaisieEmploi_Recette s GROUP BY s.SituationAujourdhui');


$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

echo json_encode($data,JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);


?>
