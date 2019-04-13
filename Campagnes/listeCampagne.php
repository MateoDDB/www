<?php
session_start();

$chemin ='../';
//echo "<link href='".htmlspecialchars($chemin)."vendors/tether/dist/css/tether.css' rel='stylesheet' type='text/css' />";



//var_dump($_POST);
//echo 'On est connecté '.$_SESSION['IdUsers'];

if(!isset($_SESSION['email'])){

  header('Location: index.php');
  exit();
}
?>

<?php include('../Controler/controler.php');
//echo "haha";



$ctrl = new Controler();
$ctrl->addHeader('Admin',$chemin);
  $ctrl->openBody(); // contient body
    $ctrl->addSubHeader("Campagnes");
    $ctrl->openPortlet($chemin);
    $ctrl->openForm("RegForm",$chemin."saisir-creation.php","formCreation","post","return validerCreation();");
    $ctrl->addSectionTitle("Créer une campagne");
    $ctrl->addQuestionSimple("Titre de la campagne? *","Le titre de la campagne","TitreCampagne");
    $ctrl->addQuestionPlageDate("Indiquez la date de début et la date de fin de la campagne","01/01/2019","05/01/2019","PeriodeCampagne");
    $ctrl->addBoutonSubmit("Sauvegarder");
    $ctrl->closeForm();
    $ctrl->closePortlet();
  $ctrl->closeBody(); // contient body


/*
$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","StadeProjet3");
$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","Projet5");

$ctrl->addSectionTitle("2. Identité");

$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","Projet2");
$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","StadeProjet3");
$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","Projet5");

$ctrl->addSectionTitle("3. Autres");

$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","Projet2");
$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","StadeProjet3");
$ctrl->addQuestionSimple("Quel est votre projet ? *","Resumez en quelques mots votre projets","Projet5");
*/

?>
</div>
</div>
</div>








<?php// include('../saisir-creation.php');?>
<?php $ctrl->addFooter($chemin);?>
