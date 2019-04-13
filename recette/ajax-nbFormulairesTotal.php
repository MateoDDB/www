<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");




//Pour avoi le nombre de femme qui recherche un emploi
	$result = $conn->query ('select IdSaisieEmploi from SaisieEmploi_Recette where Sexe="F"');
	$NbrFemmeEmploi  = $result->num_rows;

	$result = $conn->query ('select IdCreation from SaisieCreation_Recette where Sexe="F"');
	$NbrFemmeCreation  = $result->num_rows;


	$result = $conn->query ('select IdSaisieEmploi from SaisieEmploi_Recette where Sexe="M"');
	$NbrHommeEmploi  = $result->num_rows;

	$result = $conn->query ('select IdCreation from SaisieCreation_Recette where Sexe="M"');
	$NbrHommeCreation  = $result->num_rows;
$totalHomme = $NbrHommeEmploi + $NbrHommeCreation;
$totalFemme = $NbrFemmeCreation + $NbrFemmeEmploi;

$total = $totalHomme + $totalFemme;


$tableau2=array(
        array(
            'label' => 'Hommes' ,'value' => $totalHomme ,
            ),
        array(
          'label' => 'Femmes' ,'value' => $totalFemme,
        )
			);

echo json_encode($tableau2);


?>
