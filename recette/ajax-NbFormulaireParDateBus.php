<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/
header('Content-Type: text/plain; charset=UTF-8') ;

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");


$result = $conn->query('SELECT * from (SELECT  DATE_FORMAT(DateBus, \'%Y-%m-%d\') as date ,\'emploi\' as type, COUNT(*) as nb FROM SaisieEmploi_Recette as e   GROUP BY date
UNION
SELECT DATE_FORMAT(DateBus, \'%Y-%m-%d\') as date ,\'creation\' as type,  COUNT(*) as nb FROM SaisieCreation_Recette as c GROUP BY date) as s GROUP by date , type');

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}
$result = $conn->query('SELECT date, nb from (
  SELECT DATE_FORMAT(DateBus, \'%Y-%m-%d\') as date ,\'emploi\' as type, COUNT(*) as nb FROM SaisieEmploi_Recette as e GROUP BY date
  UNION
   SELECT DATE_FORMAT(DateBus, \'%Y-%m-%d\') as date ,\'creation\' as type, COUNT(*) as nb FROM SaisieCreation_Recette as c GROUP BY date) as s');


$tab = array();
   while($row = mysql_fetch_array($result))
   {
     if($tab[$row.date]== "")
     {
      $tab[$row.date]=parseInt($row.nb);
     }
      $tab[$row.date]+=parseInt($row.nb);
   }



echo json_encode($tab,JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);



?>
