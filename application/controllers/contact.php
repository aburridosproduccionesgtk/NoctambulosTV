<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {

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
		
		//Debug
		

	
	}
	
	function __draw_before_content()
	{
		// HEADER
		//$data["username"] = $this->session->userdata("username");
		$this->load->helper('global');
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
	
    
		$this->template->write_view("footer", "footer", "",FALSE);
		$this->template->render();
	
	}
	
	 
	public function index()
	{
		
		$this->load->library('user_agent');
		$this->load->helper('global');
		
		$data['mensaje'] = " ";
		$this-> __draw_before_content();
		$this->template->parse_view("content","contact",$data,FALSE);
		$this->__draw_after_content();
		/*Comentado de momento. Debe servirme en un futuro
		if($this->agent->is_browser()){
			$data['info_agent']=  $this->agent->browser().' '.$this->agent->version();
			
		}*/
		
	 /*	
	  *   Comentado. Descomentar para entrar en el modo debugger.  
	  * 
	    $this->output->enable_profiler(TRUE); 
	  * 
	  * */
	  
	}
	
	public function envio(){
		
		$name = strip_tags($_POST['name']);
		$email = strip_tags($_POST['email']);
		$message = strip_tags($_POST['message']);
		
		// si es un robot, en teor�a deber�a escribir datos aqu�, 
		//y seria detectado como tal.
		$botty = strip_tags($_POST['botty']);
		
		if($botty != NULL){
			die;
		}
		
		
		// direcci�n de correo a la que mando este mensaje
		$to = "hesselek@gmail.com";
		
		// direcci�n de correo que deber� aparecer en 
		$from = "contact@yourwebsite.com";
		
		$subject = "Contact from your website";
		
		$body = "Email from your website: " . " ";
		$body .= "Name: " . $name. " ";
		$body .= "Email: " . $email . " ";
		$body .= "Message: " . $message . " ";
		
		$headers = "From: $from" . "
";
		$headers .= "Reply-To: $from" . "
";
		$headers .= "Return-Path: $from" . "
";
		
		// mail(to,subject,body,headers);
		
		$mailed = mail($to, $subject, $body, $headers);
		
		if($mailed){
			$data['mensaje'] =  '<div class="valid">Gracias por su mensaje. Responderemos lo antes posible</div>';
		}else{
			$$data['mensaje'] = '<div class="error">Ha ocurrido un problema. No hemos podido mandar el mensaje.</div>';
		}
		$this->template->write_view("content","contact",$data,TRUE);
		$this->__draw_after_content();
		
	}
	
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */