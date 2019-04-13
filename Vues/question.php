<?php
Class Question{
  private $titre;
  private $inputName;
  private $type;
  private $valeur;

  function __construct($titre,$type,$inputName,$valeur=""){
    $this->titre =$titre;
    $this->type =$type;
    $this->inputName =$inputName;
    $this->valeur =$valeur;
  }

  function showHTML(){
    include('vue-questionSimple.php');
  }

Class QuestionChoixMultiple extends Question{
      function showHTML(){
        //Inclure les variables pour les différents choix possible avant
            include('vue-questionChoixMultiple.php');
      }
}


  function showQuestion(){
    switch ($this->type) {
    case "Simple":
          include('vue-questionSimple.php');
        break;
    case 1:
        echo "i égal 1";
        break;
    case 2:
        echo "i égal 2";
        break;
    }
  }

}
?>
