<?php

$date = date("d-m-Y"); $heure = date("H:i");


$UserName = isset($_POST['UserName'])?$_POST['UserName']:'';
$profil = isset($_POST['profil'])?$_POST['profil']:'';
$IdUsers = isset($_POST['IdUsers'])?$_POST['IdUsers']:'';




$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
mysqli_set_charset($conn, "utf8");


if ($_POST['action']=="supp"){

	$tabU = $conn->query ('delete from Users_Recette where IdUsers='.$IdUsers.'');



header("Location: modifier-supprimer-profil.php?success=$IdUsers");
}





	if ($_POST['action']=="open"){

		$tabU = $conn->query ('select * from Users_Recette where IdUsers='.$IdUsers.'');

		$tabU = $tabU->fetch_assoc();


?>

<?php include("header.php"); ?>



				<div class="row">
						<div class="col-xl-3 col-lg-4">
								<div class="m-portlet m-portlet--full-height  ">
									<div class="m-portlet__body">
										<div class="m-card-profile">
											<div class="m-card-profile__title m--hide">
												Your Profile
											</div>
											<div class="m-card-profile__pic">
												<div class="m-card-profile__pic-wrapper">
													<!--<img src="assets/app/media/img/users/user4.jpg" alt="" />-->
												</div>
											</div>
											<div class="m-card-profile__details">
												<span class="m-card-profile__name"><?php echo $UserName; echo $sql;?> </span>
												<a href="" class="m-card-profile__email m-link"><?php echo $email ?></a>
											</div>
										</div>
										<ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
											<li class="m-nav__separator m-nav__separator--fit"></li>
											<li class="m-nav__section m--hide">
												<span class="m-nav__section-text">Section</span>
											</li>
											<li class="m-nav__item">
												<?php $_POST['action']="supp"; $_POST['IdUsers']=$IdUsers;?>
												<a href="afficher-profil.php" class="m-nav__link">

													<span class="m-nav__link-title">
														<span class="m-nav__link-wrap">


														</span>
													</span>
												</a>
											</li>
											<!--<li class="m-nav__item">
												<a href="header/profile&amp;demo=default.html" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-profile-1"></i>
													<span class="m-nav__link-title">
														<span class="m-nav__link-wrap">
															<span class="m-nav__link-text">Le profil</span>
															<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
														</span>
													</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="header/profile&amp;demo=default.html" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-share"></i>
													<span class="m-nav__link-text">Activity</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="header/profile&amp;demo=default.html" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-chat-1"></i>
													<span class="m-nav__link-text">Messages</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="header/profile&amp;demo=default.html" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-graphic-2"></i>
													<span class="m-nav__link-text">Sales</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="header/profile&amp;demo=default.html" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-time-3"></i>
													<span class="m-nav__link-text">Events</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="header/profile&amp;demo=default.html" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-lifebuoy"></i>
													<span class="m-nav__link-text">Support</span>
												</a>
											</li>-->
										</ul>
										<!--<div class="m-portlet__body-separator"></div>
										<div class="m-widget1 m-widget1--paddingless">
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">Member Profit</h3>
														<span class="m-widget1__desc">Awerage Weekly Profit</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">+$17,800</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">Orders</h3>
														<span class="m-widget1__desc">Weekly Customer Orders</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">+1,800</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">Issue Reports</h3>
														<span class="m-widget1__desc">System bugs and issues</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-success">-27,49%</span>
													</div>
												</div>
											</div>
										</div>-->
									</div>
								</div>
							</div>

							<div class="col-xl-9 col-lg-8">

								<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
														<i class="flaticon-share m--hide"></i>
														Fiche profil de <?php echo $tabU['nom'];?>
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
											<form class="m-form m-form--fit m-form--label-align-right"  action="modifier-supprimer-profil.php" method="post">
												<div class="m-portlet__body">



													<div class="form-group m-form__group row">
														<div class="col-12 ml-auto">
															<h3 class="m-form__section">Les coordonnées</h3>
														</div>
													</div>

													<div class="form-group m-form__group row">
														<h5>Pseudo</h5>
															<input class="form-control m-input" type="text" name="UserName" value="<?php echo $tabU['UserName']; ?>">
													</div>
													<div class="form-group m-form__group row">
														<h5>Nom</h5>
															<input class="form-control m-input" type="text" name="nom" value="<?php echo $tabU['nom']; ?>">
													</div>
													<div class="form-group m-form__group row">
														<h5>Prénom</h5>
															<input class="form-control m-input" type="text" name="prenom"value="<?php echo $tabU['prenom']; ?>">
													</div>
													<div class="form-group m-form__group row">
														<h5>Téléphone</h5>
															<input class="form-control m-input" type="text" name="telephone" value="<?php echo $tabU['telephone']; ?>">
													</div>


												<div class="form-group m-form__group row">
													<h5>Email</h5>
														<input class="form-control disabled m-input" type="text" name="email" value="<?php echo $tabU['email']; ?>">
												</div>

												<div class="form-group m-form__group row">
													<h5>Profil</h5>
														<input class="form-control disabled m-input" type="text" name="profil" value="<?php echo $tabU['profil']; ?>">
												</div>

													<div class="form-group m-form__group row">
														<h5>Date de création</h5>
															<input class="form-control disabled m-input" type="text" name="date_creation" value="<?php echo $tabU['date_creation']; ?>"readonly>
													</div>
													<div class="form-group m-form__group row">
														<h5>N°Utilisateur</h5>
															<input class="form-control disabled m-input" type="text" name="IdUsers" value="<?php echo $tabU['IdUsers']; ?>"readonly>
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


			<?php
			}
			?>
<?php include("footer.php"); ?>
