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

    	<div class="valign-wrapper" style="width:100%;height:100%;">
		    <div class="valign" style="width:100%;">
		        <div class="container">
		            <div class="row">
		                <div class="col s12 m6 offset-m3">
		                    <div class="card breakword">
		                        <div class="card-panel blue darken-3">
		                            <div class="row">
		                                <div class="col s12">
											<?php
											   echo "<h4 class=\" white-text center\">".$formulaire[0]['titre']."</h4><br>";											   
											?>
										</div>
									</div>
									<div class="row">
		                                <div class="col s12">
											<?php
												echo "<h6>".$formulaire[0]['description']."</h6><br><br>"; 
											?>
										</div>
									</div>
								</div>
								<form method="post" action="../save_answers">
									<div class="card-content">
			                            	<?php
			                            		$varzonechamp=0;
			                            		for($i=1;$i<=$formulaire[0]['nbQuestion'];$i++){
			                            			if($question[$i-1]["required"]==1){
			                            				$requis="required";
			                            			}
			                            			else $requis="";
			                            			echo "<br>";
													echo "<div class='row'>";
													echo "<h6 class='center'><u>Question $i :</u> ".$question[$i-1]['texteQuestion']."</h6>";
													if($question[$i-1]["type"]=="text"){
														echo "<input type='hidden' name='type[$i]' value='text' >";
														echo "<input ".$requis." name='reponse[$i][]'  type='text' placeholder='".$zonechamp[$varzonechamp]['placeholder']."'>";
														$varzonechamp++;
													}
													if($question[$i-1]["type"]=="textarea"){
														echo "<input type='hidden' name='type[$i]' value='textarea' >";
														echo "<textarea ".$requis." class='materialize-textarea' name='reponse[$i][]' placeholder='".$zonechamp[$varzonechamp]['placeholder']."'></textarea>";
														$varzonechamp++;
													}
													if($question[$i-1]["type"]=="date"){
														echo "<input type='hidden' name='type[$i]' value='date' >";
														echo "<input name='reponse[$i][]' ".$requis." type='date'>";
													}
													if($question[$i-1]["type"]=="checkbox"){
														echo "<input type='hidden' name='type[$i]' value='checkbox' >";
														echo "<br>";
														$j=0;
														foreach($checkbox as $key => $value){
															$j++;
															if($checkbox[$j-1]['numQuestion']==$i){
																echo "<div class='row'>";
															echo "<div class='col s5'>";
															echo "<label>
								                            		<input name='reponse[$i][]' class='filled-in' value=".$value["texteCheckbox"]." type='checkbox'>
								                            		<span>".$value["texteCheckbox"]."</span>
							                            		</label>";
							                            	echo "</div>";
							                            	echo "</div>";
															}
							                            }
													}
													if($question[$i-1]["type"]=="radio"){
														echo "<input type='hidden' name='type[$i]' value='radio' >";

														echo "<br>";
														$j=0;
														foreach($listeradio as $key => $value){
															$j++;
															if($listeradio[$j-1]['numQuestion']==$i){
																echo "<div class='row'>";
															echo "<div class='col s5'>";
															echo "<label>
								                            		<input name='reponse[$i][]' ".$requis." class='with-gap' value=".$value["texteOption"]." type='radio'>
								                            		<span>".$value["texteOption"]."</span>
							                            		</label>";
							                            	echo "</div>";
							                            	echo "</div>";
															}
							                            }
													}
													if($question[$i-1]["type"]=="liste"){
														echo "<input type='hidden' name='type[$i]' value='liste' >";
														echo "<br>";
														$j=0;
														echo "<select name='reponse[$i][]' class='browser-default' ".$requis.">";
														echo "<option value='' disabled selected>Choose your option</option>";
														foreach($listeradio as $key => $value){
															$j++;
															if($listeradio[$j-1]['numQuestion']==$i){
																echo "<option>".$value["texteOption"]."</option>";
															}
							                            }
							                            echo "</select>";
													}
													if($question[$i-1]["aide"] !== ''){
														echo "<br><br><i title='Aide' class='material-icons left''>help</i><p class='left'>".$question[$i-1]["aide"]."</p>";
													}
													
													echo "</div>";
												}
			                            	?>                											  
									</div>
									<div class="card-action center-align">
                                    	<input type="submit" class="btn blue darken-3" value="Envoyer les réponses">
                                    	<input type="hidden" name="cleForm" value=<?php echo $formulaire[0]['cleForm']?>>
                                    	<input type="hidden" name="nbQuestion" value=<?php echo $formulaire[0]['nbQuestion']?>>
                                	</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
