<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Books_model');
        $this->load->model('Bookcategory_model');
        $this->load->model('Borrowedbook_model');
        $this->curpage = "Book";
    }

	public function category($no)
	{
		$datasess = $this->session->userdata['session_data'];
		if ( !empty ($datasess) ) {
			$details = array (
				'get_all_category'					=>	$this->Bookcategory_model->get_all_category(),
				'get_specific_borrowed_book_rows'	=>	$this->Borrowedbook_model->get_specific_borrowed_book_rows($datasess->IDNO),
				'get_book_per_list'			=>	$this->Books_model->get_book_per_list($no)
			);

			$data['content']	=	$this->load->view('student/book', $details, TRUE);
			$data['curpage']	= 	$this->curpage;
			$this->load->view('contentfile_student', $data);
		} else {
			redirect('/');
		}
	}
	
}
