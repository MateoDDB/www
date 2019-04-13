<!--  DEBUT DU PHP-->
<?php

	$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
	//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
	mysqli_set_charset($conn, "utf8");

	/*$NbrEmploi = $conn->query ('select count(*) from SaisieEmploi');
	$NbrCreation = $conn->query ('select count(*) from SaisieCreation');*/


//	$membres = $mysqli->query('SELECT * FROM adherentCrea WHERE agglo like "'.$agglo.'"');


//Pour avoir le nombre de saisie emploi
	$NbrEmploi = $conn->query ('select * from SaisieEmploi_Recette');
	$dataNE = $NbrEmploi->num_rows;


	$NbrCreation = $conn->query ('select * from SaisieCreation_Recette');
	$dataNC = $NbrCreation->num_rows;

//Pour avoir le total de nombre de bénéficiaire
	$NbrBeneficiaire = $dataNE + $dataNC;



//Pour avoi le nombre de femme qui recherche un emploi
	$NbrFemmeEmploi = $conn->query ('select * from SaisieEmploi_Recette where Sexe="F"');
	$NbrFemmeEmploi = $NbrFemmeEmploi->num_rows;
//Pour avoi le nombre de homme qui recherche un emploi
	$NbrHommeEmploi = $conn->query ('select * from SaisieEmploi_Recette where Sexe="M"');
	$NbrHommeEmploi = $NbrHommeEmploi->num_rows;

	$NbrTotalEmploi = $NbrFemmeEmploi+$NbrHommeEmploi;

//Pour avoi le nombre de femme pour la creation
	$NbrFemmeCreation = $conn->query ('select * from SaisieCreation_Recette where Sexe="F"');
	$NbrFemmeCreation = $NbrFemmeCreation->num_rows;
//Pour avoi le nombre de homme pour la creation
	$NbrHommeCreation = $conn->query ('select * from SaisieCreation_Recette where Sexe="M"');
	$NbrHommeCreation = $NbrHommeCreation->num_rows;
	$NbrTotalCreation = $NbrFemmeCreation+$NbrHommeCreation;
//Pour avoi le nombre de homme pour la creation
	$tabE = $conn->query ('select * from SaisieEmploi_Recette');
	$tabC = $conn->query ('select * from SaisieCreation_Recette');
	//$tab = $conn->query ('(select *,type from SaisieEmploi_Recette) union (select *,type from SaisieCreation_Recette)');
	//$tableau = $tab->fetch_assoc();
	//(SELECT id,type FROM Table1) UNION (SELECT id,type FROM Table2)

	//var_dump($tab);
?>




			<!--Begin::Section-->
			<div class="m-portlet">
					<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<span class="m-portlet__head-icon">
											<i class="fa flaticon-diagram"></i>
										</span>
										<h3 class="m-portlet__head-text">
											Menu statistiques
										</h3>
									</div>
								</div>
							</div>
				<div class="m-portlet__body  m-portlet__body--no-padding">
					<div class="row m-row--no-padding m-row--col-separator-xl">
						<div class="col-xl-4">

							<!--begin:: Widgets/Stats2-1 -->
							<div class="m-widget1">
								<div class="m-widget1__item">
									<div class="row m-row--no-padding align-items-center">
										<div class="col">
											<h3 class="m-widget1__title">Nombre de Bénéficiaires</h3>
											<span class="m-widget1__desc"></span>
										</div>
										<div class="col m--align-right">
											<span class="m-widget1__number m--font-brand"><?php echo $NbrBeneficiaire; ?></span>
										</div>
									</div>
								</div>
								<div class="m-widget1__item">
									<div class="row m-row--no-padding align-items-center">
										<div class="col">
											<h3 class="m-widget1__title">Nombre de demandeurs d'emploi</h3>
											<span class="m-widget1__desc"></span>
										</div>
										<div class="col m--align-right">
											<span class="m-widget1__number m--font-danger"><?php echo $dataNE ?></span>
										</div>
									</div>
								</div>
								<div class="m-widget1__item">
									<div class="row m-row--no-padding align-items-center">
										<div class="col">
											<h3 class="m-widget1__title">Nombre de futures Entrepreneurs</h3>
											<span class="m-widget1__desc"></span>
										</div>
										<div class="col m--align-right">
											<span class="m-widget1__number m--font-success"><?php echo $dataNC ?></span>
										</div>
									</div>
								</div>
							</div>

							<!--end:: Widgets/Stats2-1 -->
						</div>
						<div class="col-xl-4">

							<!--begin:: Widgets/Revenue Change-->
							<div class="m-widget14">
								<div class="m-widget14__header">
									<h3 class="m-widget14__title">
										Statistiques de recherche d'emploi
									</h3>
									<span class="m-widget14__desc">
										<strong>Répartition Hommes/Femmes</strong>
									</span>
								</div>
								<div class="row  align-items-center">
									<div class="col">
										<div id="m_chart_revenue_change" class="m-widget14__chart1" style="height: 180px">
										</div>
									</div>
									<div class="col">
										<div class="m-widget14__legends">
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-warning"></span>
												<span class="m-widget14__legend-text"><strong><?php echo $NbrFemmeEmploi;?> femmes</strong></span>
											</div>
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-accent"></span>
												<span class="m-widget14__legend-text"><strong><?php echo $NbrHommeEmploi;?> hommes</strong></span>
											</div>

										</div>
									</div>
								</div>
							</div>

							<!--end:: Widgets/Revenue Change-->
						</div>
						<div class="col-xl-4">

							<!--begin:: Widgets/Profit Share-->
							<div class="m-widget14">
								<div class="m-widget14__header">
									<h3 class="m-widget14__title">
										Statistiques de création d'entreprises
									</h3>
									<span class="m-widget14__desc">
										<strong>Répartition Homme/Femme</strong>
									</span>
								</div>
								<div class="row  align-items-center">
									<div class="col">
										<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
											<div class="m-widget14__stat"><?php echo $NbrTotalCreation;?></div>
										</div>
									</div>
									<div class="col">
										<div class="m-widget14__legends">
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-accent"></span>
												<span class="m-widget14__legend-text"><strong><?php echo $NbrFemmeCreation;?> femmes</strong></span>
											</div>
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-warning"></span>
												<span class="m-widget14__legend-text"><strong><?php echo $NbrHommeCreation;?> hommes</strong></span>
											</div>
											<div class="m-widget14__legend">
												<span class="m-widget14__legend-bullet m--bg-brand"></span>
												<span class="m-widget14__legend-text"><strong><?php echo $NbrTotalCreation;?> au total</strong></span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--end:: Widgets/Profit Share-->


						</div>
					</div>

				</div>
			</div>
			<? include('statistiques-supplementaires.php'); ?>

           	</div>
	</div>
</div>
