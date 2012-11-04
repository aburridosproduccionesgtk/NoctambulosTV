<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class secciones extends CI_Controller {

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
    			<link href='css/jquery.fancybox-1.3.4.css' rel='stylesheet'>
    			<link href='".base_url()."css/style.css' rel='stylesheet'>
    			<link href='css/font-awesome.css' rel='stylesheet'>";
		$this->template->write("css",$css);
		
		$js = "<script type='text/javascript' src='js/test.js'></script>
    		   <script type='text/javascript' src='js/modernizr.custom.81963.js'></script>";
		$this->template->write("js",$js);		
		
		$data = array(
              'cur_secciones' => 'current',
         );
		
		$this->template->parse_view("header", "header_view", $data, FALSE);
		
	
	/*	$css = "<link rel='stylesheet' type='text/css' href='". base_url() ."views/css/slide.css' />";
		$css .= "<link rel='stylesheet' type='text/css' href='". base_url() ."views/css/jquery.mCustomScrollbar.css' />";
		$css .= "<link rel='stylesheet' type='text/css' href='". base_url() ."views/css/distributor_carousel.css' />";
		$css .= "<link rel='stylesheet' type='text/css' href='". base_url() ."views/css/home.css' />";
		$this->template->write("css",$css);
	
		$js = "<script type='text/javascript' src='" . base_url() . "views/js/slide.js'></script>";
		$js .= "<script type='text/javascript' src='" . base_url() . "views/js/jquery.easing.1.3.js'></script>";
		$js .= "<script type='text/javascript' src='" . base_url() . "views/js/jquery.mousewheel.min.js'></script>";
		$js .= "<script type='text/javascript' src='" . base_url() . "views/js/jquery.mCustomScrollbar.js'></script>";
		$js .= "<script type='text/javascript' src='" . base_url() . "views/js/jcarousellite_1.0.1.min.js'></script>";
		$js .= "<script type='text/javascript' src='" . base_url() . "js/load/home.js'></script>";
		$this->template->write("js", $js);*/
	
	}
	
	function __draw_after_content()
	{
		// FOOTER
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
		
		
	}
	
	
	public function ocio()
	{
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['videos'] = $this->video_model->get_v('1');
		$data['videos_dat']=$this->video_model->get_v_date('1');
		$data['color'] = 'rgb(254, 223, 14)';
		$data['titulo'] = "ocio y cultura";
	 	$this->load->view('ocio',$data);
	 
	 	
	   // $this->output->enable_profiler(TRUE);
	}
	
	public function experiencias()
	{
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['videos'] = $this->video_model->get_v('3');
		$data['videos_dat']=$this->video_model->get_v_date('3');
		$data['color'] = 'rgb(254, 223, 14)';
		$data['titulo'] = "experiencias";
		$this->load->view('ocio',$data);

	}
	
	
	public function conciertos ()
	{
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['videos'] = $this->video_model->get_v('7');
		$data['videos_dat']=$this->video_model->get_v_date('7');
		$data['color'] = 'rgb(254, 223, 14)';
		$data['titulo'] = "conciertos";
		$this->load->view('ocio',$data);	
		
	}
	
	public function discotecas()
	{
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['videos'] = $this->video_model->get_v('4');
		$data['videos_dat']=$this->video_model->get_v_date('4');
		$data['color'] = 'rgb(254, 223, 14)';
		$data['titulo'] = "discotecas";
		$this->load->view('ocio',$data);

	}
	
	public function festivales()
	{
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['videos'] = $this->video_model->get_v('6');
		$data['videos_dat']=$this->video_model->get_v_date('6');
		$data['color'] = 'rgb(254, 223, 14)';
		$data['titulo'] = "festivales";
		$this->load->view('ocio',$data);
	
	}
	
	public function prensa()
	{
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['videos'] = $this->video_model->get_v('5');
		$data['videos_dat']=$this->video_model->get_v_date('5');
		$data['color'] = 'rgb(254, 223, 14)';
		$data['titulo'] = "Ruedas de Prensa";
		$this->load->view('ocio',$data);
	
	}
	
	
	public function videos($id){
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['video'] = $this->video_model->get_v_id($id);
		
		$this-> __draw_before_content();
		
		
		$this->template->write_view("content","video",$data,false);
		
		$this->__draw_after_content();
		
		
	
		
	}
	
	public function experiencias1()
	{
	
		$this->load->library('user_agent');
		$this->load->helper('global');
		
		$this->load->model('video_model','video_model',TRUE);
		$this->load->helper('global');
		$data['videos'] = $this->video_model->get_v('3');
		$data['videos_dat']=$this->video_model->get_v_date('3');
		$data['color'] = 'rgb(254, 223, 14)';
		$this-> __draw_before_content();
	
	
	
		$this->template->write_view("content","ocio",$data,FALSE);
		$this->__draw_after_content();
		/*Comentado de momento. Debe servirme en un futuro
			if($this->agent->is_browser()){
		$data['info_agent']=  $this->agent->browser().' '.$this->agent->version();
			
		}*/
	
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */