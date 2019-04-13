<?php
session_start();

//echo 'On est connecté '.$_SESSION['email'];

if(!isset($_SESSION['email'])){

   header('Location: index.php');
   exit();

}

?>

<?php
	

	if($_POST){

		
		$nom = isset($_POST['nom'])?$_POST['nom']:'';		
		//$nom = htmlentities($_POST['nom'], ENT_QUOTES);	
		$prenom = isset($_POST['prenom'])?$_POST['prenom']:'';			
		$profil = isset($_POST['profil'])?$_POST['profil']:'';							
		$email = isset($_POST['email'])?$_POST['email']:'';		
		$telephone = isset($_POST['telephone'])?$_POST['telephone']:'';	
		$password = isset($_POST['password'])?$_POST['password']:'';	
		$UserName = isset($_POST['UserName'])?$_POST['UserName']:'';	


		//include ("config.php");// On se connecte à la base de donnée 
		  
		//$syntaxe='#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i';
		if($UserName!="" || $nom!="" || $prenom!="" || $profil!="" || $email!="")
			{
			if($email!="")
			{

				//var_dump($_POST);
				//On verifie si lemail est valide
				if(filter_var($email, FILTER_VALIDATE_EMAIL))
				{

					//include('config-plus.php');

					//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
					$conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
					//$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
					mysqli_set_charset($conn, "utf8");
					/*if($dn==0)
					{*/
						$resultat = $conn->query('select * from Users_Recette where email="'.$email.'"');
						$dm = $resultat->fetch_assoc();
						//On enregistre les informations dans la base de donnee
						
							//echo 'kiki';
						
						//var_dump($_POST);
						//$dm = mysqli_query('insert into adherentCrea(date_actu,lieu,sexe,monConseiller,nom,prenom,age,adresse,commune,telephone,mail,marcheTravail,expParcour,freinsRencontres,niveauEtude,accompagne,accompagneParQui,recontacte,natureProjet,precisionProjet,orientation,suiviCom) values (NOW(),"'.$lieu.'", "'.$sexe.'", "'.$nomConseiller.'","'.$nom.'", "'.$prenom.'", "'.$age.'", "'.$adresse.'", "'.$commune.'", "'.$telephone.'", "'.$mail.'", "'.$marcheTravail.'", "'.$freinsRencontres.'", "'.$expParcour.'","'.$niveauEtude.'","'.$accompagne.'","'.$accompagneParQui.'","'.$recontacte.'","'.$natureProjet.'","'.$precisionProjet.'","'.$orientation.'","'.$suiviCom.'")');
						
						//if($dm['email']!=$email) empty(trim($name))
						if (empty(trim($dm['email'])))
						{
							
							$dm = $conn->query ('insert into Users_Recette(UserName,password,email,nom,prenom,telephone,date_creation,profil) 
							values ("'.$UserName.'", "Creative", "'.$email.'", "'.$nom.'","'.$prenom.'", "'.$telephone.'", NOW(),"'.$profil.'")');
							//Mettre un massage ...
							$messageP = 'Nous vous avons bien enregistrer';
							//header('Location: inscription-valide.php?='.$_SESSION['IdUsers']);
							 
							$mail = $email; // Déclaration de l'adresse de destination.

							//=====Déclaration des messages au format texte et au format HTML.
							$message_txt = "Salut à toi , '".$passage_ligne."' voici un e-mail envoyé par l'association Créative bus voici le lien pour modifier ton mot de passe. ";
							$message_html = "<html><head></head><body><b>Salut</b>, voici le lien pour modifier le mot de passe de ton compte <i>https://creative-bus.fr/reinitialiser-password.php</i>.</body></html>";
							//==========
							 $passage_ligne = "\n";

							 
							//=====Définition du sujet.
							$sujet = "Bonjour  '".$prenom."', bravo vous êtes enregistré en tant '".$profil."'!";
							//=========
							 
							//=====Création du header de l'e-mail.
							$header = "From: \"Créative Bus\"<equipe.crative-bus@creative-bus.fr>".$passage_ligne;
							$header.= "Reply-to: \"WeaponsB\" <equipe.crative-bus@creative-bus.fr>".$passage_ligne;
							$header.= "MIME-Version: 1.0".$passage_ligne;
							$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
							//==========
							 
							//=====Création du message.
							$message = $passage_ligne."--".$boundary.$passage_ligne;
							//=====Ajout du message au format texte.
							$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_txt.$passage_ligne;
							//==========
							$message.= $passage_ligne."--".$boundary.$passage_ligne;
							//=====Ajout du message au format HTML
							$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_html.$passage_ligne;
							//==========
							$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
							$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
							//==========
							 
							//=====Envoi de l'e-mail.
							mail($mail,$sujet,$message,$header);



							 
							    
							header('Location: inscription-valide.php');
						}
						else
						{
							//Sinon on dit quil y a eu une erreur					
							
							
							$messageNc = 'Cette adresse mail est déja existant, Veuillez reprendre votre saisie du champs e-mail.';
						}
					//}
				/*	else
					{
						//Sinon, on dit que le pseudo voulu est deja pris
						//$form = true;
					
						$messageN = 'Un autre utilisateur utilise d&eacute;j&agrave; le nom d\'utilisateur que vous d&eacute;sirez utiliser.';
					}*/
				}
				else
				{
					//Sinon, on dit que lemail nest pas valide
					//$form = true;
					$messageN = 'L\'email que vous avez entr&eacute; n\'est pas valide.';
				}
			}
		}
		else{
					//Sinon, on dit que lemail nest pas valide
					//$form = true;
					$messageSaisie = 'Il manque un ou plusieurs champs à remplir. Veuillez reprendre la saisie';
		}

			
		
		
	}
	if(isset($messageNc))
	{
		//echo '<div class="message">'.$message.'</div>'; 
	?>
		    <div class="alert-danger alert">
	            <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
	            <strong><?php echo'Désolé,'; ?></strong>
	                <p><?php echo $messageNc; ?></p>
	        </div><!-- .alert -->
	<?php
	}
	?>


<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="fr">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Créative Bus | Connexion</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="assets/demo/media/img/logo/Logo_Creative_Bus.ico" />
	</head>
	<?php
	if(isset($messageN))
	{
	?>
		    <div class="alert-danger alert">
	            <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
	            <strong><?php echo'Désolé,'; ?></strong>
	                <p><?php echo $messageN; ?></p>
	        </div><!-- .alert -->
	<?php
	}
	?>
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

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(assets/app/media/img//bg/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="accueil.php">
								<img src="assets/app/media/img/logos/Logo_Creative_Bus.png">
							</a>
						</div>
					
							<div class="m-login__head">
								<h3 class="m-login__title">Inscrire un nouveau membre</h3>
								<div class="m-login__desc">Entrez les coordonnées pour créer le nouveau compte:</div>
							</div>
						
							<form class="m-login__form m-form" action="inscription.php" method="post">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" maxlength="250" placeholder="Pseudo" name="UserName">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" maxlength="250" placeholder="Nom" name="nom">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" maxlength="250" placeholder="Prénom" name="prenom">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" maxlength="15" placeholder="Téléphone" name="telephone">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" maxlength="250" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
								<select id="marcheTravail" class="first-name form-control" placeholder="" name="profil">
					            	  <option value="">--Choisir type de profil--</option>
				                      <option value="Admin">Admin</option>
				                      <option value="Membre de creative">Membre de créative</option>
				                      <option value="Partenaire">Partenaire</option>
				                      <option value="Commanditaire">Commanditaire</option>	
				                      <option value="Bénéficiaire">Bénéficiaire</option>				     
				                </select>
								</div>
							
								<!--<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="agree">Je suis d'accord <a href="#" class="m-link m-link--focus">Termes et conditions</a>.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>-->
								<div class="m-login__form-action">
									
									<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Inscrire</button>
									
								</div>
				
							</form>
							<center>
								<a href="accueil.php">
									<div class="m-login__form-action">
											
											<button type="submit" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Annuler</button>
											
									</div>
								</a>
							</center>

					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin:: Global Mandatory Vendors -->

		<script src="vendors/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="vendors/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="vendors/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="vendors/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="vendors/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="vendors/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
		<!--<script src="vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>-->
		<script src="vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="vendors/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="vendors/raphael/raphael.js" type="text/javascript"></script>
		<script src="vendors/morris.js/morris.js" type="text/javascript"></script>
		<script src="vendors/chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="assets/snippets/custom/pages/user/login.min.js" type="text/javascript"></script>


		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>