<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creation_formulaire extends CI_Controller {

	public function index()
	{	
        $this->load->model('Database');
        $clé=$this->Database->get_rand_key();

        $auteur=$this->session->userdata('login');

        $titre=filter_var($_POST["titre"], FILTER_SANITIZE_SPECIAL_CHARS);
 
        $description=filter_var($_POST["description"], FILTER_SANITIZE_SPECIAL_CHARS);

        $nbQuestion=$_POST["hidden"];

        $formulaire = array(
                    'auteur' => $auteur,
                    'cleForm' => $clé,
                    'etat' => false,
                    'titre' => $titre,
                    'description' => $description,
                    'nbQuestion' => $nbQuestion
                );
        $this->Database->insert_formulaire($formulaire);
                    
        $i=1;
        foreach ($_POST["question"] as $key => $value) {
            $numQuestion=$i;

            $i++;
            if($value["type"]=="text"){
                $type=$value["type"];
                $texteQuestion=filter_var($value["question"], FILTER_SANITIZE_SPECIAL_CHARS);
                $placeholder=filter_var($value["placeholder"], FILTER_SANITIZE_SPECIAL_CHARS);
                $aide=filter_var($value["aide"], FILTER_SANITIZE_SPECIAL_CHARS);
                if(isset($value["requis"])){
                    $requis=true;
                }
                else {
                    $requis=false;
                }
                $question = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'texteQuestion' => $texteQuestion,
                    'type' => $type,
                    'required' => $requis,
                    'aide' => $aide
                );
                $this->Database->insert_question($question);
                $ZoneChampTexte = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'placeholder' => $placeholder
                );
                $this->Database->insert_zonechamptexte($ZoneChampTexte);
            }
            if($value["type"]=="textarea"){
                $type=$value["type"];
                $texteQuestion=filter_var($value["question"], FILTER_SANITIZE_SPECIAL_CHARS);
                $placeholder=filter_var($value["placeholder"], FILTER_SANITIZE_SPECIAL_CHARS);
                $aide=filter_var($value["aide"], FILTER_SANITIZE_SPECIAL_CHARS);
                if(isset($value["requis"])){
                    $requis=true;
                }
                else {
                    $requis=false;
                }
                $question = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'texteQuestion' => $texteQuestion,
                    'type' => $type,
                    'required' => $requis,
                    'aide' => $aide
                );
                $this->Database->insert_question($question);
                $ZoneChampTexte = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'placeholder' => $placeholder
                );
                $this->Database->insert_zonechamptexte($ZoneChampTexte);
            }
            if($value["type"]=="checkbox"){
                $type=$value["type"];
                $texteQuestion=filter_var($value["question"], FILTER_SANITIZE_SPECIAL_CHARS);
                $nbCheckbox=filter_var($value["nbCheckbox"], FILTER_SANITIZE_SPECIAL_CHARS);
                $i2=1;
                foreach($value["checkbox"] as $key2 => $value2){
                    $numCheckbox=$i2;
                    $texteCheckbox=filter_var($value2, FILTER_SANITIZE_SPECIAL_CHARS);
                    $i2++;
                    $checkbox = array(
                        'cleForm' => $clé,
                        'numQuestion' => $numQuestion,
                        'numeroCheckbox' => $numCheckbox,
                        'texteCheckbox' => $texteCheckbox
                    );
                    $this->Database->insert_checkbox($checkbox);
                }
                $aide=filter_var($value["aide"], FILTER_SANITIZE_SPECIAL_CHARS);
                if(isset($value["requis"])){
                    $requis=true;
                }
                else {
                    $requis=false;
                }
                $question = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'texteQuestion' => $texteQuestion,
                    'type' => $type,
                    'required' => $requis,
                    'aide' => $aide
                );
                $this->Database->insert_question($question);
            }
            if($value["type"]=="date"){
                $type=$value["type"];
                $texteQuestion=filter_var($value["question"], FILTER_SANITIZE_SPECIAL_CHARS);
                $aide=filter_var($value["aide"], FILTER_SANITIZE_SPECIAL_CHARS);
                if(isset($value["requis"])){
                    $requis=true;
                }
                else {
                    $requis=false;
                }
                $question = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'texteQuestion' => $texteQuestion,
                    'type' => $type,
                    'required' => $requis,
                    'aide' => $aide
                );
                $this->Database->insert_question($question);
            }
            if($value["type"]=="liste"){
                $type=$value["type"];
                $texteQuestion=filter_var($value["question"], FILTER_SANITIZE_SPECIAL_CHARS);
                $nbOption=filter_var($value["nbOption"], FILTER_SANITIZE_SPECIAL_CHARS);
                $i2=1;
                foreach($value["option"] as $key2 => $value2){
                    $numOption=$i2;
                    $texteOption=filter_var($value2, FILTER_SANITIZE_SPECIAL_CHARS);
                    $i2++;
                    $ListeDeroulanteRadio = array(
                        'cleForm' => $clé,
                        'numQuestion' => $numQuestion,
                        'numeroOption' => $numOption,
                        'texteOption' => $texteOption
                    );
                    $this->Database->insert_listederoulanteradio($ListeDeroulanteRadio);
                }
                $aide=filter_var($value["aide"], FILTER_SANITIZE_SPECIAL_CHARS);
                if(isset($value["requis"])){
                    $requis=true;
                }
                else {
                    $requis=false;
                }
                $question = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'texteQuestion' => $texteQuestion,
                    'type' => $type,
                    'required' => $requis,
                    'aide' => $aide
                );
                $this->Database->insert_question($question);
            }
            if($value["type"]=="radio"){
                $type=$value["type"];
                $texteQuestion=filter_var($value["question"], FILTER_SANITIZE_SPECIAL_CHARS);
                $nbBouton=filter_var($value["nbRadio"], FILTER_SANITIZE_SPECIAL_CHARS);
                $i2=1;
                foreach($value["radio"] as $key2 => $value2){
                    $numOption=$i2;
                    $texteOption=filter_var($value2, FILTER_SANITIZE_SPECIAL_CHARS);
                    $i2++;
                    $ListeDeroulanteRadio = array(
                        'cleForm' => $clé,
                        'numQuestion' => $numQuestion,
                        'numeroOption' => $numOption,
                        'texteOption' => $texteOption
                    );
                    $this->Database->insert_listederoulanteradio($ListeDeroulanteRadio);
                }
                $aide=filter_var($value["aide"], FILTER_SANITIZE_SPECIAL_CHARS);
                if(isset($value["requis"])){
                    $requis=true;
                }
                else {
                    $requis=false;
                }
                $question = array(
                    'cleForm' => $clé,
                    'numQuestion' => $numQuestion,
                    'texteQuestion' => $texteQuestion,
                    'type' => $type,
                    'required' => $requis,
                    'aide' => $aide
                );
                $this->Database->insert_question($question);
            }
       }
       redirect('Dashboard/?creation=1', 'refresh');
    }
    public function activation_formulaire($clé){
        $this->load->model('Database');
        $this->Database->set_requis($clé,true);
        redirect('Dashboard/acces_formulaire', 'refresh');
    }
    public function desactivation_formulaire($clé){
        $this->load->model('Database');
        $this->Database->set_requis($clé,false);
        redirect('Dashboard/acces_formulaire', 'refresh');
    }

    public function suppression_formulaire($clé){
        $this->load->model('Database');
        $this->Database->delete_formulaire($clé);
        redirect('Dashboard/acces_formulaire', 'refresh');
    }
}
