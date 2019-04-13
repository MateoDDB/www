<?php

$date = date("d-m-Y"); $heure = date("H:i");

$PostNomCampagne = isset($_POST['NomCampagne'])?$_POST['NomCampagne']:'';

?>


<?php include("SQL/insertion-emploi.php"); ?>



<?php
session_start();
if(empty($_SESSION['email'])){
	include("header-exterieur.php");
}
else {
	include("header.php");
}
?>

<script>


</script>

<div class="row">

	<div class="col-xl-12 col-lg-12">


		<?php
		/*if(isset($messageSaisie))
		{

			?>
			<div class="alert-danger alert">
				<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
				<strong><?php echo'Attention,'; ?></strong>
				<p><?php echo $messageSaisie; ?></p>
			</div><!-- .alert -->
			<?php
		}*/
		?>
		<?php
		/*if(isset($messageN))
		{
			?>
			<div class="alert-danger alert">
				<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
				<strong><?php echo'Désolé,'; ?></strong>
				<p><?php echo $messageN; echo $Projet.".......";?></p>
			</div><!-- .alert -->
			<?php
		}*/
		?>
		<?php
		if(isset($messageSign))
		{
			?>
			<div class="alert-danger alert">
				<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
				<strong><?php echo'Désolé,'; ?></strong>
				<p><?php echo $messageSign; ?></p>
			</div><!-- .alert -->
			<?php
		}
		?>
		<?php
		if(isset($messageP))
		{
			//echo '<div class="message">'.$message.'</div>';
			?>
			<!-- PHP ALERTS FROM THE FORMS -->

			<div class="alert-success alert" >
				<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
				<strong><?php echo'Bravo, Votre formulaire a été saisi avec succès.'; 	//echo var_dump($_POST);//echo var_dump($s);?></strong>
			</div><!-- .alert -->

			<?php

		}
		?>
		<div class="row">

			<div class="col-md-12">

				<div class="m-portlet  ">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Fiche Emploi/Formation
								</h3>
							</div>
						</div>
						<div class="m-portlet__head-tools">
							<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
								<li class="nav-item m-tabs__item">
									<a class="nav-link m-tabs__link active" href="saisir-creation.php" role="tab">
										Saisir une fiche Création
									</a>
								</li>

							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>


		<div class="m-portlet  m-portlet--tabs  ">

			<div class="tab-content">
				<div class="tab-pane active" id="m_user_profile_tab_1">
					<form class="m-form m-form--fit m-form--label-align-right m-form--state" id="formEmploi" name="RegForm" action="saisir-emploi-et-formation.php" onsubmit="return validerEmploi();" method="post">
						<div class="m-portlet__body">



							<div class="form-group m-form__group ">
								<div class="col-12 ml-auto">
									<h3 class="m-form__section">1. Votre parcours</h3>
								</div>
							</div>

							<?php
								include("SQL/connexionBD.php");

								$result = $conn->query('select * from Campagne');

								$rows  = $result->num_rows;



								?>
								<div class="form-group m-form__group ">
									<label class="form-control-label">Campagne </label>

								<select name="Campagne" class="first-name form-control" >

								      <option>Toutes</option>

								      <?php


									//$sql_array = mysql_query($select);
								    //$rows = mysql_num_rows($sql_array);

									if(isset($rows))
									{
									   while($data = $result->fetch_assoc()){
										//for ($i=0; $i < $rows ;$i++){

								           $selected="";

									      if ($PostNomCampagne==$data["NomCampagne"]){
									      	$selected="selected";
									      	echo "<option value=\"".$data["NomCampagne"]."\"".$selected.">".$data["NomCampagne"]."</option>\n";
									      }
									      else{



									       echo "<option value=\"".$data["NomCampagne"]."\"".$selected.">".$data["NomCampagne"]."</option>\n";
									   }
									   }
									}

								?>
								</select>
