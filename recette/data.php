<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");


$tabU = $conn->query ('select * from SaisieEmploi_Recette ');
$tabU = $tabU->num_rows;
//$tabU = $tabU->fetch_assoc();



//Pour avoi le nombre de femme qui recherche un emploi
	$NbrFemmeEmploi = $conn->query ('select * from SaisieEmploi_Recette where Sexe="F"');
	$NbrFemmeEmploi = $NbrFemmeEmploi->num_rows;
//Pour avoi le nombre de homme qui recherche un emploi
	$NbrHommeEmploi = $conn->query ('select * from SaisieEmploi_Recette where Sexe="M"');
	$NbrHommeEmploi = $NbrHommeEmploi->num_rows;




/*$v = $conn->query ('select DISTINCT Sexe FROM SaisieEmploi_Recette');
  // on va scanner tous les tuples un par un

while ($donnees = $v->fetch_assoc()){
  	// on affiche les résultats
  	//echo  $donnees['Sexe'];

    $NbrHommeEmploi = $conn->query ('select * from SaisieEmploi_Recette where Sexe="'.$donnees['Sexe'].'"');
  	$NbrHommeEmploi = $NbrHommeEmploi->num_rows;




  }*/

//var_dump($donnees['Sexe']);


$tableau=array(
        array(
            'label' => 'Hommes' ,'value' => $NbrHommeEmploi,
            ),
        array(
          'label' => 'Femmes' ,'value' => $NbrFemmeEmploi,
        ));

echo json_encode($tableau);


?>
