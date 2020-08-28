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
						<div class="card-content">
                            	<?php
                            		$varzonechamp=0;
                            		for($i=1;$i<=$formulaire[0]['nbQuestion'];$i++){
                            			echo "<br>";
										echo "<div class='row'>";
										echo "<h6 class='center'><u>Question $i :</u> ".$question[$i-1]['texteQuestion']."</h6>";
										if($question[$i-1]["type"]=="text"){
											echo "<input type='text' placeholder='".$zonechamp[$varzonechamp]['placeholder']."'>";
											$varzonechamp++;
										}
										if($question[$i-1]["type"]=="textarea"){
											echo "<textarea class='materialize-textarea' placeholder='".$zonechamp[$varzonechamp]['placeholder']."'></textarea>";
											$varzonechamp++;
										}
										if($question[$i-1]["type"]=="date"){
											echo "<input type='date'>";
										}
										if($question[$i-1]["type"]=="checkbox"){
											echo "<br>";
											$j=0;
											foreach($checkbox as $key => $value){
												$j++;
												if($checkbox[$j-1]['numQuestion']==$i){
													echo "<div class='row'>";
												echo "<div class='col s5'>";
												echo "<label>
					                            		<input class='filled-in' type='checkbox'>
					                            		<span>".$value["texteCheckbox"]."</span>
				                            		</label>";
				                            	echo "</div>";
				                            	echo "</div>";
												}
				                            }
										}
										if($question[$i-1]["type"]=="radio"){
											echo "<br>";
											$j=0;
											foreach($listeradio as $key => $value){
												$j++;
												if($listeradio[$j-1]['numQuestion']==$i){
													echo "<div class='row'>";
												echo "<div class='col s5'>";
												echo "<label>
					                            		<input class='with-gap' name='".$i."' type='radio'>
					                            		<span>".$value["texteOption"]."</span>
				                            		</label>";
				                            	echo "</div>";
				                            	echo "</div>";
												}
				                            }
										}
										if($question[$i-1]["type"]=="liste"){
											echo "<br>";
											$j=0;
											echo "<select>";
											echo "<option  disabled selected>Choose your option</option>";
											foreach($listeradio as $key => $value){
												$j++;
												if($listeradio[$j-1]['numQuestion']==$i){
													echo "<div class='row'>";
												echo "<option type='radio'>".$value["texteOption"]."</option>";
				                            	echo "</div>";
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
  