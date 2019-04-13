
<!--Begin::Section-->


<div class="row">

	<div class="col-md-12">

		<div class="m-portlet m-portlet--full-height ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Liste des campagnes
						</h3>
					</div>
				</div>

				<div class="m-portlet__head-tools">
					<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" href="campagne.php" role="tab">
								Aller vers création campagne
							</a>
						</li>

					</ul>
				</div>

			</div>
		</div>
	</div>

</div>




<div class="row">

	<div class="col-md-12">
		<div class="card">

			<!-- <form class="m-form m-form--fit m-form--label-align-right"  action="afficher-profil.php" method="post">-->

			<div class="card-body m-content">

				<table id="bootstrap-data-table-export" class="table  table-bordered cell-border table-hover">
					<thead class="thead-dark">
						<tr>
							<th>N°</th>
							<th>Nom campagne</th>
							<th>Ville</th>
							<th>Auteur</th>
							<th>Demandeur</th>
							<th>Début</th>
							<th>Fin</th>
							<th>Date création</th>
							<th>Modifier campagne</th>
							<th>Ajouter Emploi</th>
							<th>Ajouter Création</th>
							<th>Afficher les fiches</th>
							<!--<th>Supprimer</th>-->
						</tr>
					</thead>
					<tbody>

						<?php
						include('SQL/connexionBD.php');
						//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
						$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
						//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
						mysqli_set_charset($conn, "utf8");
						//var_dump($_POST);

						$tabU = $conn->query ('Select * from Campagne');
						while ($donnees = $tabU->fetch_assoc())
						{
							echo '<tr class="table-primary">
							<form class="m-form m-form--fit m-form--label-align-right"  action="afficher-campagne.php" method="post">';
							echo '<td class="">'. htmlspecialchars($donnees['IdCampagne']) . '<input type="hidden" name="IdCampagne" value="'. htmlspecialchars($donnees['IdCampagne']) . '"></td>';
							echo '<td class="">'. htmlspecialchars($donnees['NomCampagne']) . '<input type="hidden" name="NomCampagne" value="'. htmlspecialchars($donnees['NomCampagne']) . '"></td>';
							echo '<td class="">'. htmlspecialchars($donnees['VilleCampagne']) . '<input type="hidden" name="VilleCampagne" value="'. htmlspecialchars($donnees['VilleCampagne']) . '"></td>';
							echo '<td class="">'. htmlspecialchars($donnees['AuteurCampagne']) . '<input type="hidden" name="AuteurCampagne" value="'. htmlspecialchars($donnees['AuteurCampagne']) . '"></td>';
							echo '<td class="">'. htmlspecialchars($donnees['DemandeurCampagne']) . '<input type="hidden" name="DemandeurCampagne" value="'. htmlspecialchars($donnees['DemandeurCampagne']) . '"></td>';
							echo '<td class="">'. htmlspecialchars(date("d-m-Y",strtotime($donnees['DebutCampagne']))) . '<input type="hidden" name="DebutCampagne" value="'.htmlspecialchars(date("d-m-Y",strtotime($donnees['DebutCampagne']))) . '"></td>';

							echo '<td class="">'. htmlspecialchars(date("d-m-Y",strtotime($donnees['FinCampagne']))). '<input type="hidden" name="FinCampagne" value="'.htmlspecialchars(date("d-m-Y",strtotime($donnees['FinCampagne']))). '"></td>';

							echo '<td class="">'. htmlspecialchars(date("d-m-Y",strtotime($donnees['DateModif']))) . '<input type="hidden" name="DateModif" value="'. htmlspecialchars(date("d-m-Y",strtotime($donnees['DateModif']))) . '"></td>';


							echo '<td class="">
							<div class="form-group m-form__group row text-center ">
							<div class=" col-12" style="margin-top: 1em;">
							<button type="submit" name="action" class="btn btn-info m-btn m-btn--icon m-btn--pill m-btn--air" value="open"><i class="fa flaticon-interface-1"></i></button>&nbsp;&nbsp;
							</div>
							</div>
							</td>
							</form>';
							echo '
							<form class="m-form m-form--fit m-form--label-align-right"  action="saisir-emploi-et-formation.php" method="post">
							<td class="">
							<div class="form-group m-form__group row text-center ">
							<div class=" col-12" style="margin-top: 1em;">
							<button type="submit" name="NomCampagne" class="btn btn-info m-btn m-btn--icon m-btn--pill m-btn--air" value="'. htmlspecialchars($donnees['NomCampagne']) . '"><i class="fa flaticon-add-circular-button"></i></button>&nbsp;&nbsp;
							</div>
							</div>
							</td>

							</form>';
							echo '<form class="m-form m-form--fit m-form--label-align-right"  action="saisir-creation.php" method="post">

							<td class="">
							<div class="form-group m-form__group row text-center ">
							<div class=" col-12" style="margin-top: 1em;">
							<button type="submit" name="NomCampagne" class="btn btn-info m-btn m-btn--icon m-btn--pill m-btn--air" value="'. htmlspecialchars($donnees['NomCampagne']) . '"><i class="fa flaticon-add-circular-button"></i></button>&nbsp;&nbsp;
							</div>
							</div>
							</td>

							</form>';
							echo '<form class="m-form m-form--fit m-form--label-align-right"  action="afficher-fiches-campagne.php" method="post">

							<td class="">
							<div class="form-group m-form__group row text-center ">
							<div class=" col-12" style="margin-top: 1em;">
							<button type="submit" name="NomCampagne" class="btn btn-info m-btn m-btn--icon m-btn--pill m-btn--air" value="'. htmlspecialchars($donnees['NomCampagne']) . '"><i class="fa flaticon-search"></i></button>&nbsp;&nbsp;
							</div>
							</div>
							</td>

							</form>';



							echo '</tr>';
						}

						?>

					</tbody>

				</table>

			</div>
			<!-- </form>-->
		</div>


	</div>



