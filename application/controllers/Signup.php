<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->curpage = "Sign-up";
    }

	public function index()
	{
		if ( !empty($this->session->userdata['session_data']) ) {
			redirect('/student');
		} else {
			$data['content']	=	$this->load->view('signup', '', TRUE);
			$data['curpage']	= 	$this->curpage;
			$this->load->view('contentfile_student', $data);
		}
	}

	
}
