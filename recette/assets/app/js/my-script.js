function validerCreation()
{
  var Projet = document.forms["RegForm"]["Projet"];
  var StadeProjet1 = document.forms["RegForm"]["StadeProjet1"];
  var StadeProjet2 = document.forms["RegForm"]["StadeProjet2"];
  var StadeProjet3 = document.forms["RegForm"]["StadeProjet3"];
  var StadeProjet4 = document.forms["RegForm"]["StadeProjet4"];
  var ComStadeProjet = document.forms["RegForm"]["ComStadeProjet"];
  var StadeProjet = StadeProjet1.checked +  StadeProjet2.checked +  StadeProjet3.checked + StadeProjet4.checked + ComStadeProjet.value;
  var SituationDuBeneficiaire = document.forms["RegForm"]["SituationDuBeneficiaire"];
  var EtesVousAccompagne = document.forms["RegForm"]["EtesVousAccompagne"];
  var SiOuiQui = document.forms["RegForm"]["SiOuiQui"];
  var ExpCreation = document.forms["RegForm"]["ExpCreation"];
  var SouhaitezVousEtreRecontacte = document.forms["RegForm"]["SouhaitezVousEtreRecontacte"];
  var Nom = document.forms["RegForm"]["Nom"];
  var Prenom = document.forms["RegForm"]["Prenom"];
  var Telephone_1 = document.forms["RegForm"]["Telephone_1"];
  var Sexe = document.forms["RegForm"]["Sexe"];
  var LieuBus = document.forms["RegForm"]["LieuBus"];
  var Signature = document.forms["RegForm"]["Signature"];


  //window.alert(document.forms["RegForm"]["Signature"].parentElement.parentElement.parentElement.className);
  var valid = true;



  if (Signature.checked == false)
  {
    //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
    var str = document.forms["RegForm"]["Signature"].parentElement.parentElement.parentElement.className;
    document.forms["RegForm"]["Signature"].parentElement.parentElement.parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["Signature"].parentElement.parentElement.parentElement.className =  document.forms["RegForm"]["Signature"].parentElement.parentElement.parentElement.className +" has-danger";
    Signature.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["Signature"].parentElement.parentElement.parentElement.className;
    document.forms["RegForm"]["Signature"].parentElement.parentElement.parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }

  if (LieuBus.value == "")
  {
    //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
    var str = document.forms["RegForm"]["LieuBus"].parentElement.className;
    document.forms["RegForm"]["LieuBus"].parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["LieuBus"].parentElement.className =  document.forms["RegForm"]["LieuBus"].parentElement.className +" has-danger";
    LieuBus.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["LieuBus"].parentElement.className;
    document.forms["RegForm"]["LieuBus"].parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }

  if (Sexe.value == "")
  {
    //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
    var str = document.forms["RegForm"]["Sexe"].parentElement.className;
    document.forms["RegForm"]["Sexe"].parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["Sexe"].parentElement.className =  document.forms["RegForm"]["Sexe"].parentElement.className +" has-danger";
    Sexe.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["Sexe"].parentElement.className;
    document.forms["RegForm"]["Sexe"].parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }
  if (Telephone_1.value == "")
  {
    //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
    var str = document.forms["RegForm"]["Telephone_1"].parentElement.className;
    document.forms["RegForm"]["Telephone_1"].parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["Telephone_1"].parentElement.className =  document.forms["RegForm"]["Telephone_1"].parentElement.className +" has-danger";
    Telephone_1.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["Telephone_1"].parentElement.className;
    document.forms["RegForm"]["Telephone_1"].parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }

  if (Prenom.value == "")
  {
    //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
    var str = document.forms["RegForm"]["Prenom"].parentElement.className;
    document.forms["RegForm"]["Prenom"].parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["Prenom"].parentElement.className =  document.forms["RegForm"]["Prenom"].parentElement.className +" has-danger";
    Prenom.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["Prenom"].parentElement.className;
    document.forms["RegForm"]["Prenom"].parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }


  if (Nom.value == "")
  {
    //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
    var str = document.forms["RegForm"]["Nom"].parentElement.className;
    document.forms["RegForm"]["Nom"].parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["Nom"].parentElement.className =  document.forms["RegForm"]["Nom"].parentElement.className +" has-danger";
    Nom.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["Nom"].parentElement.className;
    document.forms["RegForm"]["Nom"].parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }


  if (SouhaitezVousEtreRecontacte.value == "")
  {
    //window.alert("Indiquez si le bénéficiaire désire être recontacté.");
    var str = document.getElementById('formRadioInline6').parentElement.parentElement.className;
    document.getElementById('formRadioInline6').parentElement.parentElement.className = str.replace(" has-danger", "");
    document.getElementById('formRadioInline6').parentElement.parentElement.className =  document.getElementById('formRadioInline6').parentElement.parentElement.className +" has-danger";
    document.getElementById('formRadioInline6').focus();
    //SouhaitezVousEtreRecontacte.focus();
    valid = false;
  }
  else {
    var str = document.getElementById('formRadioInline6').parentElement.parentElement.className;
    document.getElementById('formRadioInline6').parentElement.parentElement.className = str.replace(" has-danger", "");
    valid = true;
  }


  if (EtesVousAccompagne.value == "Oui")
  {
    if (SiOuiQui.value == "")
    {
      //window.alert("Indiquez qui accompagne le bénéficiaire.");
      var str = document.getElementById('formRadioInline4').parentElement.parentElement.className;
      document.getElementById('formRadioInline4').parentElement.parentElement.className   = str.replace(" has-danger", "");
      document.getElementById('formRadioInline4').parentElement.parentElement.className =  document.getElementById('formRadioInline4').parentElement.parentElement.className +" has-danger";
      SiOuiQui.focus();
      valid = false;
    }

  }
  else {
    var str = document.getElementById('formRadioInline4').parentElement.parentElement.className;
    document.getElementById('formRadioInline4').parentElement.parentElement.className   = str.replace(" has-danger", "");
    valid = true;
  }


  if (SituationDuBeneficiaire.value == "")
  {
    //window.alert("Saisissez la situation du bénéficiaire");
    var str = document.forms["RegForm"]["SituationDuBeneficiaire"].parentElement.className;
    document.forms["RegForm"]["SituationDuBeneficiaire"].parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["SituationDuBeneficiaire"].parentElement.className =  document.forms["RegForm"]["SituationDuBeneficiaire"].parentElement.className +" has-danger";
    SituationDuBeneficiaire.focus();
    valid = false;
  }

  else {
    var str = document.forms["RegForm"]["SituationDuBeneficiaire"].parentElement.className;
    document.forms["RegForm"]["SituationDuBeneficiaire"].parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }

  if (ExpCreation.value == "" )
  {
    //window.alert("Saisissez votre expérience.");
    var str = document.getElementById('formRadioInline1').parentElement.parentElement.className;
    document.getElementById('formRadioInline1').parentElement.parentElement.className  = str.replace(" has-danger", "");
    document.getElementById('formRadioInline1').parentElement.parentElement.className =  document.getElementById('formRadioInline1').parentElement.parentElement.className +" has-danger";
    document.getElementById('formRadioInline1').focus();
    //ExpCreation.focus();
    valid = false;
  }
  else {
    var str = document.getElementById('formRadioInline1').parentElement.parentElement.className;
    document.getElementById('formRadioInline1').parentElement.parentElement.className  = str.replace(" has-danger", "");
    valid = true;
  }


  if (StadeProjet == "0" )
  {
    //window.alert("Saisissez le stade du projet.");
    var str = document.forms["RegForm"]["StadeProjet1"].parentElement.parentElement.parentElement.className ;
    document.forms["RegForm"]["StadeProjet1"].parentElement.parentElement.parentElement.className   = str.replace(" has-danger", "");
    document.forms["RegForm"]["StadeProjet1"].parentElement.parentElement.parentElement.className =  document.forms["RegForm"]["StadeProjet1"].parentElement.parentElement.parentElement.className +" has-danger";
    ComStadeProjet.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["StadeProjet1"].parentElement.parentElement.parentElement.className ;
    document.forms["RegForm"]["StadeProjet1"].parentElement.parentElement.parentElement.className   = str.replace(" has-danger", "");
    valid = true;
  }


  if (Projet.value == "")
  {
    //window.alert("Saisissez le projet du bénéficaire.");
    //Projet.className = 	Projet.className + "-danger";
    var str = document.forms["RegForm"]["Projet"].parentElement.className;
    document.forms["RegForm"]["Projet"].parentElement.className  = str.replace(" has-danger", "");
    document.forms["RegForm"]["Projet"].parentElement.className =  document.forms["RegForm"]["Projet"].parentElement.className +" has-danger";
    Projet.focus();
    valid = false;
  }
  else {
    var str = document.forms["RegForm"]["Projet"].parentElement.className;
    document.forms["RegForm"]["Projet"].parentElement.className  = str.replace(" has-danger", "");

  }




  if (valid){
    return true;
  }
  if (valid==false){
    return false;
  }

}
  function testQuestion(objet,value,NbParent,champs){
    //window.alert(NbParent);
    switch (NbParent) {
      case 1:
      if (objet.value == "")
      {
        //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
        var str = document.forms["RegForm"][value].parentElement.className;
        document.forms["RegForm"][value].parentElement.className  = str.replace(" has-danger", "");
        document.forms["RegForm"][value].parentElement.className =  document.forms["RegForm"][value].parentElement.className +" has-danger";
        objet.focus();
        //champs.push([value,'false']);
        champs.push([value,'false']);
      }
      else {
        var str = document.forms["RegForm"][value].parentElement.className;
        document.forms["RegForm"][value].parentElement.className = str.replace(" has-danger", "");
        //valid = true;
        //champs.pop();
      }
      break;

      case 2:

      if (objet.value == '' || objet.checked == false )
      {
        //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
        var str = document.forms["RegForm"][value].parentElement.parentElement.className;
        document.forms["RegForm"][value].parentElement.parentElement.className  = str.replace(" has-danger", "");
        document.forms["RegForm"][value].parentElement.parentElement.className =  document.forms["RegForm"][value].parentElement.parentElement.className +" has-danger";
        objet.focus();
        champs.push([value,'false']);
      }
      else {
        var str = document.forms["RegForm"][value].parentElement.parentElement.className;
        document.forms["RegForm"][value].parentElement.parentElement.className = str.replace(" has-danger", "");
        //valid = true;
        //champs.pop();
      }
      break;
      case 3:
      //window.alert(objet.checked);
      if (objet.value == "" || objet.checked == false) // objet.checked a garder pour la signature
      {
        //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
        var str = document.forms["RegForm"][value].parentElement.parentElement.parentElement.className;
        document.forms["RegForm"][value].parentElement.parentElement.parentElement.className  = str.replace(" has-danger", "");
        document.forms["RegForm"][value].parentElement.parentElement.parentElement.className =  document.forms["RegForm"][value].parentElement.parentElement.parentElement.className +" has-danger";
        objet.focus();
        champs.push([value,'false']);
      }
      else {
        var str = document.forms["RegForm"][value].parentElement.parentElement.parentElement.className;
        document.forms["RegForm"][value].parentElement.parentElement.parentElement.className = str.replace(" has-danger", "");
        //window.alert("tt");
        //valid = true;
        //champs.pop();
      }
      break;
      default:
      if (objet.value == "")
      {
        //window.alert("Un ou plusieurs champs obligatoire n'ont pas été saisi.");
        var str = document.forms["RegForm"][value].parentElement.className;
        document.forms["RegForm"][value].parentElement.className  = str.replace(" has-danger", "");
        document.forms["RegForm"][value].parentElement.className =  document.forms["RegForm"][value].parentElement.className +" has-danger";
        objet.focus();
        champs.push([value,'false']);
      }
      else {
        var str = document.forms["RegForm"][value].parentElement.className;
        document.forms["RegForm"][value].parentElement.className = str.replace(" has-danger", "");
        //valid = true;
        //champs.pop();
      }
      break;
    }


  }

