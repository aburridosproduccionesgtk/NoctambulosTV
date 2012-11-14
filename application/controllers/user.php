<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	
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
		$user['password']  = strip_tags($_POST['password']);
		$fecha = strip_tags($_POST['fecha_nac']);
		$valido = TRUE;
		
		
		if(datecheck($fecha,$format="dmy")===false){
			$mensaje = "<div class='alert alert-error fade in'>
              	   <a class='close' data-dismiss='alert'>x</a><strong>
                	   Por favor, intruduce una fecha correcta
                   </div>";
			$valido = FALSE;
		}
		
		$fecha = cambiaf_a_mysql($fecha);
		$user['fecha_nac'] = $fecha;
		$fecha = intval((strtotime("now")-strtotime($fecha))/31536000);
		if($fecha<18){
			$mensaje = "<div class='alert alert-error fade in'>
              	   <a class='close' data-dismiss='alert'>x</a><strong>
                	   Tienes que ser mayor de edad para poder registrarte
                   </div>";
			$valido = FALSE;
		}	
		if($this->user_model->exist_username($user['email']))
		{
				$mensaje = "<div class='alert alert-error fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>El usuario ya existe
               
              </div>";
			$valido = FALSE;
		}
		
		if($valido){
			$this->user_model->add_user($user);
			//$user = $this->user_model->get_user_by_email($user['email']);
			//$this->session->set_userdata("user", $user1->id);
		
		
		   $mensaje= "<div class='alert alert-success fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>
		  			El usuario ha sido creado correctamente
              	</div>";
			
		}
		echo json_encode($mensaje);	
}
		
		
		
		
	
		
		

	
	function login(){
		
	
		$email = strip_tags($_POST['email_log']);
		$password = strip_tags($_POST['password_log']);
		
		
		
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