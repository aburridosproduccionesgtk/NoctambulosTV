<?php


class User_model extends CI_Model {

	

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function checkmail($username)
    {
    	$query = $this->db->get_where("user", array("email" => $username));
    	$result = $query->result();
    	if ($result == null){
    		return false;
    	}
    	else{
    		return true;
    	}
    }
   		
		function exist_username($user){
			$query = $this->db->get_where("user", $user);
    		$result = $query->result();
			if($result == null){
				return false;
			}else{
				return true;
			}
		}
		
		function get_user_by_email($email)
		{
			$sql = "SELECT * FROM user c WHERE c.email=?";
		
			$query = $this->db->query($sql,array($email));
			return $query->row();
		}
		
		function add_user($user){
   	  		$this->db->insert("user", $user);
			$id = $this->db->insert_id();
			$this->db->set('id',$id);
			$this->db->insert('pr_interest');
			
   		}
		
		function get_p_information($id){
			$query = $this->db->get_where("pr_information", array("id" => $id));
			$result = $query->result();
			if($result == null){
				$this->db->set('id',$id);
				$this->db->insert('pr_information');
				return null;
			}else{
				return $result;
			}	
		}
		
		function get_pr_interest($id){
			$query = $this->db->get_where("pr_interest", array("id" => $id));
			 
			$result = $query->result();
			if($result == null){
				$this->db->set('id',$id);
				$this->db->insert('pr_interest');
				return null;
			}else{
				return $result;
			}	
		}
		
		function add_interest($interest,$id){
			$this->db->where('id',$id);
			$this->db->update("pr_interest", $interest);
		}
		
		function get_user_name($id){
			$query = $this->db->query('SELECT user_name FROM user WHERE id=?',array("id" => $id));
			
			 
			return $query->row();
			
		/*	if($result->user_name == NULL){
				return NULL;
			}else{
				return $result['user_name'];
			}	*/
		}

		function get_user_by_id($id){
			
			$query = $this->db->get_where("user", array("id" => $id));
			 
			return $query->result();
		/*	if($result->user_name == NULL){
				return NULL;
			}else{
				return $result['user_name'];
			}	*/
		}
		
		public function add_unern ($id,$usern){
			//$this->db->where('id',$id);
			$id = 'id = '.$id;
			$this->db->update("user", $usern,$id);
		}
		
		public function add_information($id,$data){
			$this->db->where('id',$id);
			$this->db->update("pr_information", $data);
		}
	
		public function get_user_comment($id){
			 $this->db->select('id_vid, mensaje, fecha');
			// $this->db->from('comments');
			 $this->db->order_by('fecha','desc');	
			 $query = $this->db->get_where("comments", array("id_user" => $id));
             return $query->result();
		}
		
		public function get_user_photos($id)
		{
			$this->db->select('id_foto, mensaje, fecha');
			$this->db->order_by('fecha','desc');	
			$query = $this->db->get_where("comments_fotos", array("id_user" => $id));
            return $query->result();
		}
		
		function sared_m($share){
		
			$query = $this->db->get_where('sharem',$share);
		
			if($query->result() != null){
				
			//si el objeto ya existe en la base de datos, no hace falta actualizarlo.
			}else{
			
			$this->db->insert('sharem',$share);
			return "<div class='alert alert-success fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>
		  			El usuario ha sido creado correctamente
              	</div>";
			}
		}
		
		public function get_user_by_username($username){
		      //   $user = '%'.$username.'%';
			//$query = $this->db->query("SELECT * FROM user WHERE user_name='hesselek'");
				$this->db->select('id');
				$this->db->where('user_name',$username);
				$query = $this->db->get('user');
				return $query->result();
				
		}	
			
		public function search_user($user){
			   $user = '%'.$user.'%';
				$query = $this->db->query('SELECT user_name FROM user WHERE user_name LIKE ?',array($user));
			
			return $query->result();
		}
	//TODO a partir de aqui todo es borrable.......
	/*
	
   function list_users($status)
   {

		$sql = "SELECT u.*,p.name as p_name FROM user u"
				.	" INNER JOIN user_profile up ON u.id=up.id_user"
				.	" INNER JOIN profile p ON p.id=up.id_profile";

		if ($status==0 || $status==1)
		{
			$sql .= " WHERE u.status = ". $status;
		}
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
   }
   
   

	

	/**
	 * do a login for the given user name and password.
	 * for more information in return values see constants.php
	 * @return logged status
	 */
	/*function do_login($username,$password)
	{

		$sql = "SELECT u.id,u.password,up.id_profile,u.email,u.phone,u.name,u.surname,u.position FROM user u"
				.	" INNER JOIN user_profile up ON u.id=up.id_user"
				.	"	WHERE u.username='". $username ."'";
		
		$query = $this->db->query($sql);
		$result = $query->result();
		if (!$result)
		{
			return LOGGED_STATUS_UNMATCH_USER;
		}

		$db_password = $result[0]->password;
		$id = $result[0]->id;
		$email = $result[0]->email;
		$phone = $result[0]->phone;
		$user_type = $result[0]->id_profile;
		$name = $result[0]->name;
		$surname = $result[0]->surname;
		$position = $result[0]->position;

		if ($db_password == $password)
		{
			//$this->password = $db_password;
			$this->email = $email;
			$this->id = $id;
			$this->user_type = $user_type;
			$this->username = $username;
			$this->phone = $phone;
			$this->name = $name;
			$this->surname = $surname;
			return LOGGED_STATUS_IN;
		}
		else
		{
			return LOGGED_STATUS_UNMATCH_PASSWORD;
		}
	}

	function new_user($user,$profile)
   {
		$this->db->insert("user", $user);
		$id = $this->db->insert_id();

		$values["id_user"] = $id;
		$values["id_profile"] = $profile;
		$this->db->insert("user_profile",$values);

		return $id;
   }

	function edit_user($id,$user,$profile)
   {
		// update_user
		$this->db->where("id",$id);
		$this->db->update("user",$user);
		
		$values["id_profile"] = $profile;
		$this->db->where("id_user",$id);
		$this->db->update("user_profile",$values);
		
   }

	function change_status($id_user,$status)
	{
		$values["status"] = $status;
		$this->db->where("id",$id_user);
		$this->db->update("user",$values);
	}

	function delete_user($id_user)
	{


		$this->db->where("id",$id_user);
		$this->db->delete("user_profile");

		$this->db->where("id", $id_user);
		$this->db->delete("user");
	}

	function n_users()
	{
		return $this->db->count_all_results('user');
	}

	

	function get_id()
	{
		return $this->id;
	}
	
	function get_user_by_username($username)
	{
		$query = $this->db->get_where('user', array('username' => $username), 1, 0);
		return $query->row();
	}

	function get_username()
	{
		return $this->username;
	}
	
	function get_full_name()
	{
		return $this->name." ".$this->surname;
	}
	
	function get_position()
	{
		return $this->position;
	}

	function get_email()
	{
		return $this->email;
	}
	
	function get_phone()
	{
		return $this->phone;
	}

	function get_user_type()
	{
		return $this->user_type;
	}

	function get_name()
	{
		return $this->name;
	}

	function get_surname()
	{
		return $this->surname;
	}*/

}

?>