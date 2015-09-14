<?php defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model {

        public function __construct() {

            parent::__construct ();
            $this->load->database();
        }

        public function showTask () {

		$query = $this->db->get('tasks');
		return $query->result();

			foreach($query->result() as $row)
			{
				echo $row->task.'<br>' ;
			}

		}

        public function insertTask () {

			// process user input
        	$taskData = array(
				'task' => $this->input->post('task')
				);

			//test if input submitted
			//var_dump($taskData)	;

			//insert in table
			$this->db->insert('tasks', $taskData);
			redirect('/DashboardController/view/');
			
			// test if redirection is ok
			//$this->load->view('pages/about') ;

		}

		public function removeTask () {


		}

}