<?php


class User_model extends CI_Model {

	var $name = "";
	var $surname = "";
	var $username = "";
	var $password = "";
	var $email = "";
	var $phone = "";
	var $position = "";
	var $id = null;
	var $user_type = "";
	

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    //TODO: a partir de aqui, todo es borrable...
	function get_user($id_user)
	{
		$sql = "SELECT u.*,p.name as p_name,p.id as p_id FROM user u"
				.	" INNER JOIN user_profile up ON u.id=up.id_user"
				.	" INNER JOIN profile p ON p.id=up.id_profile"
				.	"		WHERE u.id=". $id_user;

		$query = $this->db->query($sql);
		$result = $query->result();
		return $result[0];
	}
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
	function do_login($username,$password)
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

	function exist_username($username)
	{
		$query = $this->db->get_where("user", array("username" => $username));
		$result = $query->result();
		if ($result == null){
			return false;
		}
		else{
			return true;
		}
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
	}

}

?>