</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Quel est votre projet ? *</label>
								<div class="m-checkbox-list">
									<label class="m-checkbox">
										<input type="checkbox" name="ProjetChoixEmploi" value="Emploi, ">Emploi
										<span></span>
									</label>
									<label class="m-checkbox">
										<input type="checkbox" name="ProjetChoixFormation" value="Formation, ">Formation
										<span></span>
									</label>
								</div>

								<input class="form-control m-input" type="text" name="NomProjet" maxlength="250" placeholder="Autre (Texte libre)">

							</div>


							<div class="form-group m-form__group  ">
								<label class="form-control-label">Si vous cherchez un emploi, lequel ? *</label>
								<input class="form-control m-input" type="text" name="RechercheEmploi" maxlength="500" placeholder="(Texte libre)">
							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Si vous recherchez une formation, laquelle ? *</label>

								<input class="form-control m-input" type="text" name="RechercheFormation" maxlength="500" placeholder="(Texte libre)">

							</div>


							<div class="form-group m-form__group ">
								<label class="form-control-label">Si vous recherchez un emploi, dans quel secteur d’activité ? </label>

								<select class="first-name form-control" placeholder="" name="SecteurActivite">
									<option value="">--Choisir--</option>
									<option value="Services à la personne, ménage, services aux entreprises">Services à la personne, ménage, services aux entreprises</option>
									<option value="Hôtellerie, restauration">Hôtellerie, restauration</option>
									<option value="Administration, santé, action sociale et enseignement">Administration, santé, action sociale et enseignement</option>
									<option value="Secrétariat, accueil">Secrétariat, accueil</option>
									<option value="Gestion des ressources des entreprises (RH, comptabilité, gestion administrative…)">Gestion des ressources des entreprises (RH, comptabilité, gestion administrative…)</option>
									<option value="Distribution, Commerce, Vente">Distribution, Commerce, Vente</option>
									<option value="Transport, logistique, entreprosage">Transport, logistique, entreprosage</option>
									<option value="Construction, BTP">Construction, BTP</option>
									<option value="Artisanat">Artisanat</option>
									<option value="Soins, esthétique, bien-être">Soins, esthétique, bien-être</option>
									<option value="Sécurité">Sécurité</option>
									<option value="Numérique, informatique, télécommunications">Numérique, informatique, télécommunications</option>
									<option value="Arts, spectacles, loisirs">Arts, spectacles, loisirs</option>
								</select>

							</div>


							<div class="form-group m-form__group ">
								<label class="form-control-label">Quelle expérience professionnelle et formation avez-vous ?</label>

								<input class="form-control m-input" type="text" name="ExpProfessionnelle"  maxlength="500" placeholder="(Texte libre)">

							</div>



							<div class="form-group m-form__group ">
								<label class="form-control-label">Quel est votre niveau d’études ou diplôme ?</label>

								<select class="first-name form-control" placeholder="" name="NiveauEtude">
									<option value="">--Choisir--</option>
									<option value="école primaire">école primaire</option>
									<option value="6è à 3è">6è à 3è</option>
									<option value="CAP, BEP">CAP, BEP</option>
									<option value=" BAC"> BAC</option>
									<option value="BAC +2">BAC + 2</option>
									<option value="Sup à BAC+2">Diplôme supérieur à BAC + 2 </option>
								</select>

							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Quel est votre diplôme ?</label>

								<input class="form-control m-input" type="text" name="Diplome"  maxlength="500" placeholder="(Texte libre)">

							</div>


							<!--<div class="form-group m-form__group ">
							<label class="form-control-label">Diplôme BAC + 2  lequel ?</label>

							<input class="form-control m-input" type="text" name="BacPlusDeux" maxlength="500" placeholder="Autre (Texte libre)">

						</div>



						<div class="form-group m-form__group ">
						<label class="form-control-label">Diplôme supérieur à BAC + 2   Lequel ?</label>

						<input class="form-control m-input" type="text" name="SupBacPlusDeux" maxlength="500" placeholder="Autre (Texte libre)">

					</div>
					<div class="form-group m-form__group ">
					<label class="form-control-label">Commentaire sur votre diplôme</label>

					<input class="form-control m-input" type="text" name="CommentaireSurDiplôme" maxlength="500" placeholder="Autre (Texte libre)">

				</div>-->
				<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
				<div class="form-group m-form__group ">
					<div class="col-12 ml-auto">
						<h3 class="m-form__section">2. Votre situation actuelle </h3>
					</div>
				</div>

				<div class="form-group m-form__group ">
					<label class="form-control-label">Avez-vous des contraintes ou des besoins particuliers (temps partiel, handicap, langue…)?</label>

					<input class="form-control m-input" type="text" name="ContraintesOuBesoins" maxlength="500" placeholder="(Texte libre)">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Quel est votre situation aujourd'hui ? *</label>

					<select class="first-name form-control" placeholder="" name="SituationAujourdhui">
						<option value="">--Choisir--</option>
						<option value="Demandeur d'emploi">Demandeur d'emploi</option>
						<option value="Salarié">Salarié</option>
						<option value="En formation ou en école">En formation ou en école</option>
						<option value="Inactif (ni en formation, ni en école)">Inactif (ni en formation, ni en école)</option>
					</select>

				</div>

				<div class="form-group m-form__group ">
					<label class="form-control-label">Etes-vous accompagné par une structure d’insertion professionnelle ?</label>
					<div class="form-control form-radio form-control-inline">
						<input type="radio" value="Oui" id="formRadioInline3"  name="EtesVousAccompagneParStructure" class="form-control-input">
						<label class="form-control-label" for="formRadioInline3">Oui </label>
					</div>
					<div class="form-control form-radio form-control-inline">
						<input type="radio" value="Non" id="formRadioInline4" name="EtesVousAccompagneParStructure" class="form-control-input">
						<label class="form-control-label" for="formRadioInline4">Non </label>
					</div>

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Si oui, par qui ? </label>

					<select class="first-name form-control" placeholder="" name="ReponseAccompagneParStructure">
						<option value="">--Choisir--</option>
						<option value="Pôle emploi">Pôle emploi</option>
						<option value="Mission Locale">Mission Locale</option>
					</select>
					<input class="form-control m-input" type="text" name="ComReponseAccompagneParStructure" maxlength="500" placeholder="Autre (Texte libre)">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Souhaitez-vous être recontacté ? </label>
					<div class="form-control form-radio form-control-inline">
						<input type="radio" value="Oui" id="formRadioInline5"  name="SouhaitezVousEtreRecontacte" class="form-control-input">
						<label class="form-control-label" for="formRadioInline5">Oui </label>
					</div>
					<div class="form-control form-radio form-control-inline">
						<input type="radio" value="Non" id="formRadioInline6" name="SouhaitezVousEtreRecontacte" class="form-control-input">
						<label class="form-control-label" for="formRadioInline6">Non </label>
					</div>

				</div>




				<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
				<div class="form-group m-form__group ">
					<div class="col-12 ml-auto">
						<h3 class="m-form__section">3. Informations personnelles</h3>
					</div>
				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Nom *</label>

					<input class="form-control m-input" type="text" maxlength="200" name ="Nom" placeholder="Nom">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Prenom *</label>

					<input class="form-control m-input" type="text" maxlength="200" name ="Prenom" placeholder="Prenom">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Sexe</label>

					<select class="first-name form-control" placeholder="" name="Sexe">
						<option value="">--Choisir--</option>
						<option value="F">Femme</option>
						<option value="M">Homme</option>
					</select>

				</div>


				<div class="form-group m-form__group ">
					<label class="form-control-label">Date de naissance :</label>
					<input type="text" class="form-control col-12 datepicker" maxlength="10" placeholder="Saisir par exemple: 01/01/1960" name="DateNaissance">


				</div>


				<div class="form-group m-form__group ">
					<label class="form-control-label">N° rue :</label>

					<input class="form-control m-input" type="text" name ="NumeroRue" maxlength="250" placeholder="Numéro de rue">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Nom de la rue :</label>

					<input class="form-control m-input" type="text" name ="NomRue"  maxlength="250" placeholder="Nom de la rue">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Ville :</label>

					<input class="form-control m-input" type="text" name ="Ville" maxlength="250" placeholder="Ville">


				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Code postal :</label>

					<input class="form-control m-input" type="text" name ="CodePostal"  maxlength="7" placeholder="Code postal">


				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Quartier :</label>

					<input class="form-control m-input" type="text" name ="Quartier"  maxlength="250" placeholder="Quartier">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Téléphone 1 * :</label>

					<input class="form-control m-input" type="text" name ="Telephone_1"  maxlength="15" placeholder="Téléphone 1">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Téléphone 2 :</label>

					<input class="form-control m-input" type="text" name ="Telephone_2" maxlength="15" placeholder="Téléphone 2">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Adresse mail :</label>

					<input class="form-control m-input" type="text" name ="email" maxlength="250" placeholder="Adresse mail">

				</div>

				<div class="form-group m-form__group ">
					<label class="form-control-label">Lieu du Bus * :</label>

					<input class="form-control m-input" type="text" name ="LieuBus" maxlength="250" placeholder="Lieu du Bus">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Date du Bus * (Par défault) :</label>

					<input class="form-control m-input" type="text" name ="DateBus" value= <?php echo $date;?> disabled>

				</div>


				<div class="form-group m-form__group ">
					<label class="form-control-label">Structure où travaille le conseiller qui remplit le formulaire :</label>

					<input class="form-control m-input" type="text" name ="StructureConseiller" maxlength="500" placeholder="Structure où travaille le conseiller">

				</div>
				<div class="form-group m-form__group ">
					<label class="form-control-label">Information communiquée (Plusieurs choix possibles) :</label>
					<div class="m-checkbox-list">
						<label class="m-checkbox">
							<input type="checkbox" name="InfoCom1" value="Flyer sur une structure d'accompagnement, ">Flyer sur une structure d'accompagnement
							<span></span>
						</label>
						<label class="m-checkbox">
							<input type="checkbox" name="InfoCom2" value="Flyer sur un Evènement, "> Flyer sur un Evènement
							<span></span>
						</label>
						<label class="m-checkbox">
							<input type="checkbox" name="InfoCom3" value="Convocation à une réunion d'information collective, ">Convocation à une réunion d'information collective
							<span></span>
						</label>
						<label class="m-checkbox">
							<input type="checkbox" name="InfoCom4" value="Rendez-vous individuel, "> Rendez-vous individuel
							<span></span>
						</label>
					</div>


					<input class="form-control m-input" type="text" name="CommentaireInfoCom" maxlength="250" placeholder="Autre (Texte libre)">

				</div>






				<div class="form-group m-form__group ">
					<label class="form-control-label">Orientation</label>

					<input class="form-control m-input " type="text" name ="OrientationEmploi" maxlength="500" placeholder="Orientation conseiller">

				</div>

				<div class="form-group m-form__group ">
					<label class="form-control-label">Quel Suivi</label>

					<input class="form-control m-input " type="text" name ="QuelSuivi" maxlength="500" placeholder="">

				</div>
				<!--<div class="form-group m-form__group ">
					<label class="form-control-label">Campagne</label>

					<input class="form-control m-input " type="text" name ="Campagne" maxlength="500" placeholder="">

				</div>-->

				<div class="form-group m-form__group m--margin-top-10">
					<div class="alert m-alert m-alert--default" role="alert">
						« Les informations recueillies font l’objet d’un traitement informatique destiné au suivi des personnes accueillies dans le cadre de l’opération « Bus de l’initiative ».
						Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004,
						vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent,
						que vous pouvez exercer en vous adressant à l’Association Créative, 12 rue Van Gogh, 95140 Garges-lès-Gonesse.
					</div>
					<span class="m-switch m-switch--icon">
						<label>
							Lu et approuvé<input type="checkbox"  name="Signature">
							<span></span>
						</label>
					</span>
				</div>


				<!--
				<div class="form-group m-form__group ">
				<label class="form-control-label"></label>
				<div class="m-checkbox-list">
				<label class="m-checkbox">
				<input type="checkbox" name="Signature"> Lu et approuvé



				<span></span>
			</label>
		</div>
	</div>
-->
</div>



<div class="m-portlet__foot m-portlet__foot--fit">
	<div class="form-group m-form__group  text-center ">
		<div class=" col-12" style="margin-top: 1em;">
			<button type="submit" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom">Sauvegarder</button>&nbsp;&nbsp;
		</div>

	</div>
</div>


<ul class="m-nav-sticky" style="margin-top: 30px;">
	<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="" data-placement="left" data-original-title="Sauvegarder">
		<a hhref="javascript:{}" onclick="validerEmploi();"><i class="la 	la-check"></i></a>
	</li>
</ul>


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
