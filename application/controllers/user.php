<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{

		parent::__construct();
		$this->load->model('user_model','user_model',TRUE);
		$this->load->helper('global');
		//Debug
		

	
	}
	
	
	function reg(){
		//$password = md5($this->input->post("password"));
		$user['id'] = null;
		$user['email'] = strip_tags($_POST['email']);
		$user['password'] = strip_tags($_POST['password']);
		$fecha = strip_tags($_POST['fecha_nac']);
		$user['fecha_nac'] = cambiaf_a_mysql($fecha);
		
		
		if($this->user_model->exist_username($user['email'])){
			echo "el usuario ya existe";
		}
		
		else if(datecheck($user['fecha_nac'])===false)
		{
			echo "la fecha no es correcta";
		}else {
			$this->user_model->add_user($user);
			$userl = $this->user_model->get_user_by_email($user['email']);
			$this->session->set_userdata("user", $user1->id);
			redirect("secciones");
		}
		
		redirect("secciones");
		
		
	//	
		
		
	}
	
	function login(){
		
	
		$email = strip_tags($_POST['email']);
		$password = strip_tags($_POST['password']);
		echo $email;
		echo $password;
		
		
		$user = $this->user_model->get_user_by_email($email);
	
		if ($user && $user->password && $user->password != ""
				&& $user->password == $password)
		{
			$this->session->set_userdata("user", $user->id);
			redirect("secciones");
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect("secciones");
	}

}