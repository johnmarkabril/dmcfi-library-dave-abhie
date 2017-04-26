<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Books_model extends CI_Model
{
	public $table 			=	"book";
	public $dbno			=	"NO";
	public $subject			=	"SUBJECT";
	public $deletion		=	"DELETION";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_book(){
		$row = 	$this->db->where($this->deletion, '0')
				 		 ->get($this->table);

		return $row->result();
	}

	function get_book_per_list($no)
	{
		$row = 	$this->db->where($this->deletion, '0')
						 ->where($this->subject, $no)
				 		 ->get($this->table);

		return $row->result();
	}

	function get_specific_book($no)
	{
		$row = $this->db->where($this->deletion, '0')
						->where($this->dbno, $no)
						->limit(1)
						->get($this->table);

		return $row->result();
	}

	function update($params, $no)
	{
		$this->db->where($this->dbno, $no)
				 ->update($this->table, $params);
	}
}