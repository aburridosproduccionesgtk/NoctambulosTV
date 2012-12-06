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
		$query = $this->db->query("SELECT comments.id_user, comments.fecha, comments.mensaje, user.user_name
									FROM comments, user WHERE comments.id_vid =? AND comments.id_user = 
									user.id",array("id_vid"=>$id)); 
    	return $query->result();
		
	}
	function get_foto_comments($id){
		$query = $this->db->query("SELECT comments_fotos.id_user, comments_fotos.fecha, comments_fotos.mensaje, 
									user.user_name FROM comments_fotos, user WHERE comments_fotos.id_foto =? 
									AND comments_fotos.id_user = user.id",array("id_vid"=>$id)); 
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
		$query = $this->db->query("SELECT id_med FROM sharem WHERE id_orig=? AND tipe='V'",array($id));
		return $query->result();
	}
	function get_fot_com($id){
		$query = $this->db->query("SELECT id_med FROM sharem WHERE id_orig=? AND tipe='F'",array($id));
		return $query->result();
	}
	function get_foto_profile($id){
		$query = $this->db->query("SELECT * FROM img WHERE id=?",array($id));
		return $query->result();
	}
	
}

?>