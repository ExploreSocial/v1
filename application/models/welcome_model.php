<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function user_signup($data)
        {	

	        $signup_data = array(
		        'name' => $this->db->escape_str($data['username']),
		        'email' => $data['email'],
		        'pass' => password_hash($data['pass'], PASSWORD_DEFAULT)
			);

			$this->db->insert('users', $signup_data);
                echo "in model"; print_r($data); die;
        }

    }