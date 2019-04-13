<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/
header('Content-Type: text/plain; charset=UTF-8') ;

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");


$result = $conn->query ('SELECT SecteurActivite, COUNT(*) as nb FROM SaisieEmploi_Recette s GROUP BY s.SecteurActivite');

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

echo json_encode($data,JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);


?>
