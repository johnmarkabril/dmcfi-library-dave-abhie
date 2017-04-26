<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Books_model');
        $this->load->model('Bookcategory_model');
        $this->load->model('Borrowedbook_model');

        $this->curpage = "Profile";
    }

	public function id($idno)
	{
		$datasess = $this->session->userdata['session_data'];

		if ( !empty ($datasess) ) {
			$details = array (
				'get_all_book'						=>	$this->Books_model->get_all_book(),
				'get_all_category'					=>	$this->Bookcategory_model->get_all_category(),
				'get_specific_borrowed_book'		=>	$this->Borrowedbook_model->get_specific_borrowed_book($idno),
				'get_specific_borrowed_book_rows'	=>	$this->Borrowedbook_model->get_specific_borrowed_book_rows($idno),
				'get_specific_user'					=>	$this->Users_model->get_specific_user($datasess->NO)
			);

			$data['content']	=	$this->load->view('student/profile', $details, TRUE);
			$data['curpage']	= 	$this->curpage;
			$this->load->view('contentfile_student', $data);
		} else {
			redirect('/');
		}
	}	

	public function update($no)
	{
		$datasess = $this->session->userdata['session_data'];
		$email_address	= $_POST['email_address'];
		$contact		= $_POST['contact'];
        
        $loc = $_SERVER['DOCUMENT_ROOT'].base_url()."public/img/";

		if ( isset($_POST['Submit']) ) {
			if ( !empty(addslashes($_FILES['image']['name'])) ) {
				$image_name = addslashes($_FILES['image']['name']);
				$params = array(
					'EMAILADDRESS'		=>	$email_address,
					'PHONENUMBER'		=>	$contact,
					'IMAGEURL'			=>	$image_name
				);

            	move_uploaded_file($_FILES['image']['tmp_name'], $loc . $image_name);
			} else {
				$params = array(
					'EMAILADDRESS'		=>	$email_address,
					'PHONENUMBER'		=>	$contact,
					'IMAGEURL'			=>	'defaultimage.png'
				);
			}
            $this->Users_model->update($params, $datasess->NO);
            redirect('/student/profile/id/'.$datasess->IDNO);
		} else {
			redirect('/student/profile/id/'.$sd->IDNO);
		}
	}

}
