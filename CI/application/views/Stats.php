<h4 class="center blue-text text-darken-3"> Résultats </h4>
<div class="center breakword marges">
	<?php

	if(empty($reponse)){
		
		echo "<h5 class='red-text text-dark-3'><i class='small material-icons'>warning</i>Votre formulaire n'a pas encore de réponse<i class='small material-icons'>warning</i></h5>";
	}
	else{
		for($i=1;$i<=$formulaire[0]['nbQuestion'];$i++){
			if($question[$i-1]["type"]=="text" || $question[$i-1]["type"]=="textarea" || $question[$i-1]["type"]=="date"){
				echo "<ul><li><h5><u>".$question[$i-1]['texteQuestion']."</u></h5></li>";
				foreach ($reponse as $key => $value) {

					if($value["numQuestion"]==$i){
						echo "<li>".$value["Value"]."</li>";
					}
				}
				echo "</ul>";
			}
			else {
				echo "<ul><li><h5><u>".$question[$i-1]['texteQuestion']."</u></h5></li>";
				$stack = array();
				$j=0;
				foreach ($reponse as $key => $value) {
					if($value["numQuestion"]==$i){
						array_push($stack, $value["Value"]);
						$j++;
					}
				}
				
				$array=array_count_values($stack);
				foreach ($array as $key => $value) {
					$pourcent=round(($value/$j)*100);

					echo "<li>Nombre de \"".$key."\"  =  ".$value."  (".$pourcent."%)</li>";
				}
				echo "</ul>";
			}
		}
	echo "<br>";
	}
	?>
</div>