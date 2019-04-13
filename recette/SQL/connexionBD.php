<?php

/*function connexionBDParam($host,$IdBd,$Password,$NomBd){

  //On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
  $conn = mysqli_connect($host, $IdBd, $Password, $NomBd);
  //$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
  mysqli_set_charset($conn, "utf8");


}

function connexionBD(){

//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
  $conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
  //$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
  mysqli_set_charset($conn, "utf8");


}

connexionBD();*/


//On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
  $conn = mysqli_connect('creativelscreati.mysql.db', 'creativelscreati', 'Ibrahim95', 'creativelscreati');
  //$conn = mysqli_connect('localhost', 'root', 'root', 'creativelscreati');
   mysqli_set_charset($conn, "utf8");
 

?>
