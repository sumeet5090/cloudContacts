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
        is_logged_in();

        unset($_SESSION['current_user']);

        
		$this->load->view('head', ['title' => 'Login']);
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
	}

    public function register(){

        
		$this->load->view('head', ['title' => 'Register']);
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');        
    }
}
