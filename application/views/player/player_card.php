        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                  <div class="col-md-6">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title mb-3"><?php echo $joueur[0]->nom_joueur ?></strong>
                          </div>
                          <div class="card-body">
                              <div class="mx-auto d-block">
                                  <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ?>images/admin.jpg" alt="Card image cap">
                                  <p>
                                    Nom : <?php echo $joueur[0]->nom_joueur ?>
                                    <br>Prenom : <?php echo $joueur[0]->prenom_joueur ?>
                                    <br>Date de naissance : <?php echo $joueur[0]->date_n_joueur ?>
                                    <br>Poste : <?php echo $joueur[0]->poste ?>
                                    <br>Numero maillot : <?php echo $joueur[0]->num_maillot ?>
                                    <br>Numero licence : <?php echo $joueur[0]->num_licence_joueur ?>
                                    <br>equipe: <?php echo $equipe[0]->nom_equipe ?>
                                  </p>

                              </div>
                              <hr>
                              <div class="card-text text-sm-center">
                                  <a href="<?php $id = $joueur[0]->id_joueur; echo site_url("player/delete_player/$id")?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                  <a href="<?php $id = $joueur[0]->id_joueur; echo site_url("player/modify_link/$id")?>"><button type="button" class="btn btn-warning">Modifier</button></a>
                              </div>
                          </div>
                      </div>
                  </div>


                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
