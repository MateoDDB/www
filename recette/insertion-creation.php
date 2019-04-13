<!--  DEBUT DU PHP-->
<?php


	if($_POST)
	{


	$Projet = isset($_POST['Projet'])?$_POST['Projet']:'';

	$StadeProjet1 = isset($_POST['StadeProjet1'])?$_POST['StadeProjet1']:'';
	$StadeProjet2 = isset($_POST['StadeProjet2'])?$_POST['StadeProjet2']:'';
	$StadeProjet3 = isset($_POST['StadeProjet3'])?$_POST['StadeProjet3']:'';
	$StadeProjet4 = isset($_POST['StadeProjet4'])?$_POST['StadeProjet4']:'';
	$StadeProjet = $StadeProjet1."".$StadeProjet2."".$StadeProjet3."".$StadeProjet4;
	$ExpCreation = isset($_POST['ExpCreation'])?$_POST['ExpCreation']:'';
	$ExpProEtFor = isset($_POST['ExpProEtFor'])?$_POST['ExpProEtFor']:'';
	$FreinsRencontres = isset($_POST['FreinsRencontres'])?$_POST['FreinsRencontres']:'';
	$SituationDuBeneficiaire = isset($_POST['SituationDuBeneficiaire'])?$_POST['SituationDuBeneficiaire']:'';
	$EtesVousAccompagne = isset($_POST['EtesVousAccompagne'])?$_POST['EtesVousAccompagne']:'';
	$SiOuiQui = isset($_POST['SiOuiQui'])?$_POST['SiOuiQui']:'';
	$SouhaitezVousEtreRecontacte = isset($_POST['SouhaitezVousEtreRecontacte'])?$_POST['SouhaitezVousEtreRecontacte']:'';
	$Nom = isset($_POST['Nom'])?$_POST['Nom']:'';
	$Prenom = isset($_POST['Prenom'])?$_POST['Prenom']:'';
	$DateDeNaissance = isset($_POST['DateDeNaissance'])?$_POST['DateDeNaissance']:''; $DateDeNaissance = str_replace("/","-",$DateDeNaissance); $DateDeNaissance = date("Y-m-d", strtotime($DateDeNaissance));
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
	$OrientationCreation = isset($_POST['OrientationCreation'])?$_POST['OrientationCreation']:'';
	$ComStadeProjet = isset($_POST['ComStadeProjet'])?$_POST['ComStadeProjet']:'';
	$Sexe = isset($_POST['Sexe'])?$_POST['Sexe']:'';
	$NiveauEtude = isset($_POST['NiveauEtude'])?$_POST['NiveauEtude']:'';


//var_dump($_POST);



		//$syntaxe='#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i';
/*if ($Signature!="")
	{*/
	if ($Projet!="" || $StadeProjet!="" || $SituationDuBeneficiaire!="" || $EtesVousAccompagne!="" || $SouhaitezVousEtreRecontacte!="" || $Prenom!="" || $Nom!="" || $Prenom!="" || $Telephone_1!="" || $Sexe!="" || $LieuBus!="")
	{



						//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
						$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
						//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
						mysqli_set_charset($conn, "utf8");
						//var_dump($dn);



						$dm = $conn->query ('insert into SaisieCreation_Recette(Projet, StadeProjet, ComStadeProjet, ExpCreation, ExpProEtFor, FreinsRencontres, SituationDuBeneficiaire, NiveauEtude, EtesVousAccompagne, SiOuiQui, SouhaitezVousEtreRecontacte, Nom, Prenom, Sexe, DateDeNaissance, NumeroRue, NomRue, Ville, CodePostal, Quartier, Telephone_1, Telephone_2, email, Signature, LieuBus, DateBus, StructureConseiller, InfoCom, CommentaireInfoCom, OrientationCreation)
						values ("'.$Projet.'", "'.$StadeProjet.'", "'.$ComStadeProjet.'","'.$ExpCreation.'","'.$ExpProEtFor.'","'.$FreinsRencontres.'", "'.$SituationDuBeneficiaire.'", "'.$NiveauEtude.'","'.$EtesVousAccompagne.'", "'.$SiOuiQui.'", "'.$SouhaitezVousEtreRecontacte.'", "'.$Nom.'", "'.$Prenom.'", "'.$Sexe.'",
						"'.$DateDeNaissance.'", "'.$NumeroRue.'","'.$NomRue.'","'.$Ville.'","'.$CodePostal.'","'.$Quartier.'","'.$Telephone_1.'","'.$Telephone_2.'","'.$email.'","'.$Signature.'","'.$LieuBus.'",NOW(),"'.$StructureConseiller.'","'.$InfoCom.'","'.$CommentaireInfoCom.'","'.$OrientationCreation.'")');



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
		else
		{

				$messageSaisie = 'Il manque un ou plusieurs champs obligatoire à remplir. Veuillez reprendre la saisie.';
		}
/*	}
	else
	{

			$messageSign = 'Veuillez cocher la certification à la fin du formulaire.';


	}*/

}
?>
