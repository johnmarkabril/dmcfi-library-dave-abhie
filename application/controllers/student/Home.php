<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Books_model');
<<<<<<< HEAD
        $this->load->model('Bookcategory_model');
        $this->load->model('Borrowedbook_model');

=======
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
        $this->curpage = "Home";
    }

	public function index()
	{
		$datasess = $this->session->userdata['session_data'];
		if ( !empty ($datasess) ) {
			$details = array (
<<<<<<< HEAD
				'get_all_book'		=>	$this->Books_model->get_all_book(),
				'get_all_category'	=>	$this->Bookcategory_model->get_all_category(),
				'get_specific_borrowed_book'	=>	$this->Borrowedbook_model->get_specific_borrowed_book($datasess->IDNO)
=======
				'get_all_book'		=>	$this->Books_model->get_all_book()
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
			);

			$data['content']	=	$this->load->view('student/home', $details, TRUE);
			$data['curpage']	= 	$this->curpage;
			$this->load->view('contentfile_student', $data);
		} else {
			redirect('/');
		}
	}

<<<<<<< HEAD
	public function asdf()
	{
		echo "asdf";
	}

=======
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
	
}
