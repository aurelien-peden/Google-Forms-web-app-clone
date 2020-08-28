<?php
    defined('BASEPATH') or exit('No direct script access allowed');
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
                    <a href="<?php echo site_url()?>Dashboard/" class="brand-logo  center">Google form like</a>
    			</div>
    		</div>
    	</nav>
	    </head>
	    <body>
	    	<div style="text-align: center;">
	    		<h2>Ce formulaire est inconnu <u>ou</u> est inactif !</h2>
	    	</div>
	    