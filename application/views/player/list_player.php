        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title">Liste des Joueurs</strong>
                          </div>
                          <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th>Nom</th>
                                  <th>Prenom</th>
                                  <th>Poste</th>
                                  <th>Equipe</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($joueur as $item) {
                                    $lien = site_url("Player/player_card/$item->id_joueur");
                                    $lien2 = site_url("Team/team_card/$item->id_equipe");?>
                                    <tr>
                                        <td><a href="<?php echo $lien ?>"><?php echo $item->nom_joueur; ?></td>
                                        <td><?php echo $item->prenom_joueur; ?></td>
                                        <td><?php echo $item->poste; ?></td>
                                        <td><a href="<?php echo $lien2 ?>"><?php echo $item->nom_equipe ?></td>
                                     </tr>
                                    </a>
                                  <?php } ?>
                              </tbody>
                            </table>
                          </div>
                      </div>
                  </div>


                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
