<?php

class ControlerEmploi
{
public $emploi;

   public function initEmploi($tabPost){
    $emploi = new Emploi($tabPost);
  }

  function updateEmploi($emploi){

  }

/*

    function do_foo()
    {
        echo "Doing foo.";
    }

    function deleteEmploi()
    {
      $tabPostU = $conn->query ('delete from SaisieEmploi_Recette where IdSaisieEmploi='.$emploi['IdSaisieEmploi'].'');

        return true;
    }
    function updateEmploi(){

    }

    function addQuestionTexteLibreWithValue($labelValue,$inputName,$value){
      $emploi->addQuestionTexteLibreWithValue($labelValue,$inputName,$value);
    }
*/

}
?>
