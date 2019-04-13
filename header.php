
<?php
session_start();


//var_dump($_POST);
//echo 'On est connecté '.$_SESSION['IdUsers'];

if(!isset($_SESSION['email'])){

  header('Location: index.php');
  exit();

}
$date = date("d-m-Y"); $heure = date("H:i");

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
  <title>Créative Bus</title>
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

  <link rel="stylesheet" href="vendors2/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendors2/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors2/themify-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors2/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors2/selectFX/css/cs-skin-elastic.css">
  <link rel="stylesheet" href="vendors2/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vendors2/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

  <!--end:: Global Optional Vendors -->

  <!--begin::Global Theme Styles -->
  <link href="assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

  <!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

  <!--end::Global Theme Styles -->
  <link rel="shortcut icon" href="assets/demo/media/img/logo/Logo_Creative_Bus.ico" />


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link href="/Content/demo.css" rel="stylesheet" type="text/css" />
  <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.fr-fr.js" type="text/javascript"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.bg-bg.js" type="text/javascript"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.de-de.js" type="text/javascript"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.pt-br.js" type="text/javascript"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.ru-ru.js" type="text/javascript"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.es-es.js" type="text/javascript"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.it-it.js" type="text/javascript"></script>

  <?php
  if($GET['success']==true)
  {

    ?>
    <div class="alert-danger alert">
      <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
      <strong><?php echo'Désolé,'; ?></strong>
      <p><?php echo ""; ?></p>
    </div><!-- .alert -->
    <?php
  }
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="assets/app/js/sign.js" type="text/javascript"></script>

  <script>
  $(document).ready(function()
  {
    $('#myCanvas').sign({
      resetButton: $('#resetSign'),
      lineWidth: 5
    });
  });
  </script>
  <style>
  #myCanvas {
    border:4px solid #100;
    border-radius: 15px;
  }
  </style>

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--static m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-brand--minimize m-footer--push m-aside--offcanvas-default m-header--show m-aside-left--minimize">

  <!-- begin:: Page -->
  <div class="m-grid m-grid--hor m-grid--root m-page">






    <header id="m_header" class="m-grid__item m-header" m-minimize-offset="200" m-minimize-mobile-offset="200">

      <div class="m-container m-container--fluid m-container--full-height">



        <div class="m-stack m-stack--ver m-stack--desktop">


          <!-- BEGIN: Brand -->
          <div class="m-stack__item m-brand ">

            <div class="m-stack m-stack--ver m-stack--general">
              <div class="m-stack__item m-stack__item--middle m-brand__logo">
                <a href="accueil.php" class="m-brand__logo-wrapper">

                  <img src="assets/app/media/img/logos/Logo_Creative_Bus.png">

                </a>
              </div>

              <div class="m-stack__item m-stack__item--middle m-brand__tools">

                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                  <span></span>
                </a>

                <!-- END -->

                <!-- BEGIN: Responsive Header Menu Toggler -->


                <!-- END -->

                <!-- BEGIN: Topbar Toggler -->
                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                  <i class="flaticon-more"></i>
                </a>

                <!-- BEGIN: Topbar Toggler -->
              </div>
            </div>
          </div>

          <!-- END: Brand -->
          <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

            <!-- BEGIN: Horizontal Menu -->
            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">


            </div>

            <!-- END: Horizontal Menu -->

            <!-- BEGIN: Topbar -->
            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">

              <div class="m-stack__item m-topbar__nav-wrapper">
                <ul class="m-topbar__nav m-nav m-nav--inline">


                  <?php  //var_dump($_SESSION); ?>
                  <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                    <a href="#" class="m-nav__link m-dropdown__toggle">
                      <span class="m-topbar__userpic m--hide">
                        <!--<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />-->
                      </span>
                      <span class="m-nav__link-icon m-topbar__usericon">
                        <span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
                      </span>
                      <?php if (isset($_SESSION['UserName'])){ ?>
                        <span class="m-topbar__username m--hide"><?php $nom=$_SESSION['UserName']; echo $nom.'  '; ?></span>
                      <?php }?>
                    </a>

                    <div class="m-dropdown__wrapper">
                      <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                      <div class="m-dropdown__inner">
                        <div class="m-dropdown__header m--align-center">
                          <div class="m-card-user m-card-user--skin-light">
                            <div class="m-card-user__pic">
                              <!--<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />-->
                            </div>
                            <div class="m-card-user__details">
                              <?php if (isset($_SESSION['UserName'])){ ?>
                                <span class="m-card-user__name m--font-weight-500"><?php $nom=$_SESSION['UserName']; echo $nom.'  '; ?></span>
                                <a href="" class="m-card-user__email m--font-weight-300 m-link"><?php $mail=$_SESSION['email']; echo $mail.'  '; ?></a>
                              <?php }?>
                            </div>
                          </div>
                        </div>

                        <div class="m-dropdown__body">
                          <div class="m-dropdown__content">
                            <ul class="m-nav m-nav--skin-light">
                              <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">Section</span>
                              </li>
                              <li class="m-nav__item">
                                <a href="modifier-supprimer-profil.php" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-profile-1"></i>
                                  <span class="m-nav__link-title">
                                    <span class="m-nav__link-wrap">
                                      <span class="m-nav__link-text">Mon Profil</span>
                                      <!--	<span class="m-nav__link-badge"><span class="m-badge m-badge--success">0</span></span>-->
                                    </span>
                                  </span>
                                </a>
                              </li>
                              <li class="m-nav__item">
                                <a href="logout.php" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Déconnexion</a>

                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                </ul>
              </div>
            </div>

          </div>
        </div>
        <!--<center><h1>Créative BUS</h1></center>-->
      </div>
    </header>






    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
      <!-- BEGIN: Left Aside -->
      <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
      <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

        <!-- BEGIN: Brand -->
        <div class="m-brand  m-brand--skin-light ">
          <a href="accueil.php" class="m-brand__logo">
            <img alt="" src="assets/app/media/img/logos/Logo_Creative_Bus.png" />
          </a>
        </div>

        <!-- BEGIN: Aside Menu -->
        <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" m-menu-scrollable="true" m-menu-dropdown-timeout="500">
          <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow">
          
                  <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-edit-1"></i><span class="m-menu__link-text">Saisir données</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                      <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Saisir les fiches</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="saisir-emploi-et-formation.php" class="m-menu__link "><i class="m-menu__link-icon la la-search"></i><span class="m-menu__link-text">Emploi/Formation</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="saisir-creation.php" class="m-menu__link "><i class="m-menu__link-icon la la-rocket"></i><span class="m-menu__link-text">Création</span></a></li>
                      </ul>
                    </div>
                  </li>

                  <?php if($_SESSION['profil']==="Admin"){ ?>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-user-settings"></i><span class="m-menu__link-text">Gérer les utilisateurs</span><i
                      class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Gérer les utilisateurs</span></span></li>
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inscription.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-user-add"></i><span class="m-menu__link-text">Ajouter un utilisateur</span></a></li>
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="modifier-supprimer-profil.php" class="m-menu__link "><i class="m-menu__link-icon la la-info"></i><span class="m-menu__link-text">Modifier/Supprimer</span></a></li>

                        </ul>
                      </div>
                    </li>



                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-text">Statistiques</span><i
                      class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Statistiques</span></span></li>
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="tableau-de-bord.php" class="m-menu__link "><i class="m-menu__link-icon la la-search"></i><span class="m-menu__link-text">Bilans</span></a></li>

                        </ul>
                      </div>
                    </li>

                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-search"></i><span
                      class="m-menu__link-text">Base de données</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Parcourir les données</span></span></li>
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="recherche-emploi-et-formation.php" class="m-menu__link "><i class="m-menu__link-icon la la-search"></i><span class="m-menu__link-text">Emploi/Formation</span></a></li>
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="recherche-creation.php" class="m-menu__link "><i class="m-menu__link-icon la la-rocket"></i><span class="m-menu__link-text">Création</span></a></li>
                        </ul>
                      </div>
                    </li>

                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-download-1"></i><span
                      class="m-menu__link-text">Extraction</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Extraction de données</span></span></li>
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="extraction-emploi.php" class="m-menu__link "><i class="m-menu__link-icon la la-search"></i><span class="m-menu__link-text">Emploi/Formation</span></a></li>
                          <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="extraction-creation.php" class="m-menu__link "><i class="m-menu__link-icon la la-rocket"></i><span class="m-menu__link-text">Création</span></a></li>
                        </ul>
                      </div>
                    </li>

                  <?php }?>
                </ul>
              </div>

            </div>

            <div class="m-grid__item m-grid__item--fluid m-wrapper">

              <div class="m-content">
