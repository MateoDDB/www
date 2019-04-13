
<?php include("header.php"); ?>



						<!--begin::Portlet-->
						<div class="m-portlet">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<span class="m-portlet__head-icon">
											<i class="fa flaticon-settings"></i>
										</span>
										<h3 class="m-portlet__head-text">
											Choisir la campagnes
										</h3>
									</div>
								</div>
							</div>
							<center>
							<div class="m-portlet__body">
								<div class="m-pricing-table-1">
									<div class="m-pricing-table-1__items row">
										
										<div class="m-pricing-table-1__item col-lg-3">
										
										</div>
										<form class="m-form m-form--fit m-form--label-align-right m-form--state" action="choix-du-formulaire.php" method="post">
								
										<div class="form-group m-form__group ">
											
											<?php
											include("SQL/connexionBD.php"); 
											        												
											$result = $conn->query('select * from Campagne');
										
											$rows  = $result->num_rows;

											//$tabU = $conn->query('select * from Campagne where IdCampagne="'.$IdCampagne.'"');
											//$tabU = $tabU->fetch_assoc();

											echo $rows.'LOOOL'; 
											var_dump($data);

											?>
											<select name="choixCampagne" class="first-name form-control" >
											      <option>Toutes</option>
											      <?php
												

												//$sql_array = mysql_query($select);
											    //$rows = mysql_num_rows($sql_array);

												if(isset($rows))
												{  
												   while($data = $result->fetch_assoc()){
													//for ($i=0; $i < $rows ;$i++){
											           $selected="";
											           							              
											          
												       echo "<option value=\"".$data["NomCampagne"]."\"".$selected.">".$data["NomCampagne"]."</option>\n";
												   }
												}
																		
											      ?>
											</select>


										</div>

										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="form-group m-form__group  text-center ">
												<div class=" col-12" style="margin-top: 1em;">
													<button type="submit" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom">Sauvegarder</button>&nbsp;&nbsp;
												</div>

											</div>
										</div>

										</form>


										<div class="m-pricing-table-1__item col-lg-3">
										
										</div>
										
									</div>
								</div>
							</div>
							</center>
						</div>

						<!--end::Portlet-->
					</div>
				</div>
			</div>

<?php include("footer.php"); ?>