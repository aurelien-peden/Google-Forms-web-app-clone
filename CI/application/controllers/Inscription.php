<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

	public function index()
	{	
		$login = filter_var($_POST["login"], FILTER_SANITIZE_SPECIAL_CHARS);
		$password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
		$this->load->model('Database');
		if(!$this->Database->login_exists($login)){
			$hash = password_hash($password,PASSWORD_DEFAULT);
			$data = array(
			        'login' => $login,
			        'password' => $hash,
			);
			$this->Database->insert_inscrit($data);
			redirect('Accueil?Compte_Cree=1#connexion', 'refresh');
		}
		else{
			redirect('Accueil?Login_Indisponible='.$login.'#inscription', 'refresh');
		}
	}
}
