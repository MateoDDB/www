<?php

class Controler{


  function addHeader($type,$chemin){
    session_start();
    if(!isset($_SESSION['email'])){
      header('Location: '.$chemin.'index.php');
      exit();
    }
    $date = date("d-m-Y"); $heure = date("H:i");
    echo
    "<!DOCTYPE html>


    <html lang='fr'>

    <!-- begin::Head -->
    <head>
    <meta charset='utf-8' />
    <title>Créative Bus</title>
    <meta name='description' content='Latest updates and statistic charts'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no'>

    <!--begin::Web font -->


    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href='".htmlspecialchars($chemin)."vendors/perfect-scrollbar/css/perfect-scrollbar.css' rel='stylesheet' type='text/css' />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href='".htmlspecialchars($chemin)."vendors/tether/dist/css/tether.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-daterangepicker/daterangepicker.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-select/dist/css/bootstrap-select.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/select2/dist/css/select2.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/nouislider/distribute/nouislider.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/owl.carousel/dist/assets/owl.carousel.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/owl.carousel/dist/assets/owl.theme.default.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/ion-rangeslider/css/ion.rangeSlider.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/dropzone/dist/dropzone.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/summernote/dist/summernote.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/bootstrap-markdown/css/bootstrap-markdown.min.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/animate.css/animate.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/toastr/build/toastr.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/jstree/dist/themes/default/style.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/morris.js/morris.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/chartist/dist/chartist.min.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/sweetalert2/dist/sweetalert2.min.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/socicon/css/socicon.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/vendors/line-awesome/css/line-awesome.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/vendors/flaticon/css/flaticon.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/vendors/metronic/css/styles.css' rel='stylesheet' type='text/css' />
    <link href='".htmlspecialchars($chemin)."vendors/vendors/fontawesome5/css/all.min.css' rel='stylesheet' type='text/css' />
    <link rel='stylesheet' href='".htmlspecialchars($chemin)."vendors2/bootstrap/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='".htmlspecialchars($chemin)."vendors2/font-awesome/css/font-awesome.min.css'>
    <link rel='stylesheet' href='".htmlspecialchars($chemin)."vendors2/themify-icons/css/themify-icons.css'>
    <link rel='stylesheet' href='".htmlspecialchars($chemin)."vendors2/flag-icon-css/css/flag-icon.min.css'>
    <link rel='stylesheet' href='".htmlspecialchars($chemin)."vendors2/selectFX/css/cs-skin-elastic.css'>
    <link rel='stylesheet' href='".htmlspecialchars($chemin)."vendors2/datatables.net-bs4/css/dataTables.bootstrap4.min.css'>
    <link rel='stylesheet' href='".htmlspecialchars($chemin)."vendors2/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css'>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href='".htmlspecialchars($chemin)."assets/demo/base/style.bundle.css' rel='stylesheet' type='text/css' />

    <!--RTL version:<link href='".htmlspecialchars($chemin)."assets/demo/base/style.bundle.rtl.css' rel='stylesheet' type='text/css' />-->

    <!--end::Global Theme Styles -->
    <link rel='shortcut icon' href='".htmlspecialchars($chemin)."assets/demo/media/img/logo/Logo_Creative_Bus.ico' />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link href='https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css' rel='stylesheet' type='text/css' />

    ";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
    WebFont.load({
      google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.fr-fr.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
    $(document).ready(function()
    {
      $('#myCanvas').sign({
        resetButton: $('#resetSign'),
        lineWidth: 5
      });
    });
    </script>
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
    <script>
    ;(function($){
      $.fn.datepicker.dates['fr'] = {
        days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
        daysMin: ["D", "L", "Ma", "Me", "J", "V", "S", "D"],
        months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
        monthsShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"],
        today: "Aujourd'hui",
        suffix: [],
        meridiem: ["am", "pm"],
        weekStart: 1,
        format: "dd/mm/yyyy"
      };
    }(jQuery));

    $('.datepicker').datepicker({
      language: 'fr',
      autoclose: true,
      todayHighlight: true
    })
    </script>
    </head>
    <?php
  }

  function openBody(){
     ?>
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
                     <a href=<?echo '"'.htmlspecialchars($chemin).'accueil.php"';?> class="m-brand__logo-wrapper">
                       <img src=  <?echo '"'.htmlspecialchars($chemin).'assets/app/media/img/logos/Logo_Creative_Bus.png"';?> >
                       <!--   <img src="assets/app/media/img/logos/Logo_Creative_Bus.png">-->
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
                                     <a href<?echo '"'.htmlspecialchars($chemin).'modifier-supprimer-profil.php.php"';?> class="m-nav__link">
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
                                     <a href=<?echo '"'.htmlspecialchars($chemin).'logout.php"';?> class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Déconnexion</a>

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
               <a href=<?echo '"'.htmlspecialchars($chemin).'accueil.php"';?>  class="m-brand__logo">
                 <!--<img alt="" src="assets/app/media/img/logos/Logo_Creative_Bus.png" />-->
                 <img src=
                 <?
                 echo '"'.$chemin.'../assets/app/media/img/logos/Logo_Creative_Bus.png"';
                 ?>>
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
                       <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href=<?echo '"'.htmlspecialchars($chemin).'saisir-emploi-et-formation.php"';?>class="m-menu__link "><i class="m-menu__link-icon la la-search"></i><span class="m-menu__link-text">Emploi/Formation</span></a></li>
                       <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href=<?echo '"'.htmlspecialchars($chemin).'saisir-creation.php"';?> class="m-menu__link "><i class="m-menu__link-icon la la-rocket"></i><span class="m-menu__link-text">Création</span></a></li>
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
                   <?php if($_SESSION['email']==="malek.djaoui@gmail.com"){ ?>
                     <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="click" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-calendar-with-a-clock-time-tools"></i><span class="m-menu__link-text"></span><i
                       class="m-menu__ver-arrow la la-angle-right"></i></a>
                       <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                         <ul class="m-menu__subnav">
                           <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-text">Gérer les campagnes</span></span></li>
                           <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="Campagnes/listeCampagne.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-user-add"></i><span class="m-menu__link-text">Liste des campagnes</span></a></li>
                           <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="modifier-supprimer-profil.php" class="m-menu__link "><i class="m-menu__link-icon la la-info"></i><span class="m-menu__link-text">Modifier/Supprimer</span></a></li>

                         </ul>
                       </div>
                     </li>


                   <?php }?>



                 <?php }?>
               </ul>
             </div>

           </div>

             <div class="m-grid__item m-grid__item--fluid m-wrapper">
     <?php
  }

  function closeBody(){
     ?>
   </div> <!-- ferme : <div class="m-grid__item m-grid__item--fluid m-wrapper"> -->
      </div>
     </div>

       <?php
     }



    ?>
    <div class="m-portlet__foot m-portlet__foot--fit">
      <div class="form-group m-form__group row text-center ">
        <div class=" col-12" style="margin-top: 1em;">
          <button type="submit" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom"><?php echo $TexteButton;  ?></button>&nbsp;&nbsp;
        </div>
        <!--  <div class=" col-12">
        <button type="" class="btn btn-block btn-outline-focus m-btn  m-btn--custom" >Annuler</button>
      </div>-->
    </div>
  </div>

  function addFooter($chemin){
    include($chemin."footer2.php");
  }

  function addBoutonSubmit($TexteButton){
    ?>
    <div class="m-portlet__foot m-portlet__foot--fit">
      <div class="form-group m-form__group row text-center ">
        <div class=" col-12" style="margin-top: 1em;">
          <button type="submit" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom"><?php echo $TexteButton;  ?></button>&nbsp;&nbsp;
        </div>
        <!--  <div class=" col-12">
        <button type="" class="btn btn-block btn-outline-focus m-btn  m-btn--custom" >Annuler</button>
      </div>-->
    </div>
  </div>



  <ul class="m-nav-sticky" style="margin-top: 30px;">
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="" data-placement="left" data-original-title="Sauvegarder">
      <a href="javascript:{}" onclick="validerCreation();"><i class="la 	la-check"></i></a>
    </li>
  </ul>


  <?php
}


function addSubHeader($titre){
  ?>
  <div class="m-subheader "style="height: 5em;">
    <div class="d-flex align-items-center">

      <h3 class="m-subheader__title m-subheader__title--separator"><?php echo $titre ; ?></h3>
      <!--<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
      <li class="m-nav__item m-nav__item--home">
      <a href="#" class="m-nav__link m-nav__link--icon">
      <i class="m-nav__link-icon la la-home"></i>
    </a>
  </li>
  <li class="m-nav__separator">-</li>
  <li class="m-nav__item">
  <a href="" class="m-nav__link">
  <span class="m-nav__link-text">Créer une campagne</span>
</a>
</li>
<li class="m-nav__separator">-</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<span class="m-nav__link-text">Modifier une campagne</span>
</a>
</li>
<li class="m-nav__separator">-</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<span class="m-nav__link-text">Supprimer une campagne</span>
</a>
</li>
</ul>-->


</div>
</div>


<?php
}

function openPortlet(){
  ?>
  <div class="m-content">
    <div class="m-portlet  m-portlet--tabs  ">
      <div class="tab-content">
        <div class="tab-pane active" >
          <?php
        }
function closePortlet(){
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}

//function openForm($formName,$formAction,$formId,$method,$onSubmit){
function openForm($formName,$formAction,$formId,$method,$onSubmit){
  ?>
  <form class="m-form m-form--fit m-form--label-align-right m-form--state"
  action="<?php echo $formAction;?>"
  name="<?php echo $formName;?>"
  id="<?php echo $formId;?>"
  onsubmit="<?php echo $onSubmit;?>"
  method="post">
  <div class="m-portlet__body">
    <?php
  }


  function closeForm(){
    ?>
  </form>
</div>
<?php
}

function addSectionTitle($Title){
  ?>
  <div class="form-group m-form__group row">
    <div class="col-12 ml-auto">
      <h3 class="m-form__section"><?php echo $Title;?></h3>
    </div>
  </div>
  <?php
}

function addQuestionSimple($TexteQuestion,$PlaceHolder,$inputName){
  ?>
  <div class="form-group m-form__group ">
    <label class="form-control-label"><?php echo $TexteQuestion;?></label>
    <input name=<?php echo '"'.$inputName.'"';?> class="form-control m-input" type="text" maxlength="500" placeholder=<?php echo '"'.$PlaceHolder.'"';?>>
  </div>
  <?php
}

function addQuestionPlageDate($TexteQuestion,$dateDebut,$dateFin,$inputName){
  ?>
  <div class="form-group m-form__group  ">
    <label class="col-form-label"><?php echo $TexteQuestion;?></label>

    <input type="text" class="form-control col-12 datepicker" maxlength="10" placeholder="Saisir par exemple: 01/01/1960 - 01/02/1960" name=<?php echo '"'.$inputName.'"';?> >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script>
    ;(function($){
      $.fn.datepicker.dates['fr'] = {
        days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
        daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
        daysMin: ["D", "L", "Ma", "Me", "J", "V", "S", "D"],
        months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
        monthsShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"],
        today: "Aujourd'hui",
        suffix: [],
        meridiem: ["am", "pm"],
        weekStart: 1,
        format: "dd/mm/yyyy"
      };
    }(jQuery));

    $(function () {

      $('input[name="<?php echo $inputName;?>"]').daterangepicker({
        "showDropdowns": true,
        "locale": {
          "format": "DD/MM/YYYY",
          "separator": " - ",
          "applyLabel": "Valider",
          "cancelLabel": "Annuler",
          "fromLabel": "De",
          "toLabel": "à",
          "customRangeLabel": "Custom",
          "daysOfWeek": [
            "Dim",
            "Lun",
            "Mar",
            "Mer",
            "Jeu",
            "Ven",
            "Sam"
          ],
          "monthNames": [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre"
          ],
          "firstDay": 1
        },
        "startDate": <?php echo '"'.$dateDebut.'"'?>,
        "endDate":  <?php echo '"'.$dateFin.'"'?>,
        "opens": "right",
        "drops": "up"

      });
    });



    </script>

  </div>

  <?php


}
}



?>
