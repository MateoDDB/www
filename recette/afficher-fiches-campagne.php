<?php
session_start();

if(!isset($_SESSION['email'])){

   header('Location: index.php');
   exit();
}
?>

<!-- BEGIN: Header -->
<?php include("header.php"); ?>

<?php include("footer.php"); ?>
