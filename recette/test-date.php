<!--  DEBUT DU PHP-->
<?php
	
//$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
	$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
	mysqli_set_charset($conn, "utf8");

	/*$NbrEmploi = $conn->query ('select count(*) from SaisieEmploi');
	$NbrCreation = $conn->query ('select count(*) from SaisieCreation');*/


//	$membres = $mysqli->query('SELECT * FROM adherentCrea WHERE agglo like "'.$agglo.'"');


//Pour avoir le nombre de saisie emploi
	$NbrEmploi = $conn->query ('select * from SaisieEmploi');
	$dataNE = $NbrEmploi->num_rows;


	$NbrCreation = $conn->query ('select * from SaisieCreation');
	$dataNC = $NbrCreation->num_rows;



//Pour avoir le total de nombre de bénéficiaire 
	$NbrBeneficiaire = $dataNE + $dataNC;


echo $NbrBeneficiaire;

?>



