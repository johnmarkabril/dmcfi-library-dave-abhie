<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bookcategory_model extends CI_Model
{
	public $table 			=	"book_category";
	public $name			=	"CATEGORYNAME";
	public $deletion		= 	"DELETION";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_category(){
		$row = $this->db->where($this->deletion, 0)
						->order_by($this->name, 'ASC')
				 		->get($this->table);

		return $row->result();
	}
}