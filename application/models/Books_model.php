<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Books_model extends CI_Model
{
	public $table 			=	"book";
	public $status			= 	"status";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_book(){
		$row = 	$this->db->where($this->status, 1)
						 ->where($this->status, 'Available')
				 		 ->get($this->table);

		return $row->result();
	}
}