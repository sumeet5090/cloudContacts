<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->home();
    }

    public function home(){

        $this->load->view('components/head', ['title' => 'cloudContacts']);
        $this->load->view('components/header');
        $this->load->view('contacts/contacts');
        $this->load->view('components/footer');
    }

}