<?php

$date = date("d-m-Y"); $heure = date("H:i");
?>






<?php
session_start();

include("header.php");
include("SQL/insertion-campagne.php");
?>

<script>


</script>

<div class="row">

	<div class="col-xl-12 col-lg-12">



		<?php
		if(isset($messageN))
		{
			?>
			<div class="alert-danger alert">
				<a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
				<strong><?php echo'Désolé,'; ?></strong>
				<p><?php echo $messageN; echo $Projet.".......";?></p>
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
									Formulaire de création campagne
								</h3>
							</div>
						</div>

						<div class="m-portlet__head-tools">
							<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
								<li class="nav-item m-tabs__item">
									<a class="nav-link m-tabs__link active" href="recherche-campagne.php" role="tab">
										Aller vers Recherche Campagne
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
					<form class="m-form m-form--fit m-form--label-align-right m-form--state" id="formCampagne" name="RegForm" action="campagne.php" onsubmit="return validerCampagne();" method="post">
						<div class="m-portlet__body">
							<?php //echo $s; ?>


							<div class="form-group m-form__group ">
								<div class="col-12 ml-auto">
									<h3 class="m-form__section">Campagne</h3>
								</div>
							</div>





							<div class="form-group m-form__group  ">
								<label class="form-control-label">Saisir le nom de votre campagne *</label>
								<input class="form-control m-input" type="text" name="NomCampagne" maxlength="100" placeholder="(Texte libre)">
							</div>

							<div class="form-group m-form__group  ">
								<label class="form-control-label">Auteur de la campagne </label>
								<input class="form-control m-input" type="text" name="AuteurCampagne" maxlength="55" placeholder="(Texte libre)">
							</div>
							<div class="form-group m-form__group  ">
								<label class="form-control-label">Demandeur de la campagne </label>
								<input class="form-control m-input" type="text" name="DemandeurCampagne" maxlength="55" placeholder="(Texte libre)">
							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Ville </label>
								<input class="form-control m-input" type="text" name ="VilleCampagne" maxlength="155" placeholder="Ville">
							</div>

							<div class="form-group m-form__group ">
								<label class="form-control-label">Date de début *</label>
								<input type="text" class="form-control col-12 datepicker" maxlength="10" placeholder="Saisir par exemple: 01/01/2019" name="DebutCampagne">
								
							</div>
							<div class="form-group m-form__group ">
								
								<label class="form-control-label">Date de fin *</label>
								<input type="text" class="form-control col-12 datepicker" maxlength="10" placeholder="Saisir par exemple: 01/12/2019" name="FinCampagne">

							</div>


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
		<a hhref="javascript:{}" onclick="validerCampagne();"><i class="la 	la-check"></i></a>
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
