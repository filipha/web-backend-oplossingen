<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	
        function __construct() {
                parent::__construct ();
        }

	public function view($page = 'dashboard') {
                //autoloaded via config
                //$this->load->helper('url'); 

		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
                {
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter
                $data['tasks'] = $this->dashboard_model->showTask () ;

                $this->load->view('templates/dashboard/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/dashboard/footer', $data);
	}

        public function addTask () {

                //$this->load->model('dashboard_model');
                $this->dashboard_model->insertTask () ;
               
        }

        public function listTask () {

                //$this->dashboard_model->showTask () ;
                $data['tasks'] = $this->dashboard_model->showTask () ;

        }

        public function removeTask () {

        }     

}
?>