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
			$details = array(
				'message'		=>	''
			);
			$data['content']	=	$this->load->view('signup', $details, TRUE);
			$data['curpage']	= 	$this->curpage;
			$this->load->view('contentfile_student', $data);
		}
	}

	public function create()
	{
		if ( isset($_POST['submit']) ) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$uname = $_POST['uname'];
			$email = $_POST['email'];
			$pword = $_POST['pword'];
			$year = $_POST['year'];
			$section = $_POST['section'];
			$idno = $_POST['idno'];
			$pnum = $_POST['pnum'];

			$fnameCheck = preg_match('/^[a-zA-Z-_]+( [a-zA-Z-_]+)*$/', $fname);
			$lnameCheck = preg_match('/^[a-zA-Z-_]+( [a-zA-Z-_]+)*$/', $lname);
			$unameCheck = preg_match('/^\w+$/', $uname);
			$emailCheck = preg_match('/^([\w-]+(?:\.[\w-]+)*)@gmail([\.])com$/', $email);
			$pnumCheck = preg_match('/^(0|\[0-9]{1,5})?([7-9][0-9]{9})$/', $pnum);

			if ( $fnameCheck ){
				if ( $lnameCheck ){
					if ( !empty($uname) ){
						if ( $emailCheck ){
							if ( !empty($pword) ){
								if ( !empty($idno) ){
									if ( $pnumCheck ){
										$params = array (
											'NO'			=>	'',
											'FIRSTNAME'		=>	$fname,
											'LASTNAME'		=>	$lname,
											'USERNAME'		=>	$uname,
											'EMAILADDRESS'	=>	$email,
											'PASSWORD'		=>	MD5($pword),
											'IDNO'			=>	$idno,
											'YEAR'			=>	$year,
											'SECTION'		=>	$section,
											'PHONENUMBER'	=>	$pnum,
											'POSITION'		=>	'User',
											'IMAGEURL'		=>	'defaultimage.png',
											'STATUS'		=>	'Not Register',
											'DELETION'		=>	'0'
										);
										$this->Users_model->create($params);
										redirect('/login/message');
									}else{
										$mess = "INCORRECT FORMAT PHONENUMBER";
									}
								}else{
									$mess = "INCORRECT FORMAT ID NUMBER";
								}
							}else{
								$mess = "INCORRECT FORMAT EMAIL ADDRESS";
							}
						}else{
							$mess = "INCORRECT FORMAT USERNAME";
						}
					}else{
						$mess = "ONLY LETTER AND NUMBERS IS ALLOWED";
					}
				}else{
					$mess = "ONLY LETTER AND SPACE IS ALLOWED";
				}
			}else{
				$mess = "ONLY LETTER AND SPACE IS ALLOWED";
			}

			$this->error($mess);
		} else {
			redirect('/');
		}
	}

	public function error($mess)
	{
		if ( !empty($this->session->userdata['session_data']) ) {
			redirect('/student');
		} else {
			$details = array(
				'message'		=>	$mess
			);
			$data['content']	=	$this->load->view('signup', $details, TRUE);
			$data['curpage']	= 	$this->curpage;
			$this->load->view('contentfile_student', $data);
		}
	}
	
}
