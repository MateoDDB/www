<?php

$date = date("d-m-Y"); $heure = date("H:i");



if($_POST){
 

  $IdCampagne = isset($_POST['IdCampagne'])?$_POST['IdCampagne']:'';
  $NomCampagne = isset($_POST['NomCampagne'])?$_POST['NomCampagne']:'';
  $VilleCampagne = isset($_POST['VilleCampagne'])?$_POST['VilleCampagne']:'';
  $AuteurCampagne = isset($_POST['AuteurCampagne'])?$_POST['AuteurCampagne']:'';
  $DemandeurCampagne = isset($_POST['DemandeurCampagne'])?$_POST['DemandeurCampagne']:'';
  $DebutCampagne = isset($_POST['DebutCampagne'])?$_POST['DebutCampagne']:'';
  $FinCampagne = isset($_POST['FinCampagne'])?$_POST['FinCampagne']:'';
  $DateModif = isset($_POST['DateModif'])?$_POST['DateModif']:'';


  
  include('SQL/connexionBD.php');



  if ($_POST['action']=="modif"){



    $sql = $conn->query('update Campagne set NomCampagne="'.$NomCampagne.'", VilleCampagne="'.$VilleCampagne.'", AuteurCampagne="'.$AuteurCampagne.'", DebutCampagne="'.$DebutCampagne.'", FinCampagne="'.$FinCampagne.'", DateModif="'.$DateModif.'" where IdCampagne="'.$IdCampagne.'"');


    $messageP = 'Modification effectuée';
  }

}
if ($_POST['action']=="supp"){

  $tabU = $conn->query ('delete from Campagne where IdCampagne='.$IdCampagne.'');
  $messageSup = 'Votre suppression est un succès';
  header("Location: recherche-campagne.php");

}



$tabU = $conn->query('select * from Campagne where IdCampagne="'.$IdCampagne.'"');
$tabU = $tabU->fetch_assoc();

include("header.php");
?>



<?php
if(isset($messageP))
{
  //echo '<div class="message">'.$message.'</div>';
  ?>
  <!-- PHP ALERTS FROM THE FORMS -->

  <div class="alert-success alert" >
    <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
    <strong><?php echo'Bravo, ';?></strong>
    <p><?php echo'Modification effectuée'; ?></p>
  </div><!-- .alert -->

  <?php
}
?>
<?php
if(isset($messageSup))
{
  //echo '<div class="message">'.$message.'</div>';
  ?>
  <!-- PHP ALERTS FROM THE FORMS -->

  <div class="alert-success alert" >
    <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
    <strong><?php echo'Bravo, ';?></strong>
    <p><?php echo'Suppression effectuée'; ?></p>
  </div><!-- .alert -->

  <?php
}



  /*$DebutCampagne = isset($_POST['DebutCampagne'])?$_POST['DebutCampagne']:''; $DebutCampagne = str_replace("/","-",$DebutCampagne); $DebutCampagne = date("Y-m-d", strtotime($DebutCampagne));
  $FinCampagne = isset($_POST['FinCampagne'])?$_POST['FinCampagne']:''; $FinCampagne = str_replace("/","-",$FinCampagne); $FinCampagne = date("Y-m-d", strtotime($FinCampagne));*/

?>



<div class="row">

  <div class="col-xl-12 col-lg-12">

    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
      <div class="m-portlet__head">
        <div class="m-portlet__head-tools">
          <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
            <li class="nav-item m-tabs__item">
              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                <i class="flaticon-share m--hide"></i>
                <h5>Campagne n° <?php echo $tabU['IdCampagne'];?></h5>
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
    <form class="m-form m-form--fit m-form--label-align-right"  action="afficher-campagne.php" method="post">
      <div class="m-portlet__body">



        <div class="form-group m-form__group">
          <div class="col-12 ml-auto">
            <h3 class="m-form__section">Les modifications</h3>
          </div>
        </div>

        <div class="form-group m-form__group">
          <label class="form-control-label">N°Formulaire</label>
          <input class="form-control bg-secondary m-input" type="text" name="IdCampagne" value="<?php echo $tabU['IdCampagne']; ?>"readonly>
        </div>

         <div class="form-group m-form__group  ">
          <label class="form-control-label">Saisir le nom de votre campagne </label>
          <input class="form-control m-input" type="text" name="NomCampagne" maxlength="100" value="<?php echo $tabU['NomCampagne']; ?>">
        </div>

        <div class="form-group m-form__group  ">
          <label class="form-control-label">Auteur de la campagne </label>
          <input class="form-control m-input" type="text" name="AuteurCampagne" maxlength="55" value="<?php echo $tabU['AuteurCampagne']; ?>">
        </div>
        <div class="form-group m-form__group  ">
          <label class="form-control-label">Demandeur de la campagne </label>
          <input class="form-control m-input" type="text" name="DemandeurCampagne" maxlength="55" value="<?php echo $tabU['DemandeurCampagne']; ?>">
        </div>

        <div class="form-group m-form__group ">
          <label class="form-control-label">Ville </label>
          <input class="form-control m-input" type="text" name ="VilleCampagne" maxlength="155" value="<?php echo $tabU['VilleCampagne']; ?>">
        </div>

        <div class="form-group m-form__group ">
          <label class="form-control-label">Date de début </label>
          <input class="form-control  m-input" type="text" name="DebutCampagne" value="<?php echo $tabU['DebutCampagne']; ?>" maxlength="10">
        </div>
        <div class="form-group m-form__group ">
          
          <label class="form-control-label">Date de fin </label>
          <input class="form-control  m-input" type="text" name="FinCampagne" value="<?php echo $tabU['FinCampagne']; ?>" maxlength="10">

        </div>

  </div>


<div class="m-portlet__foot m-portlet__foot--fit">
  <div class="form-group m-form__group text-center ">
    <div class=" col-12" style="margin-top: 1em;">
      <button type="submit" name="action" class="btn btn-block btn-accent m-btn m-btn--air m-btn--custom" value="modif">Modifier</button>&nbsp;&nbsp;
      <button  type="submit" name="action" class="btn btn-block btn-danger m-btn m-btn--air m-btn--custom" value="supp">Supprimer</button>&nbsp;&nbsp;
    </div>
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

include("footer.php"); ?>
