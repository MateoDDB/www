<!--  DEBUT DU PHP-->
<?php

	$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
	//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
	mysqli_set_charset($conn, "utf8");

	/*$NbrEmploi = $conn->query ('select count(*) from SaisieEmploi');
	$NbrCreation = $conn->query ('select count(*) from SaisieCreation');*/

		//echo "ok";
//Pour avoi le nombre de homme pour la creation

if ($_POST['action']=="modif"){



$tabU = $conn->query ($sql);
	//$tabU = $conn->query ('select * from Users_Recette where IdUsers='.$IdUsers.'');

	//$tabU = $tabU->fetch_assoc();

	}


	$tabU = $conn->query ('Select * from SaisieEmploi_Recette');

//echo "ok";
	//$tab = $conn->query ('(select *,type from SaisieEmploi_Recette) union (select *,type from SaisieCreation_Recette)');
	//$tableau = $tab->fetch_assoc();
	//(SELECT id,type FROM Table1) UNION (SELECT id,type FROM Table2)

?>


<!--Begin::Section-->


	<div class="content mt-3">


            <div class="animated fadeIn">

								<div class="row">

										<div class="col-md-12">

							<div class="m-portlet m-portlet--full-height ">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<h3 class="m-portlet__head-text">
												Liste des fiches emploi/formation
											</h3>
										</div>
									</div>
									<div class="m-portlet__head-tools">
										<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link active" href="recherche-creation.php" role="tab">
													Aller vers Recherche Création
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
                                            <th>Nom</th>
                                            <th>Ville</th>
                                            <th>Projet</th>
                                            <th>Secteur d’activité</th>
                                            <th>Situation</th>
                                            <th>Date du Bus</th>
																						<th>Lieu du Bus</th>
																						<th>Campagne</th>
                                            <th>Modifier</th>
                                            <!--<th>Supprimer</th>-->
																			  </tr>
                                    </thead>
                                    <tbody>

									<?php
									$tabU = $conn->query ('Select * from SaisieEmploi_Recette');
									while ($donnees = $tabU->fetch_assoc())
									{

									  echo '<tr class="table-primary">
									  <form class="m-form m-form--fit m-form--label-align-right"  action="afficher-formulaire.php" method="post">';
										echo '<td class="">'. htmlspecialchars($donnees['IdSaisieEmploi']) . '<input type="hidden" name="IdSaisieEmploi" value="'. htmlspecialchars($donnees['IdSaisieEmploi']) . '"></td>';
										echo '<td class="">'. htmlspecialchars($donnees['Nom']) . '<input type="hidden" name="Nom" value="'. htmlspecialchars($donnees['Nom']) . '"></td>';
										echo '<td class="">'. htmlspecialchars($donnees['Ville']) . '<input type="hidden" name="Ville" value="'. htmlspecialchars($donnees['Ville']) . '"></td>';
										echo '<td class="">'. htmlspecialchars($donnees['Projet']) . '<input type="hidden" name="Projet" value="'. htmlspecialchars($donnees['Projet']) . '"></td>';
										echo '<td class="">'. htmlspecialchars($donnees['SecteurActivite']) . '<input type="hidden" name="SecteurActivite" value="'. htmlspecialchars($donnees['SecteurActivite']) . '"></td>';
										echo '<td class="">'. htmlspecialchars($donnees['SituationAujourdhui']) . '<input type="hidden" name="SituationAujourdhui" value="'. htmlspecialchars($donnees['SituationAujourdhui']) . '"></td>';
										echo '<td class="">'. htmlspecialchars(date("d-m-Y",strtotime($donnees['DateBus']))) . '<input type="hidden" name="DateBus" value="'. htmlspecialchars(date("d-m-Y",strtotime($donnees['DateBus']))) . '"></td>';
										echo '<td class="">'. htmlspecialchars($donnees['LieuBus']) . '<input type="hidden" name="LieuBus" value="'. htmlspecialchars($donnees['LieuBus']) . '"></td>';
										echo '<td class="">'. htmlspecialchars($donnees['Campagne']) . '<input type="hidden" name="Campagne" value="'. htmlspecialchars($donnees['Campagne']) . '"></td>';




									  echo '<td class="">
										<div class="form-group m-form__group row text-center ">
						                 <div class=" col-12" style="margin-top: 1em;">
						                            <button type="submit" name="action" class="btn btn-info m-btn m-btn--icon m-btn--pill m-btn--air" value="open"><i class="fa flaticon-list"></i></button>&nbsp;&nbsp;
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
            </div><!-- .animated -->
        </div><!-- .content -->
    	</div>
	</div>
</div>

<script>

//$('#bootstrap-data-table-export').css( 'display', 'table' );

//table.responsive.recalc();
</script>
