<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    include 'application/php/securite.php';
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
    		<div>
    			<div class="nav-wrapper">
                    <!-- Obligé d'utiliser site_url() pour les href du header car selon les pages le chemin vers le controller diffère -->
                    <a href="<?php echo site_url()?>Dashboard/" class="brand-logo  center">Google form like</a>
                    <ul class="right">
                        <li> <a class="waves-effect waves-light btn blue darken-2" href="<?php echo site_url()?>/Connexion/deconnexion"><i class="material-icons left">exit_to_app</i><b>Se déconnecter</b></a> </li>
    				</ul>
    			</div>
    		</div>
    	</nav>
