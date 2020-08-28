        <?php
        $message_creation="";
        if (isset($_GET["creation"])) {
            $message_creation = "<h6 class='green-text text-darken-3 center' >Votre formulaire a bien été créé.<br> Vous pouvez le consulter dans la section 'Accéder à mes formulaires'.</h6>";
        }
        echo $message_creation;
        ?>
        <div class="valign-wrapper" style="width:100%;height:100%">
    		<div class="valign" style="width:100%;">
    			<div class="container">
    				<div class="row">
    					<div class="col s12 m6 offset-m3">
    						<div class="card">
								<div class="card-image">
									<img src="https://www.whatswithtech.com/wp-content/uploads/2015/09/black-and-blue-material-design-wallpaper.png" alt="">
									<span class="card-title center-align">Bienvenue <?php echo $login;?>!</span>
								</div>
    							<div class="card-content center">
    								<div class="row">
										<div class="s4">
											<a class="waves-effect waves-light btn-large blue darken-3" href="creer_formulaire">Créer un formulaire</a>
										</div>
									</div>
									<div class="row">
										<div class="s4">
											<a class="waves-effect waves-light btn-large blue darken-3" href="acces_formulaire">Accéder à mes formulaires</a>
										</div>
									</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
