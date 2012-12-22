<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	
	function __construct()
	{

		parent::__construct();
		$this->load->model('user_model','user_model',TRUE);
		$this->load->model('video_model','video_model', TRUE);
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
		
		if($this->user_model->checkmail($user['email']))
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
		
			
		if(empty($user)){
			 $mensaje= "<div class='alert alert-error fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>
		  			El usuario no existe
              	</div>";
			
		}
		
			
		if($user && $user->password && $user->password != ""
				&& $user->password == $password)
		{
			$this->session->set_userdata("id",$user->id);
			$this->session->set_userdata("user",$user->user_name);
			$this->user_model->get_pr_interest($user->id);
			$this->user_model->get_p_information($user->id);
			
			$mensaje = 'log'; 

		}else{
			$mensaje= "<div class='alert alert-error fade in'>
		                <a class='close' data-dismiss='alert'>x</a><strong>
				  			Contraseña incorrecta </strong>
		              	</div>";
					
		}
		echo json_encode($mensaje);	
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect("secciones");
	}
	function profileC(){
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->get_user_by_id($id);
		$data['profile'] =$this->user_model->get_p_information($id);
		$data['interest'] = $this->user_model->get_pr_interest($id);
		
		$this-> __draw_before_content();
		$this->template->write_view("content","profileform",$data);
		$this->__draw_after_content();
	}
	function profile_update(){
	
		$id = $this->session->userdata('id');

		$data['ocuppation'] = strip_tags($_POST['ocuppation']);
		$data['feast_location'] = strip_tags($_POST['feast_location']); 
		$data['sex'] = strip_tags($_POST['sex']);
		$data['provincia'] = strip_tags($_POST['provincia']);
		$this->user_model->add_information($id,$data);
		$usern = strip_tags($_POST['user']);
		
		
		if(!$this->user_model->exist_username($usern)) {
			$mensaje = "<div class='alert alert-success fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>
		  			Perfil actualizado. Puedes volver a tu perfil desde <a href='".base_url()."user/profile'><span style='color:red'>aqui</span></a>
              	</div>";
			
			
			$this->user_model->add_unern($id,$usern);
			$this->session->set_userdata("user",$usern);
		}else{
			$idf = $this->user_model->get_user_by_username($usern);
			if($id==$idf){
				$this->user_model->add_unern($id,$usern);
			}else{
				$mensaje = "<div class='alert alert-error fade in'>
		                <a class='close' data-dismiss='alert'>x</a><strong>
				  			El usuario ya existe </strong>
		              	</div>";
			}
			$mensaje =  "<div class='alert alert-success fade in'>
                <a class='close' data-dismiss='alert'>x</a><strong>
		  			Perfil actualizado. Puedes volver a tu perfil desde <a href='".base_url()."user/profile'><span style='color:red'>aqui</span></a>
              	</div>";
		}
		
		if(isset($_POST['Hoby'])){
		   $datos = array();
			$interest = $_POST['Hoby'];
			foreach ($interest as $i) {
				$datos[$i] = 1;
			}
			
			$this->user_model->add_interest($datos,$id);
			
		}
		echo  $mensaje;
		//redimensionar();
		
		
	}
	
	function uploadPhoto($path)
	{
		
		/*$filesize = strip_tags($_FILES['qqfile']['size']);
		$filename = 'uno';//strip_tags($_FILES['qqfile']['name']);
		$uploaddir = './img/temp/';
		 if($filesize > 0){ 
				if((preg_match("/.jpg/", $filename)) || (preg_match("/.gif/", $filename)) || (preg_match("/.JPG/", $filename))|| (preg_match("/.GIF/", $filename)))
				{
				    $uploadfile = $uploaddir . base64_encode($this->session->userdata['id']);
					if (move_uploaded_file($_FILES['qqfile']['tmp_name'], $uploadfile)) 
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
			}*/
	
			$input = fopen("php://input", "r");
			$temp = tmpfile();
			$realSize = stream_copy_to_stream($input, $temp);
			fclose($input);
		
			if ($realSize != $this->getSize()){
				return false;
			}
		
			$target = fopen('./img/'.$path.'/holaaa.jpg', "w");
			fseek($temp, 0, SEEK_SET);
			stream_copy_to_stream($temp, $target);
			fclose($target);
		
			return 'exito';
		
			
	
			 
	}
	public function getName() {
		return $_GET['qqfile'];
	}
	public function getSize() {
		if (isset($_SERVER["CONTENT_LENGTH"])){
			return (int)$_SERVER["CONTENT_LENGTH"];
		} else {
			throw new Exception('Getting content length is not supported.');
		}
	}
	
	public function profile(){
		$id = $this->session->userdata('id');
		$data['user'] = $this->user_model->get_user_by_id($id);
		$comen_vid= $this->user_model->get_user_comment($id);
		$data['interest'] = $this->user_model->get_pr_interest($id);
		$comen_foto = $this->user_model->get_user_photos($id);
		$data['videos_dat'] = array();
		$data['fotos_dat'] = array();
		$fotos = $this->video_model->get_fot_com($id);
			foreach($fotos as $f){
				array_push($data['fotos_dat'],$this->video_model->get_foto_profile($f->id_med));
			}
		$data['videos_dat'] = $this->video_model->get_vid_com($id);
	
		
		$commentF = array();
		
	
		foreach ($comen_foto as $c ) {
			  array_push($commentF, array('tipe'=>'foto','fecha'=>fecha_norm($c->fecha),
			  'mensaje'=>$c->mensaje,'id'=>$c->id_foto));
		}
		foreach ($comen_vid as $v ) {
			  array_push($commentF, array('tipe'=>'video','fecha'=>fecha_norm($v->fecha),
			  'mensaje'=>$v->mensaje,'id'=>$v->id_vid));
		}
		
		$data['comments'] = $commentF;
		$this-> __draw_before_content();
		$this->template->write_view("content","profile",$data,TRUE);
		$this->__draw_after_content();
	}
	
	public function searchUser($user){
		
		$share = $this->user_model->search_user($user);	  
		$lista = '<ul id="lista_share">';
		  	foreach ($share as $s) {
				$lista = $lista."<li onclick='javascript:elegido()' class='item_share' title='$s->user_name'>".$s->user_name."</li>";
			}
		$lista = $lista.'</ul>';
		$data['html'] = $lista;
		$this->load->view('responce', $data);
	}
	
	public function sharemed($cat){
		$username = strip_tags($_POST['user']);
		
		
		$share['tipe'] = strip_tags($_POST['tipe']);
		$share['id_med'] = strip_tags($_POST['id_med']);
		$share['id_orig'] =  get_user_id();
		$tipe = strip_tags($_POST['id_vid']);
		if($username!="" && $username !="nombre de usuario"){
			if($this->user_model->exist_username($username)){
			   	$userdes = $this->user_model->get_user_by_username($username);
				
			   	$share['id_dest'] = $userdes[0]->id;
				$this->user_model->sared_m($share);
			}
		   
				
			
			
		 }
		
		redirect(base_url().'secciones/videos/'.$cat.'/'.$tipe);
		
		
	}
	

}