function validerCampagne()
{

 //Pour Campagne
  var NomCampagne = document.forms["RegForm"]["NomCampagne"];
  var AuteurCampagne = document.forms["RegForm"]["AuteurCampagne"];
  var DemandeurCampagne = document.forms["RegForm"]["DemandeurCampagne"];
  var VilleCampagne = document.forms["RegForm"]["VilleCampagne"];
  var DebutCampagne = document.forms["RegForm"]["DebutCampagne"];
  var FinCampagne = document.forms["RegForm"]["FinCampagne"];
  //Pour campagne
  var champs = new Array();

  testQuestion(FinCampagne,"FinCampagne",1,champs);
  testQuestion(DebutCampagne,"DebutCampagne",1,champs);
  testQuestion(VilleCampagne,"VilleCampagne",1,champs);
  testQuestion(DemandeurCampagne,"DemandeurCampagne",1,champs);
  testQuestion(AuteurCampagne,"AuteurCampagne",1,champs);
  testQuestion(NomCampagne,"NomCampagne",1,champs);

  var valid = false;

  if (champs.length<1){
    //window.alert("C'est ok");
    valid = true;
  }
  else{
    valid = false;
  }

  return valid;

  }

function validerEmploi()
{


  //Pour Emploi
  var Projet = document.forms["RegForm"]["Projet"];
  var ProjetChoixEmploi = document.forms["RegForm"]["ProjetChoixEmploi"];
  var ProjetChoixFormation = document.forms["RegForm"]["ProjetChoixFormation"];
  var NomProjet = document.forms["RegForm"]["NomProjet"];
  var RechercheEmploi = document.forms["RegForm"]["RechercheEmploi"];
  var RechercheFormation = document.forms["RegForm"]["RechercheFormation"];
  var SituationAujourdhui = document.forms["RegForm"]["SituationAujourdhui"];
  var Nom = document.forms["RegForm"]["Nom"];
  var Prenom = document.forms["RegForm"]["Prenom"];
  var Telephone_1 = document.forms["RegForm"]["Telephone_1"];
  var Sexe = document.forms["RegForm"]["Sexe"];
  var LieuBus = document.forms["RegForm"]["LieuBus"];
  var Signature = document.forms["RegForm"]["Signature"];



  //window.alert(Signature.checked);

  var champs = new Array();
  testQuestion(Signature,"Signature",2,champs);
  testQuestion(LieuBus,"LieuBus",1,champs);
  testQuestion(Telephone_1,"Telephone_1",1,champs);
  testQuestion(Sexe,"Sexe",1,champs);
  testQuestion(Prenom,"Prenom",1,champs);
  testQuestion(Nom,"Nom",1,champs);
  testQuestion(SituationAujourdhui,"SituationAujourdhui",1,champs);
  testQuestion(RechercheFormation,"RechercheFormation",1,champs);
  testQuestion(RechercheEmploi,"RechercheEmploi",1,champs);



  //window.alert(document.forms["RegForm"]["ProjetChoixEmploi"].checked);
  if(document.forms["RegForm"]["ProjetChoixEmploi"].checked ==false && document.forms["RegForm"]["ProjetChoixFormation"].checked ==false && document.forms["RegForm"]["NomProjet"].value =="") {
    testQuestion(ProjetChoixFormation,"ProjetChoixFormation",3);
    //testQuestion(ProjetChoixEmploi,"ProjetChoixEmploi",3);
    //testQuestion(Projet,"Projet",1);
  }
  if(document.forms["RegForm"]["ProjetChoixEmploi"].checked ==true) {
    testQuestion(ProjetChoixEmploi,"ProjetChoixEmploi",3);
    //testQuestion(Projet,"Projet",1);
  }
  if(document.forms["RegForm"]["ProjetChoixFormation"].checked ==true) {
    testQuestion(ProjetChoixFormation,"ProjetChoixFormation",3);
    //testQuestion(Projet,"Projet",1);
  }
  if(document.forms["RegForm"]["NomProjet"].value !="") {
    testQuestion(NomProjet,"NomProjet",1);
    //testQuestion(Projet,"Projet",1);
  }

  var valid = false;

  if (champs.length<1){
    //window.alert("C'est ok");
    valid = true;
  }
  else{
    valid = false;
  }

  return valid;
}



  function removeDuplicateUsingSet(arr){
    let unique_array = Array.from(new Set(arr))
    return unique_array
  }


  var nbFormulaireParDateBus = function() {
    if ($('#nbFormulaireParDateBus').length == 0) {
      return;
    }

    $(function()
    {
      $.ajax(
        {
          method : "POST",
          dataType: "json",
          url : "ajax-NbFormulaireParDateBus.php",
          success: function(res){
            var tot =0;
            var dates =[];
            var nbFormulaireEmploi=[];
            var nbFormulaireCreation=[];
            var nbFormulaire=[];

            for(var i in res){
              if (res[i].date==""){
                dates.push("Vide");
              }
              else {
                dates.push(res[i].date);
              }
              if (res[i].type=="emploi"){
                nbFormulaireEmploi.push(res[i].nb);
              }
              else {
                nbFormulaireEmploi.push(0);
              }

              if (res[i].type=="creation"){
                nbFormulaireCreation.push(res[i].nb);
              }
              else {
                nbFormulaireCreation.push(0);
              }

            }


            var option = {
              responsive: false,
            };

            var chartdata = {
              labels:dates,
              datasets : [
                {
                  label : 'Emploi',
                  backgroundColor: '#0078D7',
                  data : nbFormulaireEmploi
                },

                {
                  label : 'Creation',
                  backgroundColor: '#e84393',
                  data : nbFormulaireCreation
                }


              ]
            }

            var ctx = $("#nbFormulaireParDateBus");

            var pieGraph =
            new Chart(ctx, {
              type:'bar',
              data:chartdata,
              options: {
                animation: {
                  duration: 0, // general animation time
                },
                hover: {
                  animationDuration: 0, // duration of animations when hovering an item
                },
                responsiveAnimationDuration: 5, // animation duration after a resize
              }
            });

          },
          fail: function(res){
            //window.alert("sort2");
          },
        });
        //window.alert("sort");
      });
    }

    var repartitionParAge = function() {
      if ($('#repartitionParAge').length == 0) {
        return;
      }
      $(function()
      {
        $.ajax(
          {
            method : "POST",
            dataType: "json",
            url : "ajax-RepartitionEmploiParAge.php",

            success: function(res){
              var situations =[];
              var nbM=[];
              var nbF=[];
              var tot=[];

              for(var i in res){
                if (res[i].SituationAujourdhui==""){

                  situations.push("Vide");
                }
                else {
                  situations.push(res[i].SituationAujourdhui);
                }

                nbM.push(res[i].NbM);
                nbF.push(res[i].NbF);
                tot.push(res[i].total);


                //  window.alert(res[i].Sexe);
              }
              var option = {
                responsive: false,
              };


              var chartdata = {
                labels:situations,
                datasets : [
                  {
                    label : 'Homme(s)',
                    backgroundColor: '#0078D7',
                    data : nbM
                  },
                  {
                    label : 'Femme(s)',
                    backgroundColor: '#e84393',
                    data : nbF
                  },
                  {
                    label : 'Total',
                    backgroundColor: '#2c3e50',
                    data : tot
                  }
                ]
              }

              var ctx = $("#repartitionParSituation");
              var pieGraph =


              new Chart(ctx, {
                type:'horizontalBar',
                data:chartdata,
                options: {
                  animation: {
                    duration: 0, // general animation time
                  },
                  hover: {
                    animationDuration: 0, // duration of animations when hovering an item
                  },
                  responsiveAnimationDuration: 5, // animation duration after a resize
                }
              });

            },
            fail: function(res){
              //window.alert("sort2");
            },


          });
          //window.alert("sort");
        });


      }



      var repartitionParSituation = function() {
        if ($('#repartitionParSituation').length == 0) {
          return;
        }
        $(function()
        {
          $.ajax(
            {
              method : "POST",
              dataType: "json",
              url : "ajax-RepartitionParSituation.php",

              success: function(res){
                var situations =[];
                var nbM=[];
                var nbF=[];
                var tot=[];

                for(var i in res){
                  if (res[i].SituationAujourdhui==""){

                    situations.push("Vide");
                  }
                  else {
                  //  window.alert("test");
                    situations.push(res[i].SituationAujourdhui);
                  }

                  nbM.push(res[i].NbM);
                  nbF.push(res[i].NbF);
                  tot.push(res[i].total);


                  //  window.alert(res[i].Sexe);
                }
                var option = {
                  responsive: false,
                };

                var chartdata = {
                  labels:situations,
                  datasets : [
                    {
                      label : 'Homme(s)',
                      backgroundColor: ["#0078D7","#0078D7","#0078D7", "#0078D7","#0078D7","#0078D7","#0078D7","#0078D7","#0078D7","#0078D7"],
                      data : nbM
                    },
                    {
                      label : 'Femme(s)',
                      backgroundColor: ["#e84393","#e84393","#e84393", "#e84393","#e84393","#e84393","#e84393","#e84393","#e84393","#e84393"],
                      data : nbF
                    },
                    {
                      label : 'Total',
                      backgroundColor: ["#2c3e50","#2c3e50","#2c3e50", "#2c3e50","#2c3e50","#2c3e50","#2c3e50","#2c3e50","#2c3e50","#2c3e50"],
                      data : tot
                    }
                  ]
                }

                var ctx = $("#repartitionParSituation");
                var pieGraph = new Chart(ctx, {
                  type:'horizontalBar',
                  data:chartdata,
                  options: {
                    animation: {
                      duration: 0, // general animation time
                    },
                    hover: {
                      animationDuration: 0, // duration of animations when hovering an item
                    },
                    responsiveAnimationDuration: 5, // animation duration after a resize
                  }
                });

              },
              fail: function(res){
                //window.alert("sort2");
              },


            });
            //window.alert("sort");
          });


        }


        var repartitionParSecteur = function() {
          if ($('#repartitionParSecteur').length == 0) {
            return;
          }
          $(function()
          {
            $.ajax(
              {
                method : "POST",
                dataType: "json",
                url : "ajax-RepartitionParSecteur.php",

                success: function(res){
                  var categories =[];
                  var nb=[];


                  for(var i in res){
                    if (res[i].SecteurActivite==""){

                      categories.push("Vide");
                    }
                    else {
                      categories.push(res[i].SecteurActivite);
                    }

                    nb.push(res[i].nb);
                  }

                  var option = {
                    responsive: false,
                  };

                  var chartdata = {
                    labels:categories,
                    datasets : [
                      {
                        label : 'Nombre',
                        backgroundColor: ["#86c1ff","#86c1ff","#86c1ff", "#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff"],
                        data : nb
                      }
                    ]
                  }

                  var ctx = $("#repartitionParSecteur");
                  var pieGraph = new Chart(ctx, {
                    type:'horizontalBar',
                    data:chartdata,
                    options: {
                      animation: {
                        duration: 0, // general animation time
                      },
                      hover: {
                        animationDuration: 0, // duration of animations when hovering an item
                      },
                      responsiveAnimationDuration: 5, // animation duration after a resize
                    }
                  });

                },
                fail: function(res){
                  //window.alert("sort2");
                },


              });
              //window.alert("sort");
            });


          }

            $(document).ready(function () {
              var color_array = ['#03658C', '#7CA69E', '#F2594A', '#F28C4B', '#7E6F6A', '#36AFB2', '#9c6db2', '#d24a67', '#89a958', '#00739a', '#BDBDBD'];
              var browsersChart = Morris.Donut({
                element: 'browsers_chart',
                data   : [{"label":"Chrome","value":423},{"label":"Safari","value":75},{"label":"Firefox","value":147},{"label":"Android Browser","value":5},{"label":"Opera Next","value":4}],
                colors: color_array
              });
              browsersChart.options.data.forEach(function(label, i){
                var legendItem = $('<span></span>').text(label['label']).prepend('<i>&nbsp;</i>');
                legendItem.find('i').css('backgroundColor', browsersChart.options.colors[i]);
                $('#legend').append(legendItem)
              })
            });

