<?php

$date = date("d-m-Y"); $heure = date("H:i");





if($_POST){



$IdSaisieEmploi= isset($_POST['IdSaisieEmploi'])?$_POST['IdSaisieEmploi'] :'';
$OrientationEmploi= isset($_POST['OrientationEmploi'])?$_POST['OrientationEmploi'] :'';
$DateBus= isset($_POST['DateBus'])?$_POST['DateBus' ]:'';
$Projet= isset($_POST['Projet'])?$_POST['Projet' ]:'';
$RechercheEmploi= isset($_POST['RechercheEmploi'])?$_POST['RechercheEmploi' ]:'';
$RechercheFormation= isset($_POST['RechercheFormation'])?$_POST['RechercheFormation' ]:'';
$SecteurActivite= isset($_POST['SecteurActivite'])?$_POST['SecteurActivite' ]:'';
$ExpProfessionnelle= isset($_POST['ExpProfessionnelle'])?$_POST['ExpProfessionnelle' ]:'';
$NiveauEtude= isset($_POST['NiveauEtude'])?$_POST['NiveauEtude' ]:'';
$BacPlusDeux= isset($_POST['BacPlusDeux'])?$_POST['BacPlusDeux' ]:'';
$SupBacPlusDeux= isset($_POST['SupBacPlusDeux'])?$_POST['SupBacPlusDeux' ]:'';
$CommentaireSurDiplôme= isset($_POST['CommentaireSurDiplôme'])?$_POST['CommentaireSurDiplôme' ]:'';
$ContraintesOuBesoins= isset($_POST['ContraintesOuBesoins'])?$_POST['ContraintesOuBesoins' ]:'';
$SituationAujourdhui= isset($_POST['SituationAujourdhui'])?$_POST['SituationAujourdhui' ]:'';
$EtesVousAccompagneParStructure= isset($_POST['EtesVousAccompagneParStructure'])?$_POST['EtesVousAccompagneParStructure' ]:'';
$ReponseAccompagneParStructure= isset($_POST['ReponseAccompagneParStructure'])?$_POST['ReponseAccompagneParStructure' ]:'';
$ComReponseAccompagneParStructure= isset($_POST['ComReponseAccompagneParStructure'])?$_POST['ComReponseAccompagneParStructure' ]:'';
$Nom= isset($_POST['Nom'])?$_POST['Nom' ]:'';
$Prenom= isset($_POST['Prenom'])?$_POST['Prenom' ]:'';
$DateNaissance= isset($_POST['DateNaissance'])?$_POST['DateNaissance' ]:'';
$NumeroRue= isset($_POST['NumeroRue'])?$_POST['NumeroRue' ]:'';
$NomRue= isset($_POST['NomRue'])?$_POST['NomRue' ]:'';
$Ville= isset($_POST['Ville'])?$_POST['Ville' ]:'';
$CodePostal= isset($_POST['CodePostal'])?$_POST['CodePostal' ]:'';
$Quartier= isset($_POST['Quartier'])?$_POST['Quartier' ]:'';
$Telephone_1= isset($_POST['Telephone_1'])?$_POST['Telephone_1' ]:'';
$Telephone_2= isset($_POST['Telephone_2'])?$_POST['Telephone_2' ]:'';
$email= isset($_POST['email'])?$_POST['email' ]:'';
$Signature= isset($_POST['Signature'])?$_POST['Signature' ]:'';
$LieuBus= isset($_POST['LieuBus'])?$_POST['LieuBus' ]:'';
$StructureConseiller= isset($_POST['StructureConseiller'])?$_POST['StructureConseiller' ]:'';
$InfoCom= isset($_POST['InfoCom'])?$_POST['InfoCom' ]:'';
$CommentaireInfoCom= isset($_POST['CommentaireInfoCom'])?$_POST['CommentaireInfoCom' ]:'';
$Sexe= isset($_POST['Sexe'])?$_POST['Sexe' ]:'';


$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");


if ($_POST['action']=="supp"){

	$tabU = $conn->query ('delete from SaisieEmploi_Recette where IdSaisieEmploi='.$IdSaisieEmploi.'');
  $messageSup = 'Votre suppression est un succès Mr ou Mme ';


header("Location: recherche-emploi-et-formation.php?success=IdSaisieEmploi");
}


if ($_POST['action']=="modif"){
	//$sql = "update Users_Recette SET email =". $_POST['email'].",nom =". $_POST['nom'].",prenom =". $_POST['prenom'].",telephone =". $_POST['telephone'].",date_creation =". $_POST['date_creation'].",UserName =". $_POST['UserName'].", profil =". $_POST['profil']."
	//WHERE Users_Recette.IdUsers =".$_POST['IdUsers']."";

  $sql = "update  SaisieEmploi_Recette  set  IdSaisieEmploi = '".$IdSaisieEmploi."', Projet = '".$Projet."', RechercheEmploi = '".$RechercheEmploi."', RechercheFormation = '".$RechercheFormation."', SecteurActivite = '".$SecteurActivite."', ExpProfessionnelle = '".$ExpProfessionnelle."', NiveauEtude = '".$NiveauEtude."',
   BacPlusDeux = '".$BacPlusDeux."', SupBacPlusDeux = '".$SupBacPlusDeux."', CommentaireSurDiplôme = '".$CommentaireSurDiplôme."', ContraintesOuBesoins = '".$ContraintesOuBesoins."'
   ,SituationAujourdhui = '".$XXX."', EtesVousAccompagneParStructure = '".$EtesVousAccompagneParStructure."', ReponseAccompagneParStructure = '".$ReponseAccompagneParStructure."', ComReponseAccompagneParStructure = '".$ComReponseAccompagneParStructure."', Nom = '".$Nom."', Prenom = '".$Prenom."', DateNaissance = '".$DateNaissance."',
   NumeroRue = '".$NumeroRue."', NomRue = '".$NomRue."', Ville = '".$Ville."',
   CodePostal = '".$CodePostal."', Quartier = '".$Quartier."', Telephone_1 = '".$Telephone_1."', Telephone_2 = '".$Telephone_2."', email = '".$email."', Signature = '".$Signature."',
  LieuBus = '".$LieuBus."', DateBus = '".$DateBus."',
   StructureConseiller = '".$StructureConseiller."', InfoCom = '".$InfoCom."', CommentaireInfoCom = '".$CommentaireInfoCom."', OrientationEmploi = '".$OrientationEmploi."', Sexe = '".$Sexe."' WHERE IdSaisieEmploi = ".$IdSaisieEmploi."";



$tabU = $conn->query ($sql);
	//$tabU = $conn->query ('select * from Users_Recette where IdUsers='.$IdUsers.'');

	//$tabU = $tabU->fetch_assoc();

	      $messageP = 'Votre inscription est un succès';
	}
}




    /*$tabU = $conn->query ('select * from SaisieEmploi_Recette where IdSaisieEmploi='.$IdSaisieEmploi.'');
		$tabU = $tabU->fetch_assoc();*/




    include("header.php");
    $conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
    mysqli_set_charset($conn, "utf8");
    $tabU = $conn->query('select * from SaisieEmploi_Recette where IdSaisieEmploi="'.$IdSaisieEmploi.'"');
    $tabU = $tabU->fetch_assoc();

		?>

		<?php
						if(isset($messageP))
						{
							//echo '<div class="message">'.$message.'</div>';
							?>
									<!-- PHP ALERTS FROM THE FORMS -->

										<div class="alert-success alert" >
												<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
												<strong><?php echo'Bravo, ';?></strong>
														<p><?php echo'Votre inscription est un succès Mr ou Mme '. $Nom  .''; ?></p>
										</div><!-- .alert -->

							<?php
						}
						?>
						<?php
						if(isset($messageSup))
						{
							//echo '<div class="message">'.$message.'</div>';
							?>
									<!-- PHP ALERTS FROM THE FORMS -->

										<div class="alert-success alert" >
												<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
												<strong><?php echo'Bravo, ';?></strong>
														<p><?php echo'Votre suppression est un succès Mr ou Mme '. $Nom  .''; ?></p>
										</div><!-- .alert -->

							<?php
						}
						?>



				<div class="row">

							<div class="col-xl-12 col-lg-12">

								<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
														<i class="flaticon-share m--hide"></i>
														Fiche profil de Mr ou Mme <?php echo $tabU['Nom'];?>
													</a>
												</li>
												<!--<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
														Page 2
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
														Page 3
													</a>
												</li>-->
											</ul>
										</div>
									</div>
									<div class="tab-content">
										<div class="tab-pane active" id="m_user_profile_tab_1">
											<form class="m-form m-form--fit m-form--label-align-right"  action="afficher-formulaire.php" method="post">
												<div class="m-portlet__body">



													<div class="form-group m-form__group row">
														<div class="col-12 ml-auto">
															<h3 class="m-form__section">Les modifications</h3>
														</div>
													</div>
                           <div class="form-group m-form__group row">
                            <h5>N°Formulaire</h5>
                              <input class="form-control bg-secondary m-input" type="text" name="IdUsers" value="<?php echo $tabU['IdSaisieEmploi']; ?>"readonly>
                          </div>
                           <div class="form-group m-form__group row">
                            <h5>Projet</h5>
                             <input class="form-control disabled m-input" type="text" name="Projet" maxlength="500" value="<?php echo $tabU['Projet']; ?>">
                           </div>
                           <div class="form-group m-form__group row">
                            <h5>Recherche emploi</h5>
                             <input class="form-control disabled m-input" type="text" name="RechercheEmploi" maxlength="500" value="<?php echo $tabU['RechercheEmploi']; ?>">
                           </div>

                          <div class="form-group m-form__group row">
                            <h5>Recherche formation</h5>
                             <input class="form-control disabled m-input" type="text" name="RechercheFormation" maxlength="500" value="<?php echo $tabU['RechercheFormation']; ?>">
                           </div>
                            <div class="form-group m-form__group row">
                            <h5>Secteur activité</h5>
                             <input class="form-control disabled m-input" type="text" name="SecteurActivite" maxlength="500" value="<?php echo $tabU['SecteurActivite']; ?>">
                           </div>
                           <div class="form-group m-form__group row">
                            <h5>Expérience professionnelle</h5>
                             <input class="form-control disabled m-input" type="text" name="ExpProfessionnelle" maxlength="500" value="<?php echo $tabU['ExpProfessionnelle']; ?>">
                           </div>
                           <div class="form-group m-form__group row">
                            <h5>Niveau d'étude ou diplôme</h5>
                             <input class="form-control disabled m-input" type="text" name="NiveauEtude" maxlength="500" value="<?php echo $tabU['NiveauEtude']; ?>">
                           </div>


                          <div class="form-group m-form__group row">
                            <h5> Les contraintes ou les besoins particuliers (temps partiel, handicap, langue…)</h5>
                             <input class="form-control disabled m-input" type="text" maxlength="500" name="ContraintesOuBesoins" value="<?php echo $tabU['ContraintesOuBesoins']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Situation aujourd'hui</h5>
                             <input class="form-control disabled m-input" type="text" maxlength="500" name="SituationAujourdhui" value="<?php echo $tabU['SituationAujourdhui']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Accompagné par une structure d’insertion professionnelle</h5>
                             <input class="form-control disabled m-input" type="text" maxlength="500" name="EtesVousAccompagneParStructure" value="<?php echo $tabU['EtesVousAccompagneParStructure']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Si oui, par qui ?</h5>
                             <input class="form-control disabled m-input" type="text" maxlength="500" name="ReponseAccompagneParStructure" value="<?php echo $tabU['ReponseAccompagneParStructure']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Commentaire</h5>
                             <input class="form-control disabled m-input" type="text" name="ComReponseAccompagneParStructure" maxlength="500" value="<?php echo $tabU['ComReponseAccompagneParStructure']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Nom</h5>
                             <input class="form-control disabled m-input" type="text" name="Nom" maxlength="250" value="<?php echo $tabU['Nom']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Prenom</h5>
                             <input class="form-control disabled m-input" type="text" name="Prenom" maxlength="250" value="<?php echo $tabU['Prenom']; ?>">
                           </div>
                           <div class="form-group m-form__group row">
                            <h5>Sexe</h5>
                             <input class="form-control disabled m-input" type="text" name="Sexe" maxlength="15" value="<?php echo $tabU['Sexe']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Date de naissance</h5>
                             <input class="form-control disabled m-input" type="text" name="DateNaissance" maxlength="11" value="<?php echo $tabU['DateNaissance']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>N° Rue</h5>
                             <input class="form-control disabled m-input" type="text" name="NumeroRue" maxlength="255" value="<?php echo $tabU['NumeroRue']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Nom de rue</h5>
                             <input class="form-control disabled m-input" type="text" name="NomRue" maxlength="255" value="<?php echo $tabU['NomRue']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Ville</h5>
                             <input class="form-control disabled m-input" type="text" name="Ville" maxlength="255" value="<?php echo $tabU['Ville']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Code postal</h5>
                             <input class="form-control disabled m-input" type="text" name="CodePostal" maxlength="7" value="<?php echo $tabU['CodePostal']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Quartier</h5>
                             <input class="form-control disabled m-input" type="text" name="Quartier" maxlength="255" value="<?php echo $tabU['Quartier']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Telephone 1</h5>
                             <input class="form-control disabled m-input" type="text" name="Telephone_1" maxlength="15" value="<?php echo $tabU['Telephone_1']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Telephone 2</h5>
                             <input class="form-control disabled m-input" type="text" name="Telephone_2" maxlength="15" value="<?php echo $tabU['Telephone_2']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Adresse email</h5>
                             <input class="form-control disabled m-input" type="text" name="email" maxlength="255" value="<?php echo $tabU['email']; ?>">
                           </div>

                          <div class="form-group m-form__group row">
                            <h5>Lieu du bus</h5>
                             <input class="form-control disabled m-input" type="text" name="LieuBus" maxlength="255" value="<?php echo $tabU['LieuBus']; ?>">
                           </div>
                            <div class="form-group m-form__group row">
                              <h5>Date du bus</h5>
                               <input class="form-control bg-secondary m-input" type="text" name="DateBus" value="<?php echo $tabU['DateBus']; ?>"readonly>
                            </div>
                          <div class="form-group m-form__group row">
                            <h5>Structure où travaille le conseiller </h5>
                             <input class="form-control disabled m-input" type="text" name="StructureConseiller" maxlength="255" value="<?php echo $tabU['StructureConseiller']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Information communiquée</h5>
                             <input class="form-control disabled m-input" type="text" name="InfoCom" maxlength="500" value="<?php echo $tabU['InfoCom']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Commentaire sur information communiquée</h5>
                             <input class="form-control disabled m-input" type="text" name="CommentaireInfoCom" maxlength="500" value="<?php echo $tabU['CommentaireInfoCom']; ?>">
                           </div>


                          <div class="form-group m-form__group row">
                             <h5>Orientation</h5>
                              <input class="form-control bg-warning m-input" type="text" maxlength="500" name="OrientationEmploi" value="<?php echo $tabU['OrientationEmploi']; ?>">
                          </div>


												</div>
												<div class="m-portlet__foot m-portlet__foot--fit">

						                          <div class="form-group m-form__group row text-center ">
						                              <div class=" col-12" style="margin-top: 1em;">
						                            <button type="submit" name="action" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom" value="modif">Modifier</button>&nbsp;&nbsp;
																					<button  type="submit" name="action" class="btn btn-block btn-danger m-btn m-btn--air m-btn--custom" value="supp">Supprimer</button>&nbsp;&nbsp;
						                              </div>
						                            <!--  <div class=" col-12">
						                              <button type="" class="btn btn-block btn-outline-focus m-btn  m-btn--custom" >Annuler</button>
						                              </div>-->
						                          </div>



												</div>
											</form>



										</div>
										<!--<div class="tab-pane " id="m_user_profile_tab_2">
										</div>
										<div class="tab-pane " id="m_user_profile_tab_3">
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


<?php include("footer.php"); ?>
