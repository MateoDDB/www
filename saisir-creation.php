<?php

$date = date("d-m-Y"); $heure = date("H:i");
?>


<?php include("SQL/insertion-creation.php"); ?>

<?php
session_start();
if(empty($_SESSION['email'])){
	include("header-exterieur.php");
}
else {
	include("header.php");
}
 ?>

<div class="row">


	<div class="col-xl-12 col-lg-12">
		<?php
		if(isset($messageSaisie))
		{
			?>
			<div class="alert-danger alert">
				<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
				<strong><?php echo'Attention,'; ?></strong>
				<p><?php echo $messageSaisie; ?></p>
			</div><!-- .alert -->
			<?php
		}
		?>
		<?php
		if(isset($messageN))
		{
			?>
			<div class="alert-danger alert">
				<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
				<strong><?php echo'Désolé,'; ?></strong>
				<p><?php echo $messageN;  //echo $DateDeNaissance; ?></p>
			</div><!-- .alert -->
			<?php
		}
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

				<strong><?php echo'Bravo, Votre formulaire a été saisi avec succès.';?></strong>
			</div><!-- .alert -->

			<?php
		}

		//var_dump($_POST);
		?>
		<div class="row">

			<div class="col-md-12">

				<div class="m-portlet m-portlet--full-height ">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Fiche Création
								</h3>
							</div>
						</div>
						<div class="m-portlet__head-tools">
							<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
								<li class="nav-item m-tabs__item">
									<a class="nav-link m-tabs__link active" href="saisir-emploi-et-formation.php" role="tab">
										Saisir une fiche Emploi/Formation
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
					<form class="m-form m-form--fit m-form--label-align-right m-form--state"  action="saisir-creation.php" name="RegForm" id="formCreation" onsubmit="return validerCreation();" method="post">
						<div class="m-portlet__body">



							<div class="form-group m-form__group row">
								<div class="col-12 ml-auto">
									<h3 class="m-form__section">1. Votre parcours</h3>
								</div>
							</div>




							<div class="form-group m-form__group">
								<label class="form-control-label">Quel est votre projet ? *</label>

								<input name="Projet" class="form-control m-input" type="text" maxlength="500" placeholder="Resumez en quelques mots votre projets">

							</div>


							<div class="form-group m-form__group ">
								<label class="form-control-label">A quel Stade est votre projet ? *</label>
								<div class="m-checkbox-list">
									<label class="m-checkbox">
										<input type="checkbox" name="StadeProjet1" value="Stade de l’idée, ">Stade de l’idée
										<span></span>
									</label>
									<label class="m-checkbox">
										<input type="checkbox" name="StadeProjet2" value="En cours de Création, ">En cours de Création
										<span></span>
									</label>
									<label class="m-checkbox">
										<input type="checkbox" name="StadeProjet3" value="Recherche de financements, ">Recherche de financements
										<span></span>
									</label>
									<label class="m-checkbox">
										<input type="checkbox" name="StadeProjet4" value="Recherche de locaux, ">Recherche de locaux
										<span></span>
									</label>
								</div>

								<input class="form-control m-input" type="text" name="ComStadeProjet" maxlength="500" placeholder="Autre (Texte libre)">

							</div>


							<div class="form-group m-form__group">
								<label class="form-control-label">Avez-vous déjà une expérience de la création d’entreprise ? *</label>
								<div class="form-control form-radio form-control-inline">
									<input type="radio" value="Oui" id="formRadioInline1" name="ExpCreation" class="form-control-input">
									<label class="form-control-label" for="formRadioInline1">Oui </label>
								</div>
								<div class="form-control form-radio form-control-inline">
									<input type="radio"  value="Non" id="formRadioInline2" name="ExpCreation" class="form-control-input">
									<label class="form-control-label" for="formRadioInline2">Non </label>
								</div>
							</div>


							<div class="form-group m-form__group">
								<label class="form-control-label">Quelle expérience professionnelle et formation avez-vous ?</label>

								<input class="form-control m-input" type="text" name="ExpProEtFor" maxlength="500" placeholder="(Texte libre)">

							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Freins rencontrés (pas de Financement, pas de local, à qui s’adresser…) ?</label>

								<input class="form-control m-input" type="text" name="FreinsRencontres" maxlength="500" placeholder="Notez vos freins">

							</div>




							<div class="form-group m-form__group ">
								<label class="form-control-label">Situation du bénéficiaire :*</label>
								<select class="first-name form-control" placeholder="" name="SituationDuBeneficiaire">
									<option value="">--Choisir--</option>
									<option value="Salarié">Salarié</option>
									<option value="Artisan, commerçant, entrepreneur">Artisan, commerçant, entrepreneur</option>
									<option value="Demandeur d’emploi">Demandeur d’emploi</option>
									<option value="Etudiant, retraité">Etudiant, retraité</option>
									<option value="En formation">En formation</option>
									<option value="Inactif (non inscrit à pôle-emploi)">Inactif (non inscrit à Pôle-Emploi)</option>
								</select>
							</div>

							<div class="form-group m-form__group  ">
								<label class="form-control-label">Quel est votre niveau d’études ou diplôme ?</label>

								<select class="first-name form-control" placeholder="" name="NiveauEtude">
									<option value="">--Choisir--</option>
									<option value="école primaire">école primaire</option>
									<option value="6è à 3è">6è à 3è</option>
									<option value="CAP, BEP">CAP, BEP</option>
									<option value="Niveau BAC">Niveau BAC</option>
									<option value="Niveau BAC">BAC + 2</option>
									<option value="Niveau BAC">Diplôme supérieur à BAC + 2 </option>
								</select>

							</div>


							<div class="form-group m-form__group ">
								<label class="form-control-label">Etes-vous accompagné ? *</label>
								<div class="form-control form-radio form-control-inline">
									<input type="radio" value="Oui" id="formRadioInline3" name="EtesVousAccompagne" class="form-control-input">
									<label class="form-control-label" for="formRadioInline3">Oui </label>
								</div>
								<div class="form-control form-radio form-control-inline">
									<input type="radio" value="Non" id="formRadioInline4" name="EtesVousAccompagne" class="form-control-input">
									<label class="form-control-label" for="formRadioInline4">Non </label>
								</div>
								<input class="form-control m-input" type="text" name="SiOuiQui" placeholder="Si oui , par qui ? (Texte libre)">
							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Souhaitez-vous être recontacté pour être accompagné ? *</label>
								<div class="form-control form-radio form-control-inline">
									<input type="radio" value="Oui" id="formRadioInline5" value="true" name="SouhaitezVousEtreRecontacte" class="form-control-input">
									<label class="form-control-label" for="formRadioInline5">Oui </label>
								</div>
								<div class="form-control form-radio form-control-inline">
									<input type="radio" value="Non" id="formRadioInline6" name="SouhaitezVousEtreRecontacte" class="form-control-input">
									<label class="form-control-label" for="formRadioInline6">Non </label>
								</div>

							</div>



							<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
							<div class="form-group m-form__group row">
								<div class="col-12 ml-auto">
									<h3 class="m-form__section">2. Informations personnelles</h3>
								</div>
							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Nom *:</label>

								<input class="form-control m-input" type="text" name ="Nom" maxlength="250" placeholder="Nom">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Prenom *:</label>

								<input class="form-control m-input" type="text" name ="Prenom" maxlength="250" placeholder="Prenom">

							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Sexe :*</label>
								<select class="first-name form-control" placeholder="" name="Sexe">
									<option value="">--Choisir--</option>
									<option value="F">Femme</option>
									<option value="M">Homme</option>
								</select>
							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Date de naissance:</label>
								<input type="text" class="form-control col-12 datepicker" maxlength="10" placeholder="Saisir par exemple: 01/01/1960" name="DateDeNaissance">

								<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
								<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
								<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
								<script>
								;(function($){
									$.fn.datepicker.dates['fr'] = {
										days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
										daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
										daysMin: ["D", "L", "Ma", "Me", "J", "V", "S", "D"],
										months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
										monthsShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"],
										today: "Aujourd'hui",
										suffix: [],
										meridiem: ["am", "pm"],
										weekStart: 1,
										format: "dd/mm/yyyy"
									};
								}(jQuery));

								$('.datepicker').datepicker({
									language: 'fr',
									autoclose: true,
									todayHighlight: true
								})
								</script>
								<!--<input class="form-control m-input" type="text" name ="DateNaissance" placeholder="Date de naissance">-->

							</div>




							<!--.......................................................... *** FIN Tests DATE***........................................................-->

							<div class="form-group m-form__group ">
								<label class="form-control-label">N° rue :</label>

								<input class="form-control m-input" type="text" name ="NumeroRue" maxlength="10" placeholder="Numéro de rue">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Nom de la rue:</label>

								<input class="form-control m-input" type="text" name ="NomRue" maxlength="250" placeholder="Nom de la rue">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Ville:</label>

								<input class="form-control m-input" type="text" name ="Ville" maxlength="250" placeholder="Ville">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Code postal:</label>

								<input class="form-control m-input" type="text" name ="CodePostal" maxlength="7" placeholder="Code postal">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Quartier:</label>

								<input class="form-control m-input" type="text" name ="Quartier" maxlength="500" placeholder="Quartier">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Téléphone 1 *:</label>

								<input class="form-control m-input" type="text" name ="Telephone_1" maxlength="15" placeholder="Téléphone 1">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Téléphone 2:</label>

								<input class="form-control m-input" type="text" name ="Telephone_2" maxlength="15" placeholder="Téléphone 2">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Adresse mail:</label>

								<input class="form-control m-input" type="text" name ="email" maxlength="250" placeholder="Adresse mail">

							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Lieu du Bus *:</label>

								<input class="form-control m-input" type="text" name ="LieuBus" maxlength="250" placeholder="Lieu du Bus">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Date du Bus * (Par défault):</label>

								<input class="form-control m-input" type="text" name ="DateBus" value= <?php echo $date;?> disabled>

							</div>


							<div class="form-group m-form__group ">
								<label class="form-control-label">Structure où travaille le conseiller qui remplit le formulaire:  </label>

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
								<label class="form-control-label">Orientation :</label>
								<!--<TEXTAREA name="nom" rows=4 cols=40>Valeur par défaut</TEXTAREA>-->
								<input class="form-control m-input " type="text" name ="OrientationCreation" maxlength="500"  placeholder="Orientation conseiller">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Quel Suivi :</label>
								<!--<TEXTAREA name="nom" rows=4 cols=40>Valeur par défaut</TEXTAREA>-->
								<input class="form-control m-input " type="text" name ="QuelSuivi" maxlength="500"  placeholder="">

							</div>
							<div class="form-group m-form__group ">
								<label class="form-control-label">Campagne :</label>
								<!--<TEXTAREA name="nom" rows=4 cols=40>Valeur par défaut</TEXTAREA>-->
								<input class="form-control m-input " type="text" name ="Campagne" maxlength="500"  placeholder="">
							</div>


							<div class="form-group m-form__group m--margin-top-10">
								<div class="alert m-alert m-alert--default" role="alert">
									« Les informations recueillies font l’objet d’un traitement informatique destiné au suivi des personnes accueillies dans le cadre de l’opération « Bus de l’initiative ».
									Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004,
									vous bénéficiez d’un droit d’accès et de rectification aux informations qui vous concernent,
									que vous pouvez exercer en vous adressant à l’Association Créative, 12 rue Van Gogh, 95140 Garges-lès-Gonesse.
								</div>
								<span class="m-switch m-switch--icon">
									<label>
										Lu et approuvé <input type="checkbox"  name="Signature">
										<span></span>
									</label>
								</span>
							</div>


<!--
							<div class="form-group m-form__group ">
								<label class="form-control-label">Signature</label>
								<div class="m-checkbox-list">
									<label class="m-checkbox">
										<input type="checkbox" name="Signature" value="false"> Lu et approuvé
										<span></span>
									</label>
								</div>
							</div>

-->



						</div>

						<!--<canvas id="myCanvas"></canvas>-->

						<div class="m-portlet__foot m-portlet__foot--fit">

							<div class="form-group m-form__group row text-center ">
								<div class=" col-12" style="margin-top: 1em;">
									<button type="submit" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom">Sauvegarder</button>&nbsp;&nbsp;
								</div>
								<!--  <div class=" col-12">
								<button type="" class="btn btn-block btn-outline-focus m-btn  m-btn--custom" >Annuler</button>
							</div>-->
						</div>



					</div>



					<ul class="m-nav-sticky" style="margin-top: 30px;">
							<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="" data-placement="left" data-original-title="Sauvegarder">
							<a hhref="javascript:{}" onclick="validerCreation();"><i class="la 	la-check"></i></a>
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