var camembertHommeFemmeTotal = function() {
  if ($('#camembertHommeFemmeTotal').length == 0) {
    return;
  }
  $(function()
  {
    $.ajax(
      {
        method : "POST",
        dataType: "json",
        url : "ajax-RepartitionHommeFemmeTotal.php",
        success: function(res){
          var categories =[];
          var nb=[];

          for(var i in res){
            if (res[i].label==""){

              categories.push("Vide");
            }
            else {
              categories.push(res[i].label);
            }

            nb.push(res[i].nb);


            //  window.alert(res[i].Sexe);
          }

          var option = {
            responsive: false,
          };

          var chartdata = {
            labels:categories,
            datasets : [
              {
                label : 'Nombre',
                backgroundColor: ["#36c5dd","#55efc4","#ffb822", "#ffeaa7","#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff"],
                data : nb
              }
            ]
          }

          var ctx = $("#camembertHommeFemmeTotal");
          var pieGraph = new Chart(ctx, {
            type:'doughnut',
            data:chartdata,
            options: {
              labels: [
                {
                  render: 'label',
                  position: 'outside'
                },
                {
                  render: 'percentage'
                }
              ],


              legend:{
                display:true,
                position:'bottom',
              },
              animation: {
                duration: 0, // general animation time
              },
              hover: {
                animationDuration: 0, // duration of animations when hovering an item
              },
              responsiveAnimationDuration: 5, // animation duration after a resize
            }
          });

        },
        fail: function(res){
          //window.alert("sort2");
        },


      });
      //window.alert("sort");
    });


  }


