<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->model('welcome_model','login');
		
		if(isset($_POST['login_now'])){ 
			if(empty($_POST['email']) || empty($_POST['pass'])){
				echo 0;
			}else{
				$result = $this->welcome->user_login($_POST);
				echo $result;
			}
		}else{
			$data=array('action' => 'login');
			$this->load->view('signup_login',$data);
		}
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

	
}
