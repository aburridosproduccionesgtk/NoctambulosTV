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
		$this->load->model('video_model','video_model',TRUE);
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
	
	 
	public function index()
	{
		
		//$this->load->library('user_agent');
		//if($this->agent->is_browser()){

		
		$this-> __draw_before_content();
		
		$this->template->write_view("content","secciones",FALSE);
		$this->__draw_after_content();
			
			
		
		
		
	}
	
	
	
	public function ocio()
	{
	
		$data['videos'] = $this->video_model->get_v('1');
		$data['videos_dat']=$this->video_model->get_v_date('1');
		$data['color'] = 'rgb(254, 223, 14);';
		$data['titulo'] = "ocio y cultura";

		$f = array();
		
		foreach ($data['videos'] as $v){
			$fotos = $this->video_model->get_f_id($v->id);
		
			if($fotos){
				array_push($f,array('title'=>$v->title,'galery'=>$fotos));
			}
		}
	
		
		$data['fotos'] = $f;
	 	$this-> __draw_before_content();
		
		
		$this->template->write_view("content","ocio",$data,FALSE);
		
		$this->__draw_after_content();
	 	
	}
	
	public function experiencias()
	{
		$data['videos'] = $this->video_model->get_v('3');
		$data['videos_dat']=$this->video_model->get_v_date('3');
		$data['color'] = 'rgb(41,255,6);';
		$data['foto'] = $this->video_model->get_f('3');
		$data['titulo'] = "experiencias";
		
		$f = array();
		
		foreach ($data['videos'] as $v){
			$fotos = $this->video_model->get_f_id($v->id);
		
			if($fotos){
				array_push($f,array('title'=>$v->title,'galery'=>$fotos));
			}
		}
		
		
		
		$data['fotos'] = $f;
		
		$this-> __draw_before_content();
		$this->template->write_view("content","ocio",$data,TRUE);
		$this->__draw_after_content();
		
		//$this->load->view('ocio',$data);

	}
	
	public function conciertos ()
	{
		$data['videos'] = $this->video_model->get_v('7');
		$data['videos_dat']=$this->video_model->get_v_date('7');
		$data['color'] = 'rgb(255,0,0);';
		$data['titulo'] = "conciertos";
		$data['foto'] = $this->video_model->get_f('7');
		
		$f = array();
		
		foreach ($data['videos'] as $v){
			$fotos = $this->video_model->get_f_id($v->id);
		
			if($fotos){
				array_push($f,array('title'=>$v->title,'galery'=>$fotos));
			}
		}
		
		
		
		$data['fotos'] = $f;
		$this-> __draw_before_content();
		$this->template->write_view("content","ocio",$data,TRUE);
		$this->__draw_after_content();
		
	}
	
	
	public function discotecas()
	{
		$data['videos'] = $this->video_model->get_v('4');
		$data['videos_dat']=$this->video_model->get_v_date('4');
		$data['color'] = 'rgb(238,11,169);';
		$data['titulo'] = "discotecas";
		$data['foto'] = $this->video_model->get_f('4');
		
		$f = array();
		
		foreach ($data['videos'] as $v){
			$fotos = $this->video_model->get_f_id($v->id);
		
			if($fotos){
				array_push($f,array('title'=>$v->title,'galery'=>$fotos));
			}
		}
		
		
		
		$data['fotos'] = $f;
		$this-> __draw_before_content();
		$this->template->write_view("content","ocio",$data,TRUE);
		$this->__draw_after_content();

	}
	
	public function festivales()
	{
		$data['videos'] = $this->video_model->get_v('6');
		$data['videos_dat']=$this->video_model->get_v_date('6');
		$data['color'] = 'rgb(255,108,0);';
		$data['titulo'] = "festivales";
		$data['foto'] = $this->video_model->get_f('6');
		
		$f = array();
		
		foreach ($data['videos'] as $v){
			$fotos = $this->video_model->get_f_id($v->id);
		
			if($fotos){
				array_push($f,array('title'=>$v->title,'galery'=>$fotos));
			}
		}
		
		
		
		$data['fotos'] = $f;
		$this-> __draw_before_content();
		$this->template->write_view("content","ocio",$data,TRUE);
		$this->__draw_after_content();
	
	}
	
	public function prensa()
	{
		$data['videos'] = $this->video_model->get_v('5');
		$data['videos_dat']=$this->video_model->get_v_date('5');
		$data['color'] = 'rgb(122,74,23);';
		$data['titulo'] = "Ruedas de Prensa";
		$data['foto'] = $this->video_model->get_f('5');
		
		$fotos = $this->video_model->get_f('5');
		$f = array();
		
		foreach ($data['videos'] as $v){
			$fotos = $this->video_model->get_f_id($v->id);
		
			if($fotos){
				array_push($f,array('title'=>$v->title,'galery'=>$fotos));
			}
		}
		
		
		
		$data['fotos'] = $f;
		$this-> __draw_before_content();
		$this->template->write_view("content","ocio",$data,TRUE);
		$this->__draw_after_content();
	
	}
	
	
	public function videos($id,$related){
		
		$this->video_model->update_c($id);
		$data['video'] = $this->video_model->get_v_id($id);
		$data['foto'] = $this->video_model->get_f_id($id);
		$data['videos'] = $this->video_model->get_v($related);
		
		$data['comments']  = $this->video_model->get_comments($id);
		
	
		$this-> __draw_before_content();
		
		
		$this->template->write_view("content","video",$data,TRUE);
		
		$this->__draw_after_content();
		
	}
	
	public function foto($id){
		$data['comments'] = $this->video_model->get_foto_comments($id);
		$data['foto'] = $this->video_model->get_foto_id($id);
		$this->load->view('foto',$data);
	}
	
	public function comments(){
		$commen['id'] = null;
		$commen['id_user'] = get_user_id();
		$commen['id_vid'] = strip_tags($_POST['v_id']);
		$commen['mensaje'] = strip_tags($_POST['comments']);

		$this->video_model->add_comment($commen);
		redirect("secciones/videos/".$commen['id_vid']);
	}
	
	public function commentsFotos(){
		$commen['id'] = null;
		$commen['id_user'] = get_user_id();
		$commen['id_foto'] = strip_tags($_POST['v_id_foto']);
		$commen['mensaje'] = strip_tags($_POST['comments']);
		$video= strip_tags($_POST['id_vid']);
		echo $video;
		
		$this->video_model->add_comment_foto($commen);
		redirect(base_url()."secciones/videos/".$video);
		
	}
	
	
	
	
}
