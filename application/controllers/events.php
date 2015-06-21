<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

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

	function __construct() {

        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('session');
       //  print_r($this->uri->segment_array());
       // echo $this->uri->segment(1); die;
  
    }

	public function index()
	{
		// $this->load->view('setup_events');
	}
	public function setup_events()
	{
		// $this->load->model('welcome_model','login');
		
		// if(isset($_POST['login_now'])){ 
		// 	if(empty($_POST['email']) || empty($_POST['pass'])){
		// 		echo 0;
		// 	}else{
		// 		$result = $this->welcome->user_login($_POST);
		// 		echo $result;
		// 	}
		// }else{
		// 	$data=array('action' => 'login');
			$this->load->view('event_setup');
		// }
	}
	public function signup()
	{	
		$this->load->model('welcome_model','welcome');
		if(isset($_POST['signup_now'])){ 
			if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pass'])){
				echo 0;
			}else{
				$result = $this->welcome->user_signup($_POST);
				echo $result;
			}
		}else{
			$data=array('action' => 'signup');
			$this->load->view('signup_login',$data);
		}
	}

	public function dashboard(){
		// $this->load->model('dash_model','dash');
		// check if the user is logged in. If yes then redirected to the dashboard else back to login page!
		$data = array();
		$this->load->view('dashboard',$data);
	}

	
}
