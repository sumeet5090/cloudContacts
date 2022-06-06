<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
            
    }

    public function index(){
		$this->login();
	}

	public function login(){

        // lets check if the user has the session enabled
        // if yes then we will redirect the request to home page
        // else we will remove the previous session of the user

        if ( $this->functions->is_logged_in() === TRUE)
        {
            redirect('contact');
        }
        else
        {
            // remove the session of the user
            unset($_SESSION['current_user']);

            // Here we will set the form validations for the login

            // if (is_numeric($this->input->post('username')))
            // {
            //     $this->form_validation->set_rules('username', 'Username', 'trim|required|regex_match[/^[789]\d{9}$/]');
            // }
            // else
            // {
            //     $this->form_validation->set_rules('username', 'Username', 'required|valid_email');
            // }
            $this->form_validation->set_rules('username', 'Username', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');


            // Run the validations
            // LOAD the LOGIN form if the validations are failed 
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('components/head', ['title' => 'Login']);
                $this->load->view('components/header');
                $this->load->view('auth/login');
                $this->load->view('components/footer');
            }
            else
            {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
    
                // Check if the user is an Authorised user
                if ($this->functions->is_authorised_user($username, $password))
                {
                    // set the session
                    // $this->functions->set_session($username);

                    redirect('contact');
                }
                else
                {
                    $this->load->view('components/head', ['title' => 'Login']);
                    $this->load->view('components/header');
                    $this->load->view('auth/login', ['error' => 'wrong credentials']);
                    $this->load->view('components/footer');
                }
            }
        }



	}

    public function register(){

        
		$this->load->view('components/head', ['title' => 'Register']);
        $this->load->view('components/header');
        $this->load->view('auto/register');
        $this->load->view('components/footer');        
    }
}
