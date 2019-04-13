<div class="content mt-3">

        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Liste des Bénéficiaires</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Prenom</th>
                                        <th>Ville</th>
                                        <th>email</th>
                                        <th>Sexe</th>
                                    </tr>
                                </thead>
                                <tbody>

              <?php
              while ($donnees = $tabE->fetch_assoc())
              {

                echo '<tr>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['Prenom']) . '</td>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['Ville']) . '</td>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['email']) . '</td>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['Sexe']) . '</td>';
                echo '</tr>';
              }

              ?>
              <?php
              while ($donnees = $tabC->fetch_assoc())
              {

                echo '<tr>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['Prenom']) . '</td>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['Ville']) . '</td>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['email']) . '</td>';
                echo '<td class="col-lg-3 col-md-3 col-xs-3">'. htmlspecialchars($donnees['Sexe']) . '</td>';
                echo '</tr>';
              }

              ?>



                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
