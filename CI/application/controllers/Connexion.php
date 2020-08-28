<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

	public function index()
	{	
		$login = filter_var($_POST["login"], FILTER_SANITIZE_SPECIAL_CHARS);
		$password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
		$this->load->model('Database');
		
		if($this->Database->login_exists($login)){
			if(password_verify($password,$this->Database->get_hash($login))){

				$data = array('login' => $login);
				$this->session->set_userdata($data);

				redirect('Dashboard/', 'refresh');
			}
			else{
				redirect('Accueil?wrong=1#connexion', 'refresh');
			}
		}
		else{
			redirect('Accueil?wrong=1#connexion', 'refresh');
		}
	}

	public function deconnexion(){
		$this->session->sess_destroy();
		redirect('Accueil', 'refresh');
	}
}
