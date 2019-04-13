<!--  DEBUT DU PHP-->
<?php


	if($_POST)
	{


	//$Projet = isset($_POST['Projet'])?$_POST['Projet']:'';

	$ProjetChoixEmploi = isset($_POST['ProjetChoixEmploi'])?$_POST['ProjetChoixEmploi']:'';
	$ProjetChoixFormation = isset($_POST['ProjetChoixFormation'])?$_POST['ProjetChoixFormation']:'';
	$Projet = $ProjetChoixEmploi."".$ProjetChoixFormation;
	$NomProjet = isset($_POST['NomProjet'])?$_POST['NomProjet']:'';

	$RechercheEmploi = isset($_POST['RechercheEmploi'])?$_POST['RechercheEmploi']:'';
	$RechercheFormation = isset($_POST['RechercheFormation'])?$_POST['RechercheFormation']:'';
	$SecteurActivite = isset($_POST['SecteurActivite'])?$_POST['SecteurActivite']:'';
	$ExpProfessionnelle = isset($_POST['ExpProfessionnelle'])?$_POST['ExpProfessionnelle']:'';
	$NiveauEtude = isset($_POST['NiveauEtude'])?$_POST['NiveauEtude']:'';
	//$BacPlusDeux = isset($_POST['BacPlusDeux'])?$_POST['BacPlusDeux']:'';
	//$SupBacPlusDeux = isset($_POST['SupBacPlusDeux'])?$_POST['SupBacPlusDeux']:'';
	//$CommentaireSurDiplôme = isset($_POST['CommentaireSurDiplôme'])?$_POST['CommentaireSurDiplôme']:'';
	$Diplome = isset($_POST['Diplome'])?$_POST['Diplome']:'';
	$ContraintesOuBesoins = isset($_POST['ContraintesOuBesoins'])?$_POST['ContraintesOuBesoins']:'';
	$SituationAujourdhui = isset($_POST['SituationAujourdhui'])?$_POST['SituationAujourdhui']:'';
	$EtesVousAccompagneParStructure = isset($_POST['EtesVousAccompagneParStructure'])?$_POST['EtesVousAccompagneParStructure']:'';
	$ReponseAccompagneParStructure = isset($_POST['ReponseAccompagneParStructure'])?$_POST['ReponseAccompagneParStructure']:'';
	$ComReponseAccompagneParStructure = isset($_POST['ComReponseAccompagneParStructure'])?$_POST['ComReponseAccompagneParStructure']:'';
	$Nom = isset($_POST['Nom'])?$_POST['Nom']:'';
	$Prenom = isset($_POST['Prenom'])?$_POST['Prenom']:'';
	$DateNaissance = isset($_POST['DateNaissance'])?$_POST['DateNaissance']:''; $DateNaissance = str_replace("/","-",$DateNaissance); $DateNaissance = date("Y-m-d", strtotime($DateNaissance));//date("Y-m-d");
	$NumeroRue = isset($_POST['NumeroRue'])?$_POST['NumeroRue']:'';
	$NomRue = isset($_POST['NomRue'])?$_POST['NomRue']:'';
	$Ville = isset($_POST['Ville'])?$_POST['Ville']:'';
	$CodePostal = isset($_POST['CodePostal'])?$_POST['CodePostal']:'';
	$Quartier = isset($_POST['Quartier'])?$_POST['Quartier']:'';
	$Telephone_1 = isset($_POST['Telephone_1'])?$_POST['Telephone_1']:'';
	$Telephone_2 = isset($_POST['Telephone_2'])?$_POST['Telephone_2']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';
	$Signature = isset($_POST['Signature'])?$_POST['Signature']:'';
	$LieuBus = isset($_POST['LieuBus'])?$_POST['LieuBus']:'';
	$DateBus = isset($_POST['DateBus'])?$_POST['DateBus']:'';
	$StructureConseiller = isset($_POST['StructureConseiller'])?$_POST['StructureConseiller']:'';
	$InfoCom1 = isset($_POST['InfoCom1'])?$_POST['InfoCom1']:'';
	$InfoCom2 = isset($_POST['InfoCom2'])?$_POST['InfoCom2']:'';
	$InfoCom3 = isset($_POST['InfoCom3'])?$_POST['InfoCom3']:'';
	$InfoCom4 = isset($_POST['InfoCom4'])?$_POST['InfoCom4']:'';
	$InfoCom = $InfoCom1."".$InfoCom2."".$InfoCom3."".$InfoCom4;
	$CommentaireInfoCom = isset($_POST['CommentaireInfoCom'])?$_POST['CommentaireInfoCom']:'';
	$OrientationEmploi = isset($_POST['OrientationEmploi'])?$_POST['OrientationEmploi']:'';
	$Sexe = isset($_POST['Sexe'])?$_POST['Sexe']:'';
	$SouhaitezVousEtreRecontacte = isset($_POST['SouhaitezVousEtreRecontacte'])?$_POST['SouhaitezVousEtreRecontacte']:'';
	$CommentaireInfoCom= isset($_POST['CommentaireInfoCom'])?$_POST['CommentaireInfoCom']:'';
	$QuelSuivi= isset($_POST['QuelSuivi'])?$_POST['QuelSuivi']:'';
	$Campagne= isset($_POST['Campagne'])?$_POST['Campagne']:'';


	/*if ($Signature!="")
	{*/
	if ($Projet!="" || $RechercheEmploi!="" || $RechercheFormation!="" || $SituationAujourdhui!="" || $Nom!="" || $Prenom!="" || $Telephone_1!="" || $Sexe!="" || $LieuBus!="")
	{



						$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
						//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
						mysqli_set_charset($conn, "utf8");


								$dm = $conn->query ('insert into SaisieEmploi_Recette(Projet, NomProjet, RechercheEmploi, RechercheFormation, SecteurActivite, ExpProfessionnelle, NiveauEtude,Diplome, ContraintesOuBesoins, SituationAujourdhui,
								EtesVousAccompagneParStructure, SouhaitezVousEtreRecontacte, ReponseAccompagneParStructure, ComReponseAccompagneParStructure, Nom, Prenom, Sexe, DateNaissance, NumeroRue, NomRue, Ville, CodePostal, Quartier, Telephone_1, Telephone_2, email,
								Signature, LieuBus, DateBus, StructureConseiller, InfoCom, CommentaireInfoCom, OrientationEmploi, QuelSuivi, Campagne) values ("'.$Projet.'", "'.$NomProjet.'", "'.$RechercheEmploi.'", "'.$RechercheFormation.'","'.$SecteurActivite.'","'.$ExpProfessionnelle.'", "'.$NiveauEtude.'", "'.$Diplome.'", "'.$ContraintesOuBesoins.'", "'.$SituationAujourdhui.'",
								"'.$EtesVousAccompagneParStructure.'", "'.$SouhaitezVousEtreRecontacte.'", "'.$ReponseAccompagneParStructure.'",
								"'.$ComReponseAccompagneParStructure.'","'.$Nom.'","'.$Prenom.'","'.$Sexe.'","'.$DateNaissance.'","'.$NumeroRue.'","'.$NomRue.'","'.$Ville.'","'.$CodePostal.'","'.$Quartier.'","'.$Telephone_1.'","'.$Telephone_2.'","'.$email.'","'.$Signature.'","'.$LieuBus.'",NOW(),"'.$StructureConseiller.'","'.$InfoCom.'","'.$CommentaireInfoCom.'","'.$OrientationEmploi.'","'.$QuelSuivi.'","'.$Campagne.'")');


							if($dm=="TRUE")
							{
								//Mettre un message ...
								//On enregistre les informations dans la base de donnee

									$messageP = 'Nous vous avons bien enregistrer';
							}
							else
							{
								//Sinon on dit quil y a eu une erreur

								$messageN = 'Une erreur est survenue lors de l\'inscription.';
							}

    }

	else
	{

		$messageSaisie = 'Il manque un ou plusieurs champs obligatoires à remplir. Veuillez reprendre la saisie.';
	}
	/*}
	else
	{
	   $messageSign = 'Veuillez cocher la certification à la fin du formulaire.';
	}*/
}
?>
