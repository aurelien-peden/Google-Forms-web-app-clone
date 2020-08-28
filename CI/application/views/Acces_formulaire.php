<h4 class="center blue-text text-darken-3"> Mes formulaires </h4>

<?php
$message="";
if(empty($forms->result_array())){
    $message="<i class='small material-icons'>warning</i>Vous n'avez pas de formulaire !<i class='small material-icons'>warning</i>";
}

?>

<h5 class="center red-text text-darken-3"> <?php echo $message ?> </h5>

<?php
if(!empty($forms->result_array())){
    echo " 
    <table class=\"striped\">
        <thead>
          <tr>
              <th>Titre</th>
              <th>Etat</th>
              <th>Clé</th>
              <th>Lien vers formulaire</th>
              <th>Aperçu</th>
              <th>Réponses & Stats</th>
          </tr>
        </thead>

        <tbody>";
            foreach ($forms->result_array() as $row)
            {
                if($row['etat']==0){
                    $etat="Inactif";
                    $activite="Activer";
                    $activation="activation";
                }
                else {
                    $etat="Actif";
                    $activite="Désactiver";
                    $activation="desactivation";
                }
                $str="'".$row['cleForm']."'";
                echo "<tr><td>".$row['titre']."</td>
                <td>".$etat."</td>
                <td>".$row['cleForm']."</td>
                <td> <a title=\"Copier le lien du formulaire pour le partager\" class=\"waves-effect waves-light btn blue darken-3\" onclick=\"copyToClipboard(".$str.");alert('Lien copié dans le presse-papier');\"><b>Copier le lien </b></a></td>
                <td><a title=\"Voir le formulaire\" href=\"apercu_formulaire/".$row['cleForm']."\" class=\"waves-effect waves-light btn blue darken-3\" ><b>Aperçu</b></a></td>
                <td><a title=\"Voir les réponses et les statistiques du formulaire\" href=\"reponses/".$row['cleForm']."\" class=\"waves-effect waves-light btn blue darken-3\" ><b>Réponses & Stats</b></a></td>
                <td><a title=\"Activer ou désactiver le formulaire\" href=\"../Creation_formulaire/".$activation."_formulaire/".$row['cleForm']."\" class=\"waves-effect waves-light btn blue darken-3\" ><b>".$activite."</b></a></td>
                <td><a href=\"../Creation_formulaire/suppression_formulaire/".$row['cleForm']."\" title=\"Supprimer le formulaire\"class=\"waves-effect waves-light btn red darken-3\" ><b>X</b></a></td>
                </tr>";
            }
            
            echo "</tbody></table>";
}
?>