//$.when($.ajax({...}), $.ajax(...)).then(function (resp1, resp2) {


          var repartitionParNiveauEtude = function() {
            if ($('#repartitionParNiveauEtude').length == 0) {
              return;
            }
            $(function()
            {
              $.ajax(
                {
                  method : "POST",
                  dataType: "json",
                  url : "ajax-RepartitionParNiveauEtude.php",

                  success: function(res){
                    var categories =[];
                    var nb=[];


                    for(var i in res){
                      if (res[i].NiveauEtude==""){
                        categories.push("Vide");
                      }
                      else {
                        categories.push(res[i].NiveauEtude);
                      }

                      nb.push(res[i].nb);
                    }

                    var option = {
                      responsive: false,
                    };

                    var chartdata = {
                      labels:categories,
                      datasets : [
                        {
                          label : 'Nombre',
                          backgroundColor: ["#86c1ff","#86c1ff","#86c1ff", "#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff","#86c1ff"],
                          data : nb
                        }
                      ]
                    }

                    var ctx = $("#repartitionParNiveauEtude");
                    var pieGraph = new Chart(ctx, {
                      type:'horizontalBar',
                      data:chartdata,
                      options: {
                        animation: {
                          duration: 0, // general animation time
                        },
                        hover: {
                          animationDuration: 0, // duration of animations when hovering an item
                        },
                        responsiveAnimationDuration: 5, // animation duration after a resize
                      }
                    });

                  },
                  fail: function(res){
                    //window.alert("sort2");
                  },


                });
                //window.alert("sort");
              });


            }

            var totalHommesFemmes = function() {
              if ($('#m_chart_test').length == 0) {
                return;
              }
              $(function()
              {
                $.ajax(
                  {
                    method : "POST",
                    dataType: "json",
                    url : "ajax-nbFormulairesTotal.php",

                    success: function(res){
                      Morris.Donut({
                        element: 'm_chart_test',
                        data:
                        res,
                        colors: [
                          mApp.getColor('accent'),
                          mApp.getColor('warning'),
                          mApp.getColor('brand')
                        ],
                      });
                    },
                    fail: function(res){

                    },


                  });
                });


              }


              totalHommesFemmes();
              camembertHommeFemmeTotal();
              repartitionParNiveauEtude();
              repartitionParSecteur();
              repartitionParSituation();
              camembertHommeFemmeTotal();
              //nbFormulaireParDateBus();
