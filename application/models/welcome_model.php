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
		        'pass' => password_hash(trim($data['pass']), PASSWORD_DEFAULT)
			);
	        $query = $this->db->query("SELECT * FROM users where email='".$data['email']."';");
	        if ($query->num_rows() > 0)
			{
				// return 2 if email already exist
				return 'already_exist';

			}else{
				$this->db->insert('users', $signup_data);
				$userid = $this->db->insert_id();
                return $userid;
            }
        }

        public function user_login($data)
        {	

	        $signup_data = array(
		        'email' => $data['email'],
		        'pass' => $data['pass']
			);
	        $sql = "SELECT * FROM users WHERE email = ? "; 
			$query = $this->db->query($sql, array($signup_data['email']));
			
	        if ($query->num_rows() > 0)
			{
				$row = $query->row_array();
				$pass_verify = 0;
				//print_r($row); echo "verify pass- ".$signup_data['pass']."----".password_verify("helloworld",$row['pass'])."----"; die;
				$pass_verify = password_verify(trim($data['pass']),$row["pass"]);
				if($pass_verify){
        		$userid = $row['user_id'];
                return $userid;
            	}else{
            		return "pass_issue";
            	}
        	}else{
        		return 0;
        	}

    }
}