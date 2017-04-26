<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public $table 			=	"user";
	public $dbno 			=	"NO";
	public $idno			=	"IDNO";
	public $password		=	"PASSWORD";
	public $status			=	"STATUS";

	function __construct()
	{
		parent::__construct();
	}

	function check_idnum_pass($c_idnum, $c_password)
	{
		$row = 	$this->db->where($this->idno, $c_idnum)
				 		 ->where($this->password, md5($c_password))
				 		 ->where($this->status, 'Registered')
				  		 ->limit(1)
				 		 ->get($this->table);

		return $row->row();
	}

	function get_specific_user($id)
	{
		$row = 	$this->db->where($this->dbno, $id)
				 		 ->where($this->status, 'Registered')
				  		 ->limit(1)
				 		 ->get($this->table);

		return $row->result();
	}

	function create($params)
	{
		$this->db->insert($this->table, $params);
	}

	function update($params, $id)
	{
		$this->db->where($this->dbno, $id)
				 ->update($this->table, $params);
	}
}