<?php

/**
 * 
 */
class M_auth extends CI_Model
{

	function __construct()
	{
		$this->load->model('M_login');
	}

	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
}