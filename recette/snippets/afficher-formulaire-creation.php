<?php

$date = date("d-m-Y"); $heure = date("H:i");




//var_dump($_POST);
if($_POST){


$IdCreation = isset($_POST['IdCreation'])?$_POST['IdCreation']:'';
$Projet = isset($_POST['Projet'])?$_POST['Projet']:'';
$StadeProjet = isset($_POST['StadeProjet'])?$_POST['StadeProjet']:'';
$ComStadeProjet = isset($_POST['ComStadeProjet'])?$_POST['ComStadeProjet']:'';
$ExpCreation = isset($_POST['ExpCreation'])?$_POST['ExpCreation']:'';
$ExpProEtFor = isset($_POST['ExpProEtFor'])?$_POST['ExpProEtFor']:'';
$FreinsRencontres = isset($_POST['FreinsRencontres'])?$_POST['FreinsRencontres']:'';
$SituationDuBeneficiaire = isset($_POST['SituationDuBeneficiaire'])?$_POST['SituationDuBeneficiaire']:'';
$EtesVousAccompagne = isset($_POST['EtesVousAccompagne'])?$_POST['EtesVousAccompagne']:'';
$SiOuiQui = isset($_POST['SiOuiQui'])?$_POST['SiOuiQui']:'';
$SouhaitezVousEtreRecontacte = isset($_POST['SouhaitezVousEtreRecontacte'])?$_POST['SouhaitezVousEtreRecontacte']:'';
$Nom = isset($_POST['Nom'])?$_POST['Nom']:'';
$Prenom = isset($_POST['Prenom'])?$_POST['Prenom']:'';
$Sexe = isset($_POST['Sexe'])?$_POST['Sexe']:'';
$DateDeNaissance = isset($_POST['DateDeNaissance'])?$_POST['DateDeNaissance']:'';
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
//$DateBus = date("d/m/Y", strtotime($DateBus));//date("Y-m-d");
$StructureConseiller = isset($_POST['StructureConseiller'])?$_POST['StructureConseiller']:'';
$InfoCom = isset($_POST['InfoCom'])?$_POST['InfoCom']:'';
$CommentaireInfoCom = isset($_POST['CommentaireInfoCom'])?$_POST['CommentaireInfoCom']:'';
$OrientationCreation = isset($_POST['OrientationCreation'])?$_POST['OrientationCreation']:'';
$NiveauEtude= isset($_POST['NiveauEtude'])?$_POST['NiveauEtude' ]:'';

$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");

if ($_POST['action']=="modif"){



    $resultat = $conn->query('update SaisieCreation_Recette set Projet="'.$Projet.'", StadeProjet="'.$StadeProjet.'", ComStadeProjet="'.$ComStadeProjet.'", ExpCreation="'.$ExpCreation.'", ExpProEtFor="'.$ExpProEtFor.'", FreinsRencontres="'.$FreinsRencontres.'", SituationDuBeneficiaire="'.$SituationDuBeneficiaire.'",
       EtesVousAccompagne="'.$EtesVousAccompagne.'", SiOuiQui="'.$SiOuiQui.'", SouhaitezVousEtreRecontacte="'.$SouhaitezVousEtreRecontacte.'", Nom="'.$Nom.'", Prenom="'.$Prenom.'", Sexe="'.$Sexe.'", DateDeNaissance="'.$DateDeNaissance.'", NumeroRue="'.$NumeroRue.'", NomRue="'.$NomRue.'", Ville="'.$Ville.'",
       CodePostal="'.$CodePostal.'", Quartier="'.$Quartier.'", Telephone_1="'.$Telephone_1.'", Telephone_2="'.$Telephone_2.'", email="'.$email.'", Signature="'.$Signature.'", LieuBus="'.$LieuBus.'", DateBus="'.$DateBus.'", StructureConseiller="'.$StructureConseiller.'", InfoCom="'.$InfoCom.'",
       CommentaireInfoCom="'.$CommentaireInfoCom.'", OrientationCreation="'.$OrientationCreation.'", NiveauEtude="'.$NiveauEtude.'" where IdCreation="'.$IdCreation.'"');

      $messageP = 'Votre inscription est un succès Mr ou Mme ';
  }


}

if ($_POST['action']=="supp"){
  	$tabU = $conn->query ('delete from SaisieCreation_Recette where IdCreation='.$IdCreation.'');
    //header("Location: recherche-emploi-et-formation.php");
    $messageSup = 'Votre suppression est un succès Mr ou Mme ';
}


    $tabU = $conn->query('select * from SaisieCreation_Recette where IdCreation="'.$IdCreation.'"');
    $tabU = $tabU->fetch_assoc();
    //$dateCre = date("Y-m-d", $tabU['DateBus']);
    $dateCre = date("d/m/Y", strtotime($tabU['DateBus']));//date("Y-m-d");


    include("header.php");
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
                                  <p><?php echo'Modification effectuée'; ?></p>
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
                                  <p><?php echo'Suppression effectuée'; ?></p>
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
														Fiche profil de  <?php echo $tabU['Nom'].' '.$tabU['Prenom'] ;?>
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
											<form class="m-form m-form--fit m-form--label-align-right"  action="afficher-formulaire-creation.php" method="post">
												<div class="m-portlet__body">



													<div class="form-group m-form__group row">
														<div class="col-12 ml-auto">
															<h3 class="m-form__section">Les modifications</h3>
														</div>
													</div>
                          <div class="form-group m-form__group row">
                            <h5>N°Formulaire</h5>
                             <input class="form-control bg-secondary m-input" type="text" name="IdCreation" value="<?php echo $tabU['IdCreation']; ?>"readonly>
                          </div>
                          <div class="form-group m-form__group row">
                            <h5>Projet</h5>
                             <input class="form-control disabled m-input" type="text" name="Projet" maxlength="500" value="<?php echo $tabU['Projet']; ?>">
                           </div>
                           <div class="form-group m-form__group row">
                            <h5>Stade de votre projet</h5>
                             <input class="form-control disabled m-input" type="text" name="StadeProjet" maxlength="500" value="<?php echo $tabU['StadeProjet']; ?>">
                           </div>

                          <div class="form-group m-form__group ">
                            <label class="form-control-label">A quel Stade est votre projet ? *</label>
                            <div class="m-checkbox-list">
                            <?php if (strstr($tabU['StadeProjet'], "Stade de l’idée, ")) {  ?>
                              <label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet1" value="Stade de l’idée, " checked>Stade de l’idée
                                <span></span>
                              </label>
                              <?php } else { ?>
                               <label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet1" value="Stade de l’idée, ">Stade de l’idée
                                <span></span>
                              </label>
                              <?php } if (strstr($tabU['StadeProjet'], "En cours de Création, ")) { ?>
                              <label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet2" value="En cours de Création, " checked>En cours de Création
                                <span></span>
                              </label>
                              <?php } else { ?>
                              label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet2" value="En cours de Création, ">En cours de Création
                                <span></span>
                              </label>
                              <?php } if (strstr($tabU['StadeProjet'], "Recherche de financements, ")) { ?>
                              <label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet3" value="Recherche de financements, " checked>Recherche de financements
                                <span></span>
                              </label>
                               <?php } else { ?>
                               <label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet3" value="Recherche de financements, ">Recherche de financements
                                <span></span>
                              </label>
                              <?php } if (strstr($tabU['StadeProjet'], "Recherche de locaux, ")) { ?>
                              <label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet4" value="Recherche de locaux, " checked>Recherche de locaux
                                <span></span>
                              </label>
                               <?php } else { ?>
                               <label class="m-checkbox">
                                <input type="checkbox" name="StadeProjet4" value="Recherche de locaux, ">Recherche de locaux
                                <span></span>
                              </label>
                               <?php } ?>
                            </div>

                            <input class="form-control m-input" type="text" name="ComStadeProjet" maxlength="500" placeholder="Autre (Texte libre)">

                          </div>

                           <div class="form-group m-form__group row">
                            <h5>Avez-vous déjà une expérience de la création d’entreprise ? </h5>
                             <input class="form-control disabled m-input" type="text" name="ExpCreation" maxlength="500" value="<?php echo $tabU['ExpCreation']; ?>">
                           </div>

                          <div class="form-group m-form__group">
                            <label class="form-control-label">Avez-vous déjà une expérience de la création d’entreprise ? *</label>
                            
                              <label class="form-control-label">Souhaitez-vous être recontacté ? </label>
                                <?php if ($tabU['ExpCreation']=="Oui") {?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Oui" id="formRadioInline3"  name="ExpCreation" class="form-control-input"  checked>
                                <label class="form-control-label" for="formRadioInline3">Oui </label>
                              </div>
                              <?php } else { ?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Oui" id="formRadioInline3"  name="ExpCreation" class="form-control-input">
                                <label class="form-control-label" for="formRadioInline3">Oui </label>
                              </div>
                              <?php } if ($tabU['ExpCreation']=="Non") { ?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Non" id="formRadioInline4" name="ExpCreation" class="form-control-input" checked>
                                <label class="form-control-label" for="formRadioInline4">Non </label>
                              </div>
                              <?php } else { ?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Non" id="formRadioInline4" name="ExpCreation" class="form-control-input">
                                <label class="form-control-label" for="formRadioInline4">Non </label>
                              </div>
                              <?php } ?>

                          </div>

                           <div class="form-group m-form__group row">
                            <h5>Quelle expérience professionnelle et formation avez-vous ?</h5>
                             <input class="form-control disabled m-input" type="text" name="ExpProEtFor" maxlength="500" value="<?php echo $tabU['ExpProEtFor']; ?>">
                           </div>
                           <div class="form-group m-form__group row">
                            <h5>Freins rencontrés (pas de Financement, pas de local, à qui s’adresser…) ?</h5>
                             <input class="form-control disabled m-input" type="text" name="FreinsRencontres" maxlength="500" value="<?php echo $tabU['FreinsRencontres']; ?>">
                           </div>
                           <div class="form-group m-form__group row">
                            <h5>Situation du bénéficiaire :*</h5>
                             <input class="form-control disabled m-input" type="text" name="SituationDuBeneficiaire" maxlength="500" value="<?php echo $tabU['SituationDuBeneficiaire']; ?>">
                           </div>
                           <div class="form-group m-form__group ">
                              <label class="form-control-label">Situation du bénéficiaire :*</label>
                              <select class="first-name form-control" placeholder="" name="SituationDuBeneficiaire">
                                <option value="<?php echo $tabU['SituationDuBeneficiaire']; ?>"><?php echo $tabU['SituationDuBeneficiaire']; ?></option>
                                <?php if ($tabU['SituationDuBeneficiaire']!="Salarié") {?>
                                <option value="Salarié">Salarié</option>
                                <?php } if ($tabU['SituationDuBeneficiaire']!="Artisan, commerçant, entrepreneur") { ?>
                                <option value="Artisan, commerçant, entrepreneur">Artisan, commerçant, entrepreneur</option>
                                <?php } if ($tabU['SituationDuBeneficiaire']!="Demandeur d’emploi") { ?>
                                <option value="Demandeur d’emploi">Demandeur d’emploi</option>
                                <?php } if ($tabU['SituationDuBeneficiaire']!="Etudiant, retraité") { ?>
                                <option value="Etudiant, retraité">Etudiant, retraité</option>
                                <?php } if ($tabU['SituationDuBeneficiaire']!="En formation") { ?>
                                <option value="En formation">En formation</option>
                                <?php } if ($tabU['SituationDuBeneficiaire']!="Inactif (non inscrit à pôle-emploi)") { ?>
                                <option value="Inactif (non inscrit à pôle-emploi)">Inactif (non inscrit à Pôle-Emploi)</option>
                                <?php } ?>
                              </select>
                            </div>

                        


                           <div class="form-group m-form__group row">
                            <h5>Quel est votre niveau d’études ou diplôme ?</h5>
                             <input class="form-control disabled m-input" type="text" name="NiveauEtude" maxlength="500" value="<?php echo $tabU['NiveauEtude']; ?>">
                           </div>

                            <div class="form-group m-form__group ">
                              <label class="form-control-label">Quel est votre niveau d’études ou diplôme ?</label>

                              <select class="first-name form-control" placeholder="" name="NiveauEtude">
                                <option value="<?php echo $tabU['NiveauEtude']; ?>"><?php echo $tabU['NiveauEtude']; ?></option>
                                <?php if ($tabU['NiveauEtude']!="école primaire") {?>
                                <option value="école primaire">école primaire</option>
                                <?php } if ($tabU['NiveauEtude']!="6è à 3è") { ?>
                                <option value="6è à 3è">6è à 3è</option>
                                <?php } if ($tabU['NiveauEtude']!="CAP, BEP") { ?>
                                <option value="CAP, BEP">CAP, BEP</option>
                                <?php } if ($tabU['NiveauEtude']!=" BAC") { ?>
                                <option value=" BAC"> BAC</option>
                                <?php } if ($tabU['NiveauEtude']!="BAC +2") { ?>
                                <option value="BAC +2">BAC + 2</option>
                                <?php } if ($tabU['NiveauEtude']!="Sup à BAC+2") { ?>
                                <option value="Sup à BAC+2">Diplôme supérieur à BAC + 2 </option>
                                <?php }?>
                              </select>

                            </div>
                           <div class="form-group m-form__group row">
                            <h5>Etes vous accompagné?</h5>
                             <input class="form-control disabled m-input" type="text" name="EtesVousAccompagne" maxlength="500" value="<?php echo $tabU['EtesVousAccompagne']; ?>">
                           </div>

                          <div class="form-group m-form__group ">
                            <label class="form-control-label">Etes-vous accompagné par une structure d’insertion professionnelle ?</label>
                            <?php if ($tabU['EtesVousAccompagne']=="Oui") {?>
                            <div class="form-control form-radio form-control-inline">
                              <input type="radio" value="Oui" id="formRadioInline3"  name="EtesVousAccompagne" class="form-control-input"  checked>
                              <label class="form-control-label" for="formRadioInline3">Oui </label>
                            </div>
                            <?php } else { ?>
                            <div class="form-control form-radio form-control-inline">
                              <input type="radio" value="Oui" id="formRadioInline3"  name="EtesVousAccompagne" class="form-control-input">
                              <label class="form-control-label" for="formRadioInline3">Oui </label>
                            </div>
                            <?php } if ($tabU['EtesVousAccompagne']=="Non") { ?>
                            <div class="form-control form-radio form-control-inline">
                              <input type="radio" value="Non" id="formRadioInline4" name="EtesVousAccompagne" class="form-control-input" checked>
                              <label class="form-control-label" for="formRadioInline4">Non </label>
                            </div>
                            <?php } else { ?>
                            <div class="form-control form-radio form-control-inline">
                              <input type="radio" value="Non" id="formRadioInline4" name="EtesVousAccompagne" class="form-control-input">
                              <label class="form-control-label" for="formRadioInline4">Non </label>
                            </div>
                            <?php } ?>

                          </div>

                           <div class="form-group m-form__group row">
                             <h5>Si oui, par qui ?</h5>
                              <input class="form-control disabled m-input" type="text" name="SiOuiQui" maxlength="500" value="<?php echo $tabU['SiOuiQui']; ?>">
                            </div>
                           <div class="form-group m-form__group row">
                            <h5>Souhaitez vous être recontacte pour vous faire part d'évènements ?</h5>
                             <input class="form-control disabled m-input" type="text" name="SouhaitezVousEtreRecontacte" maxlength="500" value="<?php echo $tabU['SouhaitezVousEtreRecontacte']; ?>">
                           </div>

                           <div class="form-group m-form__group ">
                              <label class="form-control-label">Souhaitez-vous être recontacté ? </label>
                                <?php if ($tabU['SouhaitezVousEtreRecontacte']=="Oui") {?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Oui" id="formRadioInline3"  name="SouhaitezVousEtreRecontacte" class="form-control-input"  checked>
                                <label class="form-control-label" for="formRadioInline3">Oui </label>
                              </div>
                              <?php } else { ?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Oui" id="formRadioInline3"  name="SouhaitezVousEtreRecontacte" class="form-control-input">
                                <label class="form-control-label" for="formRadioInline3">Oui </label>
                              </div>
                              <?php } if ($tabU['SouhaitezVousEtreRecontacte']=="Non") { ?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Non" id="formRadioInline4" name="SouhaitezVousEtreRecontacte" class="form-control-input" checked>
                                <label class="form-control-label" for="formRadioInline4">Non </label>
                              </div>
                              <?php } else { ?>
                              <div class="form-control form-radio form-control-inline">
                                <input type="radio" value="Non" id="formRadioInline4" name="SouhaitezVousEtreRecontacte" class="form-control-input">
                                <label class="form-control-label" for="formRadioInline4">Non </label>
                              </div>
                              <?php } ?>
                            </div>



                          <div class="form-group m-form__group row">
                            <h5>Nom</h5>
                             <input class="form-control disabled m-input" type="text" name="Nom" maxlength="255" value="<?php echo $tabU['Nom']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Prenom</h5>
                             <input class="form-control disabled m-input" type="text" name="Prenom" maxlength="255" value="<?php echo $tabU['Prenom']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Sexe</h5>
                             <input class="form-control disabled m-input" type="text" name="Sexe" maxlength="10" value="<?php echo $tabU['Sexe']; ?>">
                           </div>
                               <div class="form-group m-form__group ">
                              <label class="form-control-label">Sexe</label>

                              <select class="first-name form-control" placeholder="" name="Sexe">
                                <option value="<?php echo $tabU['Sexe']; ?>"><?php echo $tabU['Sexe']; ?></option>
                                <?php if ($tabU['Sexe']!="F") {?>
                                <option value="F">Femme</option>
                                <?php } if ($tabU['Sexe']!="M") { ?>
                                <option value="M">Homme</option>
                                <?php } ?>
                              </select>

                            </div>
                          <div class="form-group m-form__group row">
                            <h5>Date de naissance</h5>
                             <input class="form-control disabled m-input" type="text" name="DateDeNaissance" maxlength="11" value="<?php echo $tabU['DateDeNaissance']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>N° Rue</h5>
                             <input class="form-control disabled m-input" type="text" name="NumeroRue" maxlength="20" value="<?php echo $tabU['NumeroRue']; ?>">
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

                             <input class="form-control  m-input" type="text" name="DateBus" value="<?php echo $tabU['DateBus']; ?>">
                           </div>

                          <div class="form-group m-form__group row">
                            <h5>Structure où travaille le conseiller qui remplit le formulaire</h5>
                             <input class="form-control disabled m-input" type="text" name="StructureConseiller" maxlength="255" value="<?php echo $tabU['StructureConseiller']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Information communiquée</h5>
                             <input class="form-control disabled m-input" type="text" name="InfoCom" maxlength="255" value="<?php echo $tabU['InfoCom']; ?>">
                           </div>
                          <div class="form-group m-form__group row">
                            <h5>Commentaire information communiquée</h5>
                             <input class="form-control disabled m-input" type="text" name="CommentaireInfoCom" maxlength="500" value="<?php echo $tabU['CommentaireInfoCom']; ?>">
                           </div>

                            <div class="form-group m-form__group row">
                             <h5>Orientation</h5>
                              <input class="form-control bg-warning m-input" type="text" name="OrientationCreation" maxlength="500" value="<?php echo $tabU['OrientationCreation']; ?>">
                          </div>
												</div>

												<div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="form-group m-form__group row text-center ">
                                <div class=" col-12" style="margin-top: 1em;">
                              <button type="submit" name="action" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom" value="modif">Modifier</button>&nbsp;&nbsp;
  															<button  type="submit" name="action" class="btn btn-block btn-danger m-btn m-btn--air m-btn--custom" value="supp">Supprimer</button>&nbsp;&nbsp;
                                </div>
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
