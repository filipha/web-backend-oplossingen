<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

        function __construct() {
                parent::__construct ();
        }
	
	public function view($page = 'index') {
                //$this->load->helper('url');

		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
		
	}

    public function login () {


            //model to load is set in config.php 
            //$this->load->model('login_model');
            //validate user login by calling validate class/method : login_model/validate
            $this->validateForm();

    }

    public function validateForm () {

            $this->load->library('form_validation') ;
/*                if ($this->input->post() !== FALSE)
            {
                    $data['message']        =       $this->validateForm();
            }
*/
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'paswoord', 'required');

            if($this->form_validation->run() == FALSE) {

                    //$this->load->view('pages/fail') ;
                    $this->view();

            } else {

                   //$this->load->view('pages/success') ;
                   //model to load is set in config.php 
                   //$this->load->model('login_model');
                   $result = $this->login_model->validateUser () ;
                   if (!$result) {
                        $this->view () ;
                   } else {
                        redirect ('dashboard') ;
                   }
            }
    }

    public function logout () {

            redirect('view') ;
    }

}
?>