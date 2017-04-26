<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Borrowedbook_model extends CI_Model
{
	public $table 			=	"borreweddbook";
	public $status			= 	"STATUS";
	public $userid			= 	"USERID";
	public $deletion		=	"DELETION";

	function __construct()
	{
		parent::__construct();
	}

	function get_specific_borrowed_book_rows($idno){
		$row = 	$this->db->where($this->status, 'Borrowed Book')
						 ->where($this->userid, $idno)
						 ->where($this->deletion, 0)
				 		 ->get($this->table);
		return $row->num_rows();
	}

	function get_specific_borrowed_book($idno){
		$row = 	$this->db->where($this->status, 'Borrowed Book')
						 ->where($this->userid, $idno)
						 ->where($this->deletion, 0)
				 		 ->get($this->table);
		return $row->result();
	}

	function insert_reservation($params){
		$this->db->insert($this->table, $params);
	}
}