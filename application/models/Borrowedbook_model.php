<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Borrowedbook_model extends CI_Model
{
	public $table 			=	"borrowedbook";
	public $status			= 	"BOOKSTATUS";
	public $studentid		= 	"STUDENTID";

	function __construct()
	{
		parent::__construct();
	}

	function get_specific_borrowed_book($studno){
		$row = 	$this->db->where($this->status, 'Not Available')
						 ->where($this->studentid, $studno)
				 		 ->get($this->table);

		return $row->num_rows();
	}
}