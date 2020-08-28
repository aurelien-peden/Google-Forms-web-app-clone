<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	
        if(!isset($_SESSION['login'])){
            redirect('Accueil', 'refresh');
        }
        $data = array('login' => $this->session->userdata('login'));
        $this->load->view('Header');
		$this->load->view('Dashboard',  $data);
        $this->load->view('Footer');
    }
    
    public function creer_formulaire()
    {
    	$this->load->view('Header');
        $this->load->view('Creation_formulaire');
        $this->load->view('Footer');
    }
    public function acces_formulaire()
    {
        $this->load->model('Database');
        $data = array('forms' => $this->Database->get_form_info($this->session->userdata('login')));
        
        $this->load->view('Header');
        $this->load->view('Acces_formulaire', $data);
        $this->load->view('Footer');
    }

    public function apercu_formulaire($clé){
        $this->load->model('Database');
        $this->load->view('Header');
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
        $this->load->view('Apercu',$data);
        $this->load->view('Footer');
    }

    public function reponses($clé){
        $this->load->model('Database');
        $this->load->view('Header');

        $reponse=$this->Database->get_reponse($clé);
        $quest=$this->Database->get_question($clé);
        $form=$this->Database->get_formulaire($clé);
        $data = array(
                'formulaire' => $form,
                'question' => $quest,
                'reponse' => $reponse
            );
        $this->load->view('Stats',$data);

        $this->load->view('Footer');
    }
}
