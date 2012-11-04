<?php


class Video_model extends CI_Model {

function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_v($tipe){
    
    
    	$query = $this->db->query("SELECT * FROM video v WHERE v.tipe = ? ORDER BY v.reproducciones DESC",array($tipe)); 
    	return $query->result();
    
    }
    
    function get_v_date($tipe){
    	$query = $this->db->query("SELECT * FROM video v WHERE v.tipe = ? ORDER BY v.date DESC",array($tipe)); 
    	return $query->result();
    }
    
    function get_v_id($id){
    		$query = $this->db->query("SELECT * FROM video v WHERE v.id = ?",array($id));
    		return $query->result();
    }
}

?>