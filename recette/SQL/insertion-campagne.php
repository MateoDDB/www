<!--  DEBUT DU PHP-->
<?php


	if($_POST)
	{


	$NomCampagne = isset($_POST['NomCampagne'])?$_POST['NomCampagne']:'';
	$AuteurCampagne = isset($_POST['AuteurCampagne'])?$_POST['AuteurCampagne']:'';
	$DemandeurCampagne = isset($_POST['DemandeurCampagne'])?$_POST['DemandeurCampagne']:'';
	$VilleCampagne = isset($_POST['VilleCampagne'])?$_POST['VilleCampagne']:'';
	$DebutCampagne = isset($_POST['DebutCampagne'])?$_POST['DebutCampagne']:''; $DebutCampagne = str_replace("/","-",$DebutCampagne); $DebutCampagne = date("Y-m-d", strtotime($DebutCampagne));
	$FinCampagne = isset($_POST['FinCampagne'])?$_POST['FinCampagne']:''; $FinCampagne = str_replace("/","-",$FinCampagne); $FinCampagne = date("Y-m-d", strtotime($FinCampagne));
	
	
	
	include('SQL/connexionBD.php');

	$dm = $conn->query ('insert into Campagne(NomCampagne, VilleCampagne, AuteurCampagne, DemandeurCampagne, DebutCampagne, FinCampagne, DateModif)
	values ("'.$NomCampagne.'", "'.$VilleCampagne.'", "'.$AuteurCampagne.'","'.$DemandeurCampagne.'","'.$DebutCampagne.'","'.$FinCampagne.'",NOW())');
	

		if($dm=="TRUE")
		{
			//Mettre un massage ...
			//On enregistre les informations dans la base de donnee

				$messageP = 'Nous vous avons bien enregistrer';
		}
		else
		{
			//Sinon on dit quil y a eu une erreur

			$messageN = 'Une erreur est survenue lors de l\'inscription.';
		}



	}
?>
