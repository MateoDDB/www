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
	//$sql = "update Users_Recette SET email =". $_POST['email'].",nom =". $_POST['nom'].",prenom =". $_POST['prenom'].",telephone =". $_POST['telephone'].",date_creation =". $_POST['date_creation'].",UserName =". $_POST['UserName'].", profil =". $_POST['profil']."
	//WHERE Users_Recette.IdUsers =".$_POST['IdUsers']."";


$sql = "update Users_Recette SET UserName = '".$_POST['UserName']."', email = '".$_POST['email']."',nom = '".$_POST['nom']."',prenom = '".$_POST['prenom']."',telephone = '".$_POST['telephone']."',date_creation = '".$_POST['date_creation']."',profil = '".$_POST['profil']."'
WHERE Users_Recette.IdUsers = ".$_POST['IdUsers']."";
$tabU = $conn->query ($sql);
	//$tabU = $conn->query ('select * from Users_Recette where IdUsers='.$IdUsers.'');

	//$tabU = $tabU->fetch_assoc();

	}


	$tabU = $conn->query ('Select * from Users_Recette');
	//echo "ok";
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
												Liste des utilisateurs
											</h3>
										</div>
									</div>
									<div class="m-portlet__head-tools">
										<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link active" href="inscription.php" role="tab">
													Ajouter un utilisateur
												</a>
											</li>
										<!--
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content1" role="tab">
													Week
												</a>
											</li>
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab3_content1" role="tab">
													Month
												</a>
											</li>
										-->
										</ul>
									</div>
								</div>

								<!--	<div class="m-portlet__body">
									<div class="tab-content">
										<div class="tab-pane active" id="m_widget2_tab1_content">
											<div class="m-widget2">
												<?php //include ("redesign-list-user.php"); ?>

											</div>
										</div>
										<div class="tab-pane" id="m_widget2_tab2_content">
										</div>
										<div class="tab-pane" id="m_widget2_tab3_content">
										</div>
									</div>
								</div>	-->
							</div>
						</div>
					</div>




                <div class="row">

                    <div class="col-md-12">
                        <div class="card">

                           <!-- <form class="m-form m-form--fit m-form--label-align-right"  action="afficher-profil.php" method="post">-->

                            <div class="card-body">

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered cell-border table-hover">
                                    <thead class="thead-dark">
                                        <tr>
											<th>Id</th>
                                            <th>Pseudo</th>
                                            <th>Profil</th>
											<th>date_creation</th>
                                            <th>Ouvrir profil</th>
                                        </tr>
                                    </thead>
                                    <tbody>

									<?php
									$tabU = $conn->query ('Select * from Users_Recette');
									while ($donnees = $tabU->fetch_assoc())
									{

									  echo '<tr class="table-primary">
									  <form class="m-form m-form--fit m-form--label-align-right"  action="afficher-profil.php" method="post">';
echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['IdUsers']) . '<input type="hidden" name="IdUsers" value="'. htmlspecialchars($donnees['IdUsers']) . '"></td>';
										echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['UserName']) . '<input type="hidden" name="UserName" value="'. htmlspecialchars($donnees['UserName']) . '"></td>';
									  echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['profil']) . '<input type="hidden" name="profil" value="'. htmlspecialchars($donnees['profil']) . '"></td>';
										
										echo '<td class="">'. htmlspecialchars(date("d-m-Y",strtotime($donnees['date_creation']))) . '<input type="hidden" name="date_creation" value="'. htmlspecialchars(date("d-m-Y",strtotime($donnees['date_creation']))) . '"></td>';


									  echo '<td class="col-lg-3 col-md-3 col-xs-3">
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

  <!-- <button type="submit" name="action" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom" value="open">Ouvrir</button>&nbsp;&nbsp;-->

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
