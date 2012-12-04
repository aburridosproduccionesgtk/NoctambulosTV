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
	function get_comments($id){
		$query = $this->db->query("SELECT * FROM comments c WHERE c.id_vid = ?",array($id)); 
    	return $query->result();
		
	}
	function get_foto_comments($id){
		$query = $this->db->query("SELECT * FROM comments_fotos c WHERE c.id_foto = ?",array($id)); 
    	return $query->result();
		
	}
	
	function add_comment($coment){
		$this->db->insert("comments", $coment);
	
	}
	function get_foto_id($id){
		$query = $this->db->query("SELECT * FROM img f WHERE f.id =?",array($id));
    		return $query->result();
		
	}
	function add_comment_foto($coment){
		$this->db->insert("comments_fotos", $coment);
	}
	
	function get_vid_com($id)
	{
		$query = $this->db->query("SELECT * FROM sharem WHERE id_orig=? AND tipe='V'",array($id));
		return $query->result();
	}
	
}

?>