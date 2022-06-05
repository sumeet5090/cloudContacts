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
