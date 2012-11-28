<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	
	function __construct()
	{

		parent::__construct();
		$this->load->model('user_model','user_model',TRUE);
		$this->load->helper('global');
		
		//Debug
	
	}
	
	function __draw_before_content()
	{
		// HEADER
		//$data["username"] = $this->session->userdata("username");
		
		$css =   "<link href='".base_url()."css/bootstrap.css' rel='stylesheet'>
    			<link href='".base_url()."css/jquery.fancybox-1.3.4.css' rel='stylesheet'>
    			<link href='".base_url()."css/style.css' rel='stylesheet'>
    			<link href='".base_url()."css/font-awesome.css' rel='stylesheet'>";
		$this->template->write("css",$css);
		
		$js = "<script type='text/javascript' src='".base_url()."js/test.js'></script>
    		   <script type='text/javascript' src='".base_url()."js/modernizr.custom.81963.js'></script>";
		$this->template->write("js",$js);		
		
		$data = array(
              'cur_secciones' => 'current',
         );
		
		$this->template->parse_view("header", "header_view", $data, FALSE);
		
	
	
	}
	
	function __draw_after_content()
	{
		// FOOTER
		$this->template->write_view("footer", "footer", "",FALSE);
		$this->template->render();
	
	}
	
	
	public function reg(){
		//$password = md5($this->input->post("password"));
		$user['id'] = null;
		$user['email'] = strip_tags($_POST['email']);
		$user['password']  = md5(strip_tags($_POST['password']));
		$fecha = $_POST['fecha_nac'];
		$valido = TRUE;
		
		
		if(datecheck($fecha,"dmy")===false){
			$mensaje = "<div class='alert alert-error fade in'>
              	   <a class='close' data-dismiss='alert'>x</a><strong>
                	   Por favor, introduce una fecha correcta".$fecha."
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
			//$this->user_model->add_user_profile($user);
			//$user = $this->user_model->get_user_by_email($user['email']);
			//$this->session->set_userdata("user", $user1->id);
		 
		
		   $mensaje= "<div class='alert alert-success fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>
		  			El usuario ha sido creado correctamente
              	</div>";
			
		}
		echo json_encode($mensaje);	
	}
	public function subir_foto(){
		 $this->load->view('upload_foto');
	}
		

	
	public function login(){
		
	
		$email = strip_tags($_POST['email_log']);
		$password = md5(strip_tags($_POST['password_log']));
		$user = $this->user_model->get_user_by_email($email);
		$this->user_model->get_pr_interest($user->id);
		$this->user_model->get_p_information($user->id);
			
		if(empty($user)){
			 $mensaje= "<div class='alert alert-error fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>
		  			El usuario no existe
              	</div>";
			echo json_encode($mensaje);	
		}
		
			
		if($user && $user->password && $user->password != ""
				&& $user->password == $password)
		{
			$this->session->set_userdata("id",$user->id);
			$this->session->set_userdata("user",$user->user_name);
			
			
			$mensaje = 'log'; 
				
				echo json_encode($mensaje);	
			
		}else{
			$mensaje= "<div class='alert alert-error fade in'>
		                <a class='close' data-dismiss='alert'>x</a><strong>
				  			Contraseña incorrecta <br>
		              	</div>";
					echo json_encode($mensaje);	
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect("secciones");
	}
	
	function profile_update(){
		//$data['hoby'] = ;
		$id = $this->session->userdata('id');

		$data['ocuppation'] = strip_tags($_POST['ocuppation']);
		$data['feast_location'] = strip_tags($_POST['feast_location']); 
		$data['sex'] = strip_tags($_POST['sex']);
		$data['provincia'] = strip_tags($_POST['provincia']);
		
		$this->user_model->add_information($id,$data);
		$data['fallo'] = $this->user_model->get_user_name($id);
		if($this->user_model->get_user_name($id)==NULL){
			
			$data['user_name'] = strip_tags($_POST['user_name']);
			$usern['user_name'] = $data['user_name'];
			$this->user_model->add_unern($id,$usern);
		}
		
		if(isset($_POST['Hoby'])){
		   $datos = array();
			$interest = $_POST['Hoby'];
			foreach ($interest as $i) {
				$datos[$i] = 1;
			}
			$this->user_model->add_interest($datos,$id);
			
		}
		
		//redimensionar();
		$this->load->view('welcome_message',$data);
	}
	
	function uploadPhoto()
	{
		
		$filesize = strip_tags($_FILES['upfile']['size']);
		$filename = strip_tags($_FILES['upfile']['name']);
		$uploaddir = './img/temp/';
		 if($filesize > 0){ 
				if((preg_match("/.jpg/", $filename)) || (preg_match("/.gif/", $filename)) || (preg_match("/.JPG/", $filename))|| (preg_match("/.GIF/", $filename)))
				{
				    $uploadfile = $uploaddir . base64_encode($this->session->userdata['id']);
					if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) 
					{
						$mensaje = "Archivo subido correctamente";
					} else {		
						$mensaje = "Error de conexi&oacute;n con el servidor.";
					}
				} else {
					$mensaje = "Sólo se permiten imágenes en formato jpg. y gif., no se ha podido adjuntar.";
				}
			}else{
				$mensaje = "<br><br>Campo vac&iacute;o, no ha seleccionado ninguna imagen";
			}
			
			redirect('user/profileC');
	
			 
	}
	
	public function profile(){
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->get_user_by_id($id);
		$comen_vid= $this->user_model->get_user_comment($id);
		$data['interest'] = $this->user_model->get_pr_interest($id);
		//$data['foto_com'] 
		$comen_foto = $this->user_model->get_user_photos($id);
		
		$commentF = array();
		
		// $data['comments'] = $this->user_model->get_user_comment($id);
		foreach ($comen_foto as $c ) {
			  array_push($commentF, array('tipe'=>'foto','fecha'=>fecha_norm($c->fecha),
			  'mensaje'=>$c->mensaje,'id'=>$c->id_foto));
		}
		foreach ($comen_vid as $v ) {
			  array_push($commentF, array('tipe'=>'video','fecha'=>fecha_norm($v->fecha),
			  'mensaje'=>$v->mensaje,'id'=>$v->id_vid));
		}
		
		$data['comments'] = $commentF;
		//$data['comments'] = array_push($comen_foto,$comen_vid); 
		$this-> __draw_before_content();
		$this->template->write_view("content","profile",$data,TRUE);
		$this->__draw_after_content();
	}
	
	public function searchUser(){
		
		$mensaje = $_POST['user'];
		echo json_encode($mensaje);
	}

}