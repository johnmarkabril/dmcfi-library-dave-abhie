<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Books_model');
        $this->load->model('Bookcategory_model');
        $this->load->model('Borrowedbook_model');
        $this->curpage = "Home";
        $this->sess = $this->session->userdata['session_data'];

    	date_default_timezone_set("Asia/Manila");
    	$this->date = date("F d, Y");
    	$this->time = date("g:i A");
    }

	public function index()
	{
		$datasess = $this->session->userdata['session_data'];
		if ( !empty ($datasess) ) {
			$details = array (
				'get_all_book'		=>	$this->Books_model->get_all_book(),
				'get_all_category'	=>	$this->Bookcategory_model->get_all_category(),
				'get_specific_borrowed_book_rows'	=>	$this->Borrowedbook_model->get_specific_borrowed_book_rows($datasess->IDNO),
				'get_all_book'		=>	$this->Books_model->get_all_book()
			);

			$data['content']	=	$this->load->view('student/home', $details, TRUE);
			$data['curpage']	= 	$this->curpage;
			$this->load->view('contentfile_student', $data);
		} else {
			redirect('/');
		}
	}

	public function reserveBook()
	{
		if ( isset($_POST['btn_reserve']) ) {

			$fullname = $this->sess->FIRSTNAME.' '.$this->sess->LASTNAME;
			$year = $this->sess->YEAR;
			$sec = $this->sess->SECTION;
			$uid = $this->sess->IDNO;

			$txtNoId = $_POST['txtNoId'];

			$returnBook = $this->Books_model->get_specific_book($txtNoId);

			foreach ($returnBook as $rb) {
				$title = $rb->TITLE;
				$imageurl = $rb->IMAGEURL;
				$qty = $rb->QUANTITY;
			}
			
			$params = array(
				'NO'			=> '',
				'FULLNAME'		=> $fullname,
				'YEAR'			=> $year,
				'SECTION'		=> $sec,
				'USERID'		=> $uid,
				'TITLE'			=> $title,
				'ISSUEDBY'		=> '',
				'STATUS'		=> 'Reserve Book',
				'DATE'			=> $this->date,
				'TIME'			=> $this->time,
				'DATEEXPIRED'	=> '',
				'BOOKNO'		=> $txtNoId,
				'IMAGEURL'		=> $imageurl,
				'DELETION'		=> 0,
			);

			$this->Borrowedbook_model->insert_reservation($params);

			$params = array(
				'QUANTITY' => ($qty - 1)
			);

			$this->Books_model->update($params, $txtNoId);

			redirect('/');
		} else {
			redirect('/');
		}
	}
	
}
