

						<!--begin::Portlet-->
						<div class="m-portlet">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<span class="m-portlet__head-icon">
											<i class="fa flaticon-buildings"></i>
										</span>
										<h3 class="m-portlet__head-text">
											Menu principal
										</h3>
									</div>
								</div>
							</div>
							<div class="m-portlet__body">
								<div class="m-pricing-table-1">
									<div class="m-pricing-table-1__items row">

										<div class="m-pricing-table-1__item col-lg-3">
											<div class="m-pricing-table-1__visual">
												<div class="m-pricing-table-1__hexagon1"></div>
												<div class="m-pricing-table-1__hexagon2"></div>
												<span class="m-pricing-table-1__icon m--font-accent"><i class="fa flaticon-doc"></i></span>
											</div>
											<span class="m-pricing-table-1__price">Entretiens</span>

											<h2 class="m-pricing-table-1__subtitle"><strong>Saisir les fiches</strong></h2>
											<a href="choix-du-formulaire.php">
											<div class="m-pricing-table-1__btn">
												<button type="button" class="btn m-btn--pill  btn-accent m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">SUIVANT</button>
											</div>
											</a>
										</div>

				<?php if($_SESSION['profil']==="Admin"){ ?>
										<div class="m-pricing-table-1__item col-lg-3">
											<div class="m-pricing-table-1__visual">
												<div class="m-pricing-table-1__hexagon1"></div>
												<div class="m-pricing-table-1__hexagon2"></div>
												<span class="m-pricing-table-1__icon m--font-brand"><i class="fa flaticon-user-settings"></i></span><!-- profile, user, plus, add -->
											</div>
											<span class="m-pricing-table-1__price">Utilisateurs</span>
											<h2 class="m-pricing-table-1__subtitle"><strong>Gérer les utilisateurs</strong></h2>
											<a href="choix-gestion-profil.php">
											<div class="m-pricing-table-1__btn">
												<button type="submit" class="btn btn-brand m-btn m-btn--custom m-btn--pill m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">SUIVANT</button>
											</div>
											</a>
										</div>

										<div class="m-pricing-table-1__item col-lg-3">
											<div class="m-pricing-table-1__visual">
												<div class="m-pricing-table-1__hexagon1"></div>
												<div class="m-pricing-table-1__hexagon2"></div>
												<span class="m-pricing-table-1__icon m--font-primary"><i class="fa flaticon-search"></i></span>
												<!-- /Applications/MAMP/htdocs/Créative-Bus-DevCusto/vendors/vendors/flaticon/css  -->
											</div>
											<span class="m-pricing-table-1__price">Base de données</span>
											<h2 class="m-pricing-table-1__subtitle"><strong>Emploi/Formation/Création</strong></h2>

											<a href="choix-parcourir.php">
											<div class="m-pricing-table-1__btn">
												<button type="button" class="btn m-btn--pill  btn-primary m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">SUIVANT</button>
											</div>
											</a>
										</div>
										<div class="m-pricing-table-1__item col-lg-3">
											<div class="m-pricing-table-1__visual">
												<div class="m-pricing-table-1__hexagon1"></div>
												<div class="m-pricing-table-1__hexagon2"></div>
												<span class="m-pricing-table-1__icon m--font-focus"><i class="fa flaticon-statistics"></i></span>
											</div>
											<span class="m-pricing-table-1__price">Statistiques</span>
											<h2 class="m-pricing-table-1__subtitle"><strong>Bilans</strong></h2>
											<a href="tableau-de-bord.php">
											<div class="m-pricing-table-1__btn">
												<button type="button" class="btn m-btn--pill  btn-focus m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">SUIVANT</button>
											</div>
											</a>
										</div>
										<div class="m-pricing-table-1__item col-lg-3">

										</div>
										<div class="m-pricing-table-1__item col-lg-3">
											<div class="m-pricing-table-1__visual">
												<div class="m-pricing-table-1__hexagon1"></div>
												<div class="m-pricing-table-1__hexagon2"></div>
												<span class="m-pricing-table-1__icon m--font-primary"><i class="fa flaticon-download"></i></span>
												<!-- /Applications/MAMP/htdocs/Créative-Bus-DevCusto/vendors/vendors/flaticon/css  -->
											</div>
											<span class="m-pricing-table-1__price">Extraction</span>
											<h2 class="m-pricing-table-1__subtitle"><strong>Emploi/Formation</strong></h2>

											<a href="extraction-emploi.php">
											<div class="m-pricing-table-1__btn">
												<button type="button" class="btn m-btn--pill  btn-primary m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">SUIVANT</button>
											</div>
											</a>
										</div>
										<div class="m-pricing-table-1__item col-lg-3">
											<div class="m-pricing-table-1__visual">
												<div class="m-pricing-table-1__hexagon1"></div>
												<div class="m-pricing-table-1__hexagon2"></div>
												<span class="m-pricing-table-1__icon m--font-primary"><i class="fa flaticon-download"></i></span>
												<!-- /Applications/MAMP/htdocs/Créative-Bus-DevCusto/vendors/vendors/flaticon/css  -->
											</div>
											<span class="m-pricing-table-1__price">Extraction</span>
											<h2 class="m-pricing-table-1__subtitle"><strong>Création</strong></h2>

											<a href="extraction-creation.php">
											<div class="m-pricing-table-1__btn">
												<button type="button" class="btn m-btn--pill  btn-primary m-btn--wide m-btn--uppercase m-btn--bolder m-btn--sm">SUIVANT</button>
											</div>
											</a>
										</div>
										<div class="m-pricing-table-1__item col-lg-3">

										</div>


	<?php } ?>

									</div>
								</div>
							</div>
						</div>

						<!--end::Portlet-->
					</div>
				</div>
			</div>
