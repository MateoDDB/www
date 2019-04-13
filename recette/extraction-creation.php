<?php


header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=les-saisies-creation.csv');

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
//mysqli_set_charset($conn, "utf8");

$select_table = "SELECT * FROM SaisieCreation_Recette";
$res = $conn->query($select_table);
$rows = $res->fetch_assoc();

          // selection de la table à exporter
/*$select_table = mysqli_query('select * from '.$_GET['adherentCrea']);
$rows = mysql_fetch_assoc($select_table); */

if($rows) {
  makecsv(array_keys($rows));
}

while($rows) {
  makecsv($rows);
  $rows = $res->fetch_assoc();
}

// la fonction magique
function makecsv($num_field_names) {
  $separate = '';

  // on formate les données pour remplacer les séparateurs par des traits d'union
  foreach ($num_field_names as $field_name) {
    $field_name = str_replace( array(';'), array( ','), $field_name);
    echo $separate . $field_name;

    // on insère un séparateur de champ reconnu par Excel (si ça ne marche pas, essayez avec une virgule)
    $separate = ';';
  }

  // nouvelle rangée, nouvelle ligne
  echo "\r";
}
?>
