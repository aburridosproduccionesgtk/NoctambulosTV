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
	
	function update_c($id){
		$sql = "UPDATE video set reproducciones = reproducciones+1 WHERE video.id = ?";
		$query = $this->db->query($sql,array($id));
	}
	
	function get_f($tipe){
		$query = $this->db->query("SELECT * FROM img f WHERE f.tipe = ?",array($tipe)); 
    	return $query->result();
	}
	function get_f_id($id){
		$query = $this->db->query("SELECT * FROM img i WHERE i.id_vid = ?",array($id));
    		return $query->result();
	}
}

?>