<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

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
		//  Colocados aqui para que la p�gina tarde menos en cargar -->
    // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
   // <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->

  /*  $js = "<script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='js/jquery.cslider.js'></script> 
    <!--
    	<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>-->
    <script type='text/javascript' src='js/jquery.gmap.min.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='js/jquery.form.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox-1.3.4.pack.js'></script>
    <!--[if lt IE 9]>
    <script type='text/javascript' src='js/css3-mediaqueries.js'></script>
    <![endif]-->";*/
    
    
		$this->template->write_view("footer", "footer", "",FALSE);
		$this->template->render();
	
	}
	
	 
	public function index()
	{
		
		$this->load->library('user_agent');
		$this->load->helper('global');
		
		
		$this-> __draw_before_content();
		$this->template->write_view("content","secciones","",FALSE);
		$this->__draw_after_content();
		/*Comentado de momento. Debe servirme en un futuro
		if($this->agent->is_browser()){
			$data['info_agent']=  $this->agent->browser().' '.$this->agent->version();
			
		}*/
		
	 /*	
	  *   Comentado. Descomentar para entrar en el modo debugger.  
	  * 
	  *   
	  * 
	  * */
	  $this->output->enable_profiler(TRUE); 
	}
	
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */