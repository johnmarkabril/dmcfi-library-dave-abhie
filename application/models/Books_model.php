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
<<<<<<< HEAD
		$row = 	$this->db->where($this->status, 'Available')
=======
		$row = 	$this->db->where($this->status, 1)
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
				 		 ->get($this->table);

		return $row->result();
	}
}