<?php
session_start();

//var_dump($_POST);
//echo 'On est connecté '.$_SESSION['IdUsers'];
// test MATEO
if(!isset($_SESSION['email'])){

   header('Location: index.php');
   exit();
}

?>

			<!-- BEGIN: Header -->

<?php include("header.php"); ?>
<!-- begin::Body -->

<?php include("menu-principal.php");  ?>
<?php
include("footer.php"); ?>
