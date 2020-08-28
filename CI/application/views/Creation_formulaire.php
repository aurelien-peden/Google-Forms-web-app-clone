
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/creation.js"></script>
    <div class="valign-wrapper" style="width:100%;height:100%;">
        <div class="valign" style="width:100%;">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                        <div class="card">
                            <form method="post" action="../Creation_formulaire" onsubmit="return mysubmit()">
                                <div class="card-panel blue darken-3">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix ">create</i>
                                            <input required placeholder="Titre" id="titre" name="titre" type="text" class="validate">
                                            <label for="titre">Titre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">mode_edit</i>
                                            <textarea name="description" required id="description" class="materialize-textarea validate"></textarea>
                                            <label for="description">Description</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content center" id="form">
                                	<!--Dropdown Trigger-->
                                    <a class='dropdown-trigger waves-effect waves-light btn blue darken-3' href='#' data-target='dropdown1'>Ajouter une question</a>

                                    <!--Dropdown Structure -->
                                    <ul id='dropdown1' class='dropdown-content'>
                                        <li><a class="blue-text text-darken-3" href="#!" onclick="ajouterQuestionChamp();" >Champ de texte</a></li>
                                        <li><a class="blue-text text-darken-3" href="#!" onclick="ajouterQuestionZoneTexte();">Zone de texte</a></li>
                                        <li><a class="blue-text text-darken-3" href="#!" onclick="ajouterQuestionCheckbox();">Checkbox</a></li>
                                        <li><a class="blue-text text-darken-3" href="#!" onclick="ajouterQuestionDate();">Date</a></li>
                                        <li><a class="blue-text text-darken-3" href="#!" onclick="ajouterListe();">Liste déroulante</a></li>
                                        <li><a class="blue-text text-darken-3" href="#!" onclick="ajouterQuestionRadio();" >Radio</a></li>
                                    </ul>
                                </div>
                                <div class="card-action center-align">
                                    <input type="submit" class="btn blue darken-3" value="Valider le formulaire">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
