<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reponse extends CI_Controller {

	public function index()
	{
	}

	public function formulaire($clé = 0){
		$this->load->model('Database');
		if((!$this->Database->form_exists($clé)) || $this->Database->form_inactif($clé) ){
			$this->load->view('Form_Inconnu');
			$this->load->view('Footer');
		}
		else{
			$form=$this->Database->get_formulaire($clé);
	        $quest=$this->Database->get_question($clé);
	        $check=$this->Database->get_checkbox($clé);
	        $liste=$this->Database->get_listeradio($clé);
	        $zone=$this->Database->get_zonechamptexte($clé);
	        $data = array(
	            'formulaire' => $form,
	            'question' => $quest,
	            'checkbox' => $check,
	            'listeradio' => $liste,
	            'zonechamp' => $zone
	        );
			$this->load->view('Reponse',$data);
			$this->load->view('Footer');
		}
	}

	public function save_answers(){
		$this->load->model('Database');
		for($i=1;$i<=$_POST["nbQuestion"];$i++){
			$j=1;
			if(isset($_POST["reponse"][$i])){
				foreach ($_POST["reponse"][$i] as $key => $value) {
					if($_POST["type"][$i]=="text" || $_POST["type"][$i]=="textarea"){
						$input=filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
					}
					else $input=$value;
					$data = array(
					        'cleForm' => $_POST["cleForm"],
					        'numQuestion' => $i,
					        'numReponse' => $j,
					        'Value' => $input
					);
					$this->Database->insert_reponse($data);
					$j++;
				}
			}	
		}
		redirect('Reponse/ok', 'refresh');
	}

	public function ok(){
		$this->load->view('Answered');
		$this->load->view('Footer');
	}
}
