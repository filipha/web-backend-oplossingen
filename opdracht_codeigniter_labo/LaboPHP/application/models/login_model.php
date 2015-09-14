<?php defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

        public function __construct() {

                parent::__construct ();
                $this->load->database();
        }
        
        public function validateUser () {

		// process user input
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');
		
		//prepare query, lookup values in db
		$em = $this->db->where('email', $email);
		$pw = $this->db->where('password', $password);
                //var_dump($em, $pw);
		
		//run query on db
		$query = $this->db->get('users');
                echo 'rows : '.$query->num_rows();

		// check query results
		if ($query->num_rows == 1) {
			//create session data on first and only row
			$row = $query->row() ;
			$userData = array(
                    'id' => $row->id,
                    'email' => $row->email,
                    'password' => $row->password,
                    'validated' => TRUE
                    );
            $this->session->set_userdata($userData);

			return TRUE ;
			//$this->load->view('pages/success') ;
                        //redirect ('dashboard');
		} else {
			return FALSE ;
			//$this->load->view('pages/fail') ;
			//redirect ('index') ;
                        
                        //test if input submitted
			//var_dump($email, $password);
			//var_dump($query) ;

		}
        }
}
?>