</div>



<div class="row" style="margin-top: 2em;">

	<?php
	include('SQL/connexionBD.php');
	//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
	$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
	//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
	mysqli_set_charset($conn, "utf8");
	//var_dump($_POST);
	$tabU = $conn->query ('Select * from Campagne');
	//$tabU = $conn->query ('select DISTINCT(DemandeurCampagne) FROM Campagne');
	while ($donnees = $tabU->fetch_assoc()){



		?>

		<div class="col-md-12">

			<div class="m-portlet m-portlet--rounded  m-portlet--skin-dark m-portlet--bordered-semi m--bg-brand">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">



							<h5 class="m-portlet__head-text">
								<?php echo '<td class="">'. htmlspecialchars($donnees['NomCampagne']);
								echo '<input type="hidden" name="NomCampagne" value="'. htmlspecialchars($donnees['NomCampagne']) . '">';
								?>
								<span class="m-badge m-badge--metal m-badge--wide" style="margin-left: 1em;">
									<?php
									$result = $conn->query ('select IdCreation FROM SaisieCreation_Recette where Campagne="'.$donnees['NomCampagne'].'"');
									$NbrCreation  = $result->num_rows;
									echo "Nb Création : ".$NbrCreation ;
									//echo $data['nb'];
									?>
								</span>
								<span class="m-badge m-badge--light m-badge--wide" style="margin-left: 1em;margin-top: 0.2em;">
									<?php
									$result = $conn->query ('select IdSaisieEmploi FROM SaisieEmploi_Recette where Campagne="'.$donnees['NomCampagne'].'"');
									$NbrCreation  = $result->num_rows;
									echo "Nb Emploi : ".$NbrCreation ;
									//echo $data['nb'];
									?>
								</span>

							</h5>












						</div>
					</div>
				</div>
				<div class="m-portlet__body">
					<?php
					//echo '<td class="">'. htmlspecialchars($donnees['VilleCampagne']);
					?>
					<div class="row">

					</div>



					<div class="row" style="margin-top: 1em;">

						<div class=" " style="margin-right: 1em;">
							<form  action="saisir-emploi-et-formation.php" method="post">
								<?php echo	'<button type="submit" name="NomCampagne" class="btn btn-outline-secondary m-btn m-btn--icon " value="'. htmlspecialchars($donnees['NomCampagne']) . '"><i class="fa flaticon-add-circular-button"></i>		Emploie</button> </button>';?>

							</form>
						</div>
						 <div class=" " style="margin-right: 1em;">
							<form  action="saisir-creation.php" method="post">
								<?php echo	'<button type="submit" name="NomCampagne" class="btn btn-outline-secondary m-btn m-btn--icon " value="'. htmlspecialchars($donnees['NomCampagne']) . '"><i class="fa flaticon-add-circular-button"></i>		Creation</button> </button>';?>

							</form>
						</div>
						 <div class=" " style="margin-right: 1em;">
							<form  action="recherche-emploi-et-formation.php" method="post">
								<?php echo	'<button type="submit" name="NomCampagne" class="btn btn-outline-secondary m-btn m-btn--icon " value="'. htmlspecialchars($donnees['NomCampagne']) . '"><i class="fa flaticon-search"></i>		Fiches Emploie</button> </button>';?>

							</form>
						</div>
						 <div class=" " style="margin-right: 1em;">
							<form  action="recherche-creation.php" method="post">
								<?php echo	'<button type="submit" name="NomCampagne" class="btn btn-outline-secondary m-btn m-btn--icon " value="'. htmlspecialchars($donnees['NomCampagne']) . '"><i class="fa flaticon-search"></i>		Fiches Création</button> </button>';?>
							</form>
						</div>

				</div>
				</div>
			</div>

		</div>
		<?}?>
		<div class="col-md-12">
			<div class="card">

				<!-- <form class="m-form m-form--fit m-form--label-align-right"  action="afficher-profil.php" method="post">-->

				<div class="card-body m-content">



				</div>
				<!-- </form>-->
			</div>


		</div>


	</div>








</div>
</div>
</div>

<script>

//$('#bootstrap-data-table-export').css( 'display', 'table' );

//table.responsive.recalc();
</script>
