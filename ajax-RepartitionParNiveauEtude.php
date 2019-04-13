<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/
header('Content-Type: text/plain; charset=UTF-8') ;

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");


$tabU = $conn->query ('select * from SaisieCreation_Recette');
$tabU = $tabU->num_rows;
//$tabU = $tabU->fetch_assoc();

$nbFicheCreationTotal = $conn->query ('select count(*) from SaisieCreation_Recette');
$nbFicheFormationTotal = $conn->query ('select count(*) from SaisieEmploi_Recette where Projet="Formation"');
$nbFicheEmploiTotal = $conn->query ('select count(*) from SaisieEmploi_Recette where Projet="Emploi"');
$nbFicheTotal = $nbFicheEmploiTotal + $nbFicheFormationTotal + $nbFicheCreationTotal;




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








$result = $conn->query ('SELECT NiveauEtude, COUNT(*) as nb FROM SaisieEmploi_Recette s GROUP BY s.NiveauEtude');

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

echo json_encode($data,JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);





/*
$conn->close();
$tableau2=array(
	array(
		'label' => 'Creation - Hommes' ,'y' => $NbrHommeCreation ,
	),

	array(
		'label' => 'Emploi - Hommes' ,'y' => $NbrHommeEmploi ,
	),
	array(
		'label' => 'Creation - Femmes' ,'y' => $NbrFemmeCreation ,
	),
	array(
		'label' => 'Emploi - Femmes' ,'y' => $NbrFemmeEmploi ,
	),
);
echo json_encode($tableau2);

*/
?>
