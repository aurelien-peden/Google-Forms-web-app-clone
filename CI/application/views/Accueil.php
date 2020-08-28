    <?php
	defined('BASEPATH') or exit('No direct script access allowed');
	$message_erreur = "";
	$message_creation = "";
	$wrong = "";
	if (isset($_GET["Login_Indisponible"])) {
		$message_erreur = "Le login \"" . $_GET["Login_Indisponible"] . "\" est déjà utilisé.";
	}
	if (isset($_GET["Compte_Cree"])) {
		$message_creation = "Compte créé";
	}
	if (isset($_GET["wrong"])) {
		$wrong = "Mauvais login ou mdp";
	}
	?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
    	<meta charset="utf-8">
    	<!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    	<!--Import Google Icon Font-->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php
        echo link_tag('assets/css/placeholder.css');
        ?>
    	<!--Let browser know website is optimized for mobile-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    	<style>
    		.tabs .indicator {
    			background-color: #42a5f5;
    		}
    	</style>
    </head>

    <body>
    	<nav class="blue darken-3">
    		<div class="container">
    			<div class="nav-wrapper">
    				<a href="" class="brand-logo center">Google form like</a>
    			</div>
    		</div>
    	</nav>

    	<div class="valign-wrapper" style="margin-top: 5%;width:100%;height:100%;">
    		<div class="valign" style="width:100%;">
    			<div class="container">
    				<div class="row">
    					<div class="col s12 m6 offset-m3">
    						<div class="card">
    							<div class="card-tabs">
    								<ul class="tabs blue darken-3 tabs-fixed-width">
    									<li class="tab"><a class="white-text" href="#connexion">Se connecter</a></li>
    									<li class="tab"><a class="white-text" href="#inscription">S'inscrire</a></li>
    								</ul>
    							</div>
    							<div class="card-content">
    								<div id="connexion">
    									<form method="POST" action="Connexion">
    										<div class="row">
    											<div class="input-field col s12">
    												<input required placeholder="login" id="login" type="text" name="login" class="validate">
    												<label for="login" class="active">Login</label>
    											</div>
    										</div>
    										<div class="row">
    											<div class="input-field col s12">
    												<input required placeholder="password" id="password" type="password" name="password" class="validate">
    												<label for="password" class="active">Mot de passe</label>
    											</div>
    										</div>
    										<div class="card-action center-align">
    											<input type="submit" class="btn blue darken-3" value="Se connecter">
    										</div>
    									</form>
    									<p class="green-text center"> <?php echo $message_creation ?> </p>
    									<p class="red-text center"> <?php echo $wrong ?> </p>
    								</div>
    								<div id="inscription">
    									<form method="POST" action="Inscription">
    										<div class="row">
    											<div class="input-field col s12">
    												<input required placeholder="login" id="login" type="text" name="login" class="validate">
    												<label for="login" class="active">Login</label>
    											</div>
    										</div>
    										<div class="row">
    											<div class="input-field col s12">
    												<input required placeholder="password" id="password" type="password" name="password" class="validate">
    												<label for="password" class="active">Mot de passe</label>
    											</div>
    										</div>
    										<div class="card-action center-align">
    											<input type="submit" class="btn blue darken-3" value="S'inscrire">
    										</div>
    									</form>
    									<p class="red-text center"> <?php echo $message_erreur ?> </p>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<script>
            window.top.window.scrollTo(0,0);
    	</script>
 