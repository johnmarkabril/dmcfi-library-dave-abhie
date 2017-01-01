<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bookcategory_model extends CI_Model
{
	public $table 			=	"book_category";
	public $deletion		= 	"DELETION";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_category(){
		$row = 	$this->db->where($this->deletion, 0)
				 		 ->get($this->table);

		return $row->result();
	}
}