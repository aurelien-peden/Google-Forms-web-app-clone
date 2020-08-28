<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Database extends CI_Model {
	public function __construct(){
	$this->load->database();
	}

	public function login_exists($login){
		$sql="SELECT login FROM Inscrit WHERE login = ?";
		$query = $this->db->query($sql,$login);
		if($query->num_rows()==1){
			return true;
		}
		else {
			return false;
		}
	}

	public function insert_inscrit($data){
		$this->db->insert('Inscrit', $data);
	}

	public function get_hash($login){
		$sql="SELECT password FROM Inscrit WHERE login = ?";
		$query = $this->db->query($sql,$login);
		$row = $query->row();
		$password=$row->password;
		return $password;
	}

	public function get_rand_key(){
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		$input_length = strlen($permitted_chars);
	    $random_string = '';
	    for($i = 0; $i < 50; $i++) {
	        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
	        $random_string .= $random_character;
	    }
	 
	    return $random_string;
	}

	public function insert_question($data){
		$this->db->insert('Question', $data);
	}
	public function insert_formulaire($data){
		$this->db->insert('Formulaire', $data);
	}
	public function insert_zonechamptexte($data){
		$this->db->insert('ZoneChampTexte', $data);
	}
	public function insert_checkbox($data){
		$this->db->insert('Checkbox', $data);
	}
	public function insert_listederoulanteradio($data){
		$this->db->insert('ListeDeroulanteRadio', $data);
	}

	public function get_form_info($login){
		$sql = "SELECT * FROM Formulaire JOIN Inscrit ON(login=auteur) WHERE login=?";
		$query=$this->db->query($sql, $login);
		return $query;
	}

	public function set_requis($clé,$bool){
		$sql="UPDATE Formulaire SET etat=? WHERE cleForm=?";
		$this->db->query($sql,array($bool,$clé));
	}

	public function delete_formulaire($clé){
		$sql="DELETE FROM Formulaire WHERE cleForm=?";
		$this->db->query($sql,$clé);
	}

	public function get_formulaire($clé){
		$sql="SELECT * FROM Formulaire where cleForm=?";
		return $this->db->query($sql,$clé)->result_array();
	}

	public function get_question($clé){
		$sql="SELECT * FROM Question where cleForm=?";
		return $this->db->query($sql,$clé)->result_array();
	}

	public function get_checkbox($clé){
		$sql="SELECT * FROM Checkbox where cleForm=?";
		return $this->db->query($sql,$clé)->result_array();
	}

	public function get_listeradio($clé){
		$sql="SELECT * FROM ListeDeroulanteRadio where cleForm=?";
		return $this->db->query($sql,$clé)->result_array();
	}
	public function get_zonechamptexte($clé){
		$sql="SELECT * FROM ZoneChampTexte where cleForm=?";
		return $this->db->query($sql,$clé)->result_array();
	}

	public function form_exists($clé){
		$sql="SELECT cleForm FROM Formulaire WHERE cleForm = ?";
		$query = $this->db->query($sql,$clé);
		if($query->num_rows()==1){
			return true;
		}
		else {
			return false;
		}
	}

	public function insert_reponse($data){
		$this->db->insert('Reponse', $data);
	}

	public function form_inactif($clé){
		$sql="SELECT etat FROM Formulaire WHERE cleForm = ?";
		$query = $this->db->query($sql,$clé);
		if($query->row()->etat==0){
			return true;
		}
		else {
			return false;
		}
	}

	public function get_reponse($clé){
		$sql="SELECT * FROM Reponse where cleForm=?";
		return $this->db->query($sql,$clé)->result_array();
	